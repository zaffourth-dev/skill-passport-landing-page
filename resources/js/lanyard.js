/**
 * Realistic Interactive Hanging Lanyard Engine for Arif.dev
 * Features:
 * - Pointer-driven physical dragging (mouse + touch)
 * - Dynamic SVG Bezier string curving
 * - Spring & pendulum inertia on release
 * - Subtle hover parallax
 * - First-time "Drag me" hint
 * - Reduced-motion accessibility check
 */
export function initLanyard(containerId = 'lanyardContainer') {
  const container = document.getElementById(containerId);
  if (!container) return;

  // Check prefers-reduced-motion
  const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (mediaQuery.matches) {
    // Keep card static in hanging position for users requesting reduced motion
    return;
  }

  const svg = document.getElementById('lanyardSvg');
  const strapPath = document.getElementById('lanyardStrap');
  const cardGroup = document.getElementById('lanyardCardWrapper');
  const dragHint = document.getElementById('lanyardDragHint');

  if (!svg || !strapPath || !cardGroup) return;

  // Anchor and Rest Coordinates (relative to SVG coordinate system)
  // The SVG viewBox is 360 wide by 580 high
  const ANCHOR_X = 180;
  const ANCHOR_Y = 0;
  const REST_LENGTH = 140; // distance from anchor to card clip
  const REST_X = ANCHOR_X;
  const REST_Y = ANCHOR_Y + REST_LENGTH;

  // Current Card Position (at clip ring)
  let currentX = REST_X;
  let currentY = REST_Y;
  let targetX = REST_X;
  let targetY = REST_Y;

  // Physics velocities
  let vx = 0;
  let vy = 0;
  let rotation = 0;
  let vRot = 0;

  // State flags
  let isDragging = false;
  let dragStartX = 0;
  let dragStartY = 0;
  let cardStartX = 0;
  let cardStartY = 0;
  let hasInteracted = false;
  let animFrameId = null;

  // Initial Drop Entrance
  let isDroppingIn = true;
  let dropProgress = 0;

  // Updates the SVG strap bezier curve and card position
  function updateRender() {
    // Top clip of card is at (currentX, currentY)
    // Control points for natural lanyard curve
    const dx = currentX - ANCHOR_X;
    const dy = Math.max(20, currentY - ANCHOR_Y);
    
    // As it swings sideways, the ribbon bows out slightly due to gravity and weight
    const cp1x = ANCHOR_X + dx * 0.15;
    const cp1y = ANCHOR_Y + dy * 0.45;
    const cp2x = currentX - dx * 0.15;
    const cp2y = currentY - dy * 0.25;

    // Dual-line strap ribbon
    strapPath.setAttribute(
      'd',
      `M ${ANCHOR_X} ${ANCHOR_Y} C ${cp1x} ${cp1y}, ${cp2x} ${cp2y}, ${currentX} ${currentY}`
    );

    // Transform card position & rotation
    cardGroup.style.transform = `translate3d(${currentX - 130}px, ${currentY}px, 0px) rotate(${rotation}deg)`;
  }

  // Animation Loop for Physics & Drop-in
  function loop() {
    if (isDroppingIn) {
      dropProgress += 0.035;
      // Soft spring bounce from top
      const bounce = Math.sin(dropProgress * Math.PI) * Math.exp(-dropProgress * 2.5);
      currentY = REST_Y + bounce * 40;
      rotation = Math.sin(dropProgress * Math.PI * 1.5) * 8 * Math.exp(-dropProgress * 2);

      updateRender();

      if (dropProgress >= 1.5) {
        isDroppingIn = false;
        currentX = REST_X;
        currentY = REST_Y;
        rotation = 0;
        updateRender();
      } else {
        animFrameId = requestAnimationFrame(loop);
        return;
      }
    }

    if (isDragging) {
      // Smoothly track pointer position
      const targetDx = targetX - currentX;
      const targetDy = targetY - currentY;
      currentX += targetDx * 0.4;
      currentY += targetDy * 0.4;

      // Rotate card towards drag angle
      const angle = Math.atan2(currentX - ANCHOR_X, currentY - ANCHOR_Y) * (180 / Math.PI);
      const targetRot = Math.max(-28, Math.min(28, angle * 0.7));
      rotation += (targetRot - rotation) * 0.35;

      updateRender();
      animFrameId = requestAnimationFrame(loop);
    } else {
      // Spring & Pendulum Simulation
      const k = 0.08; // Spring stiffness
      const damping = 0.92; // Inertia damping
      const gravity = 0.4;

      // Force toward rest position
      const fx = -k * (currentX - REST_X);
      const fy = -k * (currentY - REST_Y);

      vx = (vx + fx) * damping;
      vy = (vy + fy + gravity) * damping;

      currentX += vx;
      currentY += vy;

      // Rotational pendulum oscillation
      const rotRest = Math.atan2(currentX - ANCHOR_X, currentY - ANCHOR_Y) * (180 / Math.PI) * 0.8;
      const fRot = -0.06 * (rotation - rotRest);
      vRot = (vRot + fRot) * 0.91;
      rotation += vRot;

      updateRender();

      // Check if settled to stop running frame loop
      const isSettled =
        Math.abs(currentX - REST_X) < 0.15 &&
        Math.abs(currentY - REST_Y) < 0.15 &&
        Math.abs(vx) < 0.05 &&
        Math.abs(vy) < 0.05 &&
        Math.abs(rotation) < 0.1 &&
        Math.abs(vRot) < 0.05;

      if (!isSettled) {
        animFrameId = requestAnimationFrame(loop);
      } else {
        currentX = REST_X;
        currentY = REST_Y;
        rotation = 0;
        vx = 0;
        vy = 0;
        vRot = 0;
        updateRender();
        animFrameId = null;
      }
    }
  }

  // Pointer Event Handlers
  function getSvgPoint(e) {
    const rect = svg.getBoundingClientRect();
    const scaleX = 360 / rect.width;
    const scaleY = 580 / rect.height;
    return {
      x: (e.clientX - rect.left) * scaleX,
      y: (e.clientY - rect.top) * scaleY,
    };
  }

  function handlePointerDown(e) {
    e.preventDefault();
    if (e.target.setPointerCapture) {
      try {
        e.target.setPointerCapture(e.pointerId);
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

    // Dismiss "Drag me" hint on first interaction
    if (!hasInteracted) {
      hasInteracted = true;
      if (dragHint) {
        dragHint.style.opacity = '0';
        dragHint.style.transform = 'translateY(8px)';
        setTimeout(() => dragHint.remove(), 400);
      }
    }

    if (!animFrameId) {
      animFrameId = requestAnimationFrame(loop);
    }
  }

  function handlePointerMove(e) {
    if (!isDragging) {
      // Hover parallax tilt effect when cursor is over the card
      const rect = cardGroup.getBoundingClientRect();
      if (
        e.clientX >= rect.left &&
        e.clientX <= rect.right &&
        e.clientY >= rect.top &&
        e.clientY <= rect.bottom
      ) {
        const relX = (e.clientX - (rect.left + rect.width / 2)) / (rect.width / 2);
        rotation = relX * 2.5;
        updateRender();
      }
      return;
    }

    const pt = getSvgPoint(e);
    const deltaX = pt.x - dragStartX;
    const deltaY = pt.y - dragStartY;

    // Apply elastic limits so card cannot be dragged endlessly off-screen
    let nextX = cardStartX + deltaX;
    let nextY = cardStartY + deltaY;

    // Clamp horizontally to container bounds
    nextX = Math.max(50, Math.min(310, nextX));
    // Clamp vertically (cannot push above anchor or pull too far down)
    nextY = Math.max(60, Math.min(320, nextY));

    targetX = nextX;
    targetY = nextY;
  }

  function handlePointerUp(e) {
    if (!isDragging) return;
    isDragging = false;

    cardGroup.classList.remove('cursor-grabbing');
    cardGroup.classList.add('cursor-grab');

    // Release velocity based on final pull
    vx = (targetX - currentX) * 0.4;
    vy = (targetY - currentY) * 0.4;
    vRot = (rotation) * -0.15;

    if (!animFrameId) {
      animFrameId = requestAnimationFrame(loop);
    }
  }

  // Attach Pointer Events directly to the Card Element for maximum precision
  cardGroup.addEventListener('pointerdown', handlePointerDown);
  window.addEventListener('pointermove', handlePointerMove, { passive: false });
  window.addEventListener('pointerup', handlePointerUp);
  window.addEventListener('pointercancel', handlePointerUp);

  // Start Drop In animation
  updateRender();
  animFrameId = requestAnimationFrame(loop);
}
