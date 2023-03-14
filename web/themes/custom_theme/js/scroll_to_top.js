(function ($, Drupal) {
    Drupal.behaviors.handleScrollToTop = {
        attach: function (context, settings) {
            const scrollToTopBtn = $("#scroll-to-top");

            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    scrollToTopBtn.css('display', 'flex');
                } else {
                    scrollToTopBtn.css('display', 'none');
                }
            });

            scrollToTopBtn.click(function (e) {
                e.preventDefault();
                $("html, body").animate({ scrollTop: 0 }, "slow");
            });
        }
    };

})(jQuery, Drupal);