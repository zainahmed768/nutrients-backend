// All Scripts

// Milestone Js
function asd() {
  "use strict";
  var i = 1;

  if (i == 1) {
    function count($this) {
      var current = parseInt($this.html(), 10);
      current = current + 10; /* Where 50 is increment */
      $this.html(++current);
      if (current > $this.data("count")) {
        $this.html($this.data("count"));
      } else {
        setTimeout(function () {
          count($this);
        }, 50);
      }
    }
    $(".count").each(function () {
      $(this).data("count", parseInt($(this).html(), 10));
      $(this).html("0");
      count($(this));
    });
  }
}
document.getElementById;
$(document).ready(function () {
  var tester = document.getElementById("counter");

  var p;
  var n = 0;

  window.onscroll = function () {
    p = checkVisible(tester);

    if (p == true && n == 0) {
      asd();
      n = 1;
    }
  };
  //  profile tabs hide and show
  $(".pro-edit-wrapper").hide();
  // edit profile show here
  $(".edit-profile-btn").click(function () {
    $(".pro-edit-wrapper").show();
    $(".pro-detail-wrapper").hide();
  });
  // edit profile show here
  // edit password show here
  $(".pro-edit-password-wrapper").hide();
  $(".change-password-btn").click(function () {
    $(".pro-detail-wrapper").hide();
    $(".pro-edit-password-wrapper").show();
  });
  // edit password show here
  // address show
  $(".pro-edit-address-wrapper").hide();
  $("button.change-address-btn").click(function () {
    $(".pro-edit-address-wrapper").show();
    $(".pro-detail-wrapper").hide();
  });
  // address show
  // edit profile to main
  $(".pro-edit-wrapper button.btn").click(function () {
    $(".pro-edit-wrapper").hide();
    $(".pro-detail-wrapper").show();
  });
  // edit profile to main
  // pass to main profile
  $(".pro-edit-password-wrapper button.btn").click(function () {
    $(".pro-edit-password-wrapper").hide();
    $(".pro-detail-wrapper").show();
  });
  // pass to main profile
  // address to main profile
  $(".edit-fields button.btn").click(function () {
    $(".pro-edit-address-wrapper").hide();
    $(".pro-detail-wrapper").show();
  });
  // address to main profile
});

function checkVisible(elm) {
  var rect = elm.getBoundingClientRect();
  var viewHeight = Math.max(
    document.documentElement.clientHeight,
    window.innerHeight
  );
  return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
}
// Milestone Js
$(".detailed-slider-img").slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
