(function($) {

    "use strict";


    //Update Header Style and Scroll to Top
    function headerStyle() {
        if ($('.main-header').length) {
            var windowpos = $(window).scrollTop();
            var siteHeader = $('.main-header');
            var scrollLink = $('.scroll-top');
            if (windowpos >= 110) {
                siteHeader.addClass('fixed-header');
                scrollLink.addClass('open');
            } else {
                siteHeader.removeClass('fixed-header');
                scrollLink.removeClass('open');
            }
        }
    }

    headerStyle();


    //Submenu Dropdown Toggle
    if ($('.main-header li.dropdown ul').length) {
        $('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

    }

    //Mobile Nav Hide Show
    if ($('.mobile-menu').length) {

        $('.mobile-menu .menu-box').mCustomScrollbar();

        var mobileMenuContent = $('.main-header .menu-area .main-menu').html();
        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
        $('.sticky-header .main-menu').append(mobileMenuContent);

        //Dropdown Button
        $('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
            $(this).toggleClass('open');
            $(this).prev('ul').slideToggle(500);
        });
        //Dropdown Button
        $('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
            $(this).prev('.megamenu').slideToggle(900);
        });
        //Menu Toggle Btn
        $('.mobile-nav-toggler').on('click', function() {
            $('body').addClass('mobile-menu-visible');
        });

        //Menu Toggle Btn
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });
    }


    // Scroll to a Specific Div
    if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function() {
            var target = $(this).attr('data-target');
            // animate
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);

        });
    }

    // Elements Animation
    if ($('.wow').length) {
        var wow = new WOW({
            mobile: false
        });
        wow.init();
    }

    //Contact Form Validation
    if ($('#contact-form').length) {
        $('#contact-form').validate({
            rules: {
                username: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                subject: {
                    required: true
                },
                message: {
                    required: true
                }
            }
        });
    }

    //Fact Counter + Text Count
    if ($('.count-box').length) {
        $('.count-box').appear(function() {

            var $t = $(this),
                n = $t.find(".count-text").attr("data-stop"),
                r = parseInt($t.find(".count-text").attr("data-speed"), 10);

            if (!$t.hasClass("counted")) {
                $t.addClass("counted");
                $({
                    countNum: $t.find(".count-text").text()
                }).animate({
                    countNum: n
                }, {
                    duration: r,
                    easing: "linear",
                    step: function() {
                        $t.find(".count-text").text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $t.find(".count-text").text(this.countNum);
                    }
                });
            }

        }, { accY: 0 });
    }


    //LightBox / Fancybox
    if ($('.lightbox-image').length) {
        $('.lightbox-image').fancybox({
            openEffect: 'fade',
            closeEffect: 'fade',
            helpers: {
                media: {}
            }
        });
    }


    //Tabs Box
    if ($('.tabs-box').length) {
        $('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
            e.preventDefault();
            var target = $($(this).attr('data-tab'));

            if ($(target).is(':visible')) {
                return false;
            } else {
                target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
                $(this).addClass('active-btn');
                target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
                target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
                $(target).fadeIn(300);
                $(target).addClass('active-tab');
            }
        });
    }



    //Accordion Box
    if ($('.accordion-box').length) {
        $(".accordion-box").on('click', '.acc-btn', function() {

            var outerBox = $(this).parents('.accordion-box');
            var target = $(this).parents('.accordion');

            if ($(this).hasClass('active') !== true) {
                $(outerBox).find('.accordion .acc-btn').removeClass('active');
            }

            if ($(this).next('.acc-content').is(':visible')) {
                return false;
            } else {
                $(this).addClass('active');
                $(outerBox).children('.accordion').removeClass('active-block');
                $(outerBox).find('.accordion').children('.acc-content').slideUp(300);
                target.addClass('active-block');
                $(this).next('.acc-content').slideDown(300);
            }
        });
    }


    // clients-carousel
    if ($('.clients-carousel').length) {
        $('.clients-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            smartSpeed: 2000,
            autoplay: true,
            navText: ['<span class="flaticon-left"></span>', '<span class="flaticon-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                600: {
                    items: 3
                },
                800: {
                    items: 4
                },
                1200: {
                    items: 5
                }

            }
        });
    }


    // Testimonial Carousel
    if ($('.testimonial-carousel').length) {
        $('.testimonial-carousel').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            smartSpeed: 300,
            autoplay: 3000,
            navText: ['<span class="flaticon-left"></span>', '<span class="flaticon-arrow"></span>']
        });
    }

    // Testimonial Carousel Two
    if ($('.testimonial-carousel-2').length) {
        $('.testimonial-carousel-2').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            smartSpeed: 300,
            autoplay: 3000,
            navText: ['<span class=""></span>', '<span class=""></span>']
        });
    }

    // Testimonial Carousel Three
    if ($('.testimonial-carousel-3').length) {
        $('.testimonial-carousel-3').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            smartSpeed: 3000,
            autoplay: 4000,
            navText: ['<span class="fas fa-arrow-left"></span>', '<span class="fas fa-arrow-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        });
    }

    // Testimonial Carousel Four
    if ($('.testimonial-carousel-4').length) {
        $('.testimonial-carousel-4').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            smartSpeed: 2000,
            autoplay: true,
            navText: ['<span class="fas fa-arrow-up"></span>', '<span class="fas fa-arrow-down"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 1
                },
                1200: {
                    items: 1
                }

            }
        });
    }

    // Testimonial Carousel Five
    if ($('.testimonial-carousel-5').length) {
        $('.testimonial-carousel-5').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            smartSpeed: 1000,
            autoplay: 500,
            navText: ['<span class="fas fa-arrow-up"></span>', '<span class="fas fa-arrow-down"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 1
                },
                1200: {
                    items: 1
                }

            }
        });
    }


    //service-carousel
    if ($('.service-carousel').length) {
        $('.service-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 3000,
            autoplay: 4000,
            navText: ['<span class=""></span>', '<span class=""></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        });
    }


    //service-carousel
    if ($('.service-carousel-2').length) {
        $('.service-carousel-2').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            smartSpeed: 3000,
            autoplay: 4000,
            navText: ['<span class="fas fa-arrow-left"></span>', '<span class="fas fa-arrow-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        });
    }


    //news-carousel
    if ($('.news-carousel').length) {
        $('.news-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 1000,
            autoplay: 500,
            navText: ['<span class="fas fa-arrow-left"></span>', '<span class="fas fa-arrow-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        });
    }


    //two-column-carousel
    if ($('.two-column-carousel').length) {
        $('.two-column-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 3000,
            autoplay: 4000,
            navText: ['<span class="fas fa-arrow-left"></span>', '<span class="fas fa-arrow-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 2
                }
            }
        });
    }

    //two-column-carousel
    if ($('.two-column-carousel-2').length) {
        $('.two-column-carousel-2').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            smartSpeed: 3000,
            autoplay: 4000,
            navText: ['<span class="fas fa-arrow-left"></span>', '<span class="fas fa-arrow-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 2
                }
            }
        });
    }


    //three-item-carousel
    if ($('.three-item-carousel').length) {
        $('.three-item-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 3000,
            autoplay: 4000,
            navText: ['<span class="flaticon-left"></span>', '<span class="flaticon-arrow"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        });
    }
    //three-item-carousel
    if ($('.three-item-caro-no').length) {
        $('.three-item-caro-no').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            smartSpeed: 3000,
            autoplay: 4000,
            navText: ['<span class="flaticon-left"></span>', '<span class="flaticon-arrow"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            }
        });
    }


    // Four Item Carousel
    if ($('.four-item-carousel').length) {
        $('.four-item-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            autoHeight: true,
            smartSpeed: 500,
            autoplay: 1000,
            navText: ['<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1024: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    }
    // Four Item Carousel
    if ($('.four-item').length) {
        $('.four-item').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoHeight: true,
            smartSpeed: 500,
            autoplay: 1000,
            navText: ['<span class="fas fa-arrow-left"></span>', '<span class="fas fa-arrow-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1024: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    }

    function onHoverthreeDmovement() {
        var tiltBlock = $('.js-tilt');
        if (tiltBlock.length) {
            $('.js-tilt').tilt({
                maxTilt: 20,
                perspective: 700,
                glare: true,
                maxGlare: 0
            })
        }
    }




    //Add One Page nav
    if ($('.scroll-nav').length) {
        $('.scroll-nav').onePageNav();
    }


    //Sortable Masonary with Filters
    function enableMasonry() {
        if ($('.sortable-masonry').length) {

            var winDow = $(window);
            // Needed variables
            var $container = $('.sortable-masonry .items-container');
            var $filter = $('.filter-btns');

            $container.isotope({
                filter: '*',
                masonry: {
                    columnWidth: '.masonry-item.small-column'
                },
                animationOptions: {
                    duration: 500,
                    easing: 'linear'
                }
            });


            // Isotope Filter 
            $filter.find('li').on('click', function() {
                var selector = $(this).attr('data-filter');

                try {
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 500,
                            easing: 'linear',
                            queue: false
                        }
                    });
                } catch (err) {

                }
                return false;
            });


            winDow.on('resize', function() {
                var selector = $filter.find('li.active').attr('data-filter');

                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 500,
                        easing: 'linear',
                        queue: false
                    }
                });
            });


            var filterItemA = $('.filter-btns li');

            filterItemA.on('click', function() {
                var $this = $(this);
                if (!$this.hasClass('active')) {
                    filterItemA.removeClass('active');
                    $this.addClass('active');
                }
            });
        }
    }

    enableMasonry();


    //Search Popup
    if ($('#search-popup').length) {

        //Show Popup
        $('.search-toggler').on('click', function() {
            $('#search-popup').addClass('popup-visible');
        });
        $(document).keydown(function(e) {
            if (e.keyCode === 27) {
                $('#search-popup').removeClass('popup-visible');
            }
        });
        //Hide Popup
        $('.close-search,.search-popup .overlay-layer').on('click', function() {
            $('#search-popup').removeClass('popup-visible');
        });
    }


    // Donation Progress Bar
    if ($('.count-bar').length) {
        $('.count-bar').appear(function() {
            var el = $(this);
            var percent = el.data('percent');
            $(el).css('width', percent).addClass('counted');
        }, { accY: -50 });

    }


    // function for style switcher
    function swithcerMenu() {
        if ($('.switch_menu').length) {

            $('.switch_btn button').on('click', function() {
                $('.switcher').toggleClass('switcher-show')
            });

            $("#myonoffswitch").on('click', function() {
                $(".fixed").toggleClass("static");
            });

            $("#boxed").on('click', function() {
                $(".main_page").addClass("active_boxlayout");
                $('body').addClass('bg')
            });
            $("#full_width").on('click', function() {
                $(".main_page").removeClass("active_boxlayout");
                $('body').removeClass('bg')
            });
        };
    }


    //service Tabs
    if ($('.service-tab').length) {
        $('.service-tab .service-tab-btns .p-tab-btn').on('click', function(e) {
            e.preventDefault();
            var target = $($(this).attr('data-tab'));

            if ($(target).hasClass('actve-tab')) {
                return false;
            } else {
                $('.service-tab .service-tab-btns .p-tab-btn').removeClass('active-btn');
                $(this).addClass('active-btn');
                $('.service-tab .p-tabs-content .p-tab').removeClass('active-tab');
                $(target).addClass('active-tab');
            }
        });
    }


    //service-carousel-3
    if ($('.service-carousel-3').length) {
        $('.service-carousel-3').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            smartSpeed: 300,
            autoplay: 3000,
            navText: ['<span class=""></span>', '<span class=""></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 1
                },
                1024: {
                    items: 1
                }
            }
        });
    }

    //=== screenshot Carousel ===

    if ($('.screenshot-carousel').length) {
        $('.screenshot-carousel').owlCarousel({
            dots: true,
            loop: true,
            margin: 20,
            center: true,
            nav: false,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1400: {
                    items: 1
                },

                1700: {
                    items: 1
                }
            }
        });
    }


    if ($('.timer').length) {
        $(function() {
            $('[data-countdown]').each(function() {
                var $this = $(this),
                    finalDate = $(this).data('countdown');
                $this.countdown(finalDate, function(event) {
                    $this.html(event.strftime('%D days %H:%M:%S'));
                });
            });
        });

        $('.cs-countdown').countdown('').on('update.countdown', function(event) {
            var $this = $(this).html(event.strftime('<div class="count-col"><span>%D</span><h6>days</h6></div> <div class="count-col"><span>%H</span><h6>Hours</h6></div> <div class="count-col"><span>%M</span><h6>Minutes</h6></div> <div class="count-col"><span>%S</span><h6>Seconds</h6></div>'));
        });
    }


    if ($('.testimonial-style-three .bxslider').length) {
        $('.testimonial-style-three .bxslider').bxSlider({
            nextSelector: '.testimonial-style-three #slider-next',
            prevSelector: '.testimonial-style-three #slider-prev',
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>',
            mode: 'fade',
            auto: 'true',
            speed: '700',
            pagerCustom: '.testimonial-style-three .slider-pager .thumb-box'
        });
    };


    if ($('.client-testi-section .bxslider').length) {
        $('.client-testi-section .bxslider').bxSlider({

            nextText: '<i class="flaticon-next"></i>',
            prevText: '<i class="flaticon-next"></i>',
            mode: 'vertical',
            auto: 'true',
            speed: '700',
            controls: true,
            pagerCustom: '.client-testi-section .bx-pager'
        });
    };


    if ($('.client-testi-section-two .bxslider').length) {
        $('.client-testi-section-two .bxslider').bxSlider({
            slideMargin: 30,
            nextText: '<i class="flaticon-next"></i>',
            prevText: '<i class="flaticon-next"></i>',
            mode: 'horizontal',
            auto: 'true',
            speed: '700',
            controls: true,
            pagerCustom: '.client-testi-section-two .bx-pager'
        });
    };




    /*	=========================================================================
    When document is Scrollig, do
    ========================================================================== */

    jQuery(document).on('ready', function() {
        (function($) {
            // add your functions
            onHoverthreeDmovement();

        })(jQuery);
    });



    /* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */

    $(window).on('scroll', function() {
        headerStyle();
    });



    /* ==========================================================================
   When document is loaded, do
   ========================================================================== */

    $(window).on('load', function() {

        $('#handle-preloader').fadeOut();
        $('.preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({ 'overflow': 'visible' });

        enableMasonry();
    });



})(window.jQuery);