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
    centeredSlides: true,
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

