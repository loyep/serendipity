(function ($) {


    "use strict";


    /*---------------------------------------------------------------
    BACK ON TOP BUTTON
    -----------------------------------------------------------------*/
    $(function () {

        var offset = 300,
            offset_opacity = 200,
            scroll_top_duration = 700,
            $back_to_top = $('.buttontop-top');

        $(window).scroll(function () {

            ($(this).scrollTop() > offset) ? $back_to_top.addClass('buttontop-is-visible') : $back_to_top.removeClass('buttontop-is-visible buttontop-fade-out');

            if ($(this).scrollTop() > offset_opacity) {
                $back_to_top.addClass('buttontop-fade-out');
            }

        });

        $back_to_top.on('click', function (event) {

            event.preventDefault();
            $('body,html').animate({
                    scrollTop: 0,
                }, scroll_top_duration
            );

        });

    });


    /*---------------------------------------------------------------
    OFFCANVAS NAVIGATION
    -----------------------------------------------------------------*/
    $(function () {

        $('.offcanvas-menu-button').click(function () {

            $('.offcanvas-navigation').fadeToggle();

        });

        $('.offcanvas-close').click(function () {

            $('.offcanvas-navigation').fadeToggle();

        });

    });


    $(function () {

        $(".offcanvas-navigation .menu-item-has-children a").click(function (event) {
            event.stopPropagation();
            location.href = this.href;
        });

        $(".offcanvas-navigation .menu-item-has-children").click(function () {

            $(this).addClass("open");

            if ($(".offcanvas-navigation .menu-item-has-children").hasClass("open")) {
                $(this).children("ul").toggle();
            }

            return false;

        });

    });


    /*---------------------------------------------------------------
    STICKY HEADER
    -----------------------------------------------------------------*/
    $(function () {

        $(window).scroll(function () {

            if ($(this).scrollTop() > 100) {
                $('.sticky-header').addClass('available');
                $('.sidebar').addClass('scrolled');
            } else {
                $('.sticky-header').removeClass('available');
                $('.sidebar').removeClass('scrolled');
            }

        });

        $(window).scroll(function () {

            if ($(this).scrollTop() > 70) {
                $('.offcanvas-menu-button').addClass('centered');
            } else {
                $('.offcanvas-menu-button').removeClass('centered');
            }

        });

        var scrollTimeOut = true,
            lastYPos = 0,
            yPos = 0,
            yPosDelta = 5,
            sidebar = $('.sidebar'),
            nav = $('.sticky-header'),
            navHeight = nav.outerHeight(),
            setNavClass = function () {

                scrollTimeOut = false;
                yPos = $(window).scrollTop();

                if (Math.abs(lastYPos - yPos) >= yPosDelta) {

                    if (yPos > lastYPos && yPos > navHeight) {
                        nav.removeClass('shown');
                        sidebar.removeClass('shifted');
                    } else {
                        nav.addClass('shown');
                        sidebar.addClass('shifted');
                    }

                    lastYPos = yPos;

                }

            };

        $(window).scroll(function (e) {

            scrollTimeOut = true;

        });

        setInterval(function () {

            if (scrollTimeOut) {
                setNavClass();
            }

        }, 250);

    });


    /*---------------------------------------------------------------
    AJAX LOAD MORE POSTS
    -----------------------------------------------------------------*/
    $(document).on('click', '.btn-load-more-posts:not(.loading)', function () {

        var that = $(this);
        var page = $(this).data('page');
        var newPage = page + 1;
        var ajaxurl = that.data('url');

        that.addClass('loading').find('.text').fadeOut(100);
        that.find('.icon1').fadeOut(100);
        that.find('.icon2').fadeIn(500).addClass('spin');
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                page: page,
                action: 'load_more_posts'
            },
            error: function (response) {
                console.log(response);
            },
            success: function (response) {

                if (response == 0) {

                    that.fadeOut(320);

                } else {

                    that.data('page', newPage);
                    $('.more-posts-deck').append(response);
                    that.removeClass('loading').find('.text').fadeIn(100);
                    that.find('.icon1').fadeIn(100);
                    that.find('.icon2').fadeOut(500).removeClass('spin');
                }
            }
        });

    });


})(jQuery);
