$(document).ready(function(){       
	var scroll_start = 0;
	var startchange = $('.content');
	var offset = startchange.offset();
	if (startchange.length){
		$(document).scroll(function() { 
			scroll_start = $(this).scrollTop();
			if(scroll_start >= offset.top) {
				$(".navbar-fixed-top").css('background-color', '#FDE3A7');
			}else{
				$('.navbar-fixed-top').css('background-color', 'transparent');
			}
		});
	}
	$('a').click(function(){
    	$('html, body').animate({
        	scrollTop: $( $(this).attr('href') ).offset().top
    	}, 1000);
    return false;
	});
});