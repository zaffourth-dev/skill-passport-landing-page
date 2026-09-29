/**
 * Infinite Horizontal Marquee Drag & Pause Engine
 * 
 * Features:
 * - Smooth seamless Rightward motion (Left -> Right)
 * - Pointer drag on desktop (cursor: grab / grabbing) & touch swipe on mobile
 * - Seamless wrap-around during dragging
 * - Resumes native CSS animation smoothly at exact release position
 * - Respects prefers-reduced-motion
 */

export function initMarquee(viewportId = 'aboutMarqueeContainer', trackId = 'aboutMarqueeTrack') {
  const viewport = document.getElementById(viewportId);
  const track = document.getElementById(trackId);

  if (!viewport || !track) return;

  // Reduced motion check
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }

  const DURATION = 30; // seconds for complete 50% cycle (matches CSS)
  let isDragging = false;
  let startX = 0;
  let startTx = 0;
  let currentTx = 0;

  /**
   * Extracts current translateX in pixels from computed CSS transform matrix
   */
  function getCurrentTranslateX() {
    const style = window.getComputedStyle(track);
    const transform = style.transform || style.webkitTransform;
    if (!transform || transform === 'none') return 0;

    const matrix = transform.match(/^matrix\((.+)\)$/);
    if (matrix) {
      const values = matrix[1].split(', ');
      return parseFloat(values[4]) || 0;
    }

    const matrix3d = transform.match(/^matrix3d\((.+)\)$/);
    if (matrix3d) {
      const values = matrix3d[1].split(', ');
      return parseFloat(values[12]) || 0;
    }

    return 0;
  }

  function handlePointerDown(e) {
    // Only primary button or touch
    if (e.button !== undefined && e.button !== 0) return;

    const halfWidth = track.scrollWidth / 2;
    if (halfWidth <= 0) return;

    isDragging = true;
    startX = e.clientX;
    startTx = getCurrentTranslateX();

    // Freeze track at exact current visual position
    track.classList.add('is-dragging');
    track.style.animation = 'none';
    track.style.transform = `translate3d(${startTx}px, 0, 0)`;

    viewport.classList.add('cursor-grabbing');
    viewport.classList.remove('cursor-grab');

    if (viewport.setPointerCapture) {
      try {
        viewport.setPointerCapture(e.pointerId);
      } catch (err) {}
    }
  }

  function handlePointerMove(e) {
    if (!isDragging) return;

    const halfWidth = track.scrollWidth / 2;
    if (halfWidth <= 0) return;

    const deltaX = e.clientX - startX;
    let nextTx = startTx + deltaX;

    // Wrap seamlessly within [-halfWidth, 0]
    while (nextTx > 0) {
      nextTx -= halfWidth;
    }
    while (nextTx < -halfWidth) {
      nextTx += halfWidth;
    }

    currentTx = nextTx;
    track.style.transform = `translate3d(${currentTx}px, 0, 0)`;
  }

  function handlePointerUp(e) {
    if (!isDragging) return;
    isDragging = false;

    viewport.classList.remove('cursor-grabbing');
    viewport.classList.add('cursor-grab');

    if (viewport.releasePointerCapture) {
      try {
        viewport.releasePointerCapture(e.pointerId);
      } catch (err) {}
    }

    const halfWidth = track.scrollWidth / 2;
    if (halfWidth <= 0) {
      track.classList.remove('is-dragging');
      track.style.animation = '';
      track.style.transform = '';
      return;
    }

    // Calculate progress ratio from -halfWidth (0%) to 0px (100%)
    const progress = (currentTx - (-halfWidth)) / halfWidth;
    const clampedProgress = Math.max(0, Math.min(1, progress));
    const delaySeconds = -(clampedProgress * DURATION);

    // Resume CSS keyframe animation at exact matching progress
    track.classList.remove('is-dragging');
    track.style.transform = '';
    track.style.animation = `marqueeScrollRight ${DURATION}s linear infinite`;
    track.style.animationDelay = `${delaySeconds.toFixed(3)}s`;
  }

  viewport.addEventListener('pointerdown', handlePointerDown);
  viewport.addEventListener('pointermove', handlePointerMove, { passive: true });
  viewport.addEventListener('pointerup', handlePointerUp);
  viewport.addEventListener('pointercancel', handlePointerUp);
}
