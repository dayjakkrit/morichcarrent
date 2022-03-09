function makeaction(){
   	document.getElementById('btn_submit').disabled = false;  
}

function ReplaceNumberWithCommas(number) {
	//Seperates the components of the number
	var n = number.toString().split(".");
	//Comma-fies the first part
	n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	//Combines the two sections
	return n.join(".");
}

$(function(){

	$('a').click(function() {
		var ourclass = $(this).attr('class');
  
		$('html, body').animate({
			scrollTop: $('#'+ourclass).offset().top-20
		}, 1000); 
	});

	$('#menu-btn-book-now').click(function() {
		$('html, body').animate({
			scrollTop: $('#car-offer').offset().top-20
		}, 1000); 
	});

	//search car
	$('.btn-find-car').click(function(){
		$('#result-find-car').empty();
		$.ajax({
		    url: baseUrl+'/home/find_car',
		    dataType: 'html',
		    success: function(data) {
		    	$('#result-find-car').toggleClass('slideInDown');
		    	$('#result-find-car').html(data);
		    }
		});
	});
});


	