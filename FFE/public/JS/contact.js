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



// init controller
var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

// build scenes
new ScrollMagic.Scene({triggerElement: "#parallax1"})
        .setTween("#parallax1 > div", {y: "100%", ease: Linear.easeNone})
        // .addIndicators()
        .addTo(controller);
