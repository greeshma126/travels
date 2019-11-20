$(document).ready(function () {
    var navbarhight = $('nav').outerHeight();
    $('.navigate').click(function (e) {
        var linkhref = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(linkhref).offset().top - navbarhight
        }, 1000);
        e.preventDefault();

    });




});