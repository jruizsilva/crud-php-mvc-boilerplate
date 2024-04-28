/*------------------
        Background Set
    --------------------*/
$(".set-bg").each(function () {
  var bg = $(this).data("setbg");
  $(this).css("background-image", "url(" + bg + ")");
  $(this).css("background-size", "cover");
  $(this).css("background-position", "center");
  $(this).css("background-repeat", "no-repeat");
});
/*------------------
        Video Popup
    --------------------*/
$(".video-popup").magnificPopup({
  type: "iframe",
});
