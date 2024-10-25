jQuery(document).ready(function ($) {
    const swiper = new Swiper('.swiper', {
        spaceBetween: 30,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1440: { slidesPerView: 3 },
        },
    });
});
