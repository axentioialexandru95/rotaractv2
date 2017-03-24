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
    $('#modalButton').click(function(){
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });

});