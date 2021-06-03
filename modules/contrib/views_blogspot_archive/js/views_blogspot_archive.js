/**
 * @file
 * Script to enable toggle effect for collapsible archive effect.
 */
(function ($, window, Drupal) {
  'use strict';
  Drupal.behaviors.views_blogspot_archive = {
    attach: function (context, settings) {
      let toggler = document.getElementsByClassName("caret");
      let i;
      for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
          this.parentElement.querySelector(".item-list > ul").classList.toggle("active");
          this.classList.toggle("caret-down");
        });
      }
    }
  };
})(jQuery, window, Drupal);
