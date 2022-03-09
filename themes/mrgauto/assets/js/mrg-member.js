function bookingPagination(page=1)
{
	$.ajax({
		url: baseUrl+'/member/get_data_booking/'+page,
		type: 'get',
		dataType: 'json',
		data:{page:page},
		success: function(res){
			if(res.code=='200')
			{
				var html_total_booking = 'ทั้งหมด <span class="text-purple font-weight-bold"> '+res.total_booking+'</span> รายการ';
				$('.total-booking').html(html_total_booking);
				$('.booking-pagination').html(res.pagination);

				createTable(res.booking_data);
			}
			else
			{
				var tb_html = '<tr>';
					tb_html = '<td colspan="3" class="text-center"><h4>ท่านยังไม่มีประวัติการจองรถค่ะ</h4></td>';
				tb_html += '</tr>';
				$('.data-booking-car').html(tb_html);
			}
		}
	});
}

function createTable(data_booking)
{
	$('.data-booking-car').empty();
	var html = '';		
	sort_booking = sort_data_booking(data_booking);

	$.each(sort_booking, function(i, val) {
		var create_date = moment(val.add_datetime).format('YYYY-MM-DD');
		create_date = short_month(create_date);
		var create_time = moment(val.add_datetime).format('h:mm');
		
		if(val.booking_status==1)
			var booking_status = '<span class="badge badge-warning font-weight-normal p-2">รอชำระเงิน</span><div class="font11"><a href="#" class="text-muted">ยกเลิกการจอง</a></div>';
		else
		if(val.booking_status==2)
			var booking_status = '<span class="badge badge-success font-weight-normal p-2">ชำระเงินแล้ว</span>';
		else
		if(val.booking_status==0)
			var booking_status = '<span class="badge badge-danger font-weight-normal p-2">ยกเลิกการจอง</span>';

		html += '<tr>';
			html += '<td>'+val.booking_code+'<div class="clearfix"></div><div class="font11 text-green">สร้างเมื่อ '+create_date+', '+create_time+' น.</div></td>';
			html += '<td class="w-50">';
				html += val.car_brand_title+' '+val.car_model_title+' เช่า ';
				html += (val.longterm_type=='month')?'<span class="text-purple font-weight-bold">'+val.num_longterm+'</span> เดือน':val.num_longterm+' ปี';
				html += '<div class="clearfix"></div>';
				html += '<div class="font14">ราคาทั้งหมด <span class="text-purple">'+ReplaceNumberWithCommas(parseFloat(val.total_price).toFixed(2))+'</span> บาท</div>';
				html += '<div class="clearfix"></div>';
				html += '<div class="font11" data-toggle="collapse" href="#info'+val.id_booking+'"><i class="far fa-plus-square text-purple"></i> รายละเอียดเพิ่มเติม</div>';
				html += '<div class="collapse" id="info'+val.id_booking+'">';
  					html += '<div class="card card-body font11 py-1">';
  						html += '<div class="row">';
  							html += '<div class="col-md-12">';
	  							html += '<div class="text-purple">รายละเอียดค่าใช้จ่าย</div>';
	  						html += '</div>';
			    			html += '<div class="clearfix"></div>';
  							html += '<div class="col-md-8">';
		    					html += 'ค่าเช่า '+((val.longterm_type=='month')?'<span class="text-purple font-weight-bold">'+val.num_longterm+'</span> เดือน':val.num_longterm+' ปี');
		    				html += '</div>';	
		    				html += '<div class="col-md-4 text-right">'+ReplaceNumberWithCommas(parseFloat(val.price).toFixed(2))+'฿</div>';
		    				html += '<div class="clearfix"></div>';
  							html += '<div class="col-md-8">';
		    					html += 'Vat 7%';
		    				html += '</div>';	
		    				html += '<div class="col-md-4 text-right">'+ReplaceNumberWithCommas(parseFloat(val.vat).toFixed(2))+'฿</div>';
		    				html += '<div class="clearfix"></div>';
  							html += '<div class="col-md-8">';
		    					html += 'ค่าประกันความเสียหาย';
		    				html += '</div>';	
		    				html += '<div class="col-md-4 text-right">'+ReplaceNumberWithCommas(parseFloat(val.insurance_price).toFixed(2))+'฿</div>';
	    					html += '<div class="clearfix"></div>';
	    					html += '<div class="col-md-12">';
		    					html += '<div class="text-purple">ฟรีบริการเสริม</div>';
		    					$.each(val.service_option, function(ii, sp_val) {
		    						html += '<div class="font11"><i class="fas fa-check-circle text-green"></i> '+sp_val.service_option_title+'</div>';
		    						html += '<div class="clearfix"></div>';
		    					});
		    				html += '</div>';		    				
	    				html += '</div>';
  					html += '</div>';
				html += '</div>';
			html += '</td>';
			html += '<td class="text-center">'+booking_status+'</td>';
		html += '</tr>';
		
		$('.data-booking-car').html(html);
	});  
}
$(function(){
	bookingPagination();

	$('.booking-pagination').on('click','a',function(e){
		e.preventDefault(); 
		var page = $(this).attr('data-ci-pagination-page');
		bookingPagination(page);
	});

});