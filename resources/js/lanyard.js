/**
 * Realistic Interactive Hanging Lanyard Engine for Arif.dev
 * 
 * Features:
 * - Natural physical hanging lanyard suspended from the top
 * - Dynamic SVG Bezier curve ribbon calculation with dual-strand styling
 * - Pointer-driven physical dragging (mouse + touch) with pointer capture
 * - Realistic spring & pendulum inertia on release (natural swing settling)
 * - Proximity hover reaction and 3D card tilt
 * - Initial smooth drop-in entrance animation on page load
 * - First-time "Drag me" visual hint with auto-dismiss
 * - Strict adherence to prefers-reduced-motion
 * - Non-blocking, high-performance requestAnimationFrame loop
 */

export function initLanyard(containerId = 'lanyardContainer') {
  const container = document.getElementById(containerId);
  if (!container) return;

  // 1. Accessibility: Respect prefers-reduced-motion
  const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (mediaQuery.matches) {
    // Keep card static in hanging position for users requesting reduced motion
    return;
  }

  const svg = document.getElementById('lanyardSvg');
  const strapPath = document.getElementById('lanyardStrap');
  const strapInnerPath = document.getElementById('lanyardStrapInner');
  const cardGroup = document.getElementById('lanyardCardWrapper');
  const dragHint = document.getElementById('lanyardDragHint');

  if (!svg || !strapPath || !cardGroup) return;

  // Geometry constants (matching SVG coordinate space 360 x 580)
  const ANCHOR_X = 180;
  const ANCHOR_Y = 0;
  const REST_LENGTH = 140; // distance from anchor to card clip ring
  const REST_X = ANCHOR_X;
  const REST_Y = ANCHOR_Y + REST_LENGTH;

  // Current Card Position (relative to top center ring)
  let currentX = REST_X;
  let currentY = REST_Y - 90; // Start higher for entrance drop
  let targetX = REST_X;
  let targetY = REST_Y;

  // Physics velocities & angles
  let vx = 0;
  let vy = 0;
  let rotation = -6; // Initial slight tilt for entrance
  let vRot = 0;

  // Hover tilt targets
  let hoverTiltX = 0;
  let hoverTiltY = 0;

  // Interaction states
  let isDragging = false;
  let dragStartX = 0;
  let dragStartY = 0;
  let cardStartX = 0;
  let cardStartY = 0;
  let hasInteracted = false;
  let animFrameId = null;

  // Entrance drop-in state
  let isDroppingIn = true;
  let dropTime = 0;

  /**
   * Updates SVG strap curve and Card 3D transform
   */
  function updateRender() {
    const dx = currentX - ANCHOR_X;
    const dy = Math.max(30, currentY - ANCHOR_Y);

    // Natural catenary/cloth bezier control points
    const cp1x = ANCHOR_X + dx * 0.18;
    const cp1y = ANCHOR_Y + dy * 0.42;
    const cp2x = currentX - dx * 0.14;
    const cp2y = currentY - dy * 0.22;

    const pathData = `M ${ANCHOR_X} ${ANCHOR_Y} C ${cp1x} ${cp1y}, ${cp2x} ${cp2y}, ${currentX} ${currentY}`;
    strapPath.setAttribute('d', pathData);
    if (strapInnerPath) {
      strapInnerPath.setAttribute('d', pathData);
    }

    // Card transform (centered horizontally at currentX - 130 because card is 260px wide)
    // Add subtle 3D tilt perspective
    const rotateZ = rotation.toFixed(2);
    const tiltX = (hoverTiltY * 8).toFixed(2);
    const tiltY = (hoverTiltX * 8).toFixed(2);

    cardGroup.style.transform = `translate3d(${(currentX - 130).toFixed(1)}px, ${currentY.toFixed(1)}px, 0px) rotate(${rotateZ}deg) rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
  }

  /**
   * Main Physics Animation Loop
   */
  function loop() {
    // 1. Entrance Drop-In Animation
    if (isDroppingIn) {
      dropTime += 0.04;
      // Damped harmonic oscillation from drop height
      const t = dropTime * Math.PI * 2.2;
      const decay = Math.exp(-dropTime * 3.5);
      
      currentY = REST_Y - (80 * Math.cos(t) * decay);
      rotation = -6 * Math.cos(t * 0.9) * decay;
      currentX = REST_X + (12 * Math.sin(t) * decay);

      updateRender();

      if (dropTime > 1.2 || (decay < 0.005)) {
        isDroppingIn = false;
        currentX = REST_X;
        currentY = REST_Y;
        rotation = 0;
        vx = 0;
        vy = 0;
        vRot = 0;
        updateRender();
      } else {
        animFrameId = requestAnimationFrame(loop);
        return;
      }
    }

    // 2. User is Dragging
    if (isDragging) {
      // Smooth interpolation toward target pointer
      const targetDx = targetX - currentX;
      const targetDy = targetY - currentY;
      
      // Calculate tracking velocity
      vx = targetDx * 0.38;
      vy = targetDy * 0.38;
      currentX += vx;
      currentY += vy;

      // Card angle naturally aligns with pull direction relative to anchor
      const pullAngle = Math.atan2(currentX - ANCHOR_X, currentY - ANCHOR_Y) * (180 / Math.PI);
      const clampedAngle = Math.max(-30, Math.min(30, pullAngle * 0.75));
      const rotDiff = clampedAngle - rotation;
      vRot = rotDiff * 0.32;
      rotation += vRot;

      updateRender();
      animFrameId = requestAnimationFrame(loop);
      return;
    }

    // 3. User Released: Natural Spring & Pendulum Oscillation
    const springK = 0.072; // Spring restoring coefficient
    const damping = 0.915; // Velocity damping factor
    const rotK = 0.085;    // Rotational restoring coefficient
    const rotDamping = 0.895;

    // Restoring force towards equilibrium rest point (accounting for hover offset)
    const targetRestX = REST_X + (hoverTiltX * 10);
    const targetRestY = REST_Y + (hoverTiltY * 6);

    const fx = -springK * (currentX - targetRestX);
    const fy = -springK * (currentY - targetRestY);

    vx = (vx + fx) * damping;
    vy = (vy + fy) * damping;

    currentX += vx;
    currentY += vy;

    // Natural pendulum torque: card aligns with the rope angle plus inertia
    const ropeAngle = Math.atan2(currentX - ANCHOR_X, currentY - ANCHOR_Y) * (180 / Math.PI);
    const targetCardRot = (ropeAngle * 0.82) + (hoverTiltX * 4);
    const torque = -rotK * (rotation - targetCardRot);

    vRot = (vRot + torque) * rotDamping;
    rotation += vRot;

    updateRender();

    // Check if settled to rest
    const isSettled =
      Math.abs(currentX - targetRestX) < 0.08 &&
      Math.abs(currentY - targetRestY) < 0.08 &&
      Math.abs(vx) < 0.04 &&
      Math.abs(vy) < 0.04 &&
      Math.abs(rotation - (hoverTiltX * 4)) < 0.08 &&
      Math.abs(vRot) < 0.04;

    if (!isSettled) {
      animFrameId = requestAnimationFrame(loop);
    } else {
      currentX = targetRestX;
      currentY = targetRestY;
      rotation = hoverTiltX * 4;
      vx = 0;
      vy = 0;
      vRot = 0;
      updateRender();
      animFrameId = null;
    }
  }

  /**
   * Transforms screen pointer coordinates to SVG coordinate space (360 x 580)
   */
  function getSvgPoint(e) {
    const rect = svg.getBoundingClientRect();
    const scaleX = 360 / Math.max(1, rect.width);
    const scaleY = 580 / Math.max(1, rect.height);
    return {
      x: (e.clientX - rect.left) * scaleX,
      y: (e.clientY - rect.top) * scaleY,
    };
  }

  /**
   * Pointer Down - Initiate Dragging
   */
  function handlePointerDown(e) {
    // Only respond to primary button or touch
    if (e.button !== undefined && e.button !== 0) return;

    e.preventDefault();
    if (cardGroup.setPointerCapture) {
      try {
        cardGroup.setPointerCapture(e.pointerId);
      } catch (err) {}
    }

    isDragging = true;
    isDroppingIn = false;

    const pt = getSvgPoint(e);
    dragStartX = pt.x;
    dragStartY = pt.y;
    cardStartX = currentX;
    cardStartY = currentY;
    targetX = currentX;
    targetY = currentY;

    cardGroup.classList.add('cursor-grabbing');
    cardGroup.classList.remove('cursor-grab');

    // Dismiss first-time "Drag me" hint
    if (!hasInteracted) {
      hasInteracted = true;
      if (dragHint) {
        dragHint.style.opacity = '0';
        dragHint.style.transform = 'translate(-50%, 8px)';
        setTimeout(() => dragHint.remove(), 350);
      }
    }

    if (!animFrameId) {
      animFrameId = requestAnimationFrame(loop);
    }
  }

  /**
   * Pointer Move - Track drag or proximity hover tilt
   */
  function handlePointerMove(e) {
    if (!isDragging) {
      // Proximity Hover Reaction when cursor is over or near container
      const containerRect = container.getBoundingClientRect();
      const isInside =
        e.clientX >= containerRect.left &&
        e.clientX <= containerRect.right &&
        e.clientY >= containerRect.top &&
        e.clientY <= containerRect.bottom;

      if (isInside) {
        const normX = ((e.clientX - containerRect.left) / containerRect.width - 0.5) * 2;
        const normY = ((e.clientY - containerRect.top) / containerRect.height - 0.5) * 2;
        hoverTiltX = normX * 0.6;
        hoverTiltY = normY * 0.4;
      } else {
        hoverTiltX = 0;
        hoverTiltY = 0;
      }

      if (!animFrameId && (hoverTiltX !== 0 || hoverTiltY !== 0)) {
        animFrameId = requestAnimationFrame(loop);
      }
      return;
    }

    // Active drag calculation with elastic limits
    const pt = getSvgPoint(e);
    const deltaX = pt.x - dragStartX;
    const deltaY = pt.y - dragStartY;

    let nextX = cardStartX + deltaX;
    let nextY = cardStartY + deltaY;

    // Clamp horizontally to container bounds (safe margin so it doesn't clip)
    nextX = Math.max(45, Math.min(315, nextX));

    // Clamp vertically (cannot push above anchor or pull off page)
    nextY = Math.max(65, Math.min(340, nextY));

    targetX = nextX;
    targetY = nextY;
  }

  /**
   * Pointer Up / Cancel - Release Dragging
   */
  function handlePointerUp(e) {
    if (!isDragging) return;
    isDragging = false;

    if (cardGroup.releasePointerCapture) {
      try {
        cardGroup.releasePointerCapture(e.pointerId);
      } catch (err) {}
    }

    cardGroup.classList.remove('cursor-grabbing');
    cardGroup.classList.add('cursor-grab');

    // Inherit drag release momentum for satisfying swing
    vx = (targetX - currentX) * 0.45;
    vy = (targetY - currentY) * 0.45;
    vRot = rotation * -0.18;

    if (!animFrameId) {
      animFrameId = requestAnimationFrame(loop);
    }
  }

  // Pointer Leave on Container resets proximity hover
  container.addEventListener('pointerleave', () => {
    hoverTiltX = 0;
    hoverTiltY = 0;
    if (!isDragging && !animFrameId) {
      animFrameId = requestAnimationFrame(loop);
    }
  });

  // Attach Pointer Events
  cardGroup.addEventListener('pointerdown', handlePointerDown);
  window.addEventListener('pointermove', handlePointerMove, { passive: false });
  window.addEventListener('pointerup', handlePointerUp);
  window.addEventListener('pointercancel', handlePointerUp);

  // Trigger entrance drop
  updateRender();
  animFrameId = requestAnimationFrame(loop);
}
