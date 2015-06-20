/**
 * Functionality specific to The Art Studio.
 *
 * Provides helper functions to enhance the theme experience.
 */

$(document).ready(function() {
    $(window).on('scroll',(function() {
        if ($(this).scrollTop() > 250) {
            $('.up-arrow').fadeIn(300);
        } else {
            $('.up-arrow').fadeOut(300);
        }
    }));

    $('.up-arrow').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
        return false;
    });
});