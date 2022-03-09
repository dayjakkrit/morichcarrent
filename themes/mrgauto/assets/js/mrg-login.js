$(function(){
	//login
	$('.btn-login').click(function(e){
		e.preventDefault();
	    if($('#member-password').val())
	    {
	    	$.ajax({
		      	url: baseUrl + "/login/check_member",
		      	type: "post",
		      	data: {email:$('#member-user').val(),password:$('#member-password').val()},
		      	dataType: "json",
		      	success: function (res) {
		      		if (res.code=='200')
		  	            $("#frm-login").submit();
		  	        else {
		  	       		var html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
			  	            html += 'ขออภัยคะ ไม่พบข้อมูลของท่าน<br>กรุณาตรวจสอบ อีเมล/หมายเลขโทรศัพท์ และ รหัสผ่านค่ะ';
			  	            html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			  	            html += '</div>';

		  	            $('.alert-message').show().html(html);
		  	        }
		  	    }
	      	});	      	
		}
		else
		{
			var html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
				html += 'กรุณากรอก อีเมล/หมายเลขโทรศัพท์ และ รหัสผ่านค่ะ';
				html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				html += '</div>';

			$('.alert-message').show().html(html);
		}

		return false;
	});

	//btn-register
	$('.btn-register').click(function(e) {
		e.preventDefault();
		$('.alert-message').empty();
		var input_empty = 1;
		$('input').each(function() {
	        if(!$(this).val())
	        {
	        	input_empty = 0;
	            alert('กรุณากรอกข้อมูลให้ครบถ้วนค่ะ');
	           	return false;
	        }
	    });

		if(input_empty)
		{
		    $.ajax({
		      	url: baseUrl + "/login/check_member",
		      	type: "post",
		      	data: {email:$('#email').val(),phone:$('#phone').val()},
		      	dataType: "json",
		      	success: function (res) {
		      		if (res.code=='200')
		      		{
		  	            var html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
			  	            html += 'ขออภัยคะ อีเมล/หมายเลขโทรศัพท์ ของท่านได้เป็นสมาชิกกับ โมริช กรุ๊ป อยู่แล้วค่ะ';
			  	            html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			  	            html += '</div>';

		  	            $('.alert-message').show().html(html);
		  	        }
		  	        else 
		  	        	$("#frm-register").submit();
		  	    }
	      	});
		}

		return false;
	});

	//forgot password
	$('.btn-forgot').click(function(){
	    $.ajax({
	        url: baseUrl + "/login/send_password",
	        type: "post",
	        data: {email:$('#customer-user').val()},
	        dataType: "json",
	        success: function (res) {
	          	var alert_color = (res.success==1)?'alert-success':'alert-danger';
	         	var html = '';
	          
	          	if((res.success==1))
	          	{
	           	 	$('.alert-message').empty();
	            	if(res.password)
	                	html += '<div class="mt-3 alert '+alert_color+' alert-dismissible fade show" role="alert">ระบบได้จัดส่งข้อมูลของท่านไปยังอีเมลของท่านแล้ว<br>หากท่านไม่พบอีเมลในกล่องจดหมาย กรุณาตรวจสอบที่เมนู spam(อีเมล์ขยะ)ค่ะ<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
	            	else
	            	{
	              		$('.alert-message').empty();
	                	html += '<div class="mt-3 alert '+alert_color+' alert-dismissible fade show" role="alert">ขออภัยค่ะ ไม่พบข้อมู<br>ท่านสามารถสมัครสมาชิกเพื่อรับสิทธิพิเศษ หรือ โปรโมชั่นต่างๆ โดยคลิกที่ <a href="'+baseUrl+'sign-up">สมัครสมาชิก</a> ได้เลยค่ะ<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
	           		}

	            	$('.show-data').html(html);
	          	}
	          	else
	          	{
	            	$('.show-data').empty();

	            	html += '<div class="mt-3 alert '+alert_color+' alert-dismissible fade show" role="alert">ขออภัยค่ะ ไม่พบข้อมูลของท่าน<br>ท่านสามารถสมัครสมาชิกเพื่อรับสิทธิพิเศษ หรือ โปรโมชั่นต่างๆ โดยคลิกที่ <a href="'+baseUrl+'sign-up">สมัครสมาชิก</a> ได้เลยค่ะ<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

	            	$('.show-data').html(html);
	          	}
	        }
	    }); 
	});  
});