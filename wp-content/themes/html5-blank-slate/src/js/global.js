// Custom global scripts
jQuery(document).ready(function($) {
    'use strict';

    // Foundation Init
    $(document).foundation();

    // Mobile nav toggle
    $('#nav-mobile-toggle').on('click', function() {
        $('#nav-mobile').slideToggle();
    });

    //Sticky Nav
  $(function () {
    $(window).scroll(function () {
      var winTop = $(window).scrollTop();
      if (winTop >= 30) {
        $("body").addClass("sticky-shrinknav-wrapper");
      } else {
        $("body").removeClass("sticky-shrinknav-wrapper");
      }
    });
  });

}(jQuery));

