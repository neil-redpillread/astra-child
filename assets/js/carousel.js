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
(function () {
  const row = document.getElementById('carousel');
  if (!row) return;

  const imgsReady = root => {
    const imgs = [...root.querySelectorAll('img')];
    if (!imgs.length) return Promise.resolve();
    return Promise.all(imgs.map(img => img.complete
      ? 1
      : new Promise(r => { img.addEventListener('load', r, {once:true}); img.addEventListener('error', r, {once:true}); })
    ));
  };

  const stepPx = () => {
    const a = row.children[0]?.getBoundingClientRect();
    const b = row.children[1]?.getBoundingClientRect();
    return a && b ? Math.round(b.left - a.left) : 0;
  };

  let step = 0;
  let offset = 0;                // current translateX (negative as we drift left)
  let running = true;            // auto-drift enabled
  let lastTs = performance.now();

  const pxPerSec = 28;           // drift speed – tweak
  function setX(x, withTransition = false) {
    row.style.transition = withTransition ? 'transform 380ms cubic-bezier(.22,.61,.36,1)' : 'none';
    row.style.transform  = `translate3d(${x}px,0,0)`;
  }

  // Keep offset in [-step, 0) and rotate DOM when we pass one card
  function normalize() {
    while (step && -offset >= step) {
      row.appendChild(row.firstElementChild);
      offset += step;
    }
    while (step && offset > 0) {
      row.insertBefore(row.lastElementChild, row.firstElementChild);
      offset -= step;
    }
    setX(offset, false);
  }

  function animate(t) {
    const dt = (t - lastTs) / 1000;
    lastTs = t;

    // ⛔️ Do not touch transform while a button animation is active
    if (!row._animating && running && step) {
      offset -= pxPerSec * dt;   // right -> left
      normalize();
    }
    requestAnimationFrame(animate);
  }

  // Helper to run a transition safely (pauses drift during the click)
  function withPausedDrift(run, onEnd) {
    const wasRunning = running;
    running = false;             // pause drift
    row._animating = true;

    run();                       // do the transition work

    row.addEventListener('transitionend', function handler() {
      row.removeEventListener('transitionend', handler);
      row.style.transition = 'none';
      onEnd && onEnd();
      row._animating = false;
      running = wasRunning;      // resume drift
    }, { once: true });
  }

  // Public API used by your buttons
  window.scrollCarousel = function(direction) {
    if (!step || row._animating) return;

    if (direction === 1) {
      // NEXT: slide left by one step from current offset
      const target = offset - step;
      withPausedDrift(
        () => setX(target, true),
        () => { offset = target; normalize(); }
      );

    } else if (direction === -1) {
      // PREV: pre-insert last at front, shift left one step, animate back
      row.insertBefore(row.lastElementChild, row.firstElementChild);
      offset -= step;            // keep visual position
      setX(offset, false);

      requestAnimationFrame(() => {
        const target = offset + step; // back toward 0
        withPausedDrift(
          () => setX(target, true),
          () => { offset = target; normalize(); }
        );
      });
    }
  };

  // Pause drift while pressing; resume on release
  row.addEventListener('pointerdown', () => running = false);
  window.addEventListener('pointerup', () => running = true);

  // Init
  function measureAndReset() { step = stepPx(); normalize(); }
  imgsReady(row).then(() => { measureAndReset(); requestAnimationFrame(animate); });
  window.addEventListener('resize', measureAndReset);
})();

  const testimonialSwiper = new Swiper('.testimonial-carousel', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 24,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});