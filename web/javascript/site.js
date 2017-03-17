$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        $(".navbar").addClass('big');
    }
    else {
        $(".navbar").removeClass('big');
    }
});

$(document).ready(function () {
    $('.image').click(function(){
        $('.member-overlay').css('display', 'flex');
    });
    $('.close-btn').click(function(){
        $('.member-overlay').css('display', 'none');
    });

});