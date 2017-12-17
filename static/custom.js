$(function() {
  $(document).scroll(function() {
    var nav = $("#headBar");
    var logo = $("#logo");

    // Probably naive but rolling with it
    if ($(this).scrollTop() > (logo.height() - nav.height())) {
      nav.removeClass("bg-transparent");
      nav.addClass("bg-custom");
    } else {
      nav.removeClass("bg-custom");
      nav.addClass("bg-transparent");
    }
  });
});
