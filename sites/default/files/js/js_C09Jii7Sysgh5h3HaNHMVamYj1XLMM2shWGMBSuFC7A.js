/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function (context, settings) {
      $('.slicktest').slick({
        dots: true,
        infinite: true,
        speed: 300,
        // prevArrow: `<button type="button" class="slick-prev">&#xF284;</button>`,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              dots: ture
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
      $('.card').hover(
        function() {
            $( this ).find('.card-body').css('margin-top','-37px');
          }, function() {
            $( this ).find('.card-body').css('margin-top','0px');
          }
    )
    }
  };

})(jQuery, Drupal);
;
