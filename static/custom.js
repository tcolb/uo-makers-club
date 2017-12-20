$(function() {
  $(document).scroll(function() {
    // reused vars
    var nav = $("#indexBar");
    var fadeNav = $("#indexFade");
    var logo = $("#logo");

    // logic
    // Probably naive but rolling with it, TODO could update to use ScrollSpy?

    if ($(this).scrollTop() > (logo.height() + nav.height())) {
      fadeNav.fadeIn(200);
    } else {
      fadeNav.fadeOut(200);
    }

  });
});
