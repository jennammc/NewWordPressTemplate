(function ($, root, undefined) {

  $(function () {

    'use strict';

    // toggle hamburger & off-canvas nav
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function() {
      $hamburger.toggleClass("is-active");
    });

    // off canvas menu
    $(function() {
      $('#off-canvas-button').click(function() {
        // Calling a function in case you want to expand upon this.
        toggleNav();
      });
    });
    function toggleNav() {
      if ($('#wrapper').hasClass('show-nav')) {
        // Do things on Nav Close
        $('#wrapper').removeClass('show-nav');
      } else {
        // Do things on Nav Open
        $('#wrapper').addClass('show-nav');
      }
    }

  });

})(jQuery, this);

