AOS.init();

$(function () { // wait for document ready
  // init
  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      triggerHook: 'onLeave',
      duration: "200%" // this works just fine with duration 0 as well
      // However with large numbers (>20) of pinned sections display errors can occur so every section should be unpinned once it's covered by the next section.
      // Normally 100% would work for this, but here 200% is used, as Panel 3 is shown for more than 100% of scrollheight due to the pause.
    }
  });

  // get all slides
  var slides = document.querySelectorAll("section.panel");

  // create scene for every slide
  for (var i=0; i<slides.length; i++) {
    new ScrollMagic.Scene({
        triggerElement: slides[i]
      })
      .setPin(slides[i], {pushFollowers: false})
      .addTo(controller);
  }
});


$(document).ready(function() {
  'use strict';

  var c, currentScrollTop = 0,
    navbar = $('nav');

  $(window).scroll(function() {
    var a = $(window).scrollTop();
    var b = navbar.height();

    currentScrollTop = a;

    if (c < currentScrollTop && a > b + b) {
      navbar.addClass("scrollUp");
      $(".navbar-menu").removeClass('active');
      $(".rotate:eq(0)").removeClass('rotateActive');
      $(".rotate:eq(1)").removeClass('rotateActive1');
      $(".rotate:eq(2)").removeClass('rotateActive2');

    } else if (c > currentScrollTop && !(a <= b)) {
      navbar.removeClass("scrollUp");
    }
    c = currentScrollTop;
  });
});

AOS.init();


if ($(window).width() < 770) {
  setTimeout(function() {
    $('.navbar-menu').first().css('transition-duration', '0.5s');
  }, 200);
}

$(".burger").click(function() {
  $(".navbar-menu").toggleClass('active');
  $(".rotate:eq(0)").toggleClass('rotateActive');
  $(".rotate:eq(1)").toggleClass('rotateActive1');
  $(".rotate:eq(2)").toggleClass('rotateActive2');
})

$(window).resize(function() {
  if ($(window).width() > 770) {
    $('.navbar-menu').removeClass('active');
    $(".rotate:eq(0)").removeClass('rotateActive');
    $(".rotate:eq(1)").removeClass('rotateActive1');
    $(".rotate:eq(2)").removeClass('rotateActive2');
    $('.navbar-menu').first().css('transition-duration', '0s');
  } else if ($(window).width() < 770) {
    setTimeout(function() {
      $('.navbar-menu').first().css('transition-duration', '0.5s');
    }, 200);
  }
})
