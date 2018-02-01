$(function() {
  $(document).scroll(function() {
    // reused vars
    var nav = $("#indexBar");
    var fadeNav = $("#indexFade");
    var logo = $("#logo");

    // logic
    if ($(this).scrollTop() > (logo.height() + nav.height())) {
      fadeNav.fadeIn(200);
    } else {
      fadeNav.fadeOut(200);
    }

  });
});
