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
document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.skills-carousel', {
    slidesPerView: 1,
    slidesPerGroup: 1,
    speed: 500,
    threshold: 12,
    longSwipes: true,
    longSwipesRatio: 0.6,
    longSwipesMs: 250,
    touchRatio: 0.7,
    resistanceRatio: 0.85,  
    centeredSlides: false,
    spaceBetween: 32,
    loop: true,
    watchOverflow: true,
    navigation: {
    nextEl: '.skills-carousel .swiper-button-next',
    prevEl: '.skills-carousel .swiper-button-prev',
  },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    }
  });

  // Pop-up effect on scroll
  const skillCards = document.querySelectorAll('.skills-card');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');

        // Animate bars when visible
        const bars = entry.target.querySelectorAll('.bar div');
        bars.forEach(bar => {
          const width = bar.style.width;
          bar.style.width = 0;
          setTimeout(() => { bar.style.width = width }, 100);
        });
      }
    });
  }, { threshold: 0.4 });

  skillCards.forEach(card => observer.observe(card));
});
(function () {
  document.querySelectorAll('.skill-bar').forEach(sb => {
  const pct  = parseInt(sb.getAttribute('data-pct') || '0', 10);
  const fill = sb.querySelector('.fill');
  const out  = sb.querySelector('.pct');

  if (fill) fill.style.width = pct + '%';
  sb.style.setProperty('--pctDec', (pct / 100).toString());  
  if (out) out.textContent = pct + '%';
});
})();

