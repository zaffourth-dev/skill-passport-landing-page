<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Kamarul Arifin Muzaffar — Pengembang Siswa</title>
    <meta name="description" content="Portofolio Kamarul Arifin Muzaffar, seorang pengembang siswa yang tertarik pada pengembangan web, AI, IoT, dan jaringan.">
    <meta name="author" content="Kamarul Arifin Muzaffar">
    <meta name="keywords" content="Kamarul Arifin Muzaffar, Arif, Pengembang Siswa, Web Developer, AI, IoT, Jaringan, SMK Tunas Harapan Pati, TJKT, Laravel, Vue">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Kamarul Arifin Muzaffar — Pengembang Siswa">
    <meta property="og:description" content="Portofolio Kamarul Arifin Muzaffar, seorang pengembang siswa yang tertarik pada pengembangan web, AI, IoT, dan jaringan.">
    <meta property="og:image" content="{{ asset('favicon.svg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Kamarul Arifin Muzaffar — Pengembang Siswa">
    <meta property="twitter:description" content="Portofolio Kamarul Arifin Muzaffar, seorang pengembang siswa yang tertarik pada pengembangan web, AI, IoT, dan jaringan.">

    <!-- Favicon with Coral Wave styling -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='24' fill='%23B0183D'/><text x='50' y='65' font-family='sans-serif' font-size='48' font-weight='700' fill='%23FFD464' text-anchor='middle'>A</text></svg>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFFBF5] text-[#2E0A14] antialiased selection:bg-[#FFD464] selection:text-[#B0183D] min-h-screen flex flex-col justify-between">

    <!-- Sticky Responsive Navbar with Coral Wave palette -->
    <header class="sticky top-0 z-50 w-full bg-[#FFFBF5]/90 backdrop-blur-md border-b border-[#F7DEC8] transition-all duration-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-18 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#hero" class="group flex items-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded-lg p-1">
                <span class="font-heading font-bold text-lg sm:text-xl tracking-tight text-[#2E0A14] group-hover:text-[#E23C64] transition-colors">
                    ARIF<span class="text-[#FF5E5E]">.</span>DEV
                </span>
                <span class="hidden sm:inline-block text-[11px] font-mono uppercase tracking-wider px-2.5 py-0.5 rounded-full bg-[#FCEDD8] text-[#B0183D] border border-[#F7DEC8] font-semibold">
                    Portofolio
                </span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-7 text-sm font-medium text-[#7A3546]" aria-label="Main Navigation">
                <a href="#about" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded px-1 py-0.5">Tentang</a>
                <a href="#skills" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded px-1 py-0.5">Keahlian</a>
                <a href="#projects" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded px-1 py-0.5">Proyek</a>
                <a href="#experience" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded px-1 py-0.5">Pengalaman</a>
                <a href="#organizations" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded px-1 py-0.5">Organisasi</a>
                <a href="#education" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded px-1 py-0.5">Pendidikan</a>
                <a href="#contact" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded px-1 py-0.5">Kontak</a>
            </nav>

            <!-- Actions (Download CV & Mobile Toggle) -->
            <div class="flex items-center gap-3">
                <a href="{{ asset('cv-kamarul-arifin-muzaffar.pdf') }}" 
                   download="CV_Kamarul_Arifin_Muzaffar.pdf"
                   target="_blank"
                   class="inline-flex items-center justify-center gap-2 px-4 py-2 text-xs sm:text-sm font-medium text-[#7A3546] bg-white hover:bg-[#FCEDD8]/70 border border-[#F7DEC8] hover:border-[#FF5E5E]/50 rounded-xl shadow-xs transition-all duration-200 active:scale-95 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E]">
                    <svg class="w-4 h-4 text-[#FF5E5E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span>Unduh CV</span>
                </a>

                <!-- Mobile Hamburger Button -->
                <button type="button" 
                        id="mobileMenuToggle" 
                        class="md:hidden inline-flex items-center justify-center p-2 rounded-xl text-[#7A3546] hover:text-[#2E0A14] hover:bg-[#FCEDD8]/60 border border-[#F7DEC8] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] transition" 
                        aria-expanded="false" 
                        aria-label="Toggle Navigation Menu">
                    <svg id="menuOpenIcon" class="w-5 h-5 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="menuCloseIcon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div id="mobileMenu" class="hidden md:hidden border-b border-[#F7DEC8] bg-[#FFFBF5]/98 backdrop-blur-md px-4 pt-3 pb-6 space-y-1 shadow-lg">
            <a href="#about" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/70 transition">Tentang</a>
            <a href="#skills" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/70 transition">Keahlian / Stack Teknologi</a>
            <a href="#projects" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/70 transition">Proyek Unggulan</a>
            <a href="#experience" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/70 transition">Pengalaman</a>
            <a href="#organizations" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/70 transition">Organisasi</a>
            <a href="#education" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/70 transition">Pendidikan</a>
            <a href="#certifications" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/70 transition">Sertifikasi</a>
            <a href="#contact" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/70 transition">Kontak</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Project Details Modal -->
    <div id="projectModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-[#2E0A14]/40 backdrop-blur-xs p-4 sm:p-6 flex items-center justify-center transition-opacity" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div class="relative bg-white rounded-2xl max-w-xl w-full p-6 sm:p-8 shadow-2xl border border-[#F7DEC8] transform transition-all text-left">
            <button type="button" onclick="closeProjectModal()" class="absolute top-5 right-5 text-[#7A3546] hover:text-[#2E0A14] p-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF5E5E]" aria-label="Close modal">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div id="modalBadge" class="inline-block text-xs font-mono px-2.5 py-1 rounded-full bg-[#FCEDD8] text-[#B0183D] border border-[#F7DEC8] font-semibold mb-3">Peran</div>
            <h3 id="modalTitle" class="text-2xl font-heading font-bold text-[#2E0A14]">Judul Proyek</h3>
            <p id="modalSubtitle" class="text-sm font-medium text-[#E23C64] mb-4">Subjudul</p>
            <p id="modalDesc" class="text-[#7A3546] text-sm leading-relaxed mb-6">Deskripsi</p>
            
            <div class="mb-6">
                <h4 class="text-xs font-semibold uppercase tracking-wider text-[#B0183D] mb-3">Sorotan & Fitur Utama</h4>
                <ul id="modalFeatures" class="space-y-2 text-sm text-[#2E0A14]"></ul>
            </div>

            <div class="mb-6">
                <h4 class="text-xs font-semibold uppercase tracking-wider text-[#B0183D] mb-2">Teknologi yang Digunakan</h4>
                <div id="modalTech" class="flex flex-wrap gap-2"></div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-4 border-t border-[#F7DEC8]">
                <button type="button" onclick="closeProjectModal()" class="px-4 py-2 text-sm font-medium text-[#7A3546] hover:bg-[#FCEDD8]/60 rounded-xl transition">
                    Tutup
                </button>
                <a id="modalActionBtn" href="#contact" class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-[#FF5E5E] via-[#E23C64] to-[#B0183D] hover:opacity-95 shadow-md shadow-[#E23C64]/20 rounded-xl transition">
                    Ajukan Proyek
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w-full bg-white border-t border-[#F7DEC8] py-12 mt-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="flex flex-col sm:items-start items-center text-center sm:text-left">
                <span class="font-heading font-bold text-lg tracking-tight text-[#2E0A14]">
                    ARIF<span class="text-[#FF5E5E]">.</span>DEV
                </span>
                <p class="text-xs text-[#7A3546] mt-1">
                    Membangun, belajar, dan bereksperimen dengan teknologi.
                </p>
            </div>

            <!-- Footer Quick Links -->
            <div class="flex items-center gap-6 text-sm font-medium text-[#7A3546]">
                <a href="https://github.com/zaffourth-dev" target="_blank" rel="noopener noreferrer" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded">
                    GitHub
                </a>
                <a href="https://wa.me/6288212282007" target="_blank" rel="noopener noreferrer" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded">
                    WhatsApp
                </a>
                <a href="mailto:arifarifin7373@gmail.com" class="hover:text-[#B0183D] transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E] rounded">
                    Email
                </a>
            </div>

            <!-- Copyright -->
            <div class="text-xs text-[#7A3546] font-mono text-center sm:text-right">
                © 2026 Kamarul Arifin Muzaffar
            </div>
        </div>
    </footer>

    <!-- Scripts for Interactivity -->
    <script>
        // Mobile Menu Toggle
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

            // Close mobile menu on link click
            document.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    openIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    menuBtn.setAttribute('aria-expanded', 'false');
                });
            });
        }

        // CV Download Handler (Direct download or notification)
        function handleDownloadCv(event) {
            alert("Curriculum Vitae (CV) Kamarul Arifin Muzaffar sedang disiapkan atau dapat diminta langsung melalui email kontak di bawah!");
        }

        // Project Modal Handling
        function openProjectModal(data) {
            const modal = document.getElementById('projectModal');
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
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }

        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeProjectModal();
        });
    </script>
</body>
</html>
