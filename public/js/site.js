/* Site script bersama (loader, progress bar, navbar, menu mobile, reveal, counter, ripple) */
(function () {
    'use strict';
    var $ = function (s, c) { return (c || document).querySelector(s); };
    var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    window.Site = { $: $, $$: $$, reduce: reduce }; // dipakai script tiap halaman

    /* Loader: tampil sebentar lalu naik ke atas */
    var loader = $('#loader'), done = false;
    function finishIntro() {
        if (done) return;
        done = true;
        loader.classList.add('hide');
        document.documentElement.classList.remove('intro-lock');
        document.body.classList.remove('intro-lock');
        document.dispatchEvent(new Event('site:ready'));
    }
    var wait = reduce ? 100 : 1700;
    if (document.readyState === 'complete') { setTimeout(finishIntro, wait); }
    else { window.addEventListener('load', function () { setTimeout(finishIntro, wait); }, { once: true }); }
    setTimeout(finishIntro, 4000); // jaga-jaga jika ada resource yang macet

    /* Navbar, progress bar, tombol back-to-top */
    var nav = $('#nav'), toTop = $('#toTop'), bar = $('#progress');
    function onScroll() {
        var y = window.scrollY || document.documentElement.scrollTop;
        var max = document.documentElement.scrollHeight - window.innerHeight;
        nav.classList.toggle('scrolled', y > 24);
        toTop.classList.toggle('show', y > 600);
        bar.style.width = (max > 0 ? (y / max) * 100 : 0) + '%';
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
    toTop.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); });

    /* Menu mobile */
    var burger = $('#burger'), links = $('#navLinks'), scrim = $('#scrim');
    function toggleMenu(open) {
        burger.classList.toggle('open', open);
        links.classList.toggle('open', open);
        scrim.classList.toggle('show', open);
        burger.setAttribute('aria-expanded', open ? 'true' : 'false');
        document.body.style.overflow = open ? 'hidden' : '';
    }
    burger.addEventListener('click', function () { toggleMenu(!links.classList.contains('open')); });
    scrim.addEventListener('click', function () { toggleMenu(false); });
    $$('a', links).forEach(function (a) { a.addEventListener('click', function () { toggleMenu(false); }); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') toggleMenu(false); });
    window.addEventListener('resize', function () { if (window.innerWidth > 860) toggleMenu(false); });

    /* Reveal saat di-scroll */
    var revealEls = $$('.reveal');
    if ('IntersectionObserver' in window && !reduce) {
        var ro = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) {
                if (en.isIntersecting) { en.target.classList.add('in'); ro.unobserve(en.target); }
            });
        }, { threshold: .12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(function (el) { ro.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('in'); });
    }

    /* Counter angka naik */
    function runCount(el) {
        var target = parseInt(el.getAttribute('data-count'), 10) || 0;
        var suffix = el.getAttribute('data-suffix') || '';
        if (reduce) { el.textContent = target + suffix; return; }
        var dur = 1800, start = null;
        function tick(t) {
            if (!start) start = t;
            var p = Math.min((t - start) / dur, 1);
            el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3))) + suffix;
            if (p < 1) requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
    }
    var co = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
            if (en.isIntersecting) { runCount(en.target); co.unobserve(en.target); }
        });
    }, { threshold: .5 });
    $$('[data-count]').forEach(function (el) { co.observe(el); });

    /* Efek ripple pada tombol */
    $$('.btn').forEach(function (b) {
        b.addEventListener('click', function (e) {
            if (reduce) return;
            var r = b.getBoundingClientRect(), d = Math.max(r.width, r.height);
            var s = document.createElement('span');
            s.className = 'ripple';
            s.style.width = s.style.height = d + 'px';
            s.style.left = (e.clientX - r.left - d / 2) + 'px';
            s.style.top = (e.clientY - r.top - d / 2) + 'px';
            b.appendChild(s);
            setTimeout(function () { s.remove(); }, 650);
        });
    });
})();
