/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

    'use strict';

    Drupal.behaviors.bootstrap_barrio_subtheme = {
        attach: function (context, settings) {
            var date = writeIslamicDate(-1);
            $('.top-date p').html(date);
            
        }
    };

})(jQuery, Drupal);
