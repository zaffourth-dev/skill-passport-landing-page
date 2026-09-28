@extends('layouts.app')

@section('content')
<div class="space-y-24 sm:space-y-32">

    <!-- ==================== 1. HERO SECTION ==================== -->
    <section id="hero" class="relative pt-12 sm:pt-20 lg:pt-28 pb-12 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Subtle background pastel glow -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-gradient-to-tr from-sky-200/20 via-purple-200/20 to-emerald-200/20 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            <!-- Left Info Column -->
            <div class="lg:col-span-7 space-y-6 text-left">
                <!-- Status & Greeting Pill -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono font-medium bg-emerald-50 text-emerald-800 border border-emerald-200/80">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-soft-pulse"></span>
                        Currently learning & building
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-mono font-medium bg-slate-100 text-slate-700 border border-slate-200">
                        HELLO, I'M ARIF 👋
                    </span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold tracking-tight text-[#172033] leading-[1.08]">
                    KAMARUL ARIFIN <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-900 via-slate-800 to-sky-700">MUZAFFAR</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg font-medium text-sky-600 tracking-normal">
                    Student Developer · Web · AI · IoT · Networking
                </p>

                <!-- Description -->
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed max-w-xl">
                    I build practical digital experiences through code, creativity, and curiosity.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#projects" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-semibold text-white bg-slate-900 hover:bg-slate-800 rounded-xl shadow-sm hover:shadow-md transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-sky-400">
                        <span>Explore Projects</span>
                        <svg class="w-4 h-4 text-sky-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M17 7H9M17 7v8"></path>
                        </svg>
                    </a>

                    <a href="#contact" 
                       onclick="handleDownloadCv(event)"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-semibold text-slate-700 bg-white hover:bg-slate-50 border border-[#E2E8F0] hover:border-slate-300 rounded-xl shadow-xs transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-sky-400">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Download CV</span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Abstract Developer Visual -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="w-full max-w-md relative">
                    <!-- Ambient pastel gradient backdrop -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-sky-200 via-purple-200 to-emerald-200 rounded-3xl blur-lg opacity-60"></div>
                    
                    <!-- Code Card Container -->
                    <div class="relative bg-white/95 backdrop-blur-md rounded-2xl border border-[#E2E8F0] shadow-xl p-5 sm:p-6 animate-hero-float">
                        <!-- macOS window controls -->
                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-slate-100">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-rose-400"></span>
                                <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                            </div>
                            <span class="text-xs font-mono text-slate-400">arif.config.ts</span>
                            <span class="text-xs font-mono px-2 py-0.5 rounded bg-slate-100 text-slate-500">v1.0</span>
                        </div>

                        <!-- Code Content snippet -->
                        <div class="space-y-1.5 font-mono text-xs sm:text-sm text-slate-700 leading-relaxed overflow-x-auto">
                            <div><span class="text-sky-600 font-semibold">const</span> <span class="text-violet-600">developer</span> = {</div>
                            <div class="pl-4"><span class="text-slate-500">name:</span> <span class="text-emerald-600">'Kamarul Arifin Muzaffar'</span>,</div>
                            <div class="pl-4"><span class="text-slate-500">callsign:</span> <span class="text-emerald-600">'Arif'</span>,</div>
                            <div class="pl-4"><span class="text-slate-500">role:</span> <span class="text-emerald-600">'Student Developer'</span>,</div>
                            <div class="pl-4"><span class="text-slate-500">location:</span> <span class="text-emerald-600">'Pati, Indonesia 🇮🇩'</span>,</div>
                            <div class="pl-4"><span class="text-slate-500">school:</span> <span class="text-emerald-600">'SMK Tunas Harapan Pati'</span>,</div>
                            <div class="pl-4"><span class="text-slate-500">discipline:</span> <span class="text-emerald-600">'TJKT (2024–2027)'</span>,</div>
                            <div class="pl-4"><span class="text-slate-500">passions:</span> [</div>
                            <div class="pl-8"><span class="text-emerald-600">'Web Apps'</span>, <span class="text-emerald-600">'AI'</span>, <span class="text-emerald-600">'IoT'</span>, <span class="text-emerald-600">'Networking'</span></div>
                            <div class="pl-4">]</div>
                            <div>};</div>
                        </div>

                        <!-- Card Footer Indicator -->
                        <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-[11px] font-mono text-slate-400">
                            <span class="flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                                Git branch: main
                            </span>
                            <span class="text-emerald-600 font-medium">Ready for deployment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 2. ABOUT SECTION ==================== -->
    <section id="about" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="bg-white rounded-3xl border border-[#E2E8F0] p-8 sm:p-12 shadow-xs">
            <div class="max-w-3xl">
                <span class="text-xs font-mono font-semibold uppercase tracking-wider text-sky-600">Background & Philosophy</span>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#172033] mt-2 mb-4">
                    About Me
                </h2>
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed mb-10">
                    I'm a Computer and Telecommunication Network Engineering student with an interest in software development, web applications, AI, IoT, and networking. I enjoy turning ideas into practical digital solutions and continuously improving my technical skills through projects and experimentation.
                </p>
            </div>

            <!-- 4 Focus Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <!-- Focus 1: Web Development -->
                <div class="p-5 rounded-2xl bg-slate-50/80 border border-slate-200/80 hover:border-sky-300 hover:bg-sky-50/30 transition-all duration-200 group">
                    <div class="w-10 h-10 rounded-xl bg-sky-100 text-sky-700 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-slate-900 text-base mb-1">Web Development</h3>
                    <p class="text-xs text-slate-500 leading-normal">
                        Modern full-stack web applications with Laravel, Vue, clean APIs, and database engineering.
                    </p>
                </div>

                <!-- Focus 2: AI & Programming -->
                <div class="p-5 rounded-2xl bg-slate-50/80 border border-slate-200/80 hover:border-purple-300 hover:bg-purple-50/30 transition-all duration-200 group">
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-slate-900 text-base mb-1">AI & Programming</h3>
                    <p class="text-xs text-slate-500 leading-normal">
                        Exploring machine intelligence, algorithmic logic, Python, C#, and software architecture principles.
                    </p>
                </div>

                <!-- Focus 3: IoT -->
                <div class="p-5 rounded-2xl bg-slate-50/80 border border-slate-200/80 hover:border-emerald-300 hover:bg-emerald-50/30 transition-all duration-200 group">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-slate-900 text-base mb-1">Internet of Things</h3>
                    <p class="text-xs text-slate-500 leading-normal">
                        Hardware-software bridging, sensor automation, embedded systems, and telemetry data.
                    </p>
                </div>

                <!-- Focus 4: Networking -->
                <div class="p-5 rounded-2xl bg-slate-50/80 border border-slate-200/80 hover:border-blue-300 hover:bg-blue-50/30 transition-all duration-200 group">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center mb-4 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading font-semibold text-slate-900 text-base mb-1">Networking</h3>
                    <p class="text-xs text-slate-500 leading-normal">
                        Linux server systems, MikroTik configuration, VirtualBox sandboxing, and TCP/IP routing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 3. SKILLS / TECH STACK ==================== -->
    <section id="skills" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="text-left mb-10">
            <span class="text-xs font-mono font-semibold uppercase tracking-wider text-sky-600">Core Capabilities</span>
            <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#172033] mt-1">
                Tech Stack
            </h2>
            <p class="text-slate-500 text-sm mt-1">
                Technologies and tools I work with across software development and network systems.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($skills as $category => $categorySkills)
                <div class="bg-white rounded-2xl border border-[#E2E8F0] p-6 shadow-xs hover:border-slate-300 transition-all">
                    <div class="flex items-center justify-between pb-3 mb-4 border-b border-slate-100">
                        <h3 class="font-heading font-semibold text-slate-900 text-base">
                            {{ $category }}
                        </h3>
                        <span class="text-xs font-mono text-slate-400 bg-slate-50 px-2 py-0.5 rounded-full border border-slate-200">
                            {{ count($categorySkills) }} tools
                        </span>
                    </div>

                    <div class="flex flex-wrap gap-2">
                        @foreach($categorySkills as $skill)
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-mono font-medium text-slate-700 bg-slate-50 hover:bg-sky-50 hover:text-sky-800 border border-slate-200 hover:border-sky-300 transition-all duration-150 cursor-default select-none">
                                <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                                {{ $skill->name }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- ==================== 4. FEATURED PROJECTS ==================== -->
    <section id="projects" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-mono font-semibold uppercase tracking-wider text-sky-600">Selected Works</span>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#172033] mt-1">
                    Featured Projects
                </h2>
                <p class="text-slate-500 text-sm mt-1">
                    Practical digital solutions built with clean code and purpose.
                </p>
            </div>
            <span class="text-xs font-mono text-slate-400">
                ● 3 MVP Showcases
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="bg-white rounded-3xl border border-[#E2E8F0] overflow-hidden flex flex-col justify-between shadow-xs hover:shadow-md hover:border-slate-300 transition-all duration-300 group">
                    <!-- Project Visual Placeholder Banner -->
                    <div class="h-44 bg-gradient-to-br from-slate-100 via-sky-50 to-purple-50 p-6 flex flex-col justify-between border-b border-slate-100 relative overflow-hidden">
                        <!-- Decorative geometric lines -->
                        <div class="absolute -right-4 -bottom-4 w-28 h-28 rounded-full bg-sky-200/40 blur-xl pointer-events-none"></div>
                        <div class="flex items-center justify-between z-10">
                            <span class="text-xs font-mono px-2.5 py-1 rounded-full bg-white/90 backdrop-blur-xs text-slate-700 border border-slate-200 font-medium">
                                {{ $project->role }}
                            </span>
                            @if($project->group_name)
                                <span class="text-xs font-mono px-2 py-0.5 rounded-md bg-purple-50 text-purple-700 border border-purple-200">
                                    {{ $project->group_name }}
                                </span>
                            @endif
                        </div>

                        <div class="z-10">
                            <h3 class="font-heading font-bold text-xl text-slate-900 group-hover:text-sky-700 transition-colors">
                                {{ $project->title }}
                            </h3>
                            <p class="text-xs font-medium text-sky-600">
                                {{ $project->subtitle }}
                            </p>
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-6">
                        <div class="space-y-4">
                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $project->description }}
                            </p>

                            <!-- Features List -->
                            @if($project->features && count($project->features))
                                <div class="space-y-1.5">
                                    <span class="text-[11px] font-mono uppercase tracking-wider text-slate-400 font-semibold block">Key Features</span>
                                    <ul class="space-y-1 text-xs text-slate-600">
                                        @foreach(array_slice($project->features, 0, 4) as $feature)
                                            <li class="flex items-center gap-2">
                                                <svg class="w-3.5 h-3.5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span>{{ $feature }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Tech tags & Action -->
                        <div class="space-y-4 pt-4 border-t border-slate-100">
                            <div class="flex flex-wrap gap-1.5">
                                @foreach($project->technologies as $tech)
                                    <span class="text-[11px] font-mono px-2 py-0.5 rounded-md bg-slate-50 text-slate-600 border border-slate-200">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>

                            <button type="button" 
                                    onclick="openProjectModal({{ json_encode($project) }})" 
                                    class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl text-xs font-semibold text-slate-800 bg-slate-50 hover:bg-slate-900 hover:text-white border border-slate-200 transition-all duration-200">
                                <span>View Project Details</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    <section id="experience" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-4">
                <span class="text-xs font-mono font-semibold uppercase tracking-wider text-sky-600">Track Record</span>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#172033] mt-1">
                    Experience
                </h2>
                <p class="text-slate-500 text-sm mt-2 leading-relaxed">
                    Verified student developer milestones, hands-on engineering, and technical implementations.
                </p>
            </div>

            <div class="lg:col-span-8 bg-white rounded-3xl border border-[#E2E8F0] p-6 sm:p-8 shadow-xs">
                <div class="relative border-l-2 border-slate-200 ml-3 space-y-8">
                    @foreach($experiences as $exp)
                        <div class="relative pl-6 sm:pl-8 group">
                            <!-- Bullet dot -->
                            <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-white border-2 border-sky-500 group-hover:scale-125 transition-transform"></div>
                            
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 mb-1">
                                <h3 class="font-heading font-bold text-slate-900 text-base sm:text-lg">
                                    {{ $exp->title }}
                                </h3>
                                <span class="text-xs font-mono text-sky-700 bg-sky-50 px-2.5 py-0.5 rounded-full border border-sky-200/70 inline-block w-fit">
                                    {{ $exp->period }}
                                </span>
                            </div>
                            
                            <p class="text-xs font-medium text-slate-500 mb-2">
                                Role: {{ $exp->role }}
                            </p>
                            
                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $exp->description }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 6. ORGANIZATIONS ==================== -->
    <section id="organizations" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-4">
                <span class="text-xs font-mono font-semibold uppercase tracking-wider text-sky-600">Leadership & Teamwork</span>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#172033] mt-1">
                    Organizations
                </h2>
                <p class="text-slate-500 text-sm mt-2 leading-relaxed">
                    Student leadership experience fostering organizational governance and regional collaboration.
                </p>
            </div>

            <div class="lg:col-span-8 bg-white rounded-3xl border border-[#E2E8F0] p-6 sm:p-8 shadow-xs">
                <div class="relative border-l-2 border-slate-200 ml-3 space-y-8">
                    @foreach($organizations as $org)
                        <div class="relative pl-6 sm:pl-8 group">
                            <!-- Bullet dot -->
                            <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-white border-2 border-purple-500 group-hover:scale-125 transition-transform"></div>
                            
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 mb-1">
                                <h3 class="font-heading font-bold text-slate-900 text-base sm:text-lg">
                                    {{ $org->name }}
                                </h3>
                                <span class="text-xs font-mono text-purple-700 bg-purple-50 px-2.5 py-0.5 rounded-full border border-purple-200/70 inline-block w-fit">
                                    {{ $org->period }}
                                </span>
                            </div>

                            @if($org->institution)
                                <p class="text-xs font-medium text-slate-500">
                                    {{ $org->institution }}
                                </p>
                            @endif

                            @if($org->division)
                                <span class="inline-block text-xs font-mono text-slate-700 bg-slate-100 px-2 py-0.5 rounded my-1.5">
                                    Division: {{ $org->division }}
                                </span>
                            @endif

                            @if($org->description)
                                <p class="text-slate-600 text-sm leading-relaxed mt-1">
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
    <section id="education" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="bg-white rounded-3xl border border-[#E2E8F0] p-8 sm:p-12 shadow-xs">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 mb-6 border-b border-slate-100">
                <div>
                    <span class="text-xs font-mono font-semibold uppercase tracking-wider text-sky-600">Academic Foundation</span>
                    <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#172033] mt-1">
                        Education
                    </h2>
                </div>
                <span class="text-xs font-mono text-slate-500 bg-slate-50 px-3 py-1 rounded-full border border-slate-200 w-fit">
                    Verified Institutional Profile
                </span>
            </div>

            @if($education)
                <div class="space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                        <div>
                            <h3 class="text-xl sm:text-2xl font-heading font-bold text-slate-900">
                                {{ $education->institution }}
                            </h3>
                            <p class="text-slate-600 text-sm sm:text-base font-medium mt-0.5">
                                {{ $education->major }}
                            </p>
                        </div>
                        <div class="text-left sm:text-right">
                            <span class="inline-block text-xs font-mono font-semibold px-3 py-1 rounded-full bg-sky-50 text-sky-800 border border-sky-200">
                                {{ $education->period }}
                            </span>
                            @if($education->location)
                                <p class="text-xs text-slate-400 mt-1 font-mono">
                                    📍 {{ $education->location }}
                                </p>
                            @endif
                        </div>
                    </div>

                    @if($education->focus_areas && count($education->focus_areas))
                        <div class="pt-4 border-t border-slate-100">
                            <span class="text-xs font-mono uppercase tracking-wider text-slate-400 font-semibold block mb-3">
                                Curriculum & Focus Areas
                            </span>
                            <div class="flex flex-wrap gap-2">
                                @foreach($education->focus_areas as $area)
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-mono font-medium bg-slate-50 text-slate-700 border border-slate-200">
                                        <svg class="w-3.5 h-3.5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    <section id="certifications" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
            <div>
                <span class="text-xs font-mono font-semibold uppercase tracking-wider text-sky-600">Verification</span>
                <h2 class="text-2xl sm:text-3xl font-heading font-bold text-[#172033] mt-1">
                    Certifications
                </h2>
                <p class="text-slate-500 text-sm mt-1">
                    Recognized course completions, competencies, and developer programs.
                </p>
            </div>
            <span class="text-xs font-mono text-slate-400">
                ● {{ count($certifications) }} Verified Credentials
            </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($certifications as $cert)
                <div class="bg-white rounded-2xl border border-[#E2E8F0] p-5 shadow-xs hover:border-slate-300 transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-mono font-semibold px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-700">
                                {{ $cert->issuer }}
                            </span>
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        </div>
                        <h3 class="font-heading font-semibold text-slate-900 text-base leading-snug">
                            {{ $cert->title }}
                        </h3>
                    </div>

                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-mono text-slate-400">
                        <span>Verified Learning</span>
                        @if($cert->credential_url)
                            <a href="{{ $cert->credential_url }}" target="_blank" rel="noopener noreferrer" class="text-sky-600 hover:text-sky-800 font-medium">
                                View Certificate ↗
                            </a>
                        @else
                            <span class="text-slate-400">Certified</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- ==================== 9. CONTACT & CTA SECTION ==================== -->
    <section id="contact" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-24">
        <!-- Pastel Banner Container -->
        <div class="bg-gradient-to-br from-blue-50/70 via-purple-50/50 to-emerald-50/70 rounded-3xl border border-[#E2E8F0] p-8 sm:p-12 lg:p-16 shadow-xs">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Contact Pitch & Social Links -->
                <div class="lg:col-span-5 space-y-6">
                    <span class="text-xs font-mono font-semibold uppercase tracking-wider text-sky-700 bg-sky-100/80 px-2.5 py-1 rounded-full border border-sky-200">
                        Get In Touch
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-slate-900 tracking-tight leading-tight">
                        LET'S BUILD <br>
                        <span class="text-sky-600">SOMETHING GREAT.</span>
                    </h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        Have an idea or want to connect? Let's make something useful together.
                    </p>

                    <!-- Direct Contact Buttons -->
                    <div class="flex flex-wrap gap-3 pt-2">
                        <a href="mailto:arif@example.com" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-slate-800 hover:bg-slate-50 border border-slate-200 shadow-xs transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>Email</span>
                        </a>

                        <a href="https://github.com/kamarularifin" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-slate-800 hover:bg-slate-50 border border-slate-200 shadow-xs transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-slate-700" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                            </svg>
                            <span>GitHub</span>
                        </a>

                        <a href="https://linkedin.com/in/kamarularifin" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold bg-white text-slate-800 hover:bg-slate-50 border border-slate-200 shadow-xs transition hover:-translate-y-0.5">
                            <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                            <span>LinkedIn</span>
                        </a>
                    </div>
                </div>

                <!-- Functional MySQL Contact Form -->
                <div class="lg:col-span-7 bg-white rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-sm">
                    <!-- Session Feedback Alert -->
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold">Sukses!</p>
                                <p class="text-xs mt-0.5">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-sm">
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
                                <label for="name" class="block text-xs font-semibold text-slate-700 mb-1">Your Name</label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name') }}"
                                       required 
                                       placeholder="e.g. Budi Santoso" 
                                       class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-transparent transition">
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-semibold text-slate-700 mb-1">Email Address</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}"
                                       required 
                                       placeholder="budi@example.com" 
                                       class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-transparent transition">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-xs font-semibold text-slate-700 mb-1">Subject (Optional)</label>
                            <input type="text" 
                                   id="subject" 
                                   name="subject" 
                                   value="{{ old('subject') }}"
                                   placeholder="Project collaboration, inquiry, or question" 
                                   class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-transparent transition">
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-semibold text-slate-700 mb-1">Message</label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="4" 
                                      required 
                                      placeholder="Tell Arif about your idea or message..." 
                                      class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-slate-200 bg-slate-50/50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-sky-400 focus:border-transparent transition">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 text-sm font-semibold text-white bg-slate-900 hover:bg-slate-800 rounded-xl shadow-xs transition-all duration-200 hover:-translate-y-0.5 active:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-sky-400">
                            <span>Send Message</span>
                            <svg class="w-4 h-4 text-sky-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
