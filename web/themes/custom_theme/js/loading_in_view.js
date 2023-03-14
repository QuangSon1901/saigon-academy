(function ($, Drupal) {
    Drupal.behaviors.handleLoadingInView = {
        attach: function (context, settings) {
            const loadingPage = $('#loadingPage', context)
            setTimeout(() => {
                loadingPage.addClass('close')
                $('body').css('overflow-y', 'overlay')
            }, 3000)
            setTimeout(() => {
                loadingPage.css('display', 'none')
            }, 4000)
        }
    };

})(jQuery, Drupal);