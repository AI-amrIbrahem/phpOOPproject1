$(document).ready(function() {


    "use strict";

    /* Navigation Bar Section Style in Mobile Screens */

    var $header = $('header');

    $('header .nav-btn').on('click', function() {

        $(this).parent().toggleClass('active');

    });


    $(document).on('click', function(e) {

        var clickover = $(e.target);

        if ( !clickover.closest('header').length && $('nav').hasClass('active') ) {

            $('nav').removeClass('active');

        }

    });


    /* Putting background On Nav bar On Scrolling */

    var $mainSection = $('.main-section');

    $(window).on('scroll', function() {

        if ( $(window).scrollTop() >= $mainSection.height() - 100 ) {

                $header.addClass('sticky');

            } else {

                $header.removeClass('sticky');

            }

    });


    // Accordion


    $(".accordion").on("click", ".accordion-header", function() {

        $(this).toggleClass("active").next().slideToggle();

     });

    // Fire MixItUp Shuffle

    $('#Container').mixItUp();

    $(".shuffle li").on('click', function() {

        $(this).addClass("selected").siblings().removeClass("selected");

    });


    // Clear Placeholder From Inputs On Focus

    $("[placeholder]").on('focus', function () {

        $(this).attr("data-text", $(this).attr("placeholder"));
        $(this).attr("placeholder", "");
    }).blur(function () {
        $(this).attr("placeholder", $(this).attr("data-text"));
    });

    // Smooth Scroll

    $('nav li a').on('click', function () {

        $('html, body').animate({

            scrollTop: $("#" + $(this).data("value")).offset().top - 40

        }, 1200);

    });

    // Hire Us button Animate

    $(".hire-us .hireButton .hbtn").on('click', function () {
        $("html, body").animate({
            scrollTop: $("#contact").offset().top - 60
        }, 1200);
    });


    // Scroll Btn

    var scrollButton = $("#scroll-top");

    $(window).on('scroll', function () {

        if ($(this).scrollTop() >= 300) {
            scrollButton.fadeIn(400);
        } else {
            scrollButton.fadeOut(400);
        }
    });
    scrollButton.on('click', function () {

        $("html, body").animate({
            scrollTop: 0
        }, 1000);

    });

    // Fire Tooltip

    $('[data-toggle="tooltip"]').tooltip();


});


// Fire The Loading Screen...



$(window).on('load', function() {


    $(".loading-overlay .spinner").fadeOut(800, function(){

        $(".loading-overlay").slideUp(800, function() {

            $(this).remove();

        });

    });

});

