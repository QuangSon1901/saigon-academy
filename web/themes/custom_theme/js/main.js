(function ($, Drupal) {
    Drupal.behaviors.handleHeaderMenu = {
        attach: function (context, settings) {
            // 
            // const loadingPage = $('#loadingPage', context)
            // setTimeout(() => {
            //     loadingPage.addClass('close')
            //     $('body').css('overflow-y', 'overlay')
            // }, 1000)
            // setTimeout(() => {
            //     loadingPage.css('display', 'none')
            // }, 2000)

            // 
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

            // 
            const collapsedBtn = $('.menu-collapse:has(.menu)', context);
            collapsedBtn.each(function () {
                $(this).on("mouseenter", function () {
                    $(this).find('.menu').addClass('collapse-active')
                });
                $(this).on("mouseleave", function () {
                    $(this).find('.menu').removeClass('collapse-active')
                });
            })

            // 
            const overlay = $('.tag-hover', context)
            overlay.on("mouseenter", function () {
                $(this).find('img').css('transform', 'scale(1.3)')
            });
            overlay.on("mouseleave", function () {
                $(this).find('img').css('transform', 'scale(1)')
            });

            // 
            const readmore = $('.readmore-hover', context);
            readmore.on("mouseenter", function () {
                $(this).find('.readmore-icon').css('transform', 'translateX(10px)')
            });
            readmore.on("mouseleave", function () {
                $(this).find('.readmore-icon').css('transform', 'translateX(0)')
            });

            // 
            let scroll = window.requestAnimationFrame || function(callback) {window.setTimeout(callback, 1000/60)}

            let el_to_show = document.querySelectorAll('.show-on-scroll')

            isElInViewPort = (el) => {
                let rect = el.getBoundingClientRect()
                let distance = 0
                return rect.top <= (window.innerHeight - distance || document.documentElement.clientHeight - distance)
            }

            isElOutViewPort = (el) => {
                let rect = el.getBoundingClientRect()
                let distance = 0
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

            // Sidebar
            sidebar = () => {
                const sidebarMenu = $('#sidebar-menu', context)
                const overlaySidebar = $('#overlay-sidebar', context)
                // const sidebarToggle = $('#sidebar-toggle', context)

                // sidebarToggle.click(() => {
                sidebarMenu.addClass('active')
                overlaySidebar.addClass('active')
                // })

                overlaySidebar.click(() => {
                    sidebarMenu.removeClass('active')
                    overlaySidebar.removeClass('active')
                })
            }

            (toggleMenu = () => {
                const sidebarToggle = $('#sidebar-toggle', context)
                sidebarToggle.click(sidebar)
            })()
        }
    };

})(jQuery, Drupal);