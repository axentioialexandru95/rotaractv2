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



    $('#goBack').click(function(){
        parent.history.back();
        return false;
    });
    if ($("#infoppl").length > 0)
    {
        $(document).on('click', function (e) {
            if ($(e.target).closest("#infoppl").length === 0) {
                $("#infoppl").hide();

                window.location.href = "index.php?r=people%2Findex";
            }

        });
    }

});
