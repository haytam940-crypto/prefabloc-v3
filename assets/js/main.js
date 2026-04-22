/* ==============================
   PREFABLOC — main.js v2
   ============================== */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Scroll reveal ── */
  const revealEls = document.querySelectorAll('.reveal');
  const revealIO = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        revealIO.unobserve(e.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -48px 0px' });
  revealEls.forEach(el => revealIO.observe(el));

  /* ── Navbar scroll effect + hero parallax ── */
  const navbar = document.querySelector('.navbar');
  const heroBg = document.querySelector('.hero-bg');
  const onScroll = () => {
    const sy = window.scrollY;
    if (navbar) navbar.classList.toggle('scrolled', sy > 40);
    if (heroBg) heroBg.style.transform = `translateY(${sy * 0.38}px)`;
  };
  window.addEventListener('scroll', onScroll, { passive: true });

  /* ── Hamburger ── */
  const ham = document.querySelector('.hamburger');
  const navMobile = document.querySelector('.nav-mobile');
  if (ham && navMobile) {
    ham.addEventListener('click', () => {
      ham.classList.toggle('open');
      navMobile.classList.toggle('open');
    });
  }

  /* ── Active nav link ── */
  const page = location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-links a, .nav-mobile a').forEach(a => {
    const href = a.getAttribute('href') || '';
    if (href === page || (page === '' && href === 'index.php')) {
      a.classList.add('active');
    }
  });

  /* ── Animated counters ── */
  const counterIO = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target;
      const rawText = el.textContent.trim();
      const target = parseInt(rawText.replace(/[^0-9]/g, ''), 10) || 0;
      const suffix = rawText.replace(/[0-9]/g, '').replace('+','') ;
      const hasPlusSuffix = rawText.includes('+');
      const duration = 1800;
      const start = performance.now();
      const update = (now) => {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const ease = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.round(ease * target) + (hasPlusSuffix ? '+' : '') + suffix;
        if (progress < 1) requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
      counterIO.unobserve(el);
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-counter]').forEach(el => counterIO.observe(el));

  /* ── Project filters ── */
  const filterBtns = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('#projectsGrid .project-card');
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const filter = btn.dataset.filter;
      projectCards.forEach((card, i) => {
        const match = filter === 'all' || card.dataset.category === filter;
        card.style.transition = `opacity .32s ease ${i * 0.04}s, transform .32s ease ${i * 0.04}s`;
        if (match) {
          card.style.display = '';
          requestAnimationFrame(() => { card.style.opacity = '1'; card.style.transform = ''; });
        } else {
          card.style.opacity = '0';
          card.style.transform = 'scale(0.93)';
          setTimeout(() => { card.style.display = 'none'; }, 380);
        }
      });
    });
  });

  /* ── Gallery switcher ── */
  window.switchImg = function(thumb, src) {
    document.querySelectorAll('.gallery-thumb').forEach(t => t.classList.remove('active'));
    thumb.classList.add('active');
    const main = document.getElementById('galleryMain');
    main.style.cssText = 'opacity:0;transform:scale(1.04);transition:opacity .22s,transform .22s';
    setTimeout(() => {
      main.src = src;
      main.style.cssText = 'opacity:1;transform:scale(1);transition:opacity .22s,transform .22s';
    }, 220);
  };

  /* ── Contact form AJAX ── */
  const form = document.getElementById('contactForm');
  const alertEl = document.getElementById('formAlert');
  if (form && alertEl) {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const btn = form.querySelector('.form-submit');
      const orig = btn.textContent;
      btn.disabled = true; btn.textContent = 'Envoi en cours…';
      alertEl.className = 'alert';
      try {
        const res = await fetch(form.action, { method: 'POST', body: new FormData(form) });
        const data = await res.json();
        alertEl.textContent = data.message;
        alertEl.classList.add('show', data.success ? 'success' : 'error');
        if (data.success) form.reset();
      } catch {
        alertEl.textContent = 'Une erreur est survenue. Veuillez réessayer.';
        alertEl.classList.add('show', 'error');
      } finally {
        btn.disabled = false; btn.textContent = orig;
        alertEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    });
  }

  /* ── Carousel drag-to-scroll ── */
  document.querySelectorAll('.carousel-track').forEach(track => {
    let isDown = false, startX = 0, scrollLeft = 0;

    track.addEventListener('mousedown', (e) => {
      isDown = true;
      track.classList.add('is-dragging');
      startX    = e.pageX - track.offsetLeft;
      scrollLeft = track.scrollLeft;
    });
    track.addEventListener('mouseleave', () => {
      isDown = false;
      track.classList.remove('is-dragging');
    });
    track.addEventListener('mouseup', () => {
      isDown = false;
      track.classList.remove('is-dragging');
    });
    track.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x    = e.pageX - track.offsetLeft;
      const walk = (x - startX) * 1.6;
      track.scrollLeft = scrollLeft - walk;
    });

    /* Touch support */
    let touchStartX = 0, touchScrollLeft = 0;
    track.addEventListener('touchstart', (e) => {
      touchStartX    = e.touches[0].pageX;
      touchScrollLeft = track.scrollLeft;
    }, { passive: true });
    track.addEventListener('touchmove', (e) => {
      const diff = touchStartX - e.touches[0].pageX;
      track.scrollLeft = touchScrollLeft + diff;
    }, { passive: true });
  });

});
