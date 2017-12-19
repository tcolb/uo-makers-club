$(function() {
  $(document).scroll(function() {
    // reused vars
    var nav = $("#indexBar");
    var logo = $("#logo");
    var navLogo = $("#navLogo");

    // helper functions
    function showNav() {
      nav.removeClass("bg-transparent");
      nav.addClass("bg-custom");

    }

    function hideNav() {
      nav.removeClass("bg-custom");
      nav.addClass("bg-transparent");

    }

    // logic
    // Probably naive but rolling with it, TODO could update to use ScrollSpy?
    // Chcek if collapse bar is not activated
    if ($(window).width() > 768) {
      // If so, change transparency depending on scroll height
      if ($(this).scrollTop() > (logo.height() - nav.height())) {
        showNav();
        navLogo.show();
      } else {
        hideNav();
        navLogo.hide();
      }
    } else {
      showNav();
      if ($(this).scrollTop() > (logo.height() - nav.height())) {
        navLogo.show();
      } else {
        navLogo.hide();
      }
    }

  });
});
