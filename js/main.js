$(document).ready(function ($) {
    'use strict';
    $('#flickr').jflickrfeed({
        limit: 8,
        qstrings: {id: '36587311@N08'},
        itemTemplate: '<li><a href="{{image_b}}" class="fancybox"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
    });
    $("#header").sticky({topSpacing: 0});
    $(".date-input").datepicker();
    jQuery(window).load(function () {
        jQuery(".status").fadeOut();
        jQuery(".preloader").delay(1000).fadeOut("slow");
    })
    $("#single-carousel, #single-carousel-sidebar").owlCarousel({
        items: 1,
        autoPlay: 4000,
        navigation: true,
        autoHeight: true,
        slideSpeed: 400,
        singleItem: true,
        pagination: false
    });
    $("#slide-features").owlCarousel({
        autoPlay: false,
        items: 1,
        navigation: true,
        autoHeight: true,
        slideSpeed: 400,
        singleItem: true,
        pagination: true
    });
    $("#boxes-carousel").owlCarousel({
        autoPlay: 3200,
        items: 4,
        navigation: true,
        itemsDesktopSmall: [1024, 3],
        itemsTablet: [768, 2],
        itemsMobile: [500, 1],
        pagination: false
    });
    $("#team-carousel").owlCarousel({
        autoPlay: 3200,
        items: 3,
        navigation: true,
        itemsDesktopSmall: [1024, 3],
        itemsTablet: [768, 2],
        itemsMobile: [500, 1],
        pagination: false
    });
    $("#team-carousel-02, #carousel-boxes-2").owlCarousel({
        autoPlay: 3200,
        items: 2,
        navigation: false,
        itemsDesktopSmall: [1024, 3],
        itemsTablet: [768, 2],
        itemsMobile: [500, 1],
        pagination: false
    });
    $("#sponsors").owlCarousel({
        autoPlay: 3200,
        items: 5,
        navigation: false,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [1024, 4],
        itemsTablet: [768, 3],
        itemsMobile: [500, 2],
        pagination: true
    });
    $("#testimonials").owlCarousel({
        items: 1,
        autoPlay: 3200,
        navigation: false,
        autoHeight: true,
        slideSpeed: 400,
        singleItem: true,
        pagination: true
    });
    $(".tweet_list").owlCarousel({
        items: 1,
        autoPlay: 3200,
        navigation: false,
        autoHeight: true,
        slideSpeed: 400,
        singleItem: true,
        pagination: true
    });
    $('#form-contact').submit(function (event) {
        event.preventDefault();
        var url = $(this).attr('action');
        var datos = $(this).serialize();
        $.get(url, datos, function (resultado) {
            $('#result').html(resultado);
        });
    });
    $('#newsletterForm').submit(function (event) {
        event.preventDefault();
        var url = $(this).attr('action');
        var datos = $(this).serialize();
        $.get(url, datos, function (resultado) {
            $('#result-newsletter').html(resultado);
        });
    });
    $(".fancybox").fancybox({openEffect: 'elastic', closeEffect: 'elastic', helpers: {title: {type: 'inside'}}});
    $('.tooltip-hover').tooltip({selector: "[data-toggle=tooltip]", container: "body"});
    $("#slider-range").slider({});
    $().UItoTop({scrollSpeed: 500, easingType: 'linear'});
    $(window).load(function () {
        var $container = $('.portfolioContainer');
        $container.isotope({filter: '*', animationOptions: {duration: 750, easing: 'linear', queue: false}});
        $('.portfolioFilter a').click(function () {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({filter: selector, animationOptions: {duration: 750, easing: 'linear', queue: false}});
            return false;
        });
    });
});