/* ==============================
   PREFABLOC — main.js v3
   GSAP ScrollTrigger animations
   ============================== */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Register GSAP plugins ── */
  if (window.gsap && window.ScrollTrigger) {
    gsap.registerPlugin(ScrollTrigger);
    initGSAP();
  } else {
    initFallback();
  }

  initBase();
});

/* ════════════════════════════════
   GSAP ANIMATIONS
   ════════════════════════════════ */
function initGSAP() {

  /* ── Hero — slide in from sides ── */
  const heroLeft  = document.querySelector('.hero-left');
  const heroRight = document.querySelector('.hero-right');
  const heroTag   = document.querySelector('.hero-tag');
  const heroDecos = document.querySelectorAll('.hero-deco');

  if (heroLeft) {
    gsap.from(heroTag, { y: 20, opacity: 0, duration: 0.7, delay: 0.2 });
    gsap.from(heroLeft.querySelector('h1'), {
      y: 60, opacity: 0, duration: 1, delay: 0.35, ease: 'power3.out'
    });
  }
  if (heroRight) {
    gsap.from(heroRight.querySelector('.hero-sub'), {
      y: 40, opacity: 0, duration: 0.9, delay: 0.5, ease: 'power3.out'
    });
    gsap.from(heroRight.querySelector('.hero-btns'), {
      y: 20, opacity: 0, duration: 0.7, delay: 0.7, ease: 'power2.out'
    });
  }
  heroDecos.forEach((d, i) => {
    gsap.from(d, { opacity: 0, duration: 1, delay: 0.8 + i * 0.15 });
  });

  /* ── Hero image parallax ── */
  const heroImgWrap = document.querySelector('.hero-img-wrap');
  if (heroImgWrap) {
    gsap.to(heroImgWrap, {
      y: 80,
      ease: 'none',
      scrollTrigger: {
        trigger: '.hero',
        start: 'top top',
        end: 'bottom top',
        scrub: 1.5
      }
    });
  }

  /* ── Section CLIP-PATH reveal (bloc-à-bloc) ── */
  /* Each section wipes in from the bottom as you scroll */
  const wipeEls = document.querySelectorAll(
    '.about-section, .services-intro, .service-step, .numbers-section, .carousel-section, .cta-banner'
  );

  wipeEls.forEach(el => {
    gsap.fromTo(el,
      { clipPath: 'inset(8% 0% 0% 0%)', opacity: 0.6 },
      {
        clipPath: 'inset(0% 0% 0% 0%)',
        opacity: 1,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 88%',
          end: 'top 30%',
          scrub: false,
          toggleActions: 'play none none reverse',
          duration: 0.9
        }
      }
    );
  });

  /* ── About section — split animation ── */
  const aboutLeft  = document.querySelector('.about-left');
  const aboutRight = document.querySelector('.about-right');
  if (aboutLeft) {
    gsap.from(aboutLeft, {
      x: -60, opacity: 0, duration: 1, ease: 'power3.out',
      scrollTrigger: { trigger: '.about-section', start: 'top 70%', toggleActions: 'play none none none' }
    });
  }
  if (aboutRight) {
    gsap.from(aboutRight, {
      x: 60, opacity: 0, duration: 1, delay: 0.2, ease: 'power3.out',
      scrollTrigger: { trigger: '.about-section', start: 'top 70%', toggleActions: 'play none none none' }
    });
  }

  /* ── Service steps — title slide up + image zoom ── */
  document.querySelectorAll('.service-step').forEach(step => {
    const bg    = step.querySelector('.service-step-bg img');
    const title = step.querySelector('.step-title');
    const desc  = step.querySelector('.step-desc');
    const tag   = step.querySelector('.step-num-tag');

    if (bg) {
      gsap.fromTo(bg,
        { scale: 1.12 },
        { scale: 1, ease: 'power2.out',
          scrollTrigger: { trigger: step, start: 'top 90%', end: 'top 10%', scrub: 1.2 }
        }
      );
    }
    if (tag) gsap.from(tag, { y: 24, opacity: 0, duration: 0.6,
      scrollTrigger: { trigger: step, start: 'top 75%', toggleActions: 'play none none none' }
    });
    if (title) gsap.from(title, { y: 50, opacity: 0, duration: 0.9, delay: 0.1, ease: 'power3.out',
      scrollTrigger: { trigger: step, start: 'top 70%', toggleActions: 'play none none none' }
    });
    if (desc) gsap.from(desc, { y: 30, opacity: 0, duration: 0.7, delay: 0.25, ease: 'power2.out',
      scrollTrigger: { trigger: step, start: 'top 65%', toggleActions: 'play none none none' }
    });
  });

  /* ── Services intro — stagger text + float images ── */
  const introInner = document.querySelector('.services-intro-inner');
  if (introInner) {
    gsap.from(introInner.children, {
      y: 40, opacity: 0, stagger: 0.15, duration: 0.8, ease: 'power3.out',
      scrollTrigger: { trigger: '.services-intro', start: 'top 70%', toggleActions: 'play none none none' }
    });
  }
  document.querySelectorAll('.float-img').forEach((img, i) => {
    gsap.from(img, {
      opacity: 0, scale: 0.92, duration: 1.2, delay: i * 0.2,
      scrollTrigger: { trigger: '.services-intro', start: 'top 80%', toggleActions: 'play none none none' }
    });
    /* subtle float animation */
    gsap.to(img, {
      y: -18 + i * 6,
      duration: 3 + i * 0.5,
      repeat: -1,
      yoyo: true,
      ease: 'sine.inOut',
      delay: i * 0.8
    });
  });

  /* ── Numbers — count up + stagger ── */
  const numItems = document.querySelectorAll('.number-item');
  numItems.forEach((item, i) => {
    gsap.from(item, {
      y: 40, opacity: 0, duration: 0.7, delay: i * 0.1, ease: 'power3.out',
      scrollTrigger: { trigger: '.numbers-section', start: 'top 75%', toggleActions: 'play none none none' }
    });
  });

  /* ── Carousel cards — stagger slide in ── */
  const carouselCards = document.querySelectorAll('.carousel-card');
  if (carouselCards.length) {
    gsap.from(carouselCards, {
      x: 50, opacity: 0, stagger: 0.1, duration: 0.7, ease: 'power2.out',
      scrollTrigger: { trigger: '.carousel-section', start: 'top 80%', toggleActions: 'play none none none' }
    });
  }

  /* ── CTA — watermark scale + text slide ── */
  const watermark = document.querySelector('.cta-watermark');
  const ctaTitle  = document.querySelector('.cta-banner h2');
  if (watermark) {
    gsap.from(watermark, {
      scale: 0.85, opacity: 0, duration: 1.2, ease: 'power2.out',
      scrollTrigger: { trigger: '.cta-banner', start: 'top 80%', toggleActions: 'play none none none' }
    });
  }
  if (ctaTitle) {
    gsap.from(ctaTitle, {
      y: 50, opacity: 0, duration: 0.9, ease: 'power3.out',
      scrollTrigger: { trigger: '.cta-banner', start: 'top 75%', toggleActions: 'play none none none' }
    });
  }

  /* ── Ticker — already CSS animated, add fade-in ── */
  gsap.from('.ticker', { opacity: 0, duration: 0.6, delay: 0.1 });

  /* ── Generic reveal fallback for remaining .reveal elements ── */
  document.querySelectorAll('.reveal').forEach(el => {
    if (!el.classList.contains('visible')) {
      gsap.from(el, {
        y: el.classList.contains('left') ? 0 : el.classList.contains('right') ? 0 : 28,
        x: el.classList.contains('left') ? -36 : el.classList.contains('right') ? 36 : 0,
        scale: el.classList.contains('scale') ? 0.92 : 1,
        opacity: 0,
        duration: 0.75,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 88%',
          toggleActions: 'play none none none'
        }
      });
    }
  });
}

