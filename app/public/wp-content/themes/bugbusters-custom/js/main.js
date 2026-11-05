(function () {
    'use strict';

    /* ---------- Loading screen ---------- */
    var MIN_SHOW = 700;   // show the loader at least this long (ms)
    var MAX_WAIT = 6000;  // never block the page longer than this (ms)
    var startTime = Date.now();
    var loaderDone = false;

    function hideLoader() {
        if (loaderDone) return;
        loaderDone = true;
        document.body.classList.add('is-loaded');
    }

    function finishLoading() {
        var wait = Math.max(0, MIN_SHOW - (Date.now() - startTime));
        setTimeout(hideLoader, wait);
    }

    if (document.readyState === 'complete') {
        finishLoading();
    } else {
        window.addEventListener('load', finishLoading);
    }
    setTimeout(hideLoader, MAX_WAIT); // safety net

    var header = document.getElementById('site-header');
    var toggle = document.querySelector('.nav-toggle');
    var nav = document.getElementById('primary-nav');
    if (!header || !toggle || !nav) return;

    var links = nav.querySelectorAll('a[href^="#"]');

    /* ---------- Mobile menu ---------- */
    function setMenu(open) {
        nav.classList.toggle('is-open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    }

    toggle.addEventListener('click', function () {
        setMenu(toggle.getAttribute('aria-expanded') !== 'true');
    });

    links.forEach(function (link) {
        link.addEventListener('click', function () { setMenu(false); });
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') setMenu(false);
    });

    document.addEventListener('click', function (e) {
        if (!header.contains(e.target)) setMenu(false);
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 860) setMenu(false);
    });

    /* ---------- Header shadow + scroll progress ---------- */
    var bar = document.getElementById('scroll-progress-bar');

    function updateHeader() {
        var y = window.pageYOffset || document.documentElement.scrollTop || 0;
        header.classList.toggle('is-scrolled', y > 10);

        if (bar) {
            var max = document.documentElement.scrollHeight - window.innerHeight;
            var progress = max > 0 ? Math.min(y / max, 1) : 0;
            bar.style.transform = 'scaleX(' + progress + ')';
        }
    }

    /* ---------- Active link follows the section on screen ---------- */
    var items = [];
    links.forEach(function (link) {
        if (link.classList.contains('nav-button')) return;
        var section = document.getElementById(link.getAttribute('href').slice(1));
        if (section) items.push({ link: link, section: section });
    });

    var currentLink = null;

    function setActive() {
        if (!items.length) return;

        var y = window.pageYOffset || document.documentElement.scrollTop || 0;
        var line = y + window.innerHeight * 0.35; // reading line (35% from top of screen)
        var current = items[0];                   // Home by default

        // The last section whose top has passed the reading line wins
        items.forEach(function (item) {
            var top = item.section.getBoundingClientRect().top + y;
            if (top <= line) current = item;
        });

        // At the very bottom of the page, keep the last menu section active
        var atBottom = window.innerHeight + y >= document.documentElement.scrollHeight - 4;
        if (atBottom) current = items[items.length - 1];

        if (current.link === currentLink) return;
        currentLink = current.link;

        items.forEach(function (item) {
            var on = item.link === currentLink;
            item.link.classList.toggle('is-active', on);
            if (on) {
                item.link.setAttribute('aria-current', 'true');
            } else {
                item.link.removeAttribute('aria-current');
            }
        });
    }

    /* ---------- Run on scroll (throttled with requestAnimationFrame) ---------- */
    var ticking = false;

    function onScroll() {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(function () {
            updateHeader();
            setActive();
            ticking = false;
        });
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);
    window.addEventListener('load', onScroll);
    window.addEventListener('hashchange', onScroll);

    updateHeader();
    setActive();
})();