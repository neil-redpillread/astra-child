document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.portfolio-carousel', {
      loop: true,
      loopedSlides: 4,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      slidesPerView: 2,
      spaceBetween: 40,
      breakpoints: {
        768:  { slidesPerView: 1 },
        1024: { slidesPerView: 2 }
      }
    });
  });