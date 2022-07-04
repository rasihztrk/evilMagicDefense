/*
$(document).ready(function() {


    function getTimeRemaining(endtime) {
        var p = Date.parse(endtime) - Date.parse(new Date());
        var secondsTwo = Math.floor((p / 1000) % 60);
        var minutesTwo = Math.floor((p / 1000 / 60) % 60);
        var hoursTwo = Math.floor((p / (1000 * 60 * 60)) % 24);
        var daysTwo = Math.floor(p / (1000 * 60 * 60 * 24));
        return {
            totalTwo: p,
            daysTwo: daysTwo,
            hoursTwo: hoursTwo,
            minutesTwo: minutesTwo,
            secondsTwo: secondsTwo,
        };
    }

    function initializeClockTwo(id, endtime) {
        var clockTwo = document.getElementById(id);
        var daysSpanTwo = clockTwo.querySelector(".daysTwo");
        var hoursSpanTwo = clockTwo.querySelector(".hoursTwo");
        var minutesSpanTwo = clockTwo.querySelector(".minutesTwo");
        var secondsSpanTwo = clockTwo.querySelector(".secondsTwo");

        function updateClockTwo() {
            var p = getTimeRemaining(endtime);
            daysSpanTwo.innerHTML = p.daysTwo;
            hoursSpanTwo.innerHTML = ("0" + p.hoursTwo).slice(-2);
            minutesSpanTwo.innerHTML = ("0" + p.minutesTwo).slice(-2);
            secondsSpanTwo.innerHTML = ("0" + p.secondsTwo).slice(-2);

            if (p.total <= 0) {
                clearInterval(timeintervalTwo);
            }
        }

        updateClockTwo();
        var timeintervalTwo = setInterval(updateClockTwo, 1000);
    }

    var deadlineTwo = "June 27 2022 19:00:00 UTC";
    initializeClockTwo("countdownTwo", deadlineTwo);
});

$(document).ready(function() {
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            total: t,
            days: days,
            hours: hours,
            minutes: minutes,
            seconds: seconds,
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector(".days");
        var hoursSpan = clock.querySelector(".hours");
        var minutesSpan = clock.querySelector(".minutes");
        var secondsSpan = clock.querySelector(".seconds");

        function updateClock() {
            var t = getTimeRemaining(endtime);
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
            minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
            secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = "june 27 2022 19:30:00 UTC";
    initializeClock("countdown", deadline);
});
*/
$(document).ready(function() {
    $(window).scrollTop(0);

    $(".owl-Two").owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        center: true,
        slideTransition: "linear",
        autoplaySpeed: 6000,
        smartSpeed: 6000,
        rtl: true,
        responsive: {
            0: {
                items: 3,
            },
            600: {
                items: 5,
            },
            1200: {
                items: 8,
                1300: {
                    items: 9,
                },
            },
        },
    });

    $(".owl-Three").owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        center: true,
        slideTransition: "linear",
        autoplaySpeed: 6000,
        smartSpeed: 6000,
        rtl: false,
        responsive: {
            0: {
                items: 3,
            },
            600: {
                items: 5,
            },
            1200: {
                items: 8,
                1300: {
                    items: 9,
                },
            },
        },
    });

    $(".owl-Four").owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        center: true,
        slideTransition: "linear",
        autoplaySpeed: 6000,
        smartSpeed: 6000,
        rtl: true,
        responsive: {
            0: {
                items: 3,
            },
            600: {
                items: 3,
            },
            1200: {
                items: 8,
                1300: {
                    items: 9,
                },
            },
        },
    });
});

$(document).ready(function() {
    $(window).scroll(function(event) {
        var scroll = $(window).scrollTop();
        if (scroll >= "200") {
            $("nav").css({ "background-color": "rgb(0 0 0 / 56%)" });
        } else if (scroll <= "200") {
            $("nav").css({ "background-color": "transparent" });
        }
    });


    $(".dropdown-toggle").toggleClass("d-block");

    $(".dropdown-toggle").click(function() {
        $(".dropdown-menu").toggleClass("d-block");
    });

    var clickNav = true;

    $(".navbar-toggler").click(function() {
        if (clickNav) {
            clickNav = false;
            $("body").css("overflow", "hidden");
            $(".navbar-collapse").animate({
                    top: "50%",
                },
                900
            );
            $(".navbar-collapse").css({ "background-color": "black" });

            var scroll = $(window).scrollTop();
            if (scroll <= "200") {
                $("nav").css({ "background-color": "black" });
            }
            if (scroll >= "200") {
                $("nav").css({ "background-color": "black" });
            }
        } else if (!clickNav) {
            clickNav = true;

            setTimeout(function() {
                $(".navbar-collapse").css({ "background-color": "transparent" });
            }, 400);

            $(".navbar-collapse").animate({
                    top: "-1000px",
                },
                500
            );
            $("body").css("overflow", "scroll");
            var scroll = $(window).scrollTop();
            if (scroll <= "200") {
                $("nav").css({ "background-color": "transparent" });
            }
            if (scroll >= "200") {
                $("nav").css({ "background-color": "rgb(0 0 0 / 56%)" });
            }
        }
    });

    const currentLocation = location.href;
    const menuItem = document.querySelectorAll(".nav-link");
    const menuLength = menuItem.length;
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].className = "nav-link menuActive";
        }
    }

    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            var links = this.el.find(".article-title");
            links.on(
                "click", {
                    el: this.el,
                    multiple: this.multiple,
                },
                this.dropdown
            );
        };

        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
            ($this = $(this)), ($next = $this.next());

            $next.slideToggle();
            $this.parent().toggleClass("open");

            if (!e.data.multiple) {
                $el
                    .find(".accordion-content")
                    .not($next)
                    .slideUp()
                    .parent()
                    .removeClass("open");
            }
        };
        var accordion = new Accordion($(".accordion-container"), false);
    });


    if (window.innerWidth >= 992) {
        $("#longRoadMap").click(function() {
            $("#roadMapLine").attr("src", "./assets/img/icon/roadMapLineTwoo.png");
            $(".fiveArea").removeClass("d-none");
            $(".sixArea").removeClass("d-none");
            $("#longRoadMap").addClass("d-none");
            $(".sevenArea").removeClass("d-none");
            $(".heightRoadMap").animate({ height: "5820px" }, 1000);
        });

    } else if (window.innerWidth <= 992) {
        $("#longRoadMap").click(function() {
            $("#roadMapLine").attr("src", "./assets/img/icon/roadMapLineTwoo.png");
            $(".fiveArea").removeClass("d-none");
            $(".sixArea").removeClass("d-none");
            $("#longRoadMap").addClass("d-none");
            $(".sevenArea").removeClass("d-none");
            $(".heightRoadMap").animate({ height: "100%" }, 1000);
        });

    }
});


$(".buttonOff").click(function () {
    $(".changeBgB").toggleClass("buttonOn");
  });


$(".changeBgB").click(function () {
    $(".manHeader").toggleClass("headerChange");
  }); 