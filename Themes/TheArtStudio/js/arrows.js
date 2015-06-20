$(window).scroll(function() {
		if ($(this).scrollTop() > 250) {
            $('.up-arrow').fadeIn(300);
        } else {
            $('.up-arrow').fadeOut(300);
        }
		
		if($(document).height() - $(this).height() - $(this).scrollTop() - 150 < 0){
			$('.down-arrow').fadeOut(300);
		}
		else{
			$('.down-arrow').fadeIn(300);
		}
	});