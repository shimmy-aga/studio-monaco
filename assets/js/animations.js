// START SCRIPT ========================================================== //
// ======================================================================= //




// Viewport-in animation (tiny, fast, no deps)
(() => {
  const els = document.querySelectorAll('[data-animate]');
  if (!els.length) return;

  // If user prefers reduced motion, show content immediately.
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    els.forEach(el => el.classList.add('animate-in'));
    return;
  }

  // Apply optional per-element tweaks via data attributes
  els.forEach(el => {
    if (el.dataset.animateDelay) el.style.setProperty('--delay', el.dataset.animateDelay);
    if (el.dataset.animateMove)  el.style.setProperty('--move',  el.dataset.animateMove);
    if (el.dataset.animateScale) el.style.setProperty('--scale', el.dataset.animateScale);
    if (el.dataset.animateDur)   el.style.setProperty('--dur',   el.dataset.animateDur);
    if (el.dataset.animateEase)  el.style.setProperty('--ease',  el.dataset.animateEase);
  });


  // Prefer IntersectionObserver for performance
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(({ isIntersecting, target }) => {
        if (isIntersecting) {
          target.classList.add('animate-in');

          // After the transition completes, strip the animation classes
          target.addEventListener('transitionend', () => {
            target.removeAttribute('data-animate');
            target.classList.remove('animate-in');
          }, { once: true });

          if (!target.hasAttribute('data-animate-repeat')) io.unobserve(target);
        } else if (target.hasAttribute('data-animate-repeat')) {
          target.classList.remove('animate-in');
        }
      });
    }, { rootMargin: '0px 0px -10% 0px', threshold: 0.1 });

    els.forEach(el => io.observe(el));
    return;
  }


  // ~1KB fallback for older browsers (simple in-view check)
  const inView = el => {
    const r = el.getBoundingClientRect();
    return r.top <= innerHeight * 0.9 && r.bottom >= 0;
  };
  const update = () => {
    els.forEach(el => {
      if (inView(el)) el.classList.add('animate-in');
      else if (el.hasAttribute('data-animate-repeat')) el.classList.remove('animate-in');
    });
  };
  let ticking = false;
  const onScroll = () => {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(() => { update(); ticking = false; });
    }
  };
  addEventListener('scroll', onScroll, { passive: true });
  addEventListener('resize', update, { passive: true });
  update();
})();




// END SCRIPT ============================================================ //
// ======================================================================= //
