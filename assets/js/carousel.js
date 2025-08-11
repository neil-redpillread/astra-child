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
      768: { slidesPerView: 1, spaceBetween: 28 },
      1024:{ slidesPerView: 3, spaceBetween: 40 }
    },
    watchOverflow: false
  });
});