/* ════════════════════════════════
   FALLBACK (no GSAP)
   ════════════════════════════════ */
function initFallback() {
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -48px 0px' });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el));
}

/* ════════════════════════════════
   BASE (always runs)
   ════════════════════════════════ */
function initBase() {

  /* ── Navbar scroll class ── */
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 40);
  }, { passive: true });

  /* ── Hamburger ── */
  const ham      = document.querySelector('.hamburger');
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
    if ((a.getAttribute('href') || '') === page) a.classList.add('active');
  });

  /* ── Animated counters ── */
  const counterIO = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target;
      const raw = el.textContent.trim();
      const target = parseInt(raw.replace(/[^0-9]/g, ''), 10) || 0;
      const plus = raw.includes('+');
      const start = performance.now();
      const run = (now) => {
        const t = Math.min((now - start) / 1800, 1);
        const ease = 1 - Math.pow(1 - t, 3);
        el.textContent = Math.round(ease * target) + (plus ? '+' : '');
        if (t < 1) requestAnimationFrame(run);
      };
      requestAnimationFrame(run);
      counterIO.unobserve(el);
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-counter]').forEach(el => counterIO.observe(el));

  /* ── Carousel drag-to-scroll ── */
  document.querySelectorAll('.carousel-track').forEach(track => {
    let isDown = false, startX = 0, scrollLeft = 0;
    track.addEventListener('mousedown', e => {
      isDown = true; track.classList.add('is-dragging');
      startX = e.pageX - track.offsetLeft; scrollLeft = track.scrollLeft;
    });
    track.addEventListener('mouseleave', () => { isDown = false; track.classList.remove('is-dragging'); });
    track.addEventListener('mouseup',    () => { isDown = false; track.classList.remove('is-dragging'); });
    track.addEventListener('mousemove', e => {
      if (!isDown) return; e.preventDefault();
      track.scrollLeft = scrollLeft - (e.pageX - track.offsetLeft - startX) * 1.6;
    });
    let tX = 0, tS = 0;
    track.addEventListener('touchstart', e => { tX = e.touches[0].pageX; tS = track.scrollLeft; }, { passive: true });
    track.addEventListener('touchmove',  e => { track.scrollLeft = tS + (tX - e.touches[0].pageX); }, { passive: true });
  });

  /* ── Project filters ── */
  const filterBtns    = document.querySelectorAll('.filter-btn');
  const projectCards  = document.querySelectorAll('#projectsGrid .project-card');
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const f = btn.dataset.filter;
      projectCards.forEach((card, i) => {
        const match = f === 'all' || card.dataset.category === f;
        card.style.transition = `opacity .3s ease ${i * 0.04}s, transform .3s ease ${i * 0.04}s`;
        if (match) {
          card.style.display = '';
          requestAnimationFrame(() => { card.style.opacity = '1'; card.style.transform = ''; });
        } else {
          card.style.opacity = '0'; card.style.transform = 'scale(0.93)';
          setTimeout(() => { card.style.display = 'none'; }, 340);
        }
      });
    });
  });

  /* ── Gallery switcher ── */
  window.switchImg = function(thumb, src) {
    document.querySelectorAll('.gallery-thumb').forEach(t => t.classList.remove('active'));
    thumb.classList.add('active');
    const main = document.getElementById('galleryMain');
    if (!main) return;
    main.style.cssText = 'opacity:0;transform:scale(1.04);transition:opacity .22s,transform .22s';
    setTimeout(() => {
      main.src = src;
      main.style.cssText = 'opacity:1;transform:scale(1);transition:opacity .22s,transform .22s';
    }, 220);
  };

  /* ── Contact form AJAX ── */
  const form    = document.getElementById('contactForm');
  const alertEl = document.getElementById('formAlert');
  if (form && alertEl) {
    form.addEventListener('submit', async e => {
      e.preventDefault();
      const btn = form.querySelector('.form-submit');
      const orig = btn.textContent;
      btn.disabled = true; btn.textContent = 'Envoi…';
      alertEl.className = 'alert';
      try {
        const res  = await fetch(form.action, { method: 'POST', body: new FormData(form) });
        const data = await res.json();
        alertEl.textContent = data.message;
        alertEl.classList.add('show', data.success ? 'success' : 'error');
        if (data.success) form.reset();
      } catch {
        alertEl.textContent = 'Une erreur est survenue.';
        alertEl.classList.add('show', 'error');
      } finally {
        btn.disabled = false; btn.textContent = orig;
        alertEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    });
  }
}
