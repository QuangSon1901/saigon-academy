(function ($, Drupal) {
    Drupal.behaviors.handleHeaderMenu = {
        attach: function (context, settings) {
            const collapsedBtn = $('.menu-collapse:has(.menu)', context);
            collapsedBtn.each(function () {
                $(this).on("mouseenter", function () {
                    $(this).find('.menu').addClass('collapse-active')
                });
                $(this).on("mouseleave", function () {
                    $(this).find('.menu').removeClass('collapse-active')
                });
            })
        }
    };

})(jQuery, Drupal);