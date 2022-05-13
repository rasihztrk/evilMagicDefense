$(document).ready(function () {
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

  var deadlineTwo = "June 12 2022 19:00:00 UTC";
  initializeClockTwo("countdownTwo", deadlineTwo);
});

$(document).ready(function () {
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

  var deadline = "june 12 2022 19:30:00 UTC";
  initializeClock("countdown", deadline);
});

$(document).ready(function () {
  $(".owl-one").owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    padding: 0,
    lazyLoad: true,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: true,
  });

  $(".owl-Two").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    center: true,
    slideTransition: "linear",
    autoplaySpeed: 6000,
    smartSpeed: 6000,
    rtl: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1200: {
        items: 8,
      1300: {
        items: 9,
      }, },
     
    },
  });

  $(".owl-Three").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    center: true,
    slideTransition: "linear",
    autoplaySpeed: 6000,
    smartSpeed: 6000,
    rtl: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1200: {
        items: 8,
      1300: {
        items: 9,
      }, },
     
    },
  });


});


$(document).ready(function () {
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    // Do something
    console.log(scroll);
    if (scroll >= "200") {
      $("nav").css({"background-color":"rgb(0 0 0 / 56%)"})
    } else if (scroll <= "200") {
      $("nav").css({"background-color":"transparent"})

    }
  });

});