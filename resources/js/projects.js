/**
 * Featured Projects Scroll-Driven Showcase Engine
 * 
 * Features:
 * - Sequential scroll reveal with vertical wipe effect
 * - Active project focus: current card scales up (scale 1.0, opacity 1), inactive cards gently dim (scale 0.98, opacity 0.82)
 * - Dynamic moving project index indicator ("01 / 03", "02 / 03", "03 / 03") with smooth vertical transition
 * - Thin expanding accent line per active project
 * - Cascading key feature checkmark entrance
 * - Strict reduced-motion support
 */

export function initProjectShowcase(sectionId = 'projects') {
  const section = document.getElementById(sectionId);
  if (!section) return;

  const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const projectCards = section.querySelectorAll('.project-card');
  const indexNumberEl = document.getElementById('projectActiveIndex');
  const indexNameEl = document.getElementById('projectActiveName');

  if (projectCards.length === 0) return;

  const projectMeta = [
    { num: '01', title: 'ATLAS MBG' },
    { num: '02', title: 'WasteBank2026' },
    { num: '03', title: 'Journey to Logic' },
  ];

  let currentActiveIndex = -1;

  function setActiveProject(index) {
    if (index === currentActiveIndex || index < 0 || index >= projectCards.length) return;
    currentActiveIndex = index;

    // Update moving index indicator
    if (indexNumberEl) {
      if (!isReducedMotion) {
        indexNumberEl.classList.add('number-changing');
        setTimeout(() => {
          indexNumberEl.textContent = projectMeta[index].num;
          indexNumberEl.classList.remove('number-changing');
        }, 150);
      } else {
        indexNumberEl.textContent = projectMeta[index].num;
      }
    }

    if (indexNameEl) {
      indexNameEl.textContent = projectMeta[index].title;
    }

    // Update active visual focus across project cards
    projectCards.forEach((card, idx) => {
      const accentLine = card.querySelector('.project-accent-line');
      const featureItems = card.querySelectorAll('.project-feature-item');

      if (idx === index) {
        card.classList.add('is-project-active');
        card.classList.remove('is-project-dimmed');

        if (accentLine) {
          accentLine.style.width = '100%';
        }

        // Cascade feature list items
        if (!isReducedMotion) {
          featureItems.forEach((item, fIdx) => {
            setTimeout(() => {
              item.classList.add('feature-visible');
            }, 80 + fIdx * 50);
          });
        } else {
          featureItems.forEach(item => item.classList.add('feature-visible'));
        }
      } else {
        card.classList.remove('is-project-active');
        card.classList.add('is-project-dimmed');

        if (accentLine) {
          accentLine.style.width = '0%';
        }
      }
    });
  }

  // Set initial active project
  setActiveProject(0);

  // IntersectionObserver for tracking active project during scroll
  const observerOptions = {
    root: null,
    rootMargin: '-15% 0px -25% 0px',
    threshold: [0.2, 0.5, 0.8]
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && entry.intersectionRatio >= 0.25) {
        const index = parseInt(entry.target.getAttribute('data-project-index'), 10);
        if (!isNaN(index)) {
          setActiveProject(index);
        }
      }
    });
  }, observerOptions);

  projectCards.forEach(card => observer.observe(card));

  // Trigger wipe reveal for cards as they enter viewport
  if (!isReducedMotion) {
    const wipeObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('wipe-revealed');
          obs.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15
    });

    projectCards.forEach(card => wipeObserver.observe(card));
  } else {
    projectCards.forEach(card => card.classList.add('wipe-revealed'));
  }
}
