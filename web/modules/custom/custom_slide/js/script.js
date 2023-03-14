(function ($, Drupal) {
    Drupal.behaviors.exampleFunction = {
        attach: function (context, settings) {
            $('.home-banner-slider .single-item', context).slick({
                dots: false,
                arrows: true,
                prevArrow: $('.custom-prev'),
                nextArrow: $('.custom-next'),
                infinite: true,
                speed: 500,
                autoplay: true,
                autoplaySpeed: 5000,
            });

            $('.nguyen-hoang-group-slider .single-item', context).slick({
                dots: false,
                arrows: false,
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 5,
                autoplay: true,
                autoplaySpeed: 5000,
            });
        }
    };

})(jQuery, Drupal);