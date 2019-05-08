    (function($) {

    "use strict";

    // Preloder
    function preloader() {
        $('.preloader').delay(100).fadeOut(500);
    }


    // Menu Mobile Js
    $('#main-menu').meanmenu({
      meanScreenWidth: "767",
      meanMenuContainer: '.mobile-nav-menu'
    });
    
    // Stikey Js  
    (function () {
      var nav = $('.menu-nav-sec');
      var scrolled = false;
      $(window).on('scroll', function () {
        if (120 < $(window).scrollTop() && !scrolled) {
          nav.addClass('sticky_menu animated fadeInDown').animate({ 'margin-top': '0px' });
          scrolled = true;
        }
        if (90 > $(window).scrollTop() && scrolled) {
          nav.removeClass('sticky_menu animated fadeInDown').css('margin-top', '0px');
          scrolled = false
        }
      });
    }());

    // ProgressCauses
    function progressCauses () {
      var progressBar = $('.progress');
      if(progressBar.length) {
        progressBar.each(function () {
          var Self = $(this);
          Self.appear(function () {
            var progressValue = Self.data('value');

            Self.find('.progress-bar').animate({
              width:progressValue+'%'           
            }, 100);

            Self.find('span.value').countTo({
              from: 0,
                to: progressValue,
                speed: 100
            });
          });
        })
      }
    }

    // FunfactNumber
    function FunfactNumber () {
      var timer = $('.timer');
      if(timer.length) {
        timer.appear(function () {
          timer.countTo();
        })
      }
    }

    // EventTimer
    function countdownTimer () {
      if($('.countdownTm').length){
        $('.countdownTm').final_countdown();
      }
    }


    // Home Slider
    $(".all-slide").owlCarousel({
          items: 1,
          nav: false,
          dots: true,
          autoplay: false,
          loop: true,
          mouseDrag: false,
          touchDrag: false,
      });
        
      $(".all-slide").on("translate.owl.carousel", function(){
          $(".slider-text h1").removeClass("animated fadeInLeft").css("opacity", "0");
          $(".slider-text p").removeClass("animated fadeInDown").css("opacity", "0");
          $(".slider-text ul li a").removeClass("animated fadeInUp").css("opacity", "0");
      });
      
      $(".all-slide").on("translated.owl.carousel", function(){
          $(".slider-text h1").addClass("animated fadeInLeft").css("opacity", "1");
          $(".slider-text p").addClass("animated fadeInDown").css("opacity", "1");
          $(".slider-text ul li a").addClass("animated fadeInUp").css("opacity", "1");
      });

    $(".all-slide2").owlCarousel({
          items: 1,
          nav: true,
          navText: ['<span class="fa fa-long-arrow-left"></span>', '<span class="fa fa-long-arrow-right"></span>'],
          dots: false,
          autoplay: false,
          loop: true,
          animateOut: 'slideOutDown',
          animateIn: 'flipInX',
          mouseDrag: false,
          touchDrag: false,
      });

    $(".partner-items").owlCarousel({
          items: 4,
          margin: 30,
          nav: false,
          navText: ['<span class="fa fa-long-arrow-left"></span>', '<span class="fa fa-long-arrow-right"></span>'],
          dots: false,
          autoplay: true,
          loop: true,
          mouseDrag: false,
          touchDrag: false,
          responsiveClass: true,
          responsive: {
            0: {
                items: 1,
                loop: true
            },
            480: {
                items: 1,
                loop: true
            },
            600: {
                items: 2,
                loop: true
            },
            1000: {
                items: 3,
                loop: true
            },
            1200: {
                items: 4,
                loop: true
            }
          }
      });


    // Magnific Popup
    if($('.gallery-photo').length){
      $('.gallery-photo').magnificPopup({
          type: 'image',
          gallery: {
            enabled: true
          }
      });
    }

    //Magnific Video Popup
    if($('.mfp-iframe').length){
      $('.mfp-iframe').magnificPopup({
          type: 'iframe'
      });
    }


    // Project Gallery Js

    if($('.gallery-container').length){
      $(".gallery-container").imagesLoaded( function() {      
        $(".gallery-container").isotope({
        itemSelector: '.filtr-item',
        layoutMode: 'fitRows',
        });
        $("ul.simplefilter li").on("click",function(){
        $("ul.simplefilter li").removeClass("active");
        $(this).addClass("active");
         
        var selector = $(this).attr('data-filter');
        $(".gallery-container").isotope({
        filter: selector,
        animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false,
        }
        });
        return false;
        });
      });
    }

    // Scroll To Top
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 150) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
    }); 
  
  /* ==========================================================================
   When document is loading, do
   ========================================================================== */

    $(window).on('ready', function() {
        // add your functions
        progressCauses ();
        countdownTimer ();
        FunfactNumber ();
    });

    $(window).on('load', function() {
        // add your functions
        preloader();
    });

    $(window).on('resize', function() {
        // add your functions
    });

})(window.jQuery);