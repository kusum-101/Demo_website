/* ============ Makeup Academy — main.js ============ */
(function () {
    'use strict';

    /* ---------- Sticky header ---------- */
    var header = document.getElementById('siteHeader');
    var scrollTopBtn = document.getElementById('scrollTop');
    window.addEventListener('scroll', function () {
        var y = window.scrollY;
        header.classList.toggle('scrolled', y > 40);
        scrollTopBtn.classList.toggle('show', y > 600);
    }, { passive: true });

    /* ---------- Scroll to top (works on all pages) ---------- */
    scrollTopBtn.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    /* ---------- Mobile nav ---------- */
    var navToggle = document.getElementById('navToggle');
    var mainNav = document.getElementById('mainNav');
    var navOverlay = document.getElementById('navOverlay');
    function closeNav() {
        mainNav.classList.remove('open');
        navOverlay.classList.remove('open');
        navToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
        document.body.style.overflow = '';
    }
    navToggle.addEventListener('click', function () {
        var open = mainNav.classList.toggle('open');
        navOverlay.classList.toggle('open', open);
        navToggle.innerHTML = open ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
        document.body.style.overflow = open ? 'hidden' : '';
    });
    navOverlay.addEventListener('click', closeNav);
    mainNav.querySelectorAll('.nav-link').forEach(function (link) {
        link.addEventListener('click', closeNav);
    });

    /* ---------- AOS scroll animations ---------- */
    // Directional animations for section layouts
    [
        ['.why-img, .service-main-img, .page-hero-img', 'fade-left'],
        ['.courses-left, .story-text, .gallery-left, .cta-text', 'fade-right'],
        ['.gal-img', 'zoom-in'],
        ['.page-hero-text', 'fade-up']
    ].forEach(function (pair) {
        document.querySelectorAll(pair[0]).forEach(function (el) {
            el.setAttribute('data-aos', pair[1]);
        });
    });
    // Default fade-up for all .reveal elements + stagger siblings
    document.querySelectorAll('.reveal').forEach(function (el) {
        if (!el.hasAttribute('data-aos')) el.setAttribute('data-aos', 'fade-up');
        var sibs = el.parentElement ? el.parentElement.querySelectorAll(':scope > .reveal') : [el];
        var idx = Array.prototype.indexOf.call(sibs, el);
        if (idx > 0) el.setAttribute('data-aos-delay', Math.min(idx * 80, 400));
    });
    if (window.AOS) {
        AOS.init({
            duration: 750,
            easing: 'ease-out-cubic',
            offset: 60,
            once: true
        });
    }

    /* ---------- Animated counters ---------- */
    var counterObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (!e.isIntersecting) return;
            var el = e.target, target = +el.dataset.target, start = null;
            function step(ts) {
                if (!start) start = ts;
                var p = Math.min((ts - start) / 1400, 1);
                el.textContent = Math.floor(p * target);
                if (p < 1) requestAnimationFrame(step); else el.textContent = target;
            }
            requestAnimationFrame(step);
            counterObs.unobserve(el);
        });
    }, { threshold: 0.6 });
    document.querySelectorAll('.counter').forEach(function (el) { counterObs.observe(el); });

    /* ---------- Hero slider ---------- */
    var hero = document.querySelector('[data-hero-slider]');
    if (hero) {
        var hTexts = hero.querySelectorAll('.hero-slide-text');
        var hImgs = hero.querySelectorAll('.hero-slide-img');
        var hDots = hero.querySelectorAll('[data-hero-dot]');
        var hCount = hTexts.length, hCur = 0, hTimer = null, HERO_DELAY = 5500;
        var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        function heroGo(i) {
            hCur = (i + hCount) % hCount;
            [hTexts, hImgs, hDots].forEach(function (list) {
                Array.prototype.forEach.call(list, function (el, j) {
                    el.classList.toggle('is-active', j === hCur);
                });
            });
            Array.prototype.forEach.call(hTexts, function (el, j) {
                if (j === hCur) el.removeAttribute('aria-hidden'); else el.setAttribute('aria-hidden', 'true');
            });
        }
        function heroStop() { clearInterval(hTimer); hTimer = null; }
        function heroStart() {
            heroStop();
            if (!reduceMotion && hCount > 1 && !document.hidden) {
                hTimer = setInterval(function () { heroGo(hCur + 1); }, HERO_DELAY);
            }
        }
        // user ne khud slide badla → timer reset
        function heroUser(i) { heroGo(i); heroStart(); }

        Array.prototype.forEach.call(hDots, function (d) {
            d.addEventListener('click', function () { heroUser(+d.dataset.heroDot); });
        });
        var hPrev = hero.querySelector('[data-hero-prev]');
        var hNext = hero.querySelector('[data-hero-next]');
        if (hPrev) hPrev.addEventListener('click', function () { heroUser(hCur - 1); });
        if (hNext) hNext.addEventListener('click', function () { heroUser(hCur + 1); });

        // Swipe (phone)
        var tx = 0, ty = 0;
        hero.addEventListener('touchstart', function (e) {
            tx = e.touches[0].clientX; ty = e.touches[0].clientY;
        }, { passive: true });
        hero.addEventListener('touchend', function (e) {
            var dx = e.changedTouches[0].clientX - tx, dy = e.changedTouches[0].clientY - ty;
            if (Math.abs(dx) > 45 && Math.abs(dx) > Math.abs(dy) * 1.3) heroUser(hCur + (dx < 0 ? 1 : -1));
        }, { passive: true });

        // Keyboard arrows when focus is inside the hero
        hero.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowLeft') heroUser(hCur - 1);
            if (e.key === 'ArrowRight') heroUser(hCur + 1);
        });

        // Desktop: dots/arrows par mouse ho toh pause
        var hControls = hero.querySelector('.hero-controls');
        if (hControls && window.matchMedia('(hover: hover)').matches) {
            hControls.addEventListener('mouseenter', heroStop);
            hControls.addEventListener('mouseleave', heroStart);
        }
        document.addEventListener('visibilitychange', function () {
            if (document.hidden) heroStop(); else heroStart();
        });
        heroStart();
    }

    /* ---------- Card slider (courses) ---------- */
    document.querySelectorAll('[data-card-slider]').forEach(function (slider) {
        var track = slider.querySelector('[data-slider-track]');
        var prev = slider.querySelector('[data-slider-prev]');
        var next = slider.querySelector('[data-slider-next]');
        var dotsBox = slider.querySelector('[data-slider-dots]');
        var items = track.children;
        if (!items.length) return;
        var dots = [], timer = null, inView = false, paused = false, resumeT;
        var noMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        function step() {   // ek card + gap ki width
            var gap = parseFloat(getComputedStyle(track).columnGap) || 0;
            return items[0].getBoundingClientRect().width + gap;
        }
        function maxScroll() { return track.scrollWidth - track.clientWidth; }
        function pages() { return Math.max(1, Math.round(maxScroll() / step()) + 1); }
        function current() { return Math.min(pages() - 1, Math.round(track.scrollLeft / step())); }
        function goTo(i) { track.scrollTo({ left: Math.max(0, Math.min(i, pages() - 1)) * step() }); }

        function buildDots() {
            var n = pages();
            if (dots.length === n) return;
            dotsBox.innerHTML = ''; dots = [];
            for (var i = 0; i < n; i++) {
                (function (i) {
                    var b = document.createElement('button');
                    b.setAttribute('aria-label', 'Go to course ' + (i + 1));
                    b.addEventListener('click', function () { goTo(i); userPause(); });
                    dotsBox.appendChild(b); dots.push(b);
                })(i);
            }
            dotsBox.style.display = n > 1 ? '' : 'none';
        }
        function sync() {
            var c = current(), end = track.scrollLeft >= maxScroll() - 4;
            dots.forEach(function (d, i) { d.classList.toggle('is-active', i === c); });
            if (prev) prev.disabled = track.scrollLeft <= 4;
            if (next) next.disabled = end;
        }
        var raf;
        track.addEventListener('scroll', function () { cancelAnimationFrame(raf); raf = requestAnimationFrame(sync); }, { passive: true });
        window.addEventListener('resize', function () { buildDots(); sync(); });

        if (prev) prev.addEventListener('click', function () { goTo(current() - 1); userPause(); });
        if (next) next.addEventListener('click', function () { goTo(current() + 1); userPause(); });

        // Autoplay — sirf jab slider screen par dikh raha ho
        function tick() {
            if (paused || !inView || document.hidden) return;
            var c = current();
            goTo(c >= pages() - 1 ? 0 : c + 1);
        }
        function userPause() {   // user ne chhua → 5 sec ke liye autoplay ruk jaye
            paused = true; clearTimeout(resumeT);
            resumeT = setTimeout(function () { paused = false; }, 5000);
        }
        track.addEventListener('touchstart', userPause, { passive: true });
        track.addEventListener('wheel', function (e) { if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) userPause(); }, { passive: true });
        if (window.matchMedia('(hover: hover)').matches) {
            slider.addEventListener('mouseenter', function () { paused = true; clearTimeout(resumeT); });
            slider.addEventListener('mouseleave', function () { paused = false; });
        }
        if (!noMotion && 'IntersectionObserver' in window) {
            new IntersectionObserver(function (en) { inView = en[0].isIntersecting; }, { threshold: 0.25 }).observe(slider);
            timer = setInterval(tick, 4500);
        }

        buildDots(); sync();
    });

    /* ---------- Modals ---------- */
    function openModal(id) {
        var m = document.getElementById(id);
        if (m) { m.classList.add('open'); document.body.style.overflow = 'hidden'; }
    }
    function closeModals() {
        document.querySelectorAll('.modal.open, .lightbox.open').forEach(function (m) {
            m.classList.remove('open');
        });
        document.body.style.overflow = '';
    }
    document.querySelectorAll('[data-open-video]').forEach(function (b) {
        b.addEventListener('click', function (ev) { ev.preventDefault(); openModal('videoModal'); });
    });
    document.querySelectorAll('[data-close-modal]').forEach(function (b) {
        b.addEventListener('click', closeModals);
    });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') { closeModals(); closeNav(); } });

    /* ---------- Toast ---------- */
    var toast = document.getElementById('toast');
    var toastTimer;
    function showToast(msg) {
        toast.textContent = msg;
        toast.classList.add('show');
        clearTimeout(toastTimer);
        toastTimer = setTimeout(function () { toast.classList.remove('show'); }, 4200);
    }

    /* ---------- Demo links (config.php → DEMO_MODE) ---------- */
    document.addEventListener('click', function (e) {
        var a = e.target.closest ? e.target.closest('a[href="#demo"]') : null;
        if (!a) return;
        e.preventDefault();
        var name = a.getAttribute('aria-label') || a.textContent.trim() || 'This link';
        showToast('Demo — ' + name + ' link coming soon');
    });

    /* ---------- Reviews slider (mobile) ---------- */
    var track = document.getElementById('reviewsTrack');
    var dotsWrap = document.getElementById('reviewsDots');
    var cards = track ? track.querySelectorAll('.review-card') : [];
    if (track && cards.length) {
        var dots = [];
        cards.forEach(function (card, i) {
            var d = document.createElement('button');
            d.addEventListener('click', function () {
                track.scrollTo({ left: card.offsetLeft - track.offsetLeft, behavior: 'smooth' });
            });
            dotsWrap.appendChild(d);
            dots.push(d);
        });
        function syncDots() {
            var mid = track.scrollLeft + track.clientWidth / 2, best = 0, dist = Infinity;
            cards.forEach(function (c, i) {
                var d = Math.abs((c.offsetLeft - track.offsetLeft) + c.offsetWidth / 2 - mid);
                if (d < dist) { dist = d; best = i; }
            });
            dots.forEach(function (d, i) { d.classList.toggle('active', i === best); });
        }
        track.addEventListener('scroll', syncDots, { passive: true });
        syncDots();
    }

    /* ---------- Gallery lightbox ---------- */
    var galImgs = Array.prototype.slice.call(document.querySelectorAll('.gal-img'));
    var lightbox = document.getElementById('lightbox');
    var lbImg = document.getElementById('lightboxImg');
    var lbIndex = 0;
    function openLb(i) {
        lbIndex = (i + galImgs.length) % galImgs.length;
        lbImg.src = galImgs[lbIndex].src;
        lightbox.classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    galImgs.forEach(function (img, i) {
        img.addEventListener('click', function () { openLb(i); });
    });
    document.getElementById('lbPrev').addEventListener('click', function () { openLb(lbIndex - 1); });
    document.getElementById('lbNext').addEventListener('click', function () { openLb(lbIndex + 1); });
    document.querySelector('[data-close-lightbox]').addEventListener('click', closeModals);
    lightbox.addEventListener('click', function (e) { if (e.target === lightbox) closeModals(); });
    document.addEventListener('keydown', function (e) {
        if (!lightbox.classList.contains('open')) return;
        if (e.key === 'ArrowLeft') openLb(lbIndex - 1);
        if (e.key === 'ArrowRight') openLb(lbIndex + 1);
    });
})();
