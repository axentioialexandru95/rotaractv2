$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        $(".navbar").addClass('big');
    }
    else {
        $(".navbar").removeClass('big');
    }
});
