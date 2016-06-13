(function ($) {
    "use strict";

    function detectIEVersion(v) {
      return RegExp('msie' + (!isNaN(v)?('\\s'+v):''), 'i').test(navigator.userAgent);
    }
    if(detectIEVersion(10)){
      $('.video-wrapper .mediaElement').hide();
      $('.video-wrapper').append('<div>').attr('class','ie-overlay');
      $('.video-content .big-numbers, .video-content .stats-icon, .video-content .numbers-text').css('color','#333');
      $('.video-content .stats-icon').css('border-color','#333');
      $('.video-content .big-numbers, .video-content .numbers-text').css('text-shadow','2px 2px #FFF');
    }

    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };


    var browser;
    jQuery.uaMatch = function (ua) {
        ua = ua.toLowerCase();

        var match = /(chrome)[ \/]([\w.]+)/.exec(ua) ||
                /(webkit)[ \/]([\w.]+)/.exec(ua) ||
                /(opera)(?:.*version|)[ \/]([\w.]+)/.exec(ua) ||
                /(msie) ([\w.]+)/.exec(ua) || ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec(ua) || [];

        return {
            browser: match[1] || "",
            version: match[2] || "0"
        };
    };
// Don't clobber any existing jQuery.browser in case it's different
    if (!jQuery.browser) {
        matched = jQuery.uaMatch(navigator.userAgent);
        browser = {};

        if (matched.browser) {
            browser[matched.browser] = true;
            browser.version = matched.version;
        }

        // Chrome is Webkit, but Webkit is also Safari.
        if (browser.chrome) {
            browser.webkit = true;
        } else if (browser.webkit) {
            browser.safari = true;
        }
        jQuery.browser = browser;
    }

    var portfolioitem = function () {
        var $pitem = jQuery.noConflict();
        jQuery('.portfolio-details').click(function () {
            var portfolioItemUrl = jQuery(this).attr("href");
            jQuery('html, body').animate({scrollTop: jQuery(".portfolio-top").offset().top - 50}, 400);
            jQuery('.portfolio-loading').css({"display": "block", "opacity": "0"}).animate({"opacity": "0.6"}, 300);
            jQuery('#portfolio-details-box').animate({opacity: 0}, 400, function () {
                $pitem("#portfolio-details-box").load(portfolioItemUrl, function () {
                    jQuery('.flexslider').flexslider({animation: "fade", controlNav: false});
                    jQuery(".fitvids").fitVids();
                });
                jQuery('#portfolio-details-box').animate({opacity: 1}, 400);
            });
            jQuery('.portfolio-wrapper').slideUp(400, function () {
                jQuery('.portfolio-loading').delay(800).animate({"opacity": "0"}, 100, function () {
                    jQuery('.portfolio-loading').css("display", "none");
                });
                jQuery('#portfolio-details-box').css('visibility', 'visible');
            }).delay(800).slideDown(400, function () {
                jQuery('#portfolio-details-box').animate({opacity: 1}, 400);
            });
            return false;
        });

        jQuery('#portfolio-close').click(function () {
            jQuery('.portfolio-wrapper').slideUp(400, function () {
                jQuery('#portfolio-details-box').empty();
            });
            return false;
        });
    }

    var portfoliosect = function () {
        var $port = jQuery.noConflict();
        var container = $port('.portfolio-box');
        var filter = $port('.portfolio-filters');
        container.isotope({
            itemSelector: '.item'
        });
        container.infinitescroll({
            navSelector: '.load-more-button',
            nextSelector: '.load-more-button a',
            itemSelector: '.item',
            errorCallback: function () {
                $port('.load-more-button').remove();
            },
        },
                function (newElements) {
                    var $newElems = $port(newElements);
                    $newElems.imagesLoaded(function () {
                        container.isotope('appended', $newElems);
                        container.isotope('reLayout');
                        portfolioitem();
                    });
                }
        );
        $port(window).unbind('.infscr');
        $port(".load-more-button a").click(function () {
            $port('.portfolio-box').infinitescroll('retrieve');
            $port('.load-more-button').show();
            return false;
        });
        filter.find('a').click(function () {
            var selector = $port(this).attr('data-filter');
            filter.find('a').removeClass('active');
            $port(this).addClass('active');
            container.isotope({
                filter: selector,
                animationOptions: {
                    animationDuration: 400,
                    queue: false
                }
            });
            return false;
        });
        $port(window).bind('resize', function () {
            container.isotope('reLayout');
        });
        container.isotope('reLayout');
    }

    var BubblesInits = function () {
        var winHeight = $(window).height();
        $("#home").css({height: winHeight});
        /* Responsive Menu */
        if ($("#nav").length > 0) {
            var nav = responsiveNav("#nav", {
                open: function () {
                    $('#nav li a').click(function () {
                        nav.toggle();
                    });
                }
            });
        }
        /* Fitvids */
        $(".fitvids").fitVids();
        /* Grayscale */
        $('.clients-page img').hover(function () {
            $(this).removeClass('grayscale');
        }, function () {
            $(this).addClass('grayscale');
        });
        /* Sticky Menu */
        $(".menu-container").sticky({topSpacing: 0});
        $('ul.sf-menu').supersubs({
            minWidth: 16, // minimum width of sub-menus in em units
            maxWidth: 40, // maximum width of sub-menus in em units
            extraWidth: 1 // extra width can ensure lines don't sometimes turn over
        })
        $('ul.sf-menu').superfish({
            delay: 300,
            disableHI: true,
            animation: {opacity: 'show', height: 'show'},
            speed: 'fast'
        }).supposition();
        /* Scroll Fade */
        $(window).scroll(function () {
            if ($(window).scrollTop() < 50) {
                $('.scroll-fade-effect').fadeIn(800);
            } else {
                $('.scroll-fade-effect').fadeOut(800);
            }
        });
        /* Slider Background Navigation */
        $('.right-wrapper, .sidebar').hover(function () {
            $('#nexta').animate({"opacity": "0.7"}, 100);
        }, function () {
            $('#nexta').animate({"opacity": "0"}, 100);
        });
        $('.left-wrapper').hover(function () {
            $('#preva').animate({"opacity": "0.7"}, 100);
        }, function () {
            $('#preva').animate({"opacity": "0"}, 100);
        });
        //flex slider for fittext
        $("#slider ul li p").fitText(0.8);
        $("#half-slider ul li p").fitText(1.2, {minFontSize: '20px', maxFontSize: '70px'});
        $(".page-header h1").fitText(1.2, {minFontSize: '20px', maxFontSize: '70px'});
        $(".fit-text").fitText(1.2, {minFontSize: '20px', maxFontSize: '90px'});
        $(".fit-texts").fitText(1.2, {minFontSize: '20px', maxFontSize: '40px'});
        $(window).smartresize(function () {
            $("#slider ul li").fitText(0.8);
            $("#half-slider ul li p").fitText(1.2, {minFontSize: '20px', maxFontSize: '70px'});
        });
        /* Tooltip */
        $(".customercommentsarea a").tooltip({
            'selector': '',
            'placement': 'top'
        });
        /* Map Expand */
        $('.expand-map a').click(function (e) {
            e.preventDefault();
            $("#map").animate({height: 400});
            $(".expand-map").fadeOut();
        });
    }
    /* Smooth scroll for anchor links */
    var BubblesScrollForAnchor = function () {
        $('.smooth').bind('click.smoothscroll', function (e) {
            e.preventDefault();
            var target = this.hash,
                    $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 60
            }, 1400, 'swing');
        });
    }
    /* Tab Start */
    var BubblesTabs = function () {
        $('.tabbed-area a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            $('.tabbed-area').find('.active').removeClass('active');
            $(this).parent().parent().parent('.more-details-box').addClass('active');
        });
    }
    /* Tab Start */
    var BubblestwoTabs = function () {
        $('.big-tabs ul li a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            $('.big-tabs ul li').find('.active').removeClass('active');
            $(this).parent().parent('.big-tabs ul li').addClass('active');
        });
        $('.panel-bubbles').click(function () {
            $('.panel-bubbles').removeClass('cllpse-active');
            $(this).addClass('cllpse-active');
        });
    }
    /* Flex Slider */
    $('.flexslider').flexslider({
        animation: "fade",
        controlNav: false,
    });
    /* Portfolio */
    jQuery(window).load(function () {

    });
    /* Animations */
    var BubblesAnimations = function () {
        $(window).scroll(function () {
            $(".animated-area").each(function () {
                if ($(window).height() + $(window).scrollTop() - $(this).offset().top > 0) {
                    $(this).trigger("animate-it");
                }
            });
        });
        $(".animated-area").on("animate-it", function () {
            var cf = $(this);
            cf.find(".animated").each(function () {
                $(this).css("-webkit-animation-duration", "0.6s");
                $(this).css("-moz-animation-duration", "0.6s");
                $(this).css("-ms-animation-duration", "0.6s");
                $(this).css("animation-duration", "0.6s");
                $(this).css("-webkit-animation-delay", $(this).attr("data-animation-delay"));
                $(this).css("-moz-animation-delay", $(this).attr("data-animation-delay"));
                $(this).css("-ms-animation-delay", $(this).attr("data-animation-delay"));
                $(this).css("animation-delay", $(this).attr("data-animation-delay"));
                $(this).addClass($(this).attr("data-animation"));
            });

            cf.find(".animated-numbers").each(function () {
                var targetnumber = $(this).attr("target-number");
                $(this).animateNumbers(targetnumber, true, 3000);
            });
        });
    }


    jQuery(document).ready(function ($) {


        function equalHeight(group) {
            var tallest = 0;
            group.each(function () {
                var thisHeight = $(this).height();
                if (thisHeight > tallest) {
                    tallest = thisHeight;
                }
            });
            group.height(tallest);
        }

        equalHeight($('.price-box'));

        equalHeight($('.customer-box'));

        if (isMobile.any()) {
            equalHeight($('.about-box'));
            jQuery('.video-cover').css('display', 'block');
            jQuery(".animated-area").each(function () {
                jQuery('.animated').removeClass('animated');
            });
        }
        ;

        if ($.browser.msie) {
            jQuery("#clients-id li").each(function () {
                jQuery("#clients-id li img").removeClass('grayscale');
            });
        }


        BubblesScrollForAnchor();
        BubblesInits();
        BubblesTabs();
        BubblestwoTabs();
        BubblesAnimations();

    });
    jQuery(window).load(function ($) {
        jQuery('#loading-area').fadeOut().remove();
        portfoliosect();
        portfolioitem();
    });

    // custom form
    $(document).on('submit', 'form[name="custom-form"]', function(e){
        e.preventDefault();

        var $form = $(this);
        var $formAction = $form.data('action');

        $.ajax({
            url: $formAction,
            type: 'POST',
            data: new FormData( this ),
            processData: false,
            contentType: false,
            success: function(data){
                var $msg = JSON.parse(data);
                if($msg.success){
                    $('span.help-block', $form).remove();
                    $('span.has-error', $form).removeClass('has-error');
                    $('<div class="alert alert-success" role="alert">Form has been sent succesfully! Thank you!</div>').insertBefore($form);
                    $('input:not(:submit), textarea', $form).val('');
                }else{
                    if($msg.error){
                        $('div.alert', $form.parent()).remove();
                        $('span.help-block', $form).remove();
                        $('span.has-error', $form).removeClass('has-error');
                        $.each($msg.error, function(field, err) {
                            $('[name="'+field+'"]').parent().addClass('has-error');
                            $('<span class="help-block">'+err+'</span>').insertAfter($('[name="'+field+'"]'));
                        });
                    }
                }
            }
        });

    });

})(jQuery);


