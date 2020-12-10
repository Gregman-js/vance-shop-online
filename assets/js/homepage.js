
function setupSwiper() {
    var mySwiper = new Swiper('.swiper-container', {
        speed: 400,
        spaceBetween: 30,
        slidesPerView: 4,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: true,
        },
        breakpoints: {
            // when window width is >= 320px
            0: {
                slidesPerView: 2,
            },
            920: {
                slidesPerView: 4,
            }
        }
    });
}
window.addEventListener('DOMContentLoaded', (event) => {
    setupSwiper();
});