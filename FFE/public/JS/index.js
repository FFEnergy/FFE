if ($( ".nuage" ).length > 0) {
  var images = $( ".nuage" );
  var d1 = $(".nuage:nth-child(2)").css("left").split('p')[0];

  $(window).scroll(function(){
    $(".nuage:nth-child(1)").css({"marginLeft": ($(window).scrollTop()) + "px"});
    $(".nuage:nth-child(2)").css({"left": (d1 - $(window).scrollTop()) + "px"});
    $(".nuage:nth-child(3)").css({"marginLeft": ($(window).scrollTop()) + "px"});
  });
}

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


if ($(window).width() < 1150) {
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
  if ($(window).width() > 1150) {
    $('.navbar-menu').removeClass('active');
    $(".rotate:eq(0)").removeClass('rotateActive');
    $(".rotate:eq(1)").removeClass('rotateActive1');
    $(".rotate:eq(2)").removeClass('rotateActive2');
    $('.navbar-menu').first().css('transition-duration', '0s');
  } else if ($(window).width() < 1150) {
    setTimeout(function() {
      $('.navbar-menu').first().css('transition-duration', '0.5s');
    }, 200);
  }
})
