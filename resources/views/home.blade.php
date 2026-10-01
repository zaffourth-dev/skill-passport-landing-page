@extends('layouts.app')

@section('content')
<div class="space-y-24 sm:space-y-32 overflow-hidden">

    <!-- ==================== 1. HERO SECTION WITH INTERACTIVE LANYARD ==================== -->
    <section id="hero" class="relative pt-6 sm:pt-12 lg:pt-16 pb-12 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Coral Wave Ambient Glow -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-gradient-to-tr from-[#FFD464]/30 via-[#FF5E5E]/20 to-[#E23C64]/25 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-6 items-center">
            
            <!-- Left Column: Sequential Staggered Hero Text -->
            <div class="lg:col-span-7 space-y-6 text-left z-10">
                <!-- 1. Small Greeting & Status Pill -->
                <div class="hero-anim-1 flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono font-medium bg-[#FCEDD8] text-[#B0183D] border border-[#F7DEC8] shadow-2xs">
                        <span class="w-2 h-2 rounded-full bg-[#FF5E5E] animate-soft-pulse"></span>
                        Sedang belajar & membangun
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-mono font-medium bg-white/85 text-[#7A3546] border border-[#F7DEC8]">
                        HALO, SAYA ARIF 👋
                    </span>
                </div>

                <!-- 2. Main Heading with Coral Wave gradient -->
                <h1 class="hero-anim-2 text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold tracking-tight text-[#2E0A14] leading-[1.08]">
                    KAMARUL ARIFIN <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#B0183D] via-[#E23C64] to-[#FF5E5E]">MUZAFFAR</span>
                </h1>

                <!-- 3. Subtitle -->
                <p class="hero-anim-3 text-base sm:text-lg font-medium text-[#E23C64] tracking-normal">
                    Pengembang Web & Mobile · Kecerdasan Buatan (AI)
                </p>

                <!-- 4. Description -->
                <p class="hero-anim-4 text-[#7A3546] text-base sm:text-lg leading-relaxed max-w-xl">
                    Siswa SMK Tunas Harapan Pati jurusan TJKT yang berfokus pada pengembangan aplikasi berbasis AI, web, dan game edukasi. Berpengalaman merancang sistem digital yang bermanfaat dengan logika kode yang bersih dan terstruktur.
                </p>

                <!-- 5. CTA Buttons -->
                <div class="hero-anim-5 flex flex-wrap items-center gap-4 pt-2">
                    <a href="#projects" class="group inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-semibold text-white bg-gradient-to-r from-[#FF5E5E] via-[#E23C64] to-[#B0183D] hover:opacity-95 rounded-xl shadow-md shadow-[#E23C64]/25 transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E]">
                        <span>Jelajahi Proyek</span>
                        <svg class="w-4 h-4 text-[#FFD464] transition-transform duration-200 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M17 7H9M17 7v8"></path>
                        </svg>
                    </a>

                    <a href="{{ asset('cv-kamarul-arifin-muzaffar.pdf') }}" 
                       download="CV_Kamarul_Arifin_Muzaffar.pdf"
                       target="_blank"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-semibold text-[#7A3546] bg-white hover:bg-[#FCEDD8]/70 border border-[#F7DEC8] hover:border-[#FF5E5E]/40 rounded-xl shadow-xs transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E]">
                        <svg class="w-4 h-4 text-[#FF5E5E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Unduh CV</span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Interactive Hanging Lanyard Visual with Coral Wave colors -->
            <div class="lg:col-span-5 flex justify-center relative select-none">
                <!-- Lanyard Interactive Canvas -->
                <div id="lanyardContainer" class="relative w-full max-w-[340px] sm:max-w-[360px] h-[520px] sm:h-[560px] flex justify-center touch-none">
                    
                    <!-- Ambient soft glow behind card in Coral Wave tones -->
                    <div class="absolute top-28 w-64 h-64 bg-gradient-to-r from-[#FFD464]/35 via-[#FF5E5E]/30 to-[#E23C64]/30 rounded-full blur-2xl pointer-events-none -z-10"></div>

                    <!-- SVG for Dynamic Hanging Ribbon / Strap -->
                    <svg id="lanyardSvg" class="absolute inset-0 w-full h-full pointer-events-none z-10" viewBox="0 0 360 580" fill="none">
                        <defs>
                            <!-- Coral Wave Lanyard Ribbon Gradient (#B0183D to #E23C64) -->
                            <linearGradient id="strapGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#B0183D" />
                                <stop offset="35%" stop-color="#E23C64" />
                                <stop offset="65%" stop-color="#FF5E5E" />
                                <stop offset="100%" stop-color="#B0183D" />
                            </linearGradient>

                            <!-- Metallic clip gradient -->
                            <linearGradient id="metalGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#FFFDF9" />
                                <stop offset="50%" stop-color="#E2C9B6" />
                                <stop offset="100%" stop-color="#F7DEC8" />
                            </linearGradient>

                            <filter id="strapShadow" x="-20%" y="-10%" width="140%" height="120%">
                                <feDropShadow dx="0" dy="4" stdDeviation="3" flood-opacity="0.22" flood-color="#B0183D" />
                            </filter>
                        </defs>

                        <!-- Top Mount Peg on Ceiling -->
                        <g>
                            <rect x="166" y="0" width="28" height="6" rx="2" fill="#B0183D" />
                            <circle cx="180" cy="5" r="4" fill="#FFD464" />
                        </g>

                        <!-- The Dynamic SVG Strap Path -->
                        <path id="lanyardStrap" 
                              d="M 180 0 C 180 60, 180 100, 180 140" 
                              stroke="url(#strapGrad)" 
                              stroke-width="14" 
                              stroke-linecap="round" 
                              filter="url(#strapShadow)" />
                        <!-- Inner Golden Amber Woven Accent Stitch Line (#FFD464) -->
                        <path id="lanyardStrapInner" 
                              d="M 180 0 C 180 60, 180 100, 180 140" 
                              stroke="#FFD464" 
                              stroke-width="2.5" 
                              stroke-dasharray="6 3"
                              stroke-linecap="round" 
                              opacity="0.95" />
                    </svg>

                    <!-- The Lanyard ID Card Wrapper (Draggable Physical Object) -->
                    <div id="lanyardCardWrapper" 
                         class="absolute top-0 left-0 w-[260px] cursor-grab active:cursor-grabbing will-change-transform z-20 origin-top"
                         style="transform: translate3d(50px, 140px, 0px);">

                        <!-- Swivel Hook & Metal Clip on Card -->
                        <div class="flex flex-col items-center -mb-2">
                            <!-- Metal Ring -->
                            <div class="w-6 h-6 rounded-full border-[3.5px] border-[#E2C9B6] bg-transparent -mb-1 shadow-xs"></div>
                            <!-- Swivel Body & Clip -->
                            <div class="w-4 h-6 bg-gradient-to-b from-white via-[#E2C9B6] to-[#CBD5E1] rounded-t-xs rounded-b-sm border border-[#E2C9B6] shadow-xs flex items-center justify-center">
                                <div class="w-1.5 h-3 bg-[#B0183D] rounded-full"></div>
                            </div>
                        </div>

                        <!-- Badge Holder Case (Realistic Clear Badge Holder) -->
                        <div class="relative bg-white/95 backdrop-blur-md rounded-2xl border-2 border-[#F7DEC8] shadow-xl overflow-hidden p-4 group transition-shadow duration-300 hover:shadow-2xl">
                            
                            <!-- Plastic Sleeve Slot Punch at top -->
                            <div class="w-12 h-2.5 mx-auto -mt-1.5 mb-3 bg-[#FCEDD8] rounded-full border border-[#F7DEC8] shadow-inner"></div>

                            <!-- Holographic Coral Sheen Overlay -->
                            <div class="absolute inset-0 hologram-sheen opacity-45 pointer-events-none rounded-2xl"></div>

                            <!-- Badge Header -->
                            <div class="flex items-center justify-between pb-2 mb-3 border-b border-[#F7DEC8]/60 relative">
                                <div class="flex items-center gap-1.5">
                                    <div class="w-6 h-6 rounded-md bg-gradient-to-br from-[#B0183D] to-[#E23C64] text-[#FFD464] flex items-center justify-center font-heading font-bold text-xs shadow-xs">
                                        TH
                                    </div>
                                    <div class="leading-none">
                                        <p class="font-heading font-bold text-[11px] text-[#2E0A14] tracking-tight">SMK TUNAS HARAPAN</p>
                                        <p class="text-[9px] font-mono text-[#7A3546]">PATI · TJKT</p>
                                    </div>
                                </div>
                                <span class="text-[9px] font-mono font-bold px-1.5 py-0.5 rounded bg-[#FCEDD8] text-[#B0183D] border border-[#F7DEC8]">
                                    NO. 21
                                </span>
                            </div>

                            <!-- Skill Passport Title -->
                            <div class="text-center py-1 px-2 rounded-lg bg-gradient-to-r from-[#FCEDD8] via-[#FFD464]/30 to-[#FCEDD8] border border-[#F7DEC8] mb-3">
                                <span class="font-heading font-extrabold text-xs tracking-wider text-[#B0183D] uppercase">
                                    PETA KETERAMPILAN
                                </span>
                            </div>

                            <!-- Student Photo / Avatar Area -->
                            <div class="relative w-28 h-28 mx-auto rounded-xl bg-gradient-to-br from-[#FCEDD8] via-white to-[#FCEDD8] border-2 border-white shadow-sm overflow-hidden mb-3">
                                <img
                                    src="{{ asset('images/kamarul.jpg') }}"
                                    alt="Foto Kamarul Arifin Muzaffar"
                                    class="w-full h-full object-cover object-top"
                                    onerror="this.onerror=null; this.src='{{ asset('images/profile-placeholder.svg') }}';"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-[#2E0A14]/10 via-transparent to-white/10 pointer-events-none"></div>

                                <!-- Security Holo Seal in Corner in Coral Wave Gradient -->
                                <div class="absolute bottom-1 right-1 w-5 h-5 rounded-full bg-gradient-to-tr from-[#FFD464] via-[#FF5E5E] to-[#E23C64] border border-white shadow-xs opacity-95 flex items-center justify-center text-[7px] font-bold text-white font-mono">
                                    ✓
                                </div>
                            </div>

                            <!-- Student Details -->
                            <div class="space-y-1 text-center font-mono">
                                <h4 class="font-heading font-bold text-sm text-[#2E0A14] leading-tight">
                                    Kamarul Arifin M.
                                </h4>
                                <p class="text-[11px] font-semibold text-[#E23C64]">
                                    Pengembang Web & AI
                                </p>
                                <div class="pt-1 text-[10px] text-[#7A3546] flex items-center justify-center gap-2">
                                    <span>Kelas: XII TJKT 1</span>
                                    <span>•</span>
                                    <span>Nilai: 88,79</span>
                                </div>
                            </div>

                            <!-- Barcode / Security Footer -->
                            <div class="mt-3 pt-2 border-t border-[#F7DEC8]/60 flex items-center justify-between">
                                <!-- Simulated barcode lines -->
                                <div class="flex items-center gap-0.5 h-4 opacity-75">
                                    <span class="w-1 h-full bg-[#2E0A14]"></span>
                                    <span class="w-0.5 h-full bg-[#2E0A14]"></span>
                                    <span class="w-1.5 h-full bg-[#2E0A14]"></span>
                                    <span class="w-0.5 h-full bg-[#2E0A14]"></span>
                                    <span class="w-2 h-full bg-[#2E0A14]"></span>
                                    <span class="w-0.5 h-full bg-[#2E0A14]"></span>
                                    <span class="w-1 h-full bg-[#2E0A14]"></span>
                                    <span class="w-1.5 h-full bg-[#2E0A14]"></span>
                                    <span class="w-0.5 h-full bg-[#2E0A14]"></span>
                                    <span class="w-1 h-full bg-[#2E0A14]"></span>
                                </div>
                                <span class="text-[9px] font-mono text-[#E23C64] font-semibold flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#FF5E5E]"></span>
                                    TERVERIFIKASI
                                </span>
                            </div>
                        </div>

                        <!-- First Time Floating Drag Hint in Coral Wave Ruby -->
                        <div id="lanyardDragHint" 
                             class="absolute -bottom-10 left-1/2 -translate-x-1/2 px-3 py-1 rounded-full bg-[#B0183D] text-[#FCEDD8] text-[11px] font-mono whitespace-nowrap shadow-md border border-[#FF5E5E]/40 flex items-center gap-1.5 pointer-events-none transition-all duration-300">
                            <span class="animate-bounce text-[#FFD464]">↕</span>
                            <span>Tarik / Seret saya</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ==================== 2. ABOUT SECTION ==================== -->
    <section id="about" class="reveal-item max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="bg-white rounded-3xl border border-[#F7DEC8] p-8 sm:p-12 shadow-xs transition-shadow duration-300 hover:shadow-md">
            <div class="max-w-3xl">
                <span class="text-xs font-mono font-semibold uppercase tracking-wider text-[#E23C64]">Latar Belakang & Filosofi</span>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#2E0A14] mt-2 mb-4">
                    Tentang Saya
                </h2>
                <p class="text-[#7A3546] text-base sm:text-lg leading-relaxed mb-6">
                    Siswa SMK Tunas Harapan Pati jurusan Teknik Jaringan Komputer dan Telekomunikasi (TJKT) yang memiliki minat tinggi pada bidang Artificial Intelligence (AI), Web & Mobile Development, Internet of Things (IoT), dan jaringan komputer. Berpengalaman mengembangkan aplikasi berbasis AI, web, dan game edukasi serta aktif berprestasi di kompetisi teknologi nasional. Memiliki kemampuan analisis, berpikir kritis, pemecahan masalah, serta siap bekerja secara mandiri maupun dalam tim.
                </p>

                <!-- Prestasi & Capaian Unggulan -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-10">
                    <div class="p-3.5 rounded-2xl bg-[#FCEDD8]/70 border border-[#F7DEC8] flex items-start gap-2.5">
                        <span class="text-xl">🏆</span>
                        <div>
                            <p class="text-xs font-heading font-bold text-[#B0183D]">Top 10 Nasional</p>
                            <p class="text-[11px] text-[#7A3546]">LKS Artificial Intelligence (AI) 2026</p>
                        </div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#FCEDD8]/70 border border-[#F7DEC8] flex items-start gap-2.5">
                        <span class="text-xl">🥇</span>
                        <div>
                            <p class="text-xs font-heading font-bold text-[#B0183D]">Juara 1</p>
                            <p class="text-[11px] text-[#7A3546]">Pelajar Pati Action (PPA) 2024</p>
                        </div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-[#FCEDD8]/70 border border-[#F7DEC8] flex items-start gap-2.5">
                        <span class="text-xl">📊</span>
                        <div>
                            <p class="text-xs font-heading font-bold text-[#B0183D]">Nilai Akhir: 88,79</p>
                            <p class="text-[11px] text-[#7A3546]">SMK Tunas Harapan Pati (TJKT)</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Continuous Infinite Horizontal Card Marquee (Left -> Right) -->
            <div id="aboutMarqueeContainer" 
                 class="marquee-viewport relative w-full overflow-hidden py-3 select-none cursor-grab active:cursor-grabbing"
                 aria-label="Focus Areas Infinite Marquee">
                <div id="aboutMarqueeTrack" class="marquee-track flex items-stretch gap-5 w-max">
                    <!-- Sequence 1 (Original 4 Focus Cards) -->
                    <!-- Focus 1: Pengembangan Web -->
                    <div class="marquee-card w-[240px] sm:w-[260px] lg:w-[280px] shrink-0 p-5 rounded-2xl bg-[#FFFBF5] border border-[#F7DEC8] hover:border-[#FF5E5E]/60 hover:bg-[#FCEDD8]/40 shadow-xs hover:shadow-md transition-all duration-200 group">
                        <div class="w-10 h-10 rounded-xl bg-[#FF5E5E]/15 text-[#FF5E5E] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading font-semibold text-[#2E0A14] text-base mb-1">Pengembangan Web</h3>
                        <p class="text-xs text-[#7A3546] leading-normal">
                            Aplikasi web full-stack modern dengan Laravel, Vue, API yang rapi, dan rekayasa database.
                        </p>
                    </div>

                    <!-- Focus 2: AI & Pemrograman -->
                    <div class="marquee-card w-[240px] sm:w-[260px] lg:w-[280px] shrink-0 p-5 rounded-2xl bg-[#FFFBF5] border border-[#F7DEC8] hover:border-[#E23C64]/60 hover:bg-[#FCEDD8]/40 shadow-xs hover:shadow-md transition-all duration-200 group">
                        <div class="w-10 h-10 rounded-xl bg-[#E23C64]/15 text-[#E23C64] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading font-semibold text-[#2E0A14] text-base mb-1">AI & Pemrograman</h3>
                        <p class="text-xs text-[#7A3546] leading-normal">
                            Menjelajahi kecerdasan buatan, logika algoritma, Python, C#, dan prinsip arsitektur perangkat lunak.
                        </p>
                    </div>

                    <!-- Focus 3: IoT -->
                    <div class="marquee-card w-[240px] sm:w-[260px] lg:w-[280px] shrink-0 p-5 rounded-2xl bg-[#FFFBF5] border border-[#F7DEC8] hover:border-[#FFD464] hover:bg-[#FCEDD8]/40 shadow-xs hover:shadow-md transition-all duration-200 group">
                        <div class="w-10 h-10 rounded-xl bg-[#FFD464]/30 text-[#B0183D] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading font-semibold text-[#2E0A14] text-base mb-1">Internet of Things</h3>
                        <p class="text-xs text-[#7A3546] leading-normal">
                            Penghubung perangkat keras dan perangkat lunak, automasi sensor, sistem tertanam, dan data telemetri.
                        </p>
                    </div>

                    <!-- Focus 4: Jaringan -->
                    <div class="marquee-card w-[240px] sm:w-[260px] lg:w-[280px] shrink-0 p-5 rounded-2xl bg-[#FFFBF5] border border-[#F7DEC8] hover:border-[#B0183D]/60 hover:bg-[#FCEDD8]/40 shadow-xs hover:shadow-md transition-all duration-200 group">
                        <div class="w-10 h-10 rounded-xl bg-[#B0183D]/15 text-[#B0183D] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading font-semibold text-[#2E0A14] text-base mb-1">Jaringan</h3>
                        <p class="text-xs text-[#7A3546] leading-normal">
                            Sistem server Linux, konfigurasi MikroTik, sandbox VirtualBox, dan routing TCP/IP.
                        </p>
                    </div>

                    <!-- Sequence 2 (Duplicated for Seamless Infinite Loop) -->
                    <!-- Focus 1 Duplicate -->
                    <div class="marquee-duplicate marquee-card w-[240px] sm:w-[260px] lg:w-[280px] shrink-0 p-5 rounded-2xl bg-[#FFFBF5] border border-[#F7DEC8] hover:border-[#FF5E5E]/60 hover:bg-[#FCEDD8]/40 shadow-xs hover:shadow-md transition-all duration-200 group" aria-hidden="true">
                        <div class="w-10 h-10 rounded-xl bg-[#FF5E5E]/15 text-[#FF5E5E] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading font-semibold text-[#2E0A14] text-base mb-1">Pengembangan Web</h3>
                        <p class="text-xs text-[#7A3546] leading-normal">
                            Aplikasi web full-stack modern dengan Laravel, Vue, API yang rapi, dan rekayasa database.
                        </p>
                    </div>

                    <!-- Focus 2 Duplicate -->
                    <div class="marquee-duplicate marquee-card w-[240px] sm:w-[260px] lg:w-[280px] shrink-0 p-5 rounded-2xl bg-[#FFFBF5] border border-[#F7DEC8] hover:border-[#E23C64]/60 hover:bg-[#FCEDD8]/40 shadow-xs hover:shadow-md transition-all duration-200 group" aria-hidden="true">
                        <div class="w-10 h-10 rounded-xl bg-[#E23C64]/15 text-[#E23C64] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading font-semibold text-[#2E0A14] text-base mb-1">AI & Pemrograman</h3>
                        <p class="text-xs text-[#7A3546] leading-normal">
                            Menjelajahi kecerdasan buatan, logika algoritma, Python, C#, dan prinsip arsitektur perangkat lunak.
                        </p>
                    </div>

                    <!-- Focus 3 Duplicate -->
                    <div class="marquee-duplicate marquee-card w-[240px] sm:w-[260px] lg:w-[280px] shrink-0 p-5 rounded-2xl bg-[#FFFBF5] border border-[#F7DEC8] hover:border-[#FFD464] hover:bg-[#FCEDD8]/40 shadow-xs hover:shadow-md transition-all duration-200 group" aria-hidden="true">
                        <div class="w-10 h-10 rounded-xl bg-[#FFD464]/30 text-[#B0183D] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading font-semibold text-[#2E0A14] text-base mb-1">Internet of Things</h3>
                        <p class="text-xs text-[#7A3546] leading-normal">
                            Penghubung perangkat keras dan perangkat lunak, automasi sensor, sistem tertanam, dan data telemetri.
                        </p>
                    </div>

                    <!-- Focus 4 Duplicate -->
                    <div class="marquee-duplicate marquee-card w-[240px] sm:w-[260px] lg:w-[280px] shrink-0 p-5 rounded-2xl bg-[#FFFBF5] border border-[#F7DEC8] hover:border-[#B0183D]/60 hover:bg-[#FCEDD8]/40 shadow-xs hover:shadow-md transition-all duration-200 group" aria-hidden="true">
                        <div class="w-10 h-10 rounded-xl bg-[#B0183D]/15 text-[#B0183D] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h3 class="font-heading font-semibold text-[#2E0A14] text-base mb-1">Jaringan</h3>
                        <p class="text-xs text-[#7A3546] leading-normal">
                            Sistem server Linux, konfigurasi MikroTik, sandbox VirtualBox, dan routing TCP/IP.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 3. SKILLS / TECH STACK ==================== -->
    <section id="skills" class="reveal-item max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24 relative">
        <!-- Subtle floating pastel shapes in background -->
        <div class="absolute -top-12 left-6 w-72 h-72 bg-gradient-to-tr from-[#FFD464]/15 to-[#FF5E5E]/15 rounded-full blur-3xl -z-10 pointer-events-none animate-tech-float-1"></div>
        <div class="absolute -bottom-10 right-6 w-80 h-80 bg-gradient-to-br from-[#E23C64]/15 to-[#B0183D]/15 rounded-full blur-3xl -z-10 pointer-events-none animate-tech-float-2"></div>

        <div class="text-left mb-10">
            <span class="text-xs font-mono font-semibold uppercase tracking-wider text-[#E23C64]">Kapabilitas Utama</span>
            <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#2E0A14] mt-1">
                Stack Teknologi
            </h2>
            <p class="text-[#7A3546] text-sm mt-1">
                Teknologi dan alat yang saya gunakan dalam pengembangan perangkat lunak dan sistem jaringan.
            </p>
        </div>

        @php
            $categoryAccents = [
                'Kecerdasan Buatan (AI)' => [
                    'spotlight' => 'rgba(226, 60, 100, 0.12)',
                    'dot' => 'bg-[#E23C64]',
                    'badge_bg' => 'bg-[#FCEDD8]',
                    'badge_text' => 'text-[#B0183D]',
                    'badge_border' => 'border-[#F7DEC8]',
                ],
                'Pengembangan Web & Mobile' => [
                    'spotlight' => 'rgba(56, 189, 248, 0.09)',
                    'dot' => 'bg-[#0284C7]',
                    'badge_bg' => 'bg-[#E0F2FE]',
                    'badge_text' => 'text-[#0369A1]',
                    'badge_border' => 'border-sky-200',
                ],
                'Bahasa Pemrograman' => [
                    'spotlight' => 'rgba(255, 94, 94, 0.09)',
                    'dot' => 'bg-[#FF5E5E]',
                    'badge_bg' => 'bg-[#FCEDD8]',
                    'badge_text' => 'text-[#B0183D]',
                    'badge_border' => 'border-[#F7DEC8]',
                ],
                'Jaringan & IoT' => [
                    'spotlight' => 'rgba(245, 158, 11, 0.09)',
                    'dot' => 'bg-[#D97706]',
                    'badge_bg' => 'bg-[#FEF3C7]',
                    'badge_text' => 'text-[#B45309]',
                    'badge_border' => 'border-amber-200',
                ],
                'Alat & Workflow' => [
                    'spotlight' => 'rgba(16, 185, 129, 0.09)',
                    'dot' => 'bg-[#059669]',
                    'badge_bg' => 'bg-[#ECFDF5]',
                    'badge_text' => 'text-[#047857]',
                    'badge_border' => 'border-emerald-200',
                ],
                'Keahlian Non-Teknis' => [
                    'spotlight' => 'rgba(168, 85, 247, 0.09)',
                    'dot' => 'bg-[#9333EA]',
                    'badge_bg' => 'bg-[#F3E8FF]',
                    'badge_text' => 'text-[#7E22CE]',
                    'badge_border' => 'border-purple-200',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($skills as $category => $categorySkills)
                @php
                    $accent = $categoryAccents[$category] ?? [
                        'spotlight' => 'rgba(255, 94, 94, 0.08)',
                        'dot' => 'bg-[#FF5E5E]',
                        'badge_bg' => 'bg-[#FCEDD8]',
                        'badge_text' => 'text-[#B0183D]',
                        'badge_border' => 'border-[#F7DEC8]',
                    ];
                @endphp
                <div class="tech-card tech-stagger-{{ $loop->iteration }} bg-white rounded-2xl border border-[#F7DEC8] p-6 shadow-xs hover:shadow-xl transition-all duration-300 relative overflow-hidden group">
                    <!-- Cursor-following hover spotlight -->
                    <div class="tech-spotlight-layer" style="--spotlight-color: {{ $accent['spotlight'] }};"></div>

                    <!-- Card Header -->
                    <div class="flex items-center justify-between pb-3 mb-4 border-b border-[#F7DEC8]/60 relative z-10">
                        <h3 class="tech-card-title font-heading font-semibold text-[#2E0A14] text-base">
                            {{ $category }}
                        </h3>
                        <span class="tech-card-badge text-xs font-mono {{ $accent['badge_text'] }} {{ $accent['badge_bg'] }} px-2.5 py-0.5 rounded-full border {{ $accent['badge_border'] }} font-medium shadow-2xs">
                            {{ count($categorySkills) }} alat
                        </span>
                    </div>

                    <!-- Interactive Tool Pills with Signal Effect -->
                    <div class="flex flex-wrap gap-2 relative z-10">
                        @foreach($categorySkills as $skill)
                            <span class="tech-pill inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-mono font-medium text-[#7A3546] bg-[#FFFBF5] hover:bg-[#FCEDD8] hover:text-[#B0183D] border border-[#F7DEC8] hover:border-slate-300 transition-all cursor-default select-none shadow-2xs">
                                <span class="tech-pill-dot w-1.5 h-1.5 rounded-full {{ $accent['dot'] }}"></span>
                                {{ $skill->name }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- ==================== 4. FEATURED PROJECTS (SCROLL-DRIVEN SHOWCASE) ==================== -->
    <section id="projects" class="reveal-item max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <!-- Project Showcase Header with Dynamic Moving Index -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
            <div>
                <div class="flex items-center gap-2 project-header-label">
                    <span class="text-xs font-mono font-semibold uppercase tracking-wider text-[#E23C64]">Karya Terpilih</span>
                    <span class="text-xs font-mono text-slate-300">•</span>
                    <!-- Moving Project Index Indicator (01 / 03 ATLAS MBG) -->
                    <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-[#FCEDD8] border border-[#F7DEC8] text-xs font-mono font-semibold text-[#B0183D]">
                        <span id="projectActiveIndex" class="project-index-number">01</span>
                        <span class="opacity-60">/</span>
                        <span>03</span>
                        <span class="opacity-40">•</span>
                        <span id="projectActiveName" class="truncate max-w-[130px] font-sans font-medium text-[#2E0A14]">ATLAS MBG</span>
                    </div>
                </div>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#2E0A14] mt-1.5">
                    Proyek Unggulan
                </h2>
                <p class="text-[#7A3546] text-sm mt-1">
                    Solusi digital yang praktis dan dibuat dengan kode yang bersih serta tujuan yang jelas.
                </p>
            </div>
            <span class="project-header-badge text-xs font-mono text-[#B0183D] bg-[#FCEDD8] px-3 py-1 rounded-full border border-[#F7DEC8] font-medium shadow-2xs w-fit">
                ● 3 Tampilan MVP
            </span>
        </div>
        <!-- Sequential Project Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="project-card project-wipe-{{ $loop->iteration }} bg-white rounded-3xl border border-[#F7DEC8] overflow-hidden flex flex-col justify-between shadow-xs hover:border-[#FF5E5E]/60 transition-all duration-300 group"
                     data-project-index="{{ $loop->index }}">
                    
                    <!-- Moving Edge Scan Highlight on Hover -->
                    <div class="project-edge-scan absolute top-0 left-0 w-28 h-[2.5px] bg-gradient-to-r from-transparent via-[#FF5E5E] to-transparent pointer-events-none z-20"></div>

                    <!-- Project Visual Banner with slow background gradient shift -->
                    <div class="project-header-bg h-44 bg-gradient-to-br from-[#FCEDD8] via-[#FFF9F2] to-[#FFD464]/25 p-6 flex flex-col justify-between border-b border-[#F7DEC8] relative overflow-hidden">
                        <!-- Ambient Glow -->
                        <div class="absolute -right-4 -bottom-4 w-28 h-28 rounded-full bg-[#FF5E5E]/20 blur-xl pointer-events-none group-hover:scale-125 transition-transform duration-500"></div>
                        
                        <div class="flex items-center justify-between z-10">
                            <span class="text-xs font-mono px-2.5 py-1 rounded-full bg-white/95 backdrop-blur-xs text-[#7A3546] border border-[#F7DEC8] font-medium shadow-2xs group-hover:-translate-y-0.5 transition-transform duration-200">
                                {{ $project->role }}
                            </span>
                            @if($project->group_name)
                                <span class="text-xs font-mono px-2.5 py-0.5 rounded-md bg-[#FCEDD8] text-[#B0183D] border border-[#F7DEC8] font-semibold">
                                    {{ $project->group_name }}
                                </span>
                            @endif
                        </div>

                        <div class="z-10">
                            <h3 class="project-title-reveal font-heading font-bold text-xl text-[#2E0A14] group-hover:text-[#E23C64] transition-colors">
                                {{ $project->title }}
                            </h3>
                            <p class="text-xs font-medium text-[#E23C64]">
                                {{ $project->subtitle }}
                            </p>
                        </div>
                    </div>

                    <!-- Thin Expanding Accent Progress Line -->
                    <div class="project-accent-line"></div>

                    <!-- Project Content -->
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-6">
                        <div class="space-y-4">
                            <p class="text-[#7A3546] text-sm leading-relaxed">
                                {{ $project->description }}
                            </p>

                            <!-- Features List with Checkmark Cascade -->
                            @if($project->features && count($project->features))
                                <div class="space-y-1.5">
                                    <span class="text-[11px] font-mono uppercase tracking-wider text-[#B0183D] font-semibold block">Fitur Utama</span>
                                    <ul class="space-y-1.5 text-xs text-[#2E0A14]">
                                        @foreach(array_slice($project->features, 0, 4) as $feature)
                                            <li class="project-feature-item flex items-center gap-2">
                                                <svg class="w-3.5 h-3.5 text-[#FF5E5E] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span>{{ $feature }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Tech tags & Action Button -->
                        <div class="space-y-4 pt-4 border-t border-[#F7DEC8]/60">
                            <div class="flex flex-wrap gap-1.5">
                                @foreach($project->technologies as $tech)
                                    <span class="project-tech-tag text-[11px] font-mono px-2 py-0.5 rounded-md bg-[#FCEDD8]/70 text-[#7A3546] border border-[#F7DEC8] cursor-default">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>

                            <button type="button" 
                                    onclick="openProjectModal({{ json_encode($project) }})" 
                                    class="project-action-btn w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl text-xs font-semibold text-[#7A3546] bg-[#FFFBF5] hover:bg-gradient-to-r hover:from-[#FF5E5E] hover:to-[#B0183D] hover:text-white border border-[#F7DEC8] hover:border-transparent transition-all duration-200 active:scale-98 shadow-2xs">
                                <span>Lihat Detail Proyek</span>
                                <svg class="project-arrow-icon w-3.5 h-3.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- ==================== 5. EXPERIENCE & TIMELINE ==================== -->
    <section id="experience" class="reveal-item max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-4">
                <span class="text-xs font-mono font-semibold uppercase tracking-wider text-[#E23C64]">Jejak Kerja</span>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#2E0A14] mt-1">
                    Pengalaman
                </h2>
                <p class="text-[#7A3546] text-sm mt-2 leading-relaxed">
                    Pencapaian pengembang siswa yang teruji, praktik teknik langsung, dan implementasi teknis nyata.
                </p>
            </div>

            <div class="lg:col-span-8 bg-white rounded-3xl border border-[#F7DEC8] p-6 sm:p-8 shadow-xs">
                <div class="relative border-l-2 border-[#F7DEC8] ml-3 space-y-8">
                    @foreach($experiences as $exp)
                        <div class="reveal-item stagger-{{ $loop->iteration }} relative pl-6 sm:pl-8 group">
                            <!-- Bullet dot in Coral Wave -->
                            <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-[#FFD464] border-2 border-[#FF5E5E] group-hover:scale-125 transition-transform"></div>
                            
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 mb-1">
                                <h3 class="font-heading font-bold text-[#2E0A14] text-base sm:text-lg">
                                    {{ $exp->title }}
                                </h3>
                                <span class="text-xs font-mono text-[#B0183D] bg-[#FCEDD8] px-2.5 py-0.5 rounded-full border border-[#F7DEC8] inline-block w-fit font-medium">
                                    {{ $exp->period }}
                                </span>
                            </div>
                            
                            <p class="text-xs font-medium text-[#E23C64] mb-2">
                                Peran: {{ $exp->role }}
                            </p>
                            
                            <p class="text-[#7A3546] text-sm leading-relaxed">
                                {{ $exp->description }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 6. ORGANIZATIONS ==================== -->
    <section id="organizations" class="reveal-item max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-4">
                <span class="text-xs font-mono font-semibold uppercase tracking-wider text-[#E23C64]">Kepemimpinan & Kerja Tim</span>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#2E0A14] mt-1">
                    Organisasi
                </h2>
                <p class="text-[#7A3546] text-sm mt-2 leading-relaxed">
                    Pengalaman kepemimpinan siswa dalam membangun tata kelola organisasi dan kolaborasi regional.
                </p>
            </div>

            <div class="lg:col-span-8 bg-white rounded-3xl border border-[#F7DEC8] p-6 sm:p-8 shadow-xs">
                <div class="relative border-l-2 border-[#F7DEC8] ml-3 space-y-8">
                    @foreach($organizations as $org)
                        <div class="reveal-item stagger-{{ $loop->iteration }} relative pl-6 sm:pl-8 group">
                            <!-- Bullet dot -->
                            <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-white border-2 border-[#E23C64] group-hover:scale-125 transition-transform"></div>
                            
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 mb-1">
                                <h3 class="font-heading font-bold text-[#2E0A14] text-base sm:text-lg">
                                    {{ $org->name }}
                                </h3>
                                <span class="text-xs font-mono text-[#B0183D] bg-[#FCEDD8] px-2.5 py-0.5 rounded-full border border-[#F7DEC8] inline-block w-fit font-medium">
                                    {{ $org->period }}
                                </span>
                            </div>

                            @if($org->institution)
                                <p class="text-xs font-medium text-[#7A3546]">
                                    {{ $org->institution }}
                                </p>
                            @endif

                            @if($org->division)
                                <span class="inline-block text-xs font-mono text-[#B0183D] bg-[#FCEDD8]/70 px-2 py-0.5 rounded my-1.5 border border-[#F7DEC8]">
                                    Divisi: {{ $org->division }}
                                </span>
                            @endif

                            @if($org->description)
                                <p class="text-[#7A3546] text-sm leading-relaxed mt-1">
                                    {{ $org->description }}
                                </p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 7. EDUCATION ==================== -->
    <section id="education" class="reveal-item max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="bg-white rounded-3xl border border-[#F7DEC8] p-8 sm:p-12 shadow-xs transition-shadow duration-300 hover:shadow-md">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 mb-6 border-b border-[#F7DEC8]/60">
                <div>
                    <span class="text-xs font-mono font-semibold uppercase tracking-wider text-[#E23C64]">Fondasi Akademik</span>
                    <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#2E0A14] mt-1">
                        Pendidikan
                    </h2>
                </div>
                <span class="text-xs font-mono text-[#7A3546] bg-[#FCEDD8] px-3 py-1 rounded-full border border-[#F7DEC8] w-fit font-medium">
                    Profil Institusi Terverifikasi
                </span>
            </div>

            @if($education)
                <div class="space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                        <div>
                            <h3 class="text-xl sm:text-2xl font-heading font-bold text-[#2E0A14]">
                                {{ $education->institution }}
                            </h3>
                            <p class="text-[#7A3546] text-sm sm:text-base font-medium mt-0.5">
                                {{ $education->major }}
                            </p>
                        </div>
                        <div class="text-left sm:text-right">
                            <span class="inline-block text-xs font-mono font-semibold px-3 py-1 rounded-full bg-[#FCEDD8] text-[#B0183D] border border-[#F7DEC8]">
                                {{ $education->period }}
                            </span>
                            @if($education->location)
                                <p class="text-xs text-[#7A3546] mt-1 font-mono">
                                    📍 {{ $education->location }}
                                </p>
                            @endif
                        </div>
                    </div>

                    @if($education->focus_areas && count($education->focus_areas))
                        <div class="pt-4 border-t border-[#F7DEC8]/60">
                            <span class="text-xs font-mono uppercase tracking-wider text-[#B0183D] font-semibold block mb-3">
                                Kurikulum & Area Fokus
                            </span>
                            <div class="flex flex-wrap gap-2">
                                @foreach($education->focus_areas as $area)
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-mono font-medium bg-[#FFFBF5] text-[#7A3546] border border-[#F7DEC8] hover:-translate-y-0.5 transition-transform duration-150">
                                        <svg class="w-3.5 h-3.5 text-[#FF5E5E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        {{ $area }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>

    <!-- ==================== 8. CERTIFICATIONS ==================== -->
    <section id="certifications" class="reveal-item max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-mono font-semibold uppercase tracking-wider text-[#E23C64]">Verifikasi</span>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#2E0A14] mt-1">
                    Sertifikasi
                </h2>
                <p class="text-[#7A3546] text-sm mt-1">
                    Penyelesaian kursus, kompetensi, dan program pengembang yang telah diakui.
                </p>
            </div>
            <span class="text-xs font-mono text-[#B0183D] bg-[#FCEDD8] px-3 py-1 rounded-full border border-[#F7DEC8] font-medium">
                ● {{ count($certifications) }} Kredensial Terverifikasi
            </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($certifications as $cert)
                <div class="reveal-item stagger-{{ $loop->iteration }} bg-white rounded-2xl border border-[#F7DEC8] p-5 shadow-xs hover:border-[#FF5E5E]/60 hover:shadow-md hover:-translate-y-1 transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-mono font-semibold px-2.5 py-0.5 rounded-full bg-[#FCEDD8] text-[#B0183D] border border-[#F7DEC8]">
                                {{ $cert->issuer }}
                            </span>
                            <span class="w-2 h-2 rounded-full bg-[#FF5E5E]"></span>
                        </div>
                        <h3 class="font-heading font-semibold text-[#2E0A14] text-base leading-snug">
                            {{ $cert->title }}
                        </h3>
                    </div>

                    <div class="mt-4 pt-3 border-t border-[#F7DEC8]/60 flex items-center justify-between text-xs font-mono text-[#7A3546]">
                        <span>Pembelajaran Terverifikasi</span>
                        @if($cert->credential_url)
                            <a href="{{ $cert->credential_url }}" target="_blank" rel="noopener noreferrer" class="text-[#E23C64] hover:text-[#B0183D] font-semibold">
                                Lihat Sertifikat ↗
                            </a>
                        @else
                            <span class="text-[#7A3546]">Tersertifikasi</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- ==================== 9. CONTACT & CTA SECTION ==================== -->
    <section id="contact" class="reveal-item max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <!-- Coral Wave Banner Container -->
        <div class="bg-gradient-to-br from-[#FCEDD8]/90 via-[#FFF9F2] to-[#FFD464]/30 rounded-3xl border border-[#F7DEC8] p-8 sm:p-12 lg:p-16 shadow-xs">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Contact Pitch & Social Links -->
                <div class="lg:col-span-5 space-y-6">
                    <span class="text-xs font-mono font-semibold uppercase tracking-wider text-[#B0183D] bg-[#FCEDD8] px-2.5 py-1 rounded-full border border-[#F7DEC8]">
                        Hubungi Saya
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-[#2E0A14] tracking-tight leading-tight">
                        MARI BANGUN <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#B0183D] via-[#E23C64] to-[#FF5E5E]">SOLUSI YANG BERMANFAAT.</span>
                    </h2>
                    <p class="text-[#7A3546] text-base leading-relaxed">
                        Punya ide proyek, kebutuhan kolaborasi, atau ingin berdiskusi teknis? Saya terbuka untuk membahas peluang yang relevan dan bermanfaat.
                    </p>

                    <!-- Direct Contact Buttons -->
                    <div class="flex flex-wrap gap-3 pt-2">
                        <a href="mailto:arifarifin7373@gmail.com" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/60 border border-[#F7DEC8] shadow-xs transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-[#FF5E5E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>Email</span>
                        </a>

                        <a href="https://wa.me/6288212282007" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/60 border border-[#F7DEC8] shadow-xs transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-[#047857]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                            <span>WhatsApp</span>
                        </a>

                        <a href="https://github.com/zaffourth-dev" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-[#7A3546] hover:text-[#B0183D] hover:bg-[#FCEDD8]/60 border border-[#F7DEC8] shadow-xs transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-[#2E0A14]" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                            </svg>
                            <span>GitHub</span>
                        </a>
                    </div>
                </div>

                <!-- Functional MySQL Contact Form in Coral Wave styling -->
                <div class="lg:col-span-7 bg-white rounded-2xl p-6 sm:p-8 border border-[#F7DEC8] shadow-sm">
                    <!-- Session Feedback Alert -->
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-xl bg-[#FCEDD8] border border-[#F7DEC8] text-[#B0183D] text-sm flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#FF5E5E] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold">Sukses!</p>
                                <p class="text-xs mt-0.5">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-[#FF5E5E]/10 border border-[#FF5E5E]/30 text-[#B0183D] text-sm">
                            <p class="font-semibold mb-1">Mohon periksa kembali formulir:</p>
                            <ul class="list-disc list-inside text-xs space-y-0.5">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-xs font-semibold text-[#2E0A14] mb-1">Nama Anda</label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name') }}"
                                       required 
                                       placeholder="contoh: Budi Santoso" 
                                       class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-[#F7DEC8] bg-[#FFFBF5] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#FF5E5E] focus:border-transparent transition text-[#2E0A14] placeholder-[#7A3546]/50">
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-semibold text-[#2E0A14] mb-1">Alamat Email</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}"
                                       required 
                                       placeholder="budi@example.com" 
                                       class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-[#F7DEC8] bg-[#FFFBF5] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#FF5E5E] focus:border-transparent transition text-[#2E0A14] placeholder-[#7A3546]/50">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-xs font-semibold text-[#2E0A14] mb-1">Subjek (Opsional)</label>
                            <input type="text" 
                                   id="subject" 
                                   name="subject" 
                                   value="{{ old('subject') }}"
                                   placeholder="Kolaborasi proyek, pertanyaan, atau kebutuhan lain" 
                                   class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-[#F7DEC8] bg-[#FFFBF5] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#FF5E5E] focus:border-transparent transition text-[#2E0A14] placeholder-[#7A3546]/50">
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-semibold text-[#2E0A14] mb-1">Pesan</label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="4" 
                                      required 
                                      placeholder="Ceritakan ide atau pesan Anda kepada Arif..." 
                                      class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-[#F7DEC8] bg-[#FFFBF5] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#FF5E5E] focus:border-transparent transition text-[#2E0A14] placeholder-[#7A3546]/50">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-semibold text-white bg-gradient-to-r from-[#FF5E5E] via-[#E23C64] to-[#B0183D] hover:opacity-95 rounded-xl shadow-md shadow-[#E23C64]/25 transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF5E5E]">
                            <span>Kirim Pesan</span>
                            <svg class="w-4 h-4 text-[#FFD464]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
