(function ($, Drupal) {
    Drupal.behaviors.handleScrollToShow = {
        attach: function (context, settings) {
            let scroll = window.requestAnimationFrame || function(callback) {window.setTimeout(callback, 1000/60)}

            let el_to_show = document.querySelectorAll('.show-on-scroll')

            isElInViewPort = (el) => {
                let rect = el.getBoundingClientRect()
                let distance = 50
                return rect.top <= (window.innerHeight - distance || document.documentElement.clientHeight - distance)
            }

            isElOutViewPort = (el) => {
                let rect = el.getBoundingClientRect()
                let distance = 50
                return rect.top > (window.innerHeight - distance || document.documentElement.clientHeight - distance)
            }

            loop = () => {
                el_to_show.forEach(el => {
                    if (isElInViewPort(el)) el.classList.add('show')
                    if (isElOutViewPort(el)) el.classList.remove('show')
                })
                scroll(loop)
            }

            loop();
        }
    };

})(jQuery, Drupal);