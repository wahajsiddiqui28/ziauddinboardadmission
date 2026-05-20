(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {

        // Mobile menu toggle
        var navToggle = document.querySelector('.menu-toggle');
        var nav = document.querySelector('.main-navigation');
        var mobileOverlay = document.querySelector('.mobile-menu-overlay');
        var navClose = document.querySelector('.mobile-menu-close');

        function openMobileMenu() {
            if (nav) nav.classList.add('is-open');
            if (mobileOverlay) mobileOverlay.classList.add('is-visible');
            if (navToggle) navToggle.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
        }
        function closeMobileMenu() {
            if (nav) nav.classList.remove('is-open');
            if (mobileOverlay) mobileOverlay.classList.remove('is-visible');
            if (navToggle) navToggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }

        if (navToggle && nav) {
            navToggle.addEventListener('click', function () {
                if (nav.classList.contains('is-open')) {
                    closeMobileMenu();
                } else {
                    openMobileMenu();
                }
            });
        }
        if (navClose) {
            navClose.addEventListener('click', closeMobileMenu);
        }
        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', closeMobileMenu);
        }
        // Close mobile menu on Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && nav && nav.classList.contains('is-open')) {
                closeMobileMenu();
            }
        });
        // Close mobile menu when clicking a menu link
        if (nav) {
            nav.querySelectorAll('a').forEach(function(link) {
                link.addEventListener('click', function() {
                    closeMobileMenu();
                });
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

        // ---- Enroll Now Modal ----
        var overlay    = document.getElementById('enroll-modal');
        var openBtns   = document.querySelectorAll('.enrl-open-btn');
        var closeBtn   = document.querySelector('.enrl-close');
        var form       = document.getElementById('enrl-form');
        var successBox = document.getElementById('enrl-success');
        var errorBox   = document.getElementById('enrl-error');
        var errorMsg   = document.getElementById('enrl-error-msg');
        var submitBtn  = document.getElementById('enrl-submit');
        var btnText    = document.getElementById('enrl-btn-text');
        var btnLoading = document.getElementById('enrl-btn-loading');
        var fileInput  = document.getElementById('enrl-photo');
        var fileText   = document.getElementById('enrl-file-text');
        var successClose = document.getElementById('enrl-success-close');

        function openModal() {
            if (!overlay) return;
            overlay.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }
        function closeModal() {
            if (!overlay) return;
            overlay.classList.remove('is-open');
            document.body.style.overflow = '';
        }

        openBtns.forEach(function(btn) {
            btn.addEventListener('click', openModal);
        });

        // Also trigger from any href="#enroll" links
        document.querySelectorAll('a[href="#enroll"], a[href*="#enroll"]').forEach(function(a) {
            a.addEventListener('click', function(e) {
                e.preventDefault();
                openModal();
            });
        });

        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        if (successClose) successClose.addEventListener('click', closeModal);

        // Close on overlay click
        if (overlay) {
            overlay.addEventListener('click', function(e) {
                if (e.target === overlay) closeModal();
            });
        }

        // Close on ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeModal();
        });

        // File name display
        if (fileInput) {
            fileInput.addEventListener('change', function() {
                fileText.textContent = this.files[0] ? this.files[0].name : 'Choose Photo';
            });
        }

        // AJAX form submit
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                if (errorBox) errorBox.style.display = 'none';

                var data = new FormData(form);
                data.append('action', 'enroll_submit');

                btnText.style.display    = 'none';
                btnLoading.style.display = 'flex';
                submitBtn.disabled = true;

                fetch((window.ziauddinAjax && ziauddinAjax.url) || '/wp-admin/admin-ajax.php', {
                    method: 'POST',
                    body: data,
                    credentials: 'same-origin'
                })
                .then(function(r) { return r.json(); })
                .then(function(res) {
                    btnText.style.display    = 'inline-flex';
                    btnLoading.style.display = 'none';
                    submitBtn.disabled = false;

                    if (res.success) {
                        form.style.display        = 'none';
                        if (successBox) successBox.style.display = 'block';
                    } else {
                        var msg = (res.data && res.data.message) ? res.data.message : 'Something went wrong.';
                        if (errorMsg) errorMsg.textContent = msg;
                        if (errorBox) errorBox.style.display = 'flex';
                    }
                })
                .catch(function() {
                    btnText.style.display    = 'inline-flex';
                    btnLoading.style.display = 'none';
                    submitBtn.disabled = false;
                    if (errorMsg) errorMsg.textContent = 'Network error. Please try again.';
                    if (errorBox) errorBox.style.display = 'flex';
                });
            });
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
