// ============================================================
    // STATIC DATA (from PortfolioSeeder.php)
    // ============================================================
    const SKILLS_DATA = {
        'Kecerdasan Buatan (AI)': {
            accent: { spotlight: 'rgba(226,60,100,0.12)', dot: 'bg-[#E23C64]', badge_bg: 'bg-[#FCEDD8]', badge_text: 'text-[#B0183D]', badge_border: 'border-[#F7DEC8]' },
            skills: ['Google Gemini API','RAG Architecture','ChromaDB','Streamlit','Prompt Engineering']
        },
        'Pengembangan Web & Mobile': {
            accent: { spotlight: 'rgba(56,189,248,0.09)', dot: 'bg-[#0284C7]', badge_bg: 'bg-[#E0F2FE]', badge_text: 'text-[#0369A1]', badge_border: 'border-sky-200' },
            skills: ['Laravel','PHP','Tailwind CSS','JavaScript','HTML5 / CSS3','RESTful API','MySQL','Android Studio']
        },
        'Bahasa Pemrograman': {
            accent: { spotlight: 'rgba(255,94,94,0.09)', dot: 'bg-[#FF5E5E]', badge_bg: 'bg-[#FCEDD8]', badge_text: 'text-[#B0183D]', badge_border: 'border-[#F7DEC8]' },
            skills: ['Python','C','C#','PHP','JavaScript']
        },
        'Jaringan & IoT': {
            accent: { spotlight: 'rgba(245,158,11,0.09)', dot: 'bg-[#D97706]', badge_bg: 'bg-[#FEF3C7]', badge_text: 'text-[#B45309]', badge_border: 'border-amber-200' },
            skills: ['Jaringan Komputer','TCP/IP','MikroTik RouterOS','Linux OS','VirtualBox','Internet of Things (IoT)']
        },
        'Alat & Workflow': {
            accent: { spotlight: 'rgba(16,185,129,0.09)', dot: 'bg-[#059669]', badge_bg: 'bg-[#ECFDF5]', badge_text: 'text-[#047857]', badge_border: 'border-emerald-200' },
            skills: ['VS Code','Visual Studio','GitHub','Git','Unity','Postman','Figma']
        },
        'Keahlian Non-Teknis': {
            accent: { spotlight: 'rgba(168,85,247,0.09)', dot: 'bg-[#9333EA]', badge_bg: 'bg-[#F3E8FF]', badge_text: 'text-[#7E22CE]', badge_border: 'border-purple-200' },
            skills: ['Problem Solving','Berpikir Kritis','Kepemimpinan','Kerja Sama Tim','Komunikasi Efektif','Manajemen Waktu']
        }
    };

    const PROJECTS_DATA = [
        {
            title: 'ATLAS MBG',
            subtitle: 'Aplikasi Tracking dan Layanan Asupan Siswa',
            description: 'Aplikasi berbasis web untuk mendukung pengelolaan dan pelacakan Program Makan Bergizi Gratis (MBG). Merancang antarmuka pengguna yang responsif agar aplikasi mudah digunakan oleh siswa dan pihak pengelola.',
            role: 'Ketua Tim Pengembang',
            technologies: ['Laravel','MySQL','Tailwind CSS','PHP','REST API'],
            features: ['Pelacakan & distribusi asupan makanan siswa','Manajemen kontainer & logistik makanan','Dashboard analitik & rekapitulasi data','Antarmuka responsif ramah pengguna'],
            group_name: 'Ketua Tim',
            demo_url: 'https://github.com/zaffourth-dev'
        },
        {
            title: 'LERES-AI',
            subtitle: 'Layanan E-Government Rekomendasi & Edukasi Smart - AI',
            description: 'Chatbot cerdas berbasis Artificial Intelligence sebagai layanan informasi publik yang cepat dan akurat. Mengimplementasikan teknologi Retrieval-Augmented Generation (RAG), Google Gemini API, dan ChromaDB.',
            role: 'Anggota Tim Pengembang',
            technologies: ['Python','Google Gemini API','RAG','ChromaDB','Streamlit'],
            features: ['Chatbot AI interaktif layanan publik','Implementasi arsitektur RAG (Retrieval-Augmented Generation)','Integrasi Google Gemini API','Basis data vektor ChromaDB berkecepatan tinggi'],
            group_name: 'AI Developer',
            demo_url: 'https://github.com/zaffourth-dev'
        },
        {
            title: 'Journey to Logic',
            subtitle: 'Game Edukasi Logika & Pemrograman',
            description: 'Game edukasi interaktif berbasis Unity untuk melatih kemampuan logika dan pemecahan masalah (problem solving). Merancang alur teka-teki logika gerbang boolean dan mekanisme kontrol permainan yang dinamis.',
            role: 'Ketua Tim Pengembang',
            technologies: ['Unity','C#','Game Logic','UI/UX Design'],
            features: ['Simulasi gerbang logika (OR, XOR, NOT)','Mekanika percabangan & perulangan edukatif','Sistem kontrol pergerakan karakter & kamera dinamis','Tantangan teka-teki logika berjenjang'],
            group_name: 'Ketua Tim',
            demo_url: 'https://github.com/zaffourth-dev'
        }
    ];

    // ============================================================
    // RENDER SKILLS SECTION
    // ============================================================
    function renderSkills() {
        const grid = document.getElementById('skillsGrid');
        if (!grid) return;
        const entries = Object.entries(SKILLS_DATA);
        entries.forEach(([category, data], idx) => {
            const a = data.accent;
            const card = document.createElement('div');
            card.className = `tech-card tech-stagger-${idx+1} bg-white rounded-2xl border border-[#F7DEC8] p-6 shadow-xs hover:shadow-xl transition-all duration-300 relative overflow-hidden group`;
            card.innerHTML = `
                <div class="tech-spotlight-layer" style="--spotlight-color: ${a.spotlight};"></div>
                <div class="flex items-center justify-between pb-3 mb-4 border-b border-[#F7DEC8]/60 relative z-10">
                    <h3 class="tech-card-title font-heading font-semibold text-[#2E0A14] text-base">${category}</h3>
                    <span class="tech-card-badge text-xs font-mono ${a.badge_text} ${a.badge_bg} px-2.5 py-0.5 rounded-full border ${a.badge_border} font-medium shadow-2xs">${data.skills.length} alat</span>
                </div>
                <div class="flex flex-wrap gap-2 relative z-10">
                    ${data.skills.map(s => `<span class="tech-pill inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-mono font-medium text-[#7A3546] bg-[#FFFBF5] hover:bg-[#FCEDD8] hover:text-[#B0183D] border border-[#F7DEC8] hover:border-slate-300 transition-all cursor-default select-none shadow-2xs"><span class="tech-pill-dot w-1.5 h-1.5 rounded-full ${a.dot} inline-block"></span>${s}</span>`).join('')}
                </div>
            `;
            grid.appendChild(card);
        });
    }

    // ============================================================
    // RENDER PROJECTS SECTION
    // ============================================================
    function renderProjects() {
        const grid = document.getElementById('projectsGrid');
        if (!grid) return;
        PROJECTS_DATA.forEach((project, idx) => {
            const card = document.createElement('div');
            card.className = `project-card project-wipe-${idx+1} bg-white rounded-3xl border border-[#F7DEC8] overflow-hidden flex flex-col justify-between shadow-xs hover:border-[#FF5E5E]/60 transition-all duration-300 group`;
            card.setAttribute('data-project-index', idx);
            card.innerHTML = `
                <div class="project-edge-scan absolute top-0 left-0 w-28 h-[2.5px] bg-gradient-to-r from-transparent via-[#FF5E5E] to-transparent pointer-events-none z-20"></div>
                <div class="project-header-bg h-44 bg-gradient-to-br from-[#FCEDD8] via-[#FFF9F2] to-[#FFD464]/25 p-6 flex flex-col justify-between border-b border-[#F7DEC8] relative overflow-hidden">
                    <div class="absolute -right-4 -bottom-4 w-28 h-28 rounded-full bg-[#FF5E5E]/20 blur-xl pointer-events-none group-hover:scale-125 transition-transform duration-500"></div>
                    <div class="flex items-center justify-between z-10">
                        <span class="text-xs font-mono px-2.5 py-1 rounded-full bg-white/95 backdrop-blur-xs text-[#7A3546] border border-[#F7DEC8] font-medium shadow-2xs group-hover:-translate-y-0.5 transition-transform duration-200">${project.role}</span>
                        ${project.group_name ? `<span class="text-xs font-mono px-2.5 py-0.5 rounded-md bg-[#FCEDD8] text-[#B0183D] border border-[#F7DEC8] font-semibold">${project.group_name}</span>` : ''}
                    </div>
                    <div class="z-10">
                        <h3 class="project-title-reveal font-heading font-bold text-xl text-[#2E0A14] group-hover:text-[#E23C64] transition-colors">${project.title}</h3>
                        <p class="text-xs font-medium text-[#E23C64]">${project.subtitle}</p>
                    </div>
                </div>
                <div class="project-accent-line"></div>
                <div class="p-6 flex-grow flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <p class="text-[#7A3546] text-sm leading-relaxed">${project.description}</p>
                        ${project.features && project.features.length ? `
                        <div class="space-y-1.5">
                            <span class="text-[11px] font-mono uppercase tracking-wider text-[#B0183D] font-semibold block">Fitur Utama</span>
                            <ul class="space-y-1.5 text-xs text-[#2E0A14]">
                                ${project.features.slice(0,4).map(f => `<li class="project-feature-item flex items-center gap-2"><svg class="w-3.5 h-3.5 text-[#FF5E5E] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg><span>${f}</span></li>`).join('')}
                            </ul>
                        </div>` : ''}
                    </div>
                    <div class="space-y-4 pt-4 border-t border-[#F7DEC8]/60">
                        <div class="flex flex-wrap gap-1.5">
                            ${project.technologies.map(t => `<span class="project-tech-tag text-[11px] font-mono px-2 py-0.5 rounded-md bg-[#FCEDD8]/70 text-[#7A3546] border border-[#F7DEC8] cursor-default">${t}</span>`).join('')}
                        </div>
                        <button type="button"
                                onclick="openProjectModalByIndex(${idx})"
                                class="project-action-btn w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl text-xs font-semibold text-[#7A3546] bg-[#FFFBF5] hover:bg-gradient-to-r hover:from-[#FF5E5E] hover:to-[#B0183D] hover:text-white border border-[#F7DEC8] hover:border-transparent transition-all duration-200 shadow-2xs">
                            <span>Lihat Detail Proyek</span>
                            <svg class="project-arrow-icon w-3.5 h-3.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            `;
            grid.appendChild(card);
        });
    }

    // ============================================================
    // PROJECT MODAL
    // ============================================================
    function openProjectModalByIndex(idx) {
        const data = PROJECTS_DATA[idx];
        if (data) openProjectModal(data);
    }

    function openProjectModal(data) {
        const modal = document.getElementById('projectModal');
        if (!modal) return;
        document.getElementById('modalTitle').textContent = data.title;
        document.getElementById('modalSubtitle').textContent = data.subtitle;
        document.getElementById('modalDesc').textContent = data.description;
        document.getElementById('modalBadge').textContent = 'Peran: ' + data.role;

        const featuresList = document.getElementById('modalFeatures');
        featuresList.innerHTML = '';
        if (data.features && data.features.length) {
            data.features.forEach(f => {
                const li = document.createElement('li');
                li.className = 'flex items-center gap-2';
                li.innerHTML = `<svg class="w-4 h-4 text-[#FF5E5E] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span>${f}</span>`;
                featuresList.appendChild(li);
            });
        }

        const techBox = document.getElementById('modalTech');
        techBox.innerHTML = '';
        if (data.technologies && data.technologies.length) {
            data.technologies.forEach(t => {
                const span = document.createElement('span');
                span.className = 'text-xs font-mono px-2.5 py-1 rounded-md bg-[#FCEDD8] text-[#B0183D] border border-[#F7DEC8] font-medium';
                span.textContent = t;
                techBox.appendChild(span);
            });
        }

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeProjectModal() {
        const modal = document.getElementById('projectModal');
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
        document.body.style.overflow = '';
    }

    const modalEl = document.getElementById('projectModal');
    if (modalEl) {
        modalEl.addEventListener('click', e => {
            if (e.target === modalEl) closeProjectModal();
        });
    }

    window.openProjectModalByIndex = openProjectModalByIndex;
    window.openProjectModal = openProjectModal;
    window.closeProjectModal = closeProjectModal;

    window.addEventListener('keydown', e => { if (e.key === 'Escape') closeProjectModal(); });

    // ============================================================
    // MOBILE MENU
    // ============================================================
    const menuBtn = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const openIcon = document.getElementById('menuOpenIcon');
    const closeIcon = document.getElementById('menuCloseIcon');

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
            menuBtn.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                menuBtn.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // ============================================================
    // NAVBAR SCROLL
    // ============================================================
    function initNavbarScroll() {
        const navbar = document.querySelector('header');
        if (!navbar) return;
        const handleScroll = () => {
            if (window.scrollY > 20) {
                navbar.style.boxShadow = '0 1px 6px 0 rgba(0,0,0,0.07)';
                navbar.style.backgroundColor = 'rgba(255,251,245,0.97)';
            } else {
                navbar.style.boxShadow = '';
                navbar.style.backgroundColor = 'rgba(255,251,245,0.9)';
            }
        };
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
    }

    // ============================================================
    // SCROLL REVEAL
    // ============================================================
    function initScrollReveal() {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.querySelectorAll('.reveal-item').forEach(el => el.classList.add('is-visible'));
            return;
        }
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { root: null, rootMargin: '0px 0px -40px 0px', threshold: 0.08 });
        document.querySelectorAll('.reveal-item').forEach(el => observer.observe(el));
    }

    // ============================================================
    // SMOOTH SCROLL
    // ============================================================
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#!') return;
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    history.pushState(null, null, href);
                }
            });
        });
    }

    // ============================================================
    // MARQUEE DRAG ENGINE
    // ============================================================
    function initMarquee(viewportId, trackId) {
        const viewport = document.getElementById(viewportId);
        const track = document.getElementById(trackId);
        if (!viewport || !track) return;
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        const DURATION = 30;
        let isDragging = false, startX = 0, startTx = 0, currentTx = 0;

        function getCurrentTranslateX() {
            const style = window.getComputedStyle(track);
            const transform = style.transform || style.webkitTransform;
            if (!transform || transform === 'none') return 0;
            const matrix = transform.match(/^matrix\((.+)\)$/);
            if (matrix) { const v = matrix[1].split(', '); return parseFloat(v[4]) || 0; }
            const m3d = transform.match(/^matrix3d\((.+)\)$/);
            if (m3d) { const v = m3d[1].split(', '); return parseFloat(v[12]) || 0; }
            return 0;
        }

        viewport.addEventListener('pointerdown', e => {
            if (e.button !== undefined && e.button !== 0) return;
            const hw = track.scrollWidth / 2;
            if (hw <= 0) return;
            isDragging = true; startX = e.clientX; startTx = getCurrentTranslateX();
            track.classList.add('is-dragging');
            track.style.animation = 'none';
            track.style.transform = `translate3d(${startTx}px, 0, 0)`;
            try { viewport.setPointerCapture(e.pointerId); } catch(err) {}
        });

        viewport.addEventListener('pointermove', e => {
            if (!isDragging) return;
            const hw = track.scrollWidth / 2;
            if (hw <= 0) return;
            let nextTx = startTx + (e.clientX - startX);
            while (nextTx > 0) nextTx -= hw;
            while (nextTx < -hw) nextTx += hw;
            currentTx = nextTx;
            track.style.transform = `translate3d(${currentTx}px, 0, 0)`;
        }, { passive: true });

        const onUp = e => {
            if (!isDragging) return;
            isDragging = false;
            try { viewport.releasePointerCapture(e.pointerId); } catch(err) {}
            const hw = track.scrollWidth / 2;
            if (hw <= 0) { track.classList.remove('is-dragging'); track.style.animation = ''; track.style.transform = ''; return; }
            const progress = (currentTx - (-hw)) / hw;
            const clampedProgress = Math.max(0, Math.min(1, progress));
            track.classList.remove('is-dragging');
            track.style.transform = '';
            track.style.animation = `marqueeScrollRight ${DURATION}s linear infinite`;
            track.style.animationDelay = `${-(clampedProgress * DURATION).toFixed(3)}s`;
        };
        viewport.addEventListener('pointerup', onUp);
        viewport.addEventListener('pointercancel', onUp);
    }

    // ============================================================
    // TECH STACK INTERACTIONS
    // ============================================================
    function initTechStack(sectionId) {
        const section = document.getElementById(sectionId);
        if (!section) return;
        const isTouch = window.matchMedia('(pointer: coarse)').matches;
        const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const cards = section.querySelectorAll('.tech-card');

        if (!isReducedMotion) {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        const pills = entry.target.querySelectorAll('.tech-pill');
                        pills.forEach((pill, idx) => setTimeout(() => pill.classList.add('pill-visible'), 120 + idx * 35));
                        obs.unobserve(entry.target);
                    }
                });
            }, { root: null, rootMargin: '0px 0px -40px 0px', threshold: 0.12 });
            cards.forEach(card => observer.observe(card));
        } else {
            cards.forEach(card => {
                card.classList.add('is-visible');
                card.querySelectorAll('.tech-pill').forEach(pill => pill.classList.add('pill-visible'));
            });
        }

        if (isTouch || isReducedMotion) return;

        cards.forEach(card => {
            let af = null;
            card.addEventListener('pointermove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left, y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
                if (af) cancelAnimationFrame(af);
                af = requestAnimationFrame(() => {
                    const nx = (x / rect.width - 0.5) * 2, ny = (y / rect.height - 0.5) * 2;
                    card.style.transform = `translateY(-5px) rotateX(${(-ny * 2).toFixed(2)}deg) rotateY(${(nx * 2).toFixed(2)}deg)`;
                });
            });
            card.addEventListener('pointerleave', () => {
                if (af) cancelAnimationFrame(af);
                card.style.transform = 'translateY(0px) rotateX(0deg) rotateY(0deg)';
                card.style.setProperty('--mouse-x', '-500px');
                card.style.setProperty('--mouse-y', '-500px');
            });
        });
    }

    // ============================================================
    // PROJECTS SHOWCASE
    // ============================================================
    function initProjectShowcase(sectionId) {
        const section = document.getElementById(sectionId);
        if (!section) return;
        const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const projectCards = section.querySelectorAll('.project-card');
        const indexNumberEl = document.getElementById('projectActiveIndex');
        const indexNameEl = document.getElementById('projectActiveName');
        if (projectCards.length === 0) return;

        const projectMeta = [
            { num: '01', title: 'ATLAS MBG' },
            { num: '02', title: 'LERES-AI' },
            { num: '03', title: 'Journey to Logic' },
        ];

        let currentActiveIndex = -1;

        function setActiveProject(index) {
            if (index === currentActiveIndex || index < 0 || index >= projectCards.length) return;
            currentActiveIndex = index;

            if (indexNumberEl) {
                if (!isReducedMotion) {
                    indexNumberEl.classList.add('number-changing');
                    setTimeout(() => { indexNumberEl.textContent = projectMeta[index].num; indexNumberEl.classList.remove('number-changing'); }, 150);
                } else {
                    indexNumberEl.textContent = projectMeta[index].num;
                }
            }
            if (indexNameEl) indexNameEl.textContent = projectMeta[index].title;

            projectCards.forEach((card, idx) => {
                const accentLine = card.querySelector('.project-accent-line');
                const featureItems = card.querySelectorAll('.project-feature-item');
                const techTags = card.querySelectorAll('.project-tech-tag');
                if (idx === index) {
                    card.classList.add('is-project-active', 'wipe-revealed');
                    card.classList.remove('is-project-dimmed');
                    if (accentLine) accentLine.style.width = '100%';
                    if (!isReducedMotion) {
                        featureItems.forEach((item, fIdx) => setTimeout(() => item.classList.add('feature-visible'), 60 + fIdx * 50));
                        techTags.forEach((tag, tIdx) => setTimeout(() => tag.classList.add('tag-visible'), 260 + tIdx * 40));
                    } else {
                        featureItems.forEach(item => item.classList.add('feature-visible'));
                        techTags.forEach(tag => tag.classList.add('tag-visible'));
                    }
                } else {
                    card.classList.remove('is-project-active');
                    card.classList.add('is-project-dimmed');
                    if (accentLine) accentLine.style.width = '0%';
                }
            });
        }

        setActiveProject(0);

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.intersectionRatio >= 0.25) {
                    const index = parseInt(entry.target.getAttribute('data-project-index'), 10);
                    if (!isNaN(index)) setActiveProject(index);
                }
            });
        }, { root: null, rootMargin: '-15% 0px -25% 0px', threshold: [0.2, 0.5, 0.8] });
        projectCards.forEach(card => observer.observe(card));

        const headerObs = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => { if (entry.isIntersecting) { section.classList.add('projects-header-revealed'); obs.unobserve(entry.target); } });
        }, { threshold: 0.1 });
        headerObs.observe(section);

        if (!isReducedMotion) {
            const wipeObs = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('wipe-revealed'); obs.unobserve(entry.target); } });
            }, { threshold: 0.15 });
            projectCards.forEach(card => wipeObs.observe(card));
        } else {
            projectCards.forEach(card => card.classList.add('wipe-revealed'));
            section.classList.add('projects-header-revealed');
        }
    }

    // ============================================================
    // LANYARD PHYSICS ENGINE
    // ============================================================
    function initLanyard(containerId) {
        const container = document.getElementById(containerId);
        if (!container) return;
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        const svg = document.getElementById('lanyardSvg');
        const strapPath = document.getElementById('lanyardStrap');
        const strapInnerPath = document.getElementById('lanyardStrapInner');
        const cardGroup = document.getElementById('lanyardCardWrapper');
        const dragHint = document.getElementById('lanyardDragHint');
        if (!svg || !strapPath || !cardGroup) return;

        const ANCHOR_X = 180, ANCHOR_Y = 0, REST_LENGTH = 140;
        const REST_X = ANCHOR_X, REST_Y = ANCHOR_Y + REST_LENGTH;

        let currentX = REST_X, currentY = REST_Y - 90, targetX = REST_X, targetY = REST_Y;
        let vx = 0, vy = 0, rotation = -6, vRot = 0;
        let hoverTiltX = 0, hoverTiltY = 0;
        let isDragging = false, dragStartX = 0, dragStartY = 0, cardStartX = 0, cardStartY = 0;
        let hasInteracted = false, animFrameId = null;
        let isDroppingIn = true, dropTime = 0;

        function updateRender() {
            const dx = currentX - ANCHOR_X;
            const dy = Math.max(30, currentY - ANCHOR_Y);
            const cp1x = ANCHOR_X + dx * 0.18, cp1y = ANCHOR_Y + dy * 0.42;
            const cp2x = currentX - dx * 0.14, cp2y = currentY - dy * 0.22;
            const pathData = `M ${ANCHOR_X} ${ANCHOR_Y} C ${cp1x} ${cp1y}, ${cp2x} ${cp2y}, ${currentX} ${currentY}`;
            strapPath.setAttribute('d', pathData);
            if (strapInnerPath) strapInnerPath.setAttribute('d', pathData);
            const rotateZ = rotation.toFixed(2);
            const tiltX = (hoverTiltY * 8).toFixed(2), tiltY = (hoverTiltX * 8).toFixed(2);
            cardGroup.style.transform = `translate3d(${(currentX - 130).toFixed(1)}px, ${currentY.toFixed(1)}px, 0px) rotate(${rotateZ}deg) rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
        }

        function loop() {
            if (isDroppingIn) {
                dropTime += 0.04;
                const t = dropTime * Math.PI * 2.2, decay = Math.exp(-dropTime * 3.5);
                currentY = REST_Y - (80 * Math.cos(t) * decay);
                rotation = -6 * Math.cos(t * 0.9) * decay;
                currentX = REST_X + (12 * Math.sin(t) * decay);
                updateRender();
                if (dropTime > 1.2 || decay < 0.005) {
                    isDroppingIn = false; currentX = REST_X; currentY = REST_Y; rotation = 0; vx = 0; vy = 0; vRot = 0; updateRender();
                } else { animFrameId = requestAnimationFrame(loop); return; }
            }

            if (isDragging) {
                const targetDx = targetX - currentX, targetDy = targetY - currentY;
                vx = targetDx * 0.38; vy = targetDy * 0.38;
                currentX += vx; currentY += vy;
                const pullAngle = Math.atan2(currentX - ANCHOR_X, currentY - ANCHOR_Y) * (180 / Math.PI);
                const clampedAngle = Math.max(-30, Math.min(30, pullAngle * 0.75));
                vRot = (clampedAngle - rotation) * 0.32; rotation += vRot;
                updateRender(); animFrameId = requestAnimationFrame(loop); return;
            }

            const springK = 0.072, damping = 0.915, rotK = 0.085, rotDamping = 0.895;
            const targetRestX = REST_X + (hoverTiltX * 10), targetRestY = REST_Y + (hoverTiltY * 6);
            vx = (vx + -springK * (currentX - targetRestX)) * damping;
            vy = (vy + -springK * (currentY - targetRestY)) * damping;
            currentX += vx; currentY += vy;
            const ropeAngle = Math.atan2(currentX - ANCHOR_X, currentY - ANCHOR_Y) * (180 / Math.PI);
            vRot = (vRot + -rotK * (rotation - (ropeAngle * 0.82 + hoverTiltX * 4))) * rotDamping;
            rotation += vRot;
            updateRender();

            const settled = Math.abs(currentX - targetRestX) < 0.08 && Math.abs(currentY - targetRestY) < 0.08 &&
                            Math.abs(vx) < 0.04 && Math.abs(vy) < 0.04 &&
                            Math.abs(rotation - hoverTiltX * 4) < 0.08 && Math.abs(vRot) < 0.04;
            if (!settled) { animFrameId = requestAnimationFrame(loop); }
            else { currentX = targetRestX; currentY = targetRestY; rotation = hoverTiltX * 4; vx = 0; vy = 0; vRot = 0; updateRender(); animFrameId = null; }
        }

        function getSvgPoint(e) {
            const rect = svg.getBoundingClientRect();
            return { x: (e.clientX - rect.left) * (360 / Math.max(1, rect.width)), y: (e.clientY - rect.top) * (580 / Math.max(1, rect.height)) };
        }

        cardGroup.addEventListener('pointerdown', e => {
            if (e.button !== undefined && e.button !== 0) return;
            e.preventDefault();
            try { cardGroup.setPointerCapture(e.pointerId); } catch(err) {}
            isDragging = true; isDroppingIn = false;
            const pt = getSvgPoint(e); dragStartX = pt.x; dragStartY = pt.y; cardStartX = currentX; cardStartY = currentY; targetX = currentX; targetY = currentY;
            cardGroup.style.cursor = 'grabbing';
            if (!hasInteracted) {
                hasInteracted = true;
                if (dragHint) { dragHint.style.opacity = '0'; dragHint.style.transform = 'translate(-50%, 8px)'; setTimeout(() => dragHint.remove(), 350); }
            }
            if (!animFrameId) animFrameId = requestAnimationFrame(loop);
        });

        window.addEventListener('pointermove', e => {
            if (!isDragging) {
                const containerRect = container.getBoundingClientRect();
                const isInside = e.clientX >= containerRect.left && e.clientX <= containerRect.right && e.clientY >= containerRect.top && e.clientY <= containerRect.bottom;
                if (isInside) {
                    hoverTiltX = ((e.clientX - containerRect.left) / containerRect.width - 0.5) * 2 * 0.6;
                    hoverTiltY = ((e.clientY - containerRect.top) / containerRect.height - 0.5) * 2 * 0.4;
                } else { hoverTiltX = 0; hoverTiltY = 0; }
                if (!animFrameId && (hoverTiltX !== 0 || hoverTiltY !== 0)) animFrameId = requestAnimationFrame(loop);
                return;
            }
            const pt = getSvgPoint(e);
            targetX = Math.max(45, Math.min(315, cardStartX + (pt.x - dragStartX)));
            targetY = Math.max(65, Math.min(340, cardStartY + (pt.y - dragStartY)));
        }, { passive: false });

        const onPointerUp = e => {
            if (!isDragging) return;
            isDragging = false;
            try { cardGroup.releasePointerCapture(e.pointerId); } catch(err) {}
            cardGroup.style.cursor = 'grab';
            vx = (targetX - currentX) * 0.45; vy = (targetY - currentY) * 0.45; vRot = rotation * -0.18;
            if (!animFrameId) animFrameId = requestAnimationFrame(loop);
        };
        window.addEventListener('pointerup', onPointerUp);
        window.addEventListener('pointercancel', onPointerUp);

        container.addEventListener('pointerleave', () => {
            hoverTiltX = 0; hoverTiltY = 0;
            if (!isDragging && !animFrameId) animFrameId = requestAnimationFrame(loop);
        });

        updateRender();
        animFrameId = requestAnimationFrame(loop);
    }

    // ============================================================
    // CONTACT FORM (mailto fallback)
    // ============================================================
    function initContactForm() {
        const form = document.getElementById('contactForm');
        const successMsg = document.getElementById('formSuccess');
        if (!form) return;
        form.addEventListener('submit', e => {
            e.preventDefault();
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();
            if (!name || !email || !message) return;

            // Open mailto as fallback (no backend)
            const mailtoBody = `Nama: ${name}%0AEmail: ${email}%0A%0A${message}`;
            const mailtoSubject = encodeURIComponent(subject || `Pesan dari ${name} via Skill Passport`);
            window.location.href = `mailto:arifarifin7373@gmail.com?subject=${mailtoSubject}&body=${mailtoBody}`;

            // Show success message
            form.style.display = 'none';
            if (successMsg) successMsg.classList.remove('hidden');
        });
    }

    // ============================================================
    // INIT ALL
    // ============================================================
    document.addEventListener('DOMContentLoaded', () => {
        renderSkills();
        renderProjects();
        initScrollReveal();
        initNavbarScroll();
        initSmoothScroll();
        initMarquee('aboutMarqueeContainer', 'aboutMarqueeTrack');
        initTechStack('skills');
        initProjectShowcase('projects');
        initLanyard('lanyardContainer');
        initContactForm();
    });
