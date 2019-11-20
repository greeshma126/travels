function scrollanimation() {

    var designed = document.querySelector(".designed-by");
    var contact = document.querySelector(".contact");
    var social = document.querySelector(".social");
    var about = document.querySelector(".about");

    var cartitle = document.querySelector(".car-title");
    var packagetitle = document.querySelector(".package-title");
    var bestoffertitle = document.querySelector(".best-flight-offer");
    var roomtitle = document.querySelector(".roomtitle");

    var roomtitlepos = roomtitle.getBoundingClientRect().top;
    var bestoffertitlepos = bestoffertitle.getBoundingClientRect().top;
    var pacakgetitlepos = packagetitle.getBoundingClientRect().top;
    var cartitlepos = cartitle.getBoundingClientRect().top;
    var designpos = designed.getBoundingClientRect().top;



    var winsize = window.innerHeight / 1.3;

    if (roomtitlepos < winsize) {
        roomtitle.classList.add("roomtitle-active");
    } else {
        roomtitle.classList.remove("roomtitle-active");
    }


    if (bestoffertitlepos < winsize) {
        bestoffertitle.classList.add("package-title-activate");
    } else {
        bestoffertitle.classList.remove("package-title-activate");
    }

    if (pacakgetitlepos < winsize) {
        packagetitle.classList.add("package-title-activate");

    } else {
        packagetitle.classList.remove("package-title-activate");
    }

    if (cartitlepos < winsize) {

        cartitle.classList.add("title-active");

    } else {
        cartitle.classList.remove("title-active");
    }



    if (designpos < winsize) {
        designed.classList.add('activate');
        contact.classList.add('activate');
        social.classList.add('activate');
        about.classList.add('activate');
    } else {
        designed.classList.remove('activate');
        contact.classList.remove('activate');
        social.classList.remove('activate');
        about.classList.remove('activate');
    }
}

window.addEventListener('scroll', scrollanimation);


$(document).ready(function () {



    $('.flight_offers').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.rightarrow'),
        prevArrow: $('.leftarrow'),

    });

    var navbarhight = $('nav').outerHeight();
    $('.navigate').click(function (e) {
        var linkhref = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(linkhref).offset().top - navbarhight
        }, 1000);
        e.preventDefault();

    });
    $('.package-list').slick({

        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        nextArrow: $('.nextpack'),
        prevArrow: $('.prevpack'),
        zIndex: 0,
        useCSS: false,
    });

    $('.car-list').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        nextArrow: $('.nextcar'),
        prevArrow: $('.prevcar'),


    });

    var filtered = false;
    $('.js-filter').on('click', function () {
        if (filtered === false) {
            $('.filtering').slick('slickFilter', ':even');
            $(this).text('Unfilter Slides');
            filtered = true;
        } else {
            $('.filtering').slick('slickUnfilter');
            $(this).text('Filter Slides');
            filtered = false;
        }
    });


    $('.room-list-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.room-list-nav',
        useCSS: false,
        zIndex: -1,



    });
    $('.room-list-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.room-list-slider',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        nextArrow: $('.nextroom'),
        prevArrow: $('.prevroom'),
        zIndex: -1,


    });

});