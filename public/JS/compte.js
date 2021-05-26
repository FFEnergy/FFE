$(document).ready(function() {

  $("#wrapParams").click(function() {
    $(this.firstChild).toggleClass('wrapParamsActif');
    $(".parametres").toggleClass('disable');
  })

  $(".section").click(function() {
    $(".section").removeClass('actif');
    $(this).toggleClass('actif');
    $(".main").removeClass('actifMain');
    $("."+this.id).toggleClass('actifMain');
  })

  $(window).resize(function() {
    if ($(window).width() > 770) {
      $(".parametres").removeClass('disable');
    } else if ($(window).width() < 770) {
      $(".parametres").addClass('disable');
    }
  })
})
