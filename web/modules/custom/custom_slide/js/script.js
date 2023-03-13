(function ($, Drupal) {
    Drupal.behaviors.exampleFunction = {
        attach: function (context, settings) {
            $('.single-item', context).slick({
                dots: false,
                arrows: true,
                prevArrow: $('.custom-prev'),
                nextArrow: $('.custom-next'),
                infinite: true,
                speed: 500,
                autoplay: true
            });
        }
    };

})(jQuery, Drupal);