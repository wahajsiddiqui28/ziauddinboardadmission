(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {

        // Mobile menu toggle
        var navToggle = document.querySelector('.menu-toggle');
        var nav = document.querySelector('.main-navigation');
        if (navToggle && nav) {
            navToggle.addEventListener('click', function () {
                nav.classList.toggle('is-open');
                var expanded = nav.classList.contains('is-open');
                navToggle.setAttribute('aria-expanded', expanded);
            });
        }

        // Scroll-to-top
        var scrollBtn = document.querySelector('.scroll-top');
        if (scrollBtn) {
            window.addEventListener('scroll', function () {
                if (window.scrollY > 400) {
                    scrollBtn.classList.add('is-visible');
                } else {
                    scrollBtn.classList.remove('is-visible');
                }
            });
            scrollBtn.addEventListener('click', function (e) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // Testimonial slider
        var slides = document.querySelectorAll('.t-slide');
        var dots = document.querySelectorAll('.t-dot');
        var prevBtn = document.querySelector('.t-prev');
        var nextBtn = document.querySelector('.t-next');
        var idx = 0;
        var timer;

        function show(i) {
            slides.forEach(function (s) { s.classList.remove('is-active'); });
            dots.forEach(function (d) { d.classList.remove('is-active'); });
            if (slides[i]) slides[i].classList.add('is-active');
            if (dots[i]) dots[i].classList.add('is-active');
            idx = i;
        }
        function next() { show((idx + 1) % slides.length); }
        function prev() { show((idx - 1 + slides.length) % slides.length); }
        function autoplay() { timer = setInterval(next, 6000); }
        function stop() { clearInterval(timer); }

        if (slides.length) {
            if (nextBtn) nextBtn.addEventListener('click', function () { stop(); next(); autoplay(); });
            if (prevBtn) prevBtn.addEventListener('click', function () { stop(); prev(); autoplay(); });
            dots.forEach(function (d, i) {
                d.addEventListener('click', function () { stop(); show(i); autoplay(); });
            });
            autoplay();
        }

        // Stat counter
        var statEls = document.querySelectorAll('.stat-card h3[data-count]');
        var animated = false;
        function animateStats() {
            if (animated) return;
            var stats = document.querySelector('.stats');
            if (!stats) return;
            var rect = stats.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                animated = true;
                statEls.forEach(function (el) {
                    var target = parseInt(el.getAttribute('data-count'), 10);
                    var suffix = el.textContent.replace(/[\d,]/g, '');
                    var start = 0;
                    var duration = 1600;
                    var startTime = null;
                    function step(t) {
                        if (!startTime) startTime = t;
                        var p = Math.min((t - startTime) / duration, 1);
                        var val = Math.floor(start + (target - start) * p);
                        el.textContent = val.toLocaleString() + suffix;
                        if (p < 1) requestAnimationFrame(step);
                    }
                    requestAnimationFrame(step);
                });
            }
        }
        window.addEventListener('scroll', animateStats);
        animateStats();
    });
})();
