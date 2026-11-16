/* Script homepage: mengetik nama dari variabel PHP ($nama -> data-text), tilt kartu menu */
(function () {
    'use strict';
    var $ = Site.$, $$ = Site.$$, reduce = Site.reduce;

    /* Efek mengetik: ketik -> tahan -> hapus -> ulang */
    var el = $('#typed');
    var text = el.getAttribute('data-text') || '';
    var i = 0, deleting = false, started = false;

    function type() {
        el.textContent = text.substring(0, i);
        var speed = deleting ? 70 : 150;
        if (!deleting && i === text.length) { deleting = true; speed = 2200; }
        else if (deleting && i === 0) { deleting = false; speed = 600; }
        else { i += deleting ? -1 : 1; }
        setTimeout(type, speed);
    }
    function start() { if (started) return; started = true; type(); }

    if (reduce) { el.textContent = text; }
    else { document.addEventListener('site:ready', start); setTimeout(start, 4200); }

    /* Efek tilt 3D halus pada kartu menu mengikuti kursor */
    if (!reduce && window.matchMedia('(hover: hover)').matches) {
        $$('.menu-card').forEach(function (card) {
            card.addEventListener('mousemove', function (e) {
                var r = card.getBoundingClientRect();
                var x = (e.clientX - r.left) / r.width - .5, y = (e.clientY - r.top) / r.height - .5;
                card.style.transform = 'translateY(-10px) perspective(800px) rotateX(' + (-y * 7) + 'deg) rotateY(' + (x * 9) + 'deg)';
            });
            card.addEventListener('mouseleave', function () { card.style.transform = ''; });
        });
    }
})();
