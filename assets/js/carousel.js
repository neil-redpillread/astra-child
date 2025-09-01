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
  // 1) INIT widths and % labels from data-pct
  document.querySelectorAll('.skill-bar').forEach(sb => {
    const pct  = parseInt(sb.getAttribute('data-pct') || '0', 10);
    const fill = sb.querySelector('.bar .fill');
    const out  = sb.querySelector('.pct');

    if (fill) fill.style.width = pct + '%';
    sb.style.setProperty('--pctDec', (pct / 100).toString());
    if (out) out.textContent = pct + '%';
  });

  // 2) Swiper for skills
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
    pagination: { el: '.swiper-pagination', clickable: true }
  });

  // 3) Animate bars when the card enters viewport
  const skillCards = document.querySelectorAll('.skills-card');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;

      entry.target.classList.add('visible');

      // animate only the .fill elements
      const fills = entry.target.querySelectorAll('.bar .fill');
      fills.forEach(fill => {
        const finalWidth = fill.style.width; // e.g. "75%"
        fill.style.width = '0';
        // next frame -> animate to target width
        requestAnimationFrame(() => {
          fill.style.transition = 'width 600ms ease';
          fill.style.width = finalWidth;
        });
      });

      // (optional) stop observing once animated
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.4 });

  skillCards.forEach(card => observer.observe(card));
});
function scrollCarousel(direction) {
  const row = document.getElementById('carousel');
  if (!row || row._animating) return;

  const items = row.querySelectorAll('.certificate-item');
  if (items.length < 2) return;

  // EXACT step: horizontal distance between the first two cards (includes gap)
  function stepPx() {
    const a = items[0].getBoundingClientRect();
    const b = items[1].getBoundingClientRect();
    return Math.round(b.left - a.left);
  }

  const step = stepPx();
  const dur  = 400;
  const ease = 'cubic-bezier(.22,.61,.36,1)';
  row._animating = true;

  if (direction === 1) {
    // RIGHT nav: visual motion = right→left
    const first = row.firstElementChild;
    const ghost = first.cloneNode(true);      // fill far-right edge
    row.appendChild(ghost);

    row.style.transition = `transform ${dur}ms ${ease}`;
    row.style.transform  = `translate3d(${-step}px,0,0)`;

    row.addEventListener('transitionend', function onEnd() {
      row.removeEventListener('transitionend', onEnd);
      row.style.transition = 'none';
      row.style.transform  = 'translate3d(0,0,0)';
      row.removeChild(first);                 // ghost remains as new last
      void row.offsetHeight;
      row._animating = false;
    }, { once:true });

  } else if (direction === -1) {
    // LEFT nav: visual motion = left→right
    const last  = row.lastElementChild;
    const ghost = last.cloneNode(true);       // fill far-left edge
    row.insertBefore(ghost, row.firstElementChild);

    row.style.transition = 'none';
    row.style.transform  = `translate3d(${-step}px,0,0)`;
    requestAnimationFrame(() => {
      row.style.transition = `transform ${dur}ms ${ease}`;
      row.style.transform  = 'translate3d(0,0,0)';
    });

    row.addEventListener('transitionend', function onEnd() {
      row.removeEventListener('transitionend', onEnd);
      row.style.transition = 'none';
      row.removeChild(row.lastElementChild);  // drop original last
      void row.offsetHeight;
      row._animating = false;
    }, { once:true });
  }
}

