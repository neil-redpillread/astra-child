document.addEventListener('DOMContentLoaded', () => {
  const el = document.querySelector('.portfolio-carousel');
  if (!el) return;
  new Swiper(el, {
    slidesPerView: 2,
    spaceBetween: 24,
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
  });
});
