/* Script galeri: filter kategori + lightbox (tombol, keyboard, swipe) */
(function () {
    'use strict';
    var $ = Site.$, $$ = Site.$$;

    /* Filter kategori */
    var filters = $$('.filter'), photos = $$('.photo');
    filters.forEach(function (f) {
        f.addEventListener('click', function () {
            filters.forEach(function (x) { x.classList.remove('active'); });
            f.classList.add('active');
            var cat = f.getAttribute('data-filter'), n = 0;
            $('#photoGrid').classList.toggle('filtered', cat !== 'all');
            photos.forEach(function (p) {
                var show = cat === 'all' || p.getAttribute('data-cat') === cat;
                p.classList.toggle('hide', !show);
                if (show) {
                    p.classList.add('in');
                    p.classList.remove('pop'); void p.offsetWidth; // ulangi animasi
                    p.style.animationDelay = (n++ * 0.05) + 's';
                    p.classList.add('pop');
                }
            });
        });
    });

    /* Lightbox */
    var box = $('#lightbox'), img = $('#lbImg'), cap = $('#lbCap'), current = 0, list = [];
    function visible() { return photos.filter(function (p) { return !p.classList.contains('hide'); }); }
    function show(i) {
        current = (i + list.length) % list.length;
        var p = list[current];
        img.src = p.getAttribute('data-src');
        img.alt = cap.textContent = p.getAttribute('data-title');
    }
    function open(p) {
        list = visible();
        show(list.indexOf(p));
        box.classList.add('open');
        box.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }
    function close() {
        box.classList.remove('open');
        box.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }
    photos.forEach(function (p) {
        p.addEventListener('click', function () { open(p); });
        p.addEventListener('keydown', function (e) { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(p); } });
    });
    $('#lbClose').addEventListener('click', close);
    $('#lbPrev').addEventListener('click', function () { show(current - 1); });
    $('#lbNext').addEventListener('click', function () { show(current + 1); });
    box.addEventListener('click', function (e) { if (e.target === box) close(); });
    document.addEventListener('keydown', function (e) {
        if (!box.classList.contains('open')) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft') show(current - 1);
        if (e.key === 'ArrowRight') show(current + 1);
    });
    var sx = 0;
    box.addEventListener('touchstart', function (e) { sx = e.touches[0].clientX; }, { passive: true });
    box.addEventListener('touchend', function (e) {
        var dx = e.changedTouches[0].clientX - sx;
        if (Math.abs(dx) > 50) show(current + (dx < 0 ? 1 : -1));
    });
})();
