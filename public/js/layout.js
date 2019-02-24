var Layout = function () {
    // handle on page scroll
    var handleHeaderOnScroll = function() {
        if ($(window).scrollTop() > 60) {
            $("body").addClass("page-on-scroll");
        } else {
            $("body").removeClass("page-on-scroll");
        }
    };

    // Handle Header
    var handleOnePageHeader = function() {
        // jQuery to collapse the navbar on scroll
        if ($('.navbar').offset().top > 150) {
            $('.navbar-fixed-top').addClass('top-nav-collapse');
        }
        $(window).scroll(function() {
            if ($('.navbar').offset().top > 150) {
                $('.navbar-fixed-top').addClass('top-nav-collapse');
            } else {
                $('.navbar-fixed-top').removeClass('top-nav-collapse');
            }
        });

        var $offset = 0;
        $offset = $(".navbar-fixed-top").height()-20;
        
        // jQuery for page scrolling feature - requires jQuery Easing plugin
        $('.js_nav-item a').bind('click', function(event) {
            var $position = $($(this).attr('href')).offset().top;
            $('html, body').stop().animate({
                scrollTop: $position - $offset
            }, 600);
            event.preventDefault();
        });

        // Collapse Navbar When It's Clickicked
        $(window).scroll(function() {
            $('.navbar-collapse.in').collapse('hide');
        });
    };

    // handle group element heights
    var handleHeight = function() {
       $('[data-auto-height]').each(function() {
            var parent = $(this);
            var items = $('[data-height]', parent);
            var height = 0;
            var mode = parent.attr('data-mode');
            var offset = parseInt(parent.attr('data-offset') ? parent.attr('data-offset') : 0);

            items.each(function() {
                if ($(this).attr('data-height') == "height") {
                    $(this).css('height', '');
                } else {
                    $(this).css('min-height', '');
                }

                var height_ = (mode == 'base-height' ? $(this).outerHeight() : $(this).outerHeight(true));
                if (height_ > height) {
                    height = height_;
                }
            });

            height = height + offset;

            items.each(function() {
                if ($(this).attr('data-height') == "height") {
                    $(this).css('height', height);
                } else {
                    $(this).css('min-height', height);
                }
            });

            if(parent.attr('data-related')) {
                $(parent.attr('data-related')).css('height', parent.height());
            }
       });
    };

    // Handle Work Popup
    var handleWorkPopup = function() {
        var overlay = $('.work-popup-overlay'),
            close = $('.work-popup-close'),
            trigger = $('.work-popup-trigger');

        trigger.on('click', function() {
            $(this).find('.work-popup-overlay').removeClass('work-popup-overlay-show');
            $(this).find('.work-popup-overlay').addClass('work-popup-overlay-show');
        });

        close.on('click', function(e) {
            e.stopPropagation();
            overlay.removeClass('work-popup-overlay-show');
        });
    };

    return {
        init: function () {
            // initial setup for fixed header
            handleHeaderOnScroll();
            handleOnePageHeader(); // initial header
            handleHeight(); // initial setup for group element height
            handleWorkPopup(); // initial setup for group work popup
            
            // handle minimized header on page scroll
            $(window).scroll(function() {
                handleHeaderOnScroll();
            });
        },

        // To get the correct viewport width based on  http://andylangton.co.uk/articles/javascript/get-viewport-size-javascript/
        getViewPort: function() {
            var e = window,
                a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }

            return {
                width: e[a + 'Width'],
                height: e[a + 'Height']
            };
        }
    };
}();

$(document).ready(function() {
    Layout.init();

    $(".progress-button").click(function (event) {
        if ($("#input-16").val() != "" && $("#input-17").val() != "" && $("#input-18").val() != "" && $("#input-19").val() != "") {
            event.preventDefault();
            [].slice.call(document.querySelectorAll('.progress-button')).forEach(function (bttn, pos) {
                new UIProgressButton(bttn, {
                    callback: function (instance) {
                        var progress = 0,
                            interval = setInterval(function () {
                                progress = Math.min(progress + Math.random() * 0.1, 1);
                                instance.setProgress(progress);

                                if (progress === 1) {
                                    instance.stop(pos === 1 || pos === 3 ? -1 : 1);
                                    clearInterval(interval);
                                }
                            }, 150);

                        var data = $(".submitForm").serialize();

                        $.ajax({
                            url: "/form",
                            type: "POST",
                            data: data,
                            success: function (responce) {
                                // alert("Прибыли данные: " + responce);
                            }
                        })
                    }
                });
            });
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.js-back-to-top');

    //hide or show the "back to top" link
    $(window).scroll(function () {
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('back-to-top-is-visible') : $back_to_top.removeClass('back-to-top-is-visible back-to-top-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('back-to-top-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
                scrollTop: 0
            }, scroll_top_duration
        );
    });
});