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
	$('body').prepend('<a href="#parallax" class="back-to-top">Back to Top</a>');
	var amountScrolled = 300;
	$(window).scroll(function() {
		if ( $(window).scrollTop() > amountScrolled ) {
			$('a.back-to-top').fadeIn('slow');
		} else {
			$('a.back-to-top').fadeOut('slow');
		}
	});
	$('a').click(function() {
		if($(this).attr('href').length>1){
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top
			}, 1000);
			return false;
		}
	});
});