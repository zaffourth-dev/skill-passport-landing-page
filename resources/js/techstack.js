/**
 * Tech Stack Section Interactions Engine
 * 
 * Features:
 * - Subtle 3D Card Tilt on desktop (max 2deg)
 * - Cursor-following soft radial spotlight
 * - Smooth spring-like return on pointer leave
 * - Disabled on touch / mobile devices (pointer: coarse)
 * - Internal staggered reveal for cards & pills
 * - Strict reduced-motion support
 */

export function initTechStack(sectionId = 'skills') {
  const section = document.getElementById(sectionId);
  if (!section) return;

  const isTouch = window.matchMedia('(pointer: coarse)').matches;
  const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const cards = section.querySelectorAll('.tech-card');

  // 1. Intersection Observer for sequential card & pill reveal
  if (!isReducedMotion) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          
          // Animate inner pills with micro stagger
          const pills = entry.target.querySelectorAll('.tech-pill');
          pills.forEach((pill, idx) => {
            setTimeout(() => {
              pill.classList.add('pill-visible');
            }, 120 + idx * 35);
          });

          obs.unobserve(entry.target);
        }
      });
    }, {
      root: null,
      rootMargin: '0px 0px -40px 0px',
      threshold: 0.12
    });

    cards.forEach(card => observer.observe(card));
  } else {
    cards.forEach(card => {
      card.classList.add('is-visible');
      card.querySelectorAll('.tech-pill').forEach(pill => pill.classList.add('pill-visible'));
    });
  }

  // If touch or reduced motion, skip cursor tilt & spotlight
  if (isTouch || isReducedMotion) return;

  // 2. Cursor Tilt & Hover Spotlight (Desktop Only)
  cards.forEach(card => {
    let animFrame = null;

    const handlePointerMove = (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      // Update spotlight position CSS variables
      card.style.setProperty('--mouse-x', `${x}px`);
      card.style.setProperty('--mouse-y', `${y}px`);

      if (animFrame) cancelAnimationFrame(animFrame);
      animFrame = requestAnimationFrame(() => {
        // Calculate tilt: -1 to 1 normalized range from center
        const normX = (x / rect.width - 0.5) * 2;
        const normY = (y / rect.height - 0.5) * 2;

        // Max 2deg tilt
        const rotX = (-normY * 2.0).toFixed(2);
        const rotY = (normX * 2.0).toFixed(2);

        card.style.transform = `translateY(-5px) rotateX(${rotX}deg) rotateY(${rotY}deg)`;
      });
    };

    const handlePointerLeave = () => {
      if (animFrame) cancelAnimationFrame(animFrame);
      // Smooth return to resting position
      card.style.transform = 'translateY(0px) rotateX(0deg) rotateY(0deg)';
      card.style.setProperty('--mouse-x', '-500px');
      card.style.setProperty('--mouse-y', '-500px');
    };

    card.addEventListener('pointermove', handlePointerMove);
    card.addEventListener('pointerleave', handlePointerLeave);
  });
}
