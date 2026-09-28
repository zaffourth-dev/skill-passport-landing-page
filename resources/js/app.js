import { initLanyard } from './lanyard.js';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Interactive Lanyard Hero Visual
    initLanyard('lanyardContainer');

    // 2. Scroll Reveal System using IntersectionObserver
    initScrollReveal();

    // 3. Dynamic Navbar Scroll Transition
    initNavbarScroll();

    // 4. Smooth Anchor Scrolling
    initSmoothScroll();
});

/**
 * Initializes IntersectionObserver to reveal elements as they enter the viewport
 */
function initScrollReveal() {
    // Respect prefers-reduced-motion
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.querySelectorAll('.reveal-item').forEach(el => el.classList.add('is-visible'));
        return;
    }

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -40px 0px',
        threshold: 0.08
    };

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                obs.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal-item').forEach(el => observer.observe(el));
}

/**
 * Dynamically adjusts navbar background & shadow when scrolling
 */
function initNavbarScroll() {
    const navbar = document.querySelector('header');
    if (!navbar) return;

    const handleScroll = () => {
        if (window.scrollY > 20) {
            navbar.classList.add('shadow-xs', 'bg-white/95', 'border-[#E2E8F0]');
            navbar.classList.remove('bg-white/80', 'border-transparent');
        } else {
            navbar.classList.remove('shadow-xs', 'bg-white/95');
            navbar.classList.add('bg-white/80', 'border-[#E2E8F0]');
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
}

/**
 * Smooth scrolling for navigation links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#' || href === '#!') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Update URL hash without jumping
                history.pushState(null, null, href);
            }
        });
    });
}
