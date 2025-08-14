document.addEventListener('DOMContentLoaded', function() {
  new Swiper('.portfolio-carousel', {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    slidesPerView: 'auto',
    spaceBetween: 24,
    breakpoints: {
      0:    { slidesPerView: 'auto', spaceBetween: 12,  centeredSlides: true, watchOverflow: true },
      768: { slidesPerView: 1, spaceBetween: 28,  },
      1024:{ slidesPerView: 2, spaceBetween: 40, centeredSlides: true, watchOverflow: true }
    },
    watchOverflow: false
  });
});

