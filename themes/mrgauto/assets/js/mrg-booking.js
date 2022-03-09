$(function(){
	$("body").AutoProvince({
		PROVINCE: "#profile_tax_province", //  select สำหรับรายชื่อจังหวัด
	    AMPHUR: "#profile_tax_amphur", //  select สำหรับรายชื่ออำเภอ
	    DISTRICT: "#profile_tax_district", //  select สำหรับรายชื่อตำบล
	    POSTCODE: "#postcode", //  input field สำหรับรายชื่อรหัสไปรษณีย์
	    //GEOGRAPHY: "#geography", // input field แสดงภาค
	    CURRENT_PROVINCE:
	      '<?php echo (isset($address)&&$address)?$address->province:((isset($_SESSION["info_data"]["province"])&&$_SESSION["info_data"]["province"])?$_SESSION["info_data"]["province"]:null);?>', //  แสดงค่าเริ่มต้น ใส่ไอดีจังหวัดที่เคยเลือกไว้
	    CURRENT_AMPHUR:
	      '<?php echo (isset($address)&&$address)?$address->amphur:((isset($_SESSION["info_data"]["amphur"])&&$_SESSION["info_data"]["amphur"])?$_SESSION["info_data"]["amphur"]:null);?>', // แสดงค่าเริ่มต้น  ใส่ไอดีอำเภอที่เคยเลือกไว้
	    CURRENT_DISTRICT:
	      '<?php echo (isset($address)&&$address)?$address->district:((isset($_SESSION["info_data"]["district"])&&$_SESSION["info_data"]["district"])?$_SESSION["info_data"]["district"]:null);?>', // แสดงค่าเริ่มต้น  ใส่ไอดีตำบลที่เคยเลือกไว้
	    arrangeByName: true, // กำหนดให้เรียงตามตัวอักษร ลำดับจังหวัด
	});

	if($('#btn_submit').length)
	{
		$.fn.timedDisable = function(time) {
	      	if (time == null)
	        	time = 5;
	      	var seconds = Math.ceil(time); // Calculate the number of seconds
	     	return $(this).each(function() {
		        $(this).attr('disabled', 'disabled');
		        var disabledElem = $(this);
		        var originalText = this.innerHTML; // Remember the original text content

		        // append the number of seconds to the text
		        disabledElem.text(originalText + ' (' + seconds + ')');

		        // do a set interval, using an interval of 1000 milliseconds
		        //     and clear it after the number of seconds counts down to 0
		        var interval = setInterval(function() {
		        	seconds = seconds - 1;
		          	// decrement the seconds and update the text
		          	disabledElem.text(originalText + ' (' + seconds + ')');
		          	if (seconds === 0) { // once seconds is 0...
		            	disabledElem.removeAttr('disabled')
		              	.text(originalText); //reset to original text
		            	clearInterval(interval); // clear interval
		        	}
	        	}, 1000);
	      	});
	    };
		$('#btn_submit').timedDisable(10);

		$('#btn_submit').click(function(e){
			event.preventDefault();
			var is_required = 1;
			event.preventDefault();
			$('.customer-required').each(function(){
		        if( $(this).val() == "" ){
		          	is_required = 0;
		          	return false;
		        }
		    });

			if(is_required)
			{
				booking_loading();

			    setTimeout( function () { 
			        $('#frm_booking').submit();
			    }, 3000);
			}
			else
				alert('กรุณากรอกข้อมูลผู้ขับให้ครบถ้วนค่ะ');
		});

		if($('#g-recaptcha-response').length)
		{
			setInterval(function(){
				grecaptcha.ready(function() {
				  	grecaptcha.execute('6LcyJCgdAAAAAGYR_6llSq0XFGkCUv_79rMWKw_q', {action: 'booking'}).then(function(token) {
				        document.getElementById('g-recaptcha-response').value = token;
				        if($('#is_booking').val()==1)
				       	 	makeaction();
				  	});
				});
			 }, 3000); //you can set timeout for expired.
		}
	}

	/*if($('#thankyou-page').length)
	{
		modal_line();
	}*/
	
	//login
	$('.btn-login').click(function(){
  		$.ajax({
			type:'post',
			url: baseUrl+'/login/modal_login',
			data: {action:'add',pickup_date:$(this).data('date'),id_car_model_type:$(this).data('id_car_model_type'),id_car:$(this).data('id_car')},
			beforeSend: function() {
				$('.overlay').show();
			},
			success: function( res ) {
				$('#modal-data').html( res );
				$('#modal-data .modal').modal();
				$('.overlay').hide();
			}
		});
	});

	$(".get_tax").click(function () {
		if ($(".get_tax").is(":checked")) 
		{
			$(".box-tax").show();
			$(".tax_type").change(function () {
				if ($(this).val() == "company") 
				{
					$(".company").show();
					$(".personal").hide();
				} 
				else 
				{
					$(".company").hide();
					$(".personal").show();
				}
			});
		} 
		else 
			$(".box-tax").hide();
	});
});