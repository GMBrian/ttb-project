/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function ($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function () {
                // JavaScript to be fired on all pages
            },
            finalize: function () {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function () {
                // JavaScript to be fired on the home page
            },
            finalize: function () {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        // About us page, note the change from about-us to about_us.
        'about_us': {
            init: function () {
                // JavaScript to be fired on the about us page
            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function (func, funcname, args) {
            var fire;
            var namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function () {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);

    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function () {
                $(this).removeClass('animated ' + animationName);
            });
        }
    });

    $(document).ready(function () {

        var inhoudsSlider = $('.inhoudsslider-list li a');

        inhoudsSlider.click(function (e) {
            var backgroundImage = $(this).data('image');

            $('.inhoudsslider-list li a').removeClass('active');

            $(this).addClass('active');
            $(this).closest('.section-inhoudslider').css('background-image', 'url(' + backgroundImage + ')');

            var contentId = $(this).data('contentid');

            $('.inhoudsslider-list-content li').hide();
            $('#inhoudsslider-content-' + contentId).fadeIn();

            //console.log('#inhoudsslider-content-' + contentId);

            return false;
        });

        inhoudsSlider[0].click();

        $('.nav-primary .nav a[href*=\\#]').on('click', function (event) {
            $('html,body').animate(
                {
                    scrollTop: $(this.hash).offset().top - 105
                },
                500
            );

            return false;
        });

        new WOW().init();



        $(document).on("scroll", onScroll);

        // //smoothscroll
        // $('a[href^="#"]').on('click', function (e) {
        //     e.preventDefault();
        //     $(document).off("scroll");
        //
        //     $('a').each(function () {
        //         $(this).removeClass('hovering');
        //     })
        //     $(this).addClass('hovering');
        //
        //     var target = this.hash,
        //         menu = target;
        //     $target = $(target);
        //     $('html, body').stop().animate({
        //         'scrollTop': $target.offset().top + 2
        //     }, 500, 'swing', function () {
        //         window.location.hash = target;
        //         $(document).on("scroll", onScroll);
        //     });
        // });
    });

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        var topBanner = $(".banner");

        if (scroll > 0) {
            topBanner.addClass("sticky");
            $(".wrap").css("padding-top", topBanner.height());
        }
        else {
            topBanner.removeClass("sticky");
            $(".wrap").css("padding-top", 0);
        }
    });


    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('.nav-primary a').each(function () {
            var currLink = $(this);
            //var refElement = $(currLink.attr("href")$(currLink.attr("href"));
            //var refElement = $(currLink.attr("href")).substring(currLink.indexOf('#'));
            //console.log(currLink.attr("href").substring(currLink.attr("href").indexOf('#')).substr(1));

            var refElement = $('.' + currLink.attr("href").substring(currLink.attr("href").indexOf('#')).substr(1));

            console.log(refElement);

            refElement.each(function () {
                if ($(this).position().top <= scrollPos && $(this).position().top + $(this).height() > scrollPos) {
                    $('.nav-primary ul li').removeClass("hovering");
                    currLink.closest('li').addClass("hovering");
                }
                else {
                    //currLink.closest('li').removeClass("hovering");
                }
            });
        });
    }

})(jQuery); // Fully reference jQuery after this point.


