/*==========

Theme Name: MEDICARE -  HEALTHCARE HTML5 TEMPLATE
Theme Version: 1.0.0

==========*/

/*==========

----- JS INDEX -----

1. WHOLE SCRIPT STRICT MODE SYNTAX

2. LOADER 

3. WOW ANIMATION

4. STICKY HEADER

5.TESTIMONIAL SLIDER

6.GALLERY SLIDER

7. PARTNER SLIDER

8. HOVER BUBBLE EFFECT JS

9. VANILLA TILT

10. TOGGLE MENU

11. ISOTOPE FILTER

12. SITE LOADER

13. SCROLL TO TOP JS

14. COUNTER JS

==========*/


$(document).ready(function () {

    // Whole Script Strict Mode Syntax
    "use strict";

    $(window).ready(function() {
        // Loader
        $('.page-loader').fadeOut();
        $('body').removeClass('body-fixed');

        // Wow Animation
        new WOW().init();
    });

    /* Sticky Header JS */
    jQuery(window).scroll(function () { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    // Testimonial Slider
    jQuery('.review-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
                dots: true,
            }
        },
        {
            breakpoint: 992,

            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
                dots: true,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
                dots: true,
            }
        }
        ],
    });

    // Gallery Slider
    var window_size = jQuery(window).width();
    if (window_size < 768) {
        var rows = 1;
    } else {
        var rows = 2;
    }


    jQuery('.gallery-slider').slick({
        rows: rows,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: false,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: false,
            }
        },
        {
            breakpoint: 768,
            settings: {
                row: rows,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: false,

            }
        }
        ],
    });

    // Partner Slider
    jQuery('.partner-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true
            }
        },
        {
            breakpoint: 992,

            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
            }
        }
        ],
    });

    // card hover effect js
    $(".sub-service-card-wp, .service-card").mouseenter(function (e) {
        var parentOffset = $(this).offset();

        var relX = e.pageX - parentOffset.left;
        var relY = e.pageY - parentOffset.top;
        $(this).prev(".su_button_circle").css({ "left": relX, "top": relY });
        $(this).prev(".su_button_circle").removeClass("desplode-circle");
        $(this).prev(".su_button_circle").addClass("explode-circle");

    });

    $(".sub-service-card-wp, .service-card").mouseleave(function (e) {

        var parentOffset = $(this).offset();

        var relX = e.pageX - parentOffset.left;
        var relY = e.pageY - parentOffset.top;
        $(this).prev(".su_button_circle").css({ "left": relX, "top": relY });
        $(this).prev(".su_button_circle").removeClass("explode-circle");
        $(this).prev(".su_button_circle").addClass("desplode-circle");

    });

    // Vanilla Tilt JS
    VanillaTilt.init(document.querySelectorAll(".plan-card"), {
        max: 10,
        speed: 1000,
        glare: true,
        "max-glare": 0.3
    });


    // Toggle Menu
    jQuery('.menu-toggle').on('click', function () {
        jQuery('.main-navigation').toggleClass("toggled");
    });

    jQuery('.primary-menu li a').not(".dropdown-items").click(function () {
        jQuery('.main-navigation').removeClass("toggled");
    });

    jQuery('body').on('click', '.main-navigation .dropdown-items', function () {
        jQuery(this).toggleClass('active-sub-menu');
    });


    //  Isotope Filter
    var $box = $(".grid").isotope({
        itemSelector: ".grid-item",
        layoutMode: 'fitRows',
    });

    $(".isotope-toolbar").on("click", "button", function () {
        var filterValue = $(this).attr("data-type");
        $(".sec-btn").removeClass("active");
        $(this).addClass("active");
        if (filterValue !== "*") {
            filterValue = '[data-type="' + filterValue + '"]';
        }
        console.log(filterValue);
        $box.isotope({ filter: filterValue });
    });

    // Scroll To Top 
    jQuery(window).scroll(function () {
        var height = jQuery(window).scrollTop();
        if (height > 600) {
            jQuery(".scroll-to-top-btn").fadeIn();
        } else {
            jQuery(".scroll-to-top-btn").fadeOut();
        }
    });

});

// counter section js
var counters = $(".count");
var countersQuantity = counters.length;
var counter = [];

for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
}

var count = function (start, value, id) {
    var localStart = start;
    setInterval(function () {
        if (localStart < value) {
            localStart++;
            counters[id].innerHTML = localStart;
        }
    }, 40);
}

for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
}