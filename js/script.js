$(document).ready(function() {

    var ua = detect.parse(navigator.userAgent);
    $("html").addClass(ua.device.type + " " + ua.device.family + " " + ua.os.family + " " + ua.browser.family)

    if ($(".menuBtn").length) {
        $(".menuBtn").on("click", function() {
            $(".menuBtn").toggleClass("selected")
            $(".menuLine").toggleClass("open").slideToggle(200)
        })
    }

    if ($(".cabBurger").length) {
        $(".cabBurger").on("click", function() {
            $(".cabBurger").toggleClass("activeBurger")
            $(".cabMenuWrapper").toggleClass("open").slideToggle(200)
        })
    }

    if ($(".faqList").length) {
        var timeOut = false;
        $(".faqList .quest").click(function() {
            if (timeOut) return false;
            $(this).toggleClass("open").parents('.item').toggleClass("open").find(".answer").slideToggle();
            timeOut = true;
            setTimeout(function() {
                timeOut = false;
            }, 500);
        })
    }

    if ($(".selectricBl").length) {
        $(".selectricBl").map(function() {
            $(this).selectric();
        })

        $('.selectricPic').selectric({
            arrowButtonMarkup: '<span class="icon icon-arrow-down"></span>',
            labelBuilder: function(itemData, element, index) {
                return $(itemData.element[0]).attr('placeholder') ?
                    '<span class="placeholder">' + itemData.text + '</span>' :
                    $(itemData.element[0]).attr('data-image') !== undefined ?
                    '<span class="payIcon" style="background-image: url(' + $(itemData.element[0]).attr('data-image') + ');"></span>' + itemData.text :
                    itemData.text;
            },
            optionsItemBuilder: function(itemData) {
                return $(itemData.element[0]).attr('data-image') !== undefined ?
                    '<span class="payIcon" style="background-image: url(' + $(itemData.element[0]).attr('data-image') + ');"></span>' + itemData.text :
                    itemData.text;
            }
        })
    }

    if ($('.cabDepositsCarousel').length > 0) {
        $('.cabDepositsCarousel').map(function() {
            $(this).slick({
                slidesToShow: 1,
                prevArrow: '<button type="button" class="slick-prev"><span class="icon icon-arrow-left"></span></button>',
                nextArrow: '<button type="button" class="slick-next"><span class="icon icon-arrow-right"></span></button>',
            })
        })
    }

    if ($('.cabPlansCarousel').length > 0) {
        $('.cabPlansCarousel').map(function() {
            $(this).slick({
                slidesToShow: 3,
                infinite: false,
                prevArrow: '<button type="button" class="slick-prev"><span class="icon icon-arrow-left"></span></button>',
                nextArrow: '<button type="button" class="slick-next"><span class="icon icon-arrow-right"></span></button>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            })
        })
    }

    if ($('.tabs').length > 0) {
        $('.tabs').map(function() {
            $(this).tabslet({
                animation: true
            })

            var startId = $(this).find('.tabsHead .active a').attr('href'),
                startPanel = $(this).find('.tabsPanel' + startId);

            startPanel.addClass('active')

            $(this).on("_after", function() {
                var id = $(this).find('.tabsHead .active a').attr('href'),
                    panel = $(this).find('.tabsPanel' + id);

                $(this).find('.tabsPanel.active').removeClass('active')
                panel.addClass('active')

                if (panel.find('.slick-slider').length > 0) {
                    panel.find('.slick-slider').slick('setPosition')
                }
            })
        })
    }

    if ($('.accordionItem').length > 0) {
        $('.accordionItem').map(function() {
            var item = $(this),
                btn = item.find('.accordionHead'),
                content = item.find('.accordionContent');

            if (item.hasClass('accordionSingle')) {
                btn.on('click', function() {
                    if (!btn.hasClass('active')) {

                        item.siblings('.accordionItem').find('.accordionContent').stop().slideUp(400, function() {
                            $(this).removeClass('active')
                            item.siblings('.accordionItem').find('.accordionHead').removeClass('active')
                        })
                        content.stop().slideDown(400, function() {
                            content.addClass('active')
                            btn.addClass('active')
                        })
                    }
                })
            } else {
                btn.on('click', function() {
                    if (btn.hasClass('active')) {
                        content.stop().slideDown(400, function() {
                            content.removeClass('active')
                            btn.removeClass('active')
                        })
                    } else {
                        content.stop().slideUp(400, function() {
                            content.addClass('active')
                            btn.addClass('active')
                        })
                    }
                })
            }
        })
    }

    if ($('.clipCopyText').length > 0) {
        new ClipboardJS('.clipCopyText');

        $(".clipCopyText").map(function() {
            $(this).on('click', function(e) {
                e.preventDefault()

                if ($(this).attr('data-clipboard-text') !== undefined) {
                    var message = $(this).siblings('.copyMessage')
                    message.stop().fadeIn(200)

                    setTimeout(function() {
                        message.stop().fadeOut(200)
                    }, 2000)
                }
            })
        })
    }

    if ($('.cabInputWrapper')) {
        $('.cabInputWrapper select').map(function() {
            var select = $(this);

            select.selectric({
                arrowButtonMarkup: '<span class="icon icon-arrow-down"></span>',
            });
        })
    }

    if ($('.progressChart').length > 0) {
        $('.progressChart.total').knob({
            'thikness': .2,
            'bgColor': '#fff',
            'fgColor': '#1f8086',
            'width': 109,
            'height': 109
        });

        $('.progressChart.total').val($('.progressChart.total').val() + '%');

        $('.progressChart.deposit').knob({
            'thikness': .2,
            'bgColor': '#fff',
            'fgColor': '#ffd33a',
            'width': 109,
            'height': 109
        });

        $('.progressChart.deposit').val($('.progressChart.deposit').val() + '%');
    }

    if ($('.dropItem').length > 0) {
        let dropHead = $('.dropItem > .head'),
            dropContent = $('.dropItem > .content');

        $('.dropItem').map(function() {
            let el = $(this)
            if (el.find(dropHead).length > 0 && el.find(dropContent).length > 0) {

                el.find(dropHead).on('click', function() {
                    let el = $(this),
                        cont = el.siblings(dropContent),
                        parent = el.parent('.dropItem');

                    if (parent.hasClass('active')) {
                        cont.stop().slideUp(500);
                        parent.removeClass('active');
                    } else {
                        cont.stop().slideDown(300);
                        parent.addClass('active');
                    }
                })
            }
        })
    }

    if ($(".siteClock").length > 0) {
        clock()
    }

    if ($(".timer").length > 0) {
        $(".timer").map(timer)
    }

    if ($(".backImages").length > 0) {
        $('.backImages .layer1').parallax({
            mouseport: $('body'),
            xparallax: '100px',
            yparallax: false,
            decay: 0.1,
            xorigin: 0
        });
    }
})

var m
var timer = function() {
    var now = new Date($(this).attr('data-now')),
        startTime = new Date($(this).attr('data-start')),
        finishTime = new Date($(this).attr('data-end')),
        startMS = startTime.getTime(),
        finishMS = finishTime.getTime(),
        nowMS = now.getTime(),
        betweenMS = finishMS - startMS,
        lastMS = finishMS - nowMS,
        percent = lastMS * 100 / betweenMS,
        lastHour,
        lastMin,
        lastSec;
    percent = 100 - percent.toFixed();

    m = setInterval(function() {
        nowMS = nowMS + 1000;
        lastMS = finishMS - nowMS;

        lastHour = Math.floor(lastMS / 1000 / 60 / 60)
        lastMin = Math.floor((lastMS - (lastHour * 1000 * 60 * 60)) / 1000 / 60)
        lastSec = Math.floor((lastMS - (lastHour * 1000 * 60 * 60) - (lastMin * 60 * 1000)) / 1000)

        lastHour = checkTime(lastHour);
        lastMin = checkTime(lastMin);
        lastSec = checkTime(lastSec);

        $(this).find('.hour').text(lastHour);
        $(this).find('.minute').text(lastMin);
        $(this).find('.second').text(lastSec);

        if (lastMS / 1000 < 0) {
            $(this).find('.hour').text('00');
            $(this).find('.minute').text('00');
            $(this).find('.second').text('00');
        }

    }.bind(this), 1000)
}
var checkTime = function(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}