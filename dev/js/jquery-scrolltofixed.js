/*
 * ScrollToFixed
 */
$(document).ready(function() {

  var stickyNavTop = $('.header-midden').offset().top;

  var stickyNav = function() {
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) {
      $('.header-midden').addClass('sticky')

    } else {
      $('.header-midden').removeClass('sticky');

    }
  };

  stickyNav();

  $(window).scroll(function() {
    if ($(window).width() > 1040) {
      stickyNav();
    } else {

    }
  });
});
