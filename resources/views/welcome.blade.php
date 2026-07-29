<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNEVA AI - The Egocentric Data Engine for Embodied AI</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <meta name="description" content="High-fidelity, first-person datasets capturing natural human interactions to train the next generation of physical AI and humanoid robotics.">
    <!-- Google Fonts: Instrument Sans (Sans) & Outfit (Display) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Outfit:wght@400;500;700;900&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-sans antialiased selection:bg-blue-600 selection:text-white">

    <!-- Header / Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-blur-glass border-b border-white/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center gap-2">
                <span class="font-display font-black text-2xl tracking-tighter text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-blue-500">UNEVA AI</span>
            </a>
            
            <nav class="hidden md:flex items-center gap-8">
                <a href="#hero" class="text-sm font-medium text-white/70 hover:text-white transition">Data Engine</a>
                <a href="#network" class="text-sm font-medium text-white/70 hover:text-white transition">Global Network</a>
                <a href="#datasets" class="text-sm font-medium text-white/70 hover:text-white transition">Datasets</a>
                <a href="#process" class="text-sm font-medium text-white/70 hover:text-white transition">Process</a>
                <a href="#scale" class="text-sm font-medium text-white/70 hover:text-white transition">Metrics</a>
                <a href="#recruit" class="text-sm font-medium text-white/70 hover:text-white transition">Workforce</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="#contact" class="hidden sm:inline-flex items-center justify-center px-5 py-2 text-xs font-semibold uppercase tracking-wider bg-white text-black hover:bg-neutral-200 rounded-full transition duration-300">
                    Contact Partnerships
                </a>
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 text-white/80 hover:text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Nav Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-black/95 backdrop-blur-xl flex flex-col justify-center items-center gap-8 transition-all duration-300 transform translate-x-full">
        <a href="#hero" class="text-2xl font-display uppercase tracking-tight text-white/80 hover:text-white">Data Engine</a>
        <a href="#network" class="text-2xl font-display uppercase tracking-tight text-white/80 hover:text-white">Global Network</a>
        <a href="#datasets" class="text-2xl font-display uppercase tracking-tight text-white/80 hover:text-white">Datasets</a>
        <a href="#process" class="text-2xl font-display uppercase tracking-tight text-white/80 hover:text-white">Process</a>
        <a href="#scale" class="text-2xl font-display uppercase tracking-tight text-white/80 hover:text-white">Metrics</a>
        <a href="#recruit" class="text-2xl font-display uppercase tracking-tight text-white/80 hover:text-white">Workforce</a>
        <a href="#contact" class="px-8 py-3 bg-white text-black font-semibold rounded-full uppercase tracking-wider text-sm mt-4">Contact Partnerships</a>
    </div>

    <!-- Section 1: Hero Banner (3D Sticky Horizontal Scroll) -->
    <section id="hero" class="relative h-[400vh] bg-black">
        <!-- Sticky container locks the view while scrolling the 400vh -->
        <div class="sticky top-0 h-screen w-full overflow-hidden flex flex-col justify-center items-center">
            
            <!-- Visual Background Grid + Scanning HUD -->
            <div class="absolute inset-0 grid-overlay opacity-80 pointer-events-none"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-black/60 to-black pointer-events-none z-0"></div>
            
            <!-- Animated Background Paths (ApeChain aligned dynamic style) -->
            <div class="absolute inset-0 pointer-events-none opacity-20 z-0">
                <svg class="w-full h-full text-blue-500/20" viewBox="0 0 696 316" fill="none">
                    <title>Background Paths</title>
                    <!-- Path 1 -->
                    <path d="M-380 -189C-380 -189 -312 216 152 343C616 470 684 875 684 875" stroke="currentColor" stroke-width="0.5" stroke-opacity="0.3">
                        <animate attributeName="stroke-dasharray" values="0,1000;1000,0" dur="20s" repeatCount="indefinite" />
                    </path>
                    <!-- Path 2 -->
                    <path d="M380 -189C380 -189 312 216 -152 343C-616 470 -684 875 -684 875" stroke="currentColor" stroke-width="0.5" stroke-opacity="0.3">
                        <animate attributeName="stroke-dasharray" values="0,1000;1000,0" dur="25s" repeatCount="indefinite" />
                    </path>
                </svg>
            </div>

            <!-- 3D Panning Card Horizontal Track -->
            <div class="absolute inset-0 z-0 overflow-hidden w-full h-full flex items-center perspective-[1200px] pointer-events-none">
                <!-- We translate this track horizontally on scroll -->
                <div id="scroll-track" class="flex gap-[10vw] px-[50vw] items-center h-full w-max will-change-transform">
                    
                    <!-- Video Card 1 -->
                    <div class="scroll-card relative w-[75vw] md:w-[45vw] aspect-[16/10] bg-neutral-900/60 rounded-3xl border border-white/10 p-1 shadow-2xl shadow-blue-500/5 overflow-hidden flex-shrink-0 will-change-transform" style="transform-style: preserve-3d;">
                        <div class="scanner-line"></div>
                        <video src="{{ asset('videos/clip-1.mp4') }}" class="w-full h-full object-cover rounded-3xl select-none opacity-30" autoplay loop muted playsinline></video>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/30 rounded-3xl p-6 flex flex-col justify-between pointer-events-auto">
                            <div class="flex justify-between items-start">
                                <span class="px-3 py-1 bg-blue-500/10 border border-blue-500/30 rounded text-[9px] font-mono text-blue-400">CAMERA_FEED_01 // RUNNING</span>
                                <span class="text-[9px] font-mono text-white/50">98.2% ACCURACY</span>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[10px] font-mono text-white/40">TRACKING TARGET</span>
                                <p class="text-sm font-bold text-white uppercase tracking-wider font-display">EGOCENTRIC_VLA_ALIGNMENT</p>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="scroll-card relative w-[75vw] md:w-[45vw] aspect-[16/10] bg-neutral-900/60 rounded-3xl border border-white/10 p-1 shadow-2xl shadow-blue-500/5 overflow-hidden flex-shrink-0 will-change-transform" style="transform-style: preserve-3d;">
                        <div class="scanner-line"></div>
                        <video src="{{ asset('videos/clip-2.mp4') }}" class="w-full h-full object-cover rounded-3xl select-none opacity-30" autoplay loop muted playsinline></video>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/30 rounded-3xl p-6 flex flex-col justify-between pointer-events-auto">
                            <div class="flex justify-between items-start">
                                <span class="px-3 py-1 bg-blue-500/10 border border-blue-500/30 rounded text-[9px] font-mono text-blue-400">CAMERA_FEED_02 // TELEOP</span>
                                <span class="text-[9px] font-mono text-white/50">95.4% ACCURACY</span>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[10px] font-mono text-white/40">GRASP CONTROL</span>
                                <p class="text-sm font-bold text-white uppercase tracking-wider font-display">ROBOTIC_ARM_MANIPULATION</p>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="scroll-card relative w-[75vw] md:w-[45vw] aspect-[16/10] bg-neutral-900/60 rounded-3xl border border-white/10 p-1 shadow-2xl shadow-blue-500/5 overflow-hidden flex-shrink-0 will-change-transform" style="transform-style: preserve-3d;">
                        <div class="scanner-line"></div>
                        <video src="{{ asset('videos/clip-4.mp4') }}" class="w-full h-full object-cover rounded-3xl select-none opacity-30" autoplay loop muted playsinline></video>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/30 rounded-3xl p-6 flex flex-col justify-between pointer-events-auto">
                            <div class="flex justify-between items-start">
                                <span class="px-3 py-1 bg-blue-500/10 border border-blue-500/30 rounded text-[9px] font-mono text-blue-400">CAMERA_FEED_03 // SPATIAL</span>
                                <span class="text-[9px] font-mono text-white/50">99.1% ACCURACY</span>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[10px] font-mono text-white/40">DEPTH MAP</span>
                                <p class="text-sm font-bold text-white uppercase tracking-wider font-display">LIDAR_POINTCLOUD_ALIGN</p>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 4 -->
                    <div class="scroll-card relative w-[75vw] md:w-[45vw] aspect-[16/10] bg-neutral-900/60 rounded-3xl border border-white/10 p-1 shadow-2xl shadow-blue-500/5 overflow-hidden flex-shrink-0 will-change-transform" style="transform-style: preserve-3d;">
                        <div class="scanner-line"></div>
                        <video src="{{ asset('videos/clip-5.mp4') }}" class="w-full h-full object-cover rounded-3xl select-none opacity-30" autoplay loop muted playsinline></video>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/30 rounded-3xl p-6 flex flex-col justify-between pointer-events-auto">
                            <div class="flex justify-between items-start">
                                <span class="px-3 py-1 bg-blue-500/10 border border-blue-500/30 rounded text-[9px] font-mono text-blue-400">CAMERA_FEED_04 // MULTI_PERSPECTIVE</span>
                                <span class="text-[9px] font-mono text-white/50">97.8% ACCURACY</span>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[10px] font-mono text-white/40">TIME_SYNC</span>
                                <p class="text-sm font-bold text-white uppercase tracking-wider font-display">MULTI_CAMERA_LOGISTICS</p>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 5 -->
                    <div class="scroll-card relative w-[75vw] md:w-[45vw] aspect-[16/10] bg-neutral-900/60 rounded-3xl border border-white/10 p-1 shadow-2xl shadow-blue-500/5 overflow-hidden flex-shrink-0 will-change-transform" style="transform-style: preserve-3d;">
                        <div class="scanner-line"></div>
                        <video src="{{ asset('videos/clip-6.mp4') }}" class="w-full h-full object-cover rounded-3xl select-none opacity-30" autoplay loop muted playsinline></video>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/30 rounded-3xl p-6 flex flex-col justify-between pointer-events-auto">
                            <div class="flex justify-between items-start">
                                <span class="px-3 py-1 bg-blue-500/10 border border-blue-500/30 rounded text-[9px] font-mono text-blue-400">CAMERA_FEED_05 // LIGHT_INDUSTRY</span>
                                <span class="text-[9px] font-mono text-white/50">96.3% ACCURACY</span>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[10px] font-mono text-white/40">CONTRIBUTOR DATA</span>
                                <p class="text-sm font-bold text-white uppercase tracking-wider font-display">COMMERCIAL_KITCHEN_TELEOP</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Foreground UI overlaying the cards -->
            <div class="max-w-4xl mx-auto text-center relative z-10 pointer-events-auto px-6">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-blue-500/30 bg-blue-500/5 mb-8 animate-pulse backdrop-blur-md">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                    <span class="text-[10px] font-mono tracking-widest text-blue-400 uppercase">Data Collection for Robotics</span>
                </div>

                <!-- Headline -->
                <h1 id="hero-headline" class="font-display font-black text-5xl md:text-7xl lg:text-8xl tracking-tight uppercase leading-[0.9] text-white mb-6 drop-shadow-2xl transition-all duration-700">
                    The egocentric <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">data engine</span> <br>for embodied AI
                </h1>

                <!-- Sub-headline -->
                <p id="hero-subline" class="max-w-2xl mx-auto text-base md:text-lg text-white/80 leading-relaxed mb-10 font-medium drop-shadow-lg transition-all duration-700">
                    High-fidelity, first-person datasets capturing natural human interactions to train the next generation of physical AI and humanoid robotics.
                </p>

                <!-- Action Buttons -->
                <div id="hero-actions" class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16 transition-all duration-700">
                    <a href="#contact" class="w-full sm:w-auto px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl border border-blue-500/30 shadow-lg shadow-blue-500/10 transition duration-300 text-center">
                        Request Sample Data
                    </a>
                    <a href="#datasets" class="w-full sm:w-auto px-8 py-4 bg-white/5 hover:bg-white/10 text-white font-medium rounded-xl border border-white/10 backdrop-blur-md transition duration-300 text-center">
                        Explore Capabilities
                    </a>
                </div>

                <!-- Scroll Down Indicator -->
                <div id="scroll-indicator" class="flex flex-col items-center gap-2 opacity-60 transition-opacity duration-300">
                    <span class="text-[10px] font-mono uppercase tracking-widest text-blue-400">Scroll to Explore</span>
                    <div class="w-[1px] h-12 bg-gradient-to-b from-blue-500 to-transparent"></div>
                </div>
            </div>
            
            <div class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_95%_95%_at_50%_40%,rgba(11,87,208,0.25),rgba(0,0,0,0.9))]"></div>
        </div>
    </section>

    <!-- Section 2: Global Network -->
    <section id="network" class="relative py-24 px-6 border-t border-white/5 bg-neutral-950">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <div class="lg:col-span-5 space-y-6">
                <div class="text-xs font-mono tracking-widest text-blue-500 uppercase">◉ Decentrilized Logistics</div>
                <h2 class="font-display font-bold text-4xl md:text-5xl uppercase tracking-tight leading-tight">
                    Diverse crowdsourcing, <br>global authenticity
                </h2>
                <p class="text-white/60 leading-relaxed">
                    We deploy a rapidly scalable, vetted network of human contributors to capture real-world ground truth data across residential, commercial, and industrial environments.
                </p>
                <div class="pt-4">
                    <a href="#contact" class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-wider text-blue-400 hover:text-blue-300 transition">
                        View Our Coverage &rarr;
                    </a>
                </div>
            </div>
            <div class="lg:col-span-7 w-full h-full flex flex-col items-center justify-center rounded-2xl">
                <article class="w-full h-full min-h-[500px] overflow-hidden mx-auto text-center border border-zinc-800 rounded-2xl relative bg-zinc-950">
                    <!-- Radial Grid Background (Dark Mode) -->
                    <div class="absolute top-0 left-0 z-[1] h-full w-full bg-[radial-gradient(#333_1px,transparent_1px)] bg-[size:20px_20px]"></div>
                    
                    <div class="relative z-10 pt-8 h-full flex flex-col items-center">
                        <h2 class="sm:text-5xl text-3xl font-semibold bg-gradient-to-b from-white to-[#9c9c9c] bg-clip-text text-transparent leading-[100%] tracking-tighter">
                            GLOBAL NETWORK
                        </h2>
                        
                        <!-- The actual interactive Cobe WebGL Globe canvas -->
                        <div class="absolute bottom-[-2rem] translate-y-4 right-0 sm:-right-10 flex items-center justify-center z-10 w-full sm:max-w-[800px] max-w-[600px] mx-auto pointer-events-auto h-[450px]">
                            <canvas id="cobe-globe" class="w-full h-full" style="aspect-ratio: 1/1; cursor: grab;"></canvas>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </section>

    <!-- Section 3: Frontier Datasets -->
    <section id="datasets" class="relative py-24 px-6 border-t border-white/5">
        <div class="max-w-7xl mx-auto">
            
            <div class="max-w-3xl mb-16 space-y-4">
                <div class="text-xs font-mono tracking-widest text-blue-500 uppercase">◉ Core Modalities</div>
                <h2 class="font-display font-bold text-4xl md:text-5xl uppercase tracking-tight">
                    Authentic environments, for frontier models
                </h2>
                <p class="text-white/60">
                    Unscripted, high-quality data collection tailored to your specific hardware and algorithmic requirements.
                </p>
            </div>

            <!-- Tab Layout using 21st.dev Bento Blueprint Grid structure -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Navigation Tabs -->
                <div class="lg:col-span-4 flex flex-col gap-3">
                    <button class="tab-btn active text-left px-6 py-4 rounded-xl border border-blue-500/20 bg-blue-600/10 text-white font-medium transition duration-300 focus:outline-none" data-tab="ego">
                        Egocentric Video
                    </button>
                    <button class="tab-btn text-left px-6 py-4 rounded-xl border border-white/5 bg-white/5 text-white/60 hover:text-white hover:bg-white/10 font-medium transition duration-300 focus:outline-none" data-tab="multi">
                        Multi-Camera
                    </button>
                    <button class="tab-btn text-left px-6 py-4 rounded-xl border border-white/5 bg-white/5 text-white/60 hover:text-white hover:bg-white/10 font-medium transition duration-300 focus:outline-none" data-tab="manip">
                        Object Manipulation
                    </button>
                    <button class="tab-btn text-left px-6 py-4 rounded-xl border border-white/5 bg-white/5 text-white/60 hover:text-white hover:bg-white/10 font-medium transition duration-300 focus:outline-none" data-tab="spatial">
                        Spatial Data
                    </button>
                </div>

                <!-- Tab Content Pane using BentoItem theme wrapper with corner brackets -->
                <div class="lg:col-span-8 bento-item bg-neutral-950 flex flex-col justify-between min-h-[400px]">
                    <!-- Holographic corner brackets -->
                    <div class="corner top-left"></div>
                    <div class="corner top-right"></div>
                    <div class="corner bottom-left"></div>
                    <div class="corner bottom-right"></div>

                    <!-- Subtle background glow -->
                    <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-blue-500/10 blur-[120px] pointer-events-none"></div>
                    
                    <div id="tab-content-area" class="space-y-6 relative z-10">
                        <div>
                            <div class="text-xs font-mono text-blue-400 uppercase mb-2">MODALITY DETAIL</div>
                            <h3 class="font-display font-bold text-3xl uppercase tracking-tight text-white mb-4">First-Person Perspective (FPV)</h3>
                            <p class="text-white/60 leading-relaxed mb-6">
                                Head-mounted and chest-mounted capture modalities focusing on complex hand-object interactions, visual-language-action (VLA) sync, and unscripted daily tasks.
                            </p>
                            <div class="flex flex-wrap gap-3 mb-8">
                                <span class="px-3 py-1 rounded bg-white/5 text-xs font-mono text-white/80 border border-white/10">4K/60fps</span>
                                <span class="px-3 py-1 rounded bg-white/5 text-xs font-mono text-white/80 border border-white/10">Landscape</span>
                                <span class="px-3 py-1 rounded bg-white/5 text-xs font-mono text-white/80 border border-white/10">Strict No-Face Policy</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4 relative z-10">
                        <span class="text-xs font-mono text-white/40">ISO 27001 & DPA Compliant pipelines</span>
                        <a href="#contact" class="w-full sm:w-auto px-6 py-3 bg-white text-black font-semibold uppercase tracking-wider text-xs rounded-lg hover:bg-neutral-200 transition text-center">
                            View Dataset Specs
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 4: Speed & Process -->
    <section id="process" class="relative py-24 px-6 border-t border-white/5 bg-neutral-950">
        <div class="max-w-7xl mx-auto">
            
            <div class="max-w-3xl mb-20 space-y-4">
                <div class="text-xs font-mono tracking-widest text-blue-500 uppercase">◉ Fast Turnaround</div>
                <h2 class="font-display font-bold text-4xl md:text-5xl uppercase tracking-tight">
                    Bespoke collection in days, not months
                </h2>
                <p class="text-white/60">
                    Our streamlined contributor onboarding and strict internal ISO-aligned QA protocols mean your models never wait for data.
                </p>
            </div>

            <!-- Timeline Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                <!-- Timeline Connecting Line for Desktop -->
                <div class="hidden md:block absolute top-[2.5rem] left-[10%] right-[10%] h-[1px] bg-white/10 -z-10"></div>
                
                <!-- Step 1 -->
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-xl border border-white/10 bg-black flex items-center justify-center text-xl font-mono text-blue-400 shadow-md">
                        01
                    </div>
                    <h4 class="text-lg font-semibold text-white">Scope & Blueprint</h4>
                    <p class="text-sm text-white/50">Define environments, tasks, and hardware constraints with precision.</p>
                </div>

                <!-- Step 2 -->
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-xl border border-white/10 bg-black flex items-center justify-center text-xl font-mono text-blue-400 shadow-md">
                        02
                    </div>
                    <h4 class="text-lg font-semibold text-white">Contributor Match</h4>
                    <p class="text-sm text-white/50">Rapid deployment of our network to targeted geographic locations.</p>
                </div>

                <!-- Step 3 -->
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-xl border border-white/10 bg-black flex items-center justify-center text-xl font-mono text-blue-400 shadow-md">
                        03
                    </div>
                    <h4 class="text-lg font-semibold text-white">Capture & QC</h4>
                    <p class="text-sm text-white/50">Two-tier quality checks to ensure a 98%+ first-pass acceptance rate.</p>
                </div>

                <!-- Step 4 -->
                <div class="space-y-4">
                    <div class="w-16 h-16 rounded-xl border border-white/10 bg-black flex items-center justify-center text-xl font-mono text-blue-400 shadow-md">
                        04
                    </div>
                    <h4 class="text-lg font-semibold text-white">Encrypted Delivery</h4>
                    <p class="text-sm text-white/50">Secure, encrypted handover via compliant and structured data pipelines.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 5: Scale / Machine Economy -->
    <section id="scale" class="relative py-24 px-6 border-t border-white/5">
        <div class="max-w-7xl mx-auto">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                
                <!-- Left: Big Stat Box -->
                <div class="lg:col-span-6 border-thin bg-neutral-950 rounded-3xl p-8 md:p-12 relative overflow-hidden flex flex-col justify-between min-h-[450px]">
                    <div class="absolute inset-0 grid-overlay opacity-20"></div>
                    <div class="absolute -left-16 -top-16 w-64 h-64 rounded-full bg-blue-600/10 blur-[100px]"></div>
                    
                    <div>
                        <div class="text-xs font-mono text-blue-400 tracking-widest uppercase mb-6">◉ COLLECTED CAPACITY</div>
                        <div class="font-display font-black text-7xl md:text-8xl tracking-tight text-white mb-4">
                            50,000+
                        </div>
                        <p class="text-white/60 text-lg leading-relaxed max-w-md">
                            Hours of approved, QA-verified egocentric interactions collected across global environments.
                        </p>
                    </div>

                    <div class="pt-8">
                        <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 bg-white text-black font-semibold rounded-xl hover:bg-neutral-200 transition duration-300">
                            Start Your Collection
                        </a>
                    </div>
                </div>

                <!-- Right: Categories & Stats Info -->
                <div class="lg:col-span-6 space-y-8">
                    <div class="space-y-4">
                        <div class="text-xs font-mono tracking-widest text-blue-500 uppercase">◉ Domain Coverage</div>
                        <h2 class="font-display font-bold text-4xl md:text-5xl uppercase tracking-tight">
                            Powering the Spatial Intelligence Era
                        </h2>
                        <p class="text-white/60">
                            UNEVA AI bridges the gap between human intuition and robotic execution through massive, meticulously curated datasets.
                        </p>
                    </div>

                    <!-- Category Lists -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 p-4 rounded-xl border border-white/5 bg-white/5">
                            <span class="text-blue-500 font-bold">+</span>
                            <span class="text-sm font-medium text-white/80">Residential & Home Tasks</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 rounded-xl border border-white/5 bg-white/5">
                            <span class="text-blue-500 font-bold">+</span>
                            <span class="text-sm font-medium text-white/80">Commercial Kitchens</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 rounded-xl border border-white/5 bg-white/5">
                            <span class="text-blue-500 font-bold">+</span>
                            <span class="text-sm font-medium text-white/80">Retail & Warehousing</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 rounded-xl border border-white/5 bg-white/5">
                            <span class="text-blue-500 font-bold">+</span>
                            <span class="text-sm font-medium text-white/80">Light Manufacturing</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 rounded-xl border border-white/5 bg-white/5">
                            <span class="text-blue-500 font-bold">+</span>
                            <span class="text-sm font-medium text-white/80">Healthcare & Clinics</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 rounded-xl border border-white/5 bg-white/5">
                            <span class="text-blue-500 font-bold">+</span>
                            <span class="text-sm font-medium text-white/80">Custom Robotics Teleop</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Section 6: Community / Worker Recruitment -->
    <section id="recruit" class="relative py-24 px-6 border-t border-white/5 bg-neutral-950">
        <div class="max-w-7xl mx-auto">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-16 items-center">
                <!-- Headline -->
                <div class="lg:col-span-6 space-y-4">
                    <div class="text-xs font-mono tracking-widest text-blue-500 uppercase">◉ JOIN THE FORCE</div>
                    <h2 class="font-display font-bold text-4xl md:text-5xl uppercase tracking-tight">
                        Join the UNEVA AI Workforce
                    </h2>
                    <p class="text-white/60">
                        Turn your daily routines into high-quality training data. Get paid to help build the future of AI.
                    </p>
                </div>

                <!-- DisplayCards Stack Graphic (Community counters styled) -->
                <div class="lg:col-span-6 flex items-center justify-center min-h-[300px] relative overflow-hidden py-8">
                    <!-- Cards Stack wrapper -->
                    <div class="grid [grid-template-areas:'stack'] place-items-center relative">
                        <!-- Card 3 (Bottom) -->
                        <div class="[grid-area:stack] translate-x-12 translate-y-8 select-none flex h-36 w-[20rem] -skew-y-[8deg] flex-col justify-between rounded-xl border border-white/5 bg-neutral-900/50 backdrop-blur-sm px-4 py-3 transition-all duration-500 hover:border-blue-500/20">
                            <div class="flex items-center gap-2">
                                <span class="bg-blue-950 p-1.5 rounded-full text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </span>
                                <span class="text-xs font-mono text-white/40 uppercase">Flexible Tasks</span>
                            </div>
                            <p class="text-lg font-bold text-white">Guaranteed Payouts</p>
                            <p class="text-[10px] font-mono text-blue-400">WEEKLY SETTLEMENT</p>
                        </div>
                        
                        <!-- Card 2 (Middle) -->
                        <div class="[grid-area:stack] -translate-x-4 translate-y-4 select-none flex h-36 w-[20rem] -skew-y-[8deg] flex-col justify-between rounded-xl border border-white/5 bg-neutral-900/60 backdrop-blur-sm px-4 py-3 transition-all duration-500 hover:border-blue-500/20">
                            <div class="flex items-center gap-2">
                                <span class="bg-blue-950 p-1.5 rounded-full text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </span>
                                <span class="text-xs font-mono text-white/40 uppercase">Verification</span>
                            </div>
                            <p class="text-lg font-bold text-white">Vetted Recorder Networks</p>
                            <p class="text-[10px] font-mono text-blue-400">ISO ALIGNED QA</p>
                        </div>

                        <!-- Card 1 (Top) -->
                        <div class="[grid-area:stack] -translate-x-20 -translate-y-2 select-none flex h-36 w-[20rem] -skew-y-[8deg] flex-col justify-between rounded-xl border border-blue-500/30 bg-neutral-900/80 backdrop-blur-sm px-4 py-3 transition-all duration-500 hover:border-blue-500/50 hover:bg-neutral-800">
                            <div class="flex items-center gap-2">
                                <span class="bg-blue-950 p-1.5 rounded-full text-blue-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </span>
                                <span class="text-xs font-mono text-white/40 uppercase">Global Scale</span>
                            </div>
                            <p class="text-lg font-bold text-white">1,000+ Active Contributors</p>
                            <p class="text-[10px] font-mono text-blue-400">SOUTHEAST ASIA & GLOBALLY</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Banner recruitment -->
            <div class="border-thin bg-gradient-to-r from-blue-900/20 via-black to-neutral-900/30 rounded-2xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
                <div class="space-y-2">
                    <h3 class="font-display font-bold text-2xl uppercase text-white">Are you ready to map the physical world for AI?</h3>
                    <p class="text-sm text-white/50">Apply to become a verified recorder today.</p>
                </div>
                <a href="#contact" class="px-8 py-4 bg-white text-black font-semibold rounded-xl hover:bg-neutral-200 transition duration-300 whitespace-nowrap">
                    Apply Now
                </a>
            </div>

        </div>
    </section>

    <!-- Contact & Partnerships Section -->
    <section id="contact" class="py-24 px-6 border-t border-white/5 bg-neutral-950">
        <div class="max-w-3xl mx-auto text-center space-y-8">
            <h2 class="font-display font-bold text-4xl uppercase tracking-tight">Initiate Collection Blueprint</h2>
            <p class="text-white/60">Ready to align on custom hardware configuration, task taxonomy, and geographical targeting?</p>
            <div class="border-thin p-8 rounded-2xl bg-neutral-900/50">
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Name" class="w-full bg-black border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-blue-500 transition">
                        <input type="email" placeholder="Email" class="w-full bg-black border border-white/10 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-blue-500 transition">
                    </div>
                    <textarea placeholder="Tell us about your robotic hardware and dataset requirements..." rows="4" class="w-full bg-black border border-white/10 rounded-xl p-4 text-sm text-white focus:outline-none focus:border-blue-500 transition"></textarea>
                    <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl uppercase tracking-wider text-xs transition duration-300">
                        Submit Brief &amp; Contact Partnerships
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/5 bg-black py-12 px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-2">
                <span class="font-display font-black text-xl tracking-tighter text-white">UNEVA AI</span>
                <span class="text-xs text-white/40">&copy; 2026. All rights reserved.</span>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-6">
                <a href="#" class="text-xs text-white/40 hover:text-white transition">Privacy Policy</a>
                <a href="#" class="text-xs text-white/40 hover:text-white transition">Terms of Service</a>
                <a href="#" class="text-xs text-white/40 hover:text-white transition">Data Processing Agreement (DPA)</a>
                <a href="#" class="text-xs text-white/40 hover:text-white transition">Contributor Login</a>
                <a href="#" class="text-xs text-white/40 hover:text-white transition">Client Portal</a>
            </div>
        </div>
    </footer>

    <!-- Interactive Tabs and Navigation Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Tab Data
            const tabData = {
                ego: {
                    title: 'First-Person Perspective (FPV)',
                    desc: 'Head-mounted and chest-mounted capture modalities focusing on complex hand-object interactions, visual-language-action (VLA) sync, and unscripted daily tasks.',
                    tags: ['4K/60fps', 'Landscape', 'Strict No-Face Policy']
                },
                multi: {
                    title: 'Multi-Camera Synchronization',
                    desc: 'Rigged multi-perspective setups recording synchronous scenes from egocentric, third-person static, and tracking perspectives for full spatial awareness.',
                    tags: ['Time-sync', '3+ Perspectives', 'Co-calibrated']
                },
                manip: {
                    title: 'Object Manipulation & Interaction',
                    desc: 'Fine-grained focus on tactile interactions, grasp patterns, object transformations, and tool-use mechanics captured with high-speed micro-cameras.',
                    tags: ['6-DoF Tracked', 'Micro-cam', 'Sub-millimeter QA']
                },
                spatial: {
                    title: 'Spatial & Depth Modalities',
                    desc: 'Sensor-fusion data combining high-density LiDAR scans, spatial depth feeds, and IMU tracking with egocentric video streams for exact SLAM validation.',
                    tags: ['LiDAR Pointcloud', 'IMU Fusion', 'RGB-D Sync']
                }
            };

            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabContentArea = document.querySelector('#tab-content-area');

            tabButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Update Active states
                    tabButtons.forEach(b => {
                        b.classList.remove('active', 'bg-blue-600/10', 'border-blue-500/20');
                        b.classList.add('bg-white/5', 'border-white/5');
                        b.classList.remove('text-white');
                        b.classList.add('text-white/60');
                    });
                    
                    btn.classList.add('active', 'bg-blue-600/10', 'border-blue-500/20');
                    btn.classList.remove('bg-white/5', 'border-white/5');
                    btn.classList.add('text-white');
                    btn.classList.remove('text-white/60');

                    const tabId = btn.getAttribute('data-tab');
                    const data = tabData[tabId];

                    if (data) {
                        tabContentArea.innerHTML = `
                            <div>
                                <div class="text-xs font-mono text-blue-400 uppercase mb-2">MODALITY DETAIL</div>
                                <h3 class="font-display font-bold text-3xl uppercase tracking-tight text-white mb-4">${data.title}</h3>
                                <p class="text-white/60 leading-relaxed mb-6">
                                    ${data.desc}
                                </p>
                                <div class="flex flex-wrap gap-3 mb-8">
                                    ${data.tags.map(t => `<span class="px-3 py-1 rounded bg-white/5 text-xs font-mono text-white/80 border border-white/10">${t}</span>`).join('')}
                                </div>
                            </div>
                        `;
                    }
                });
            });

            // Mobile Menu toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuBtn.addEventListener('click', () => {
                const isOpen = mobileMenu.classList.contains('translate-x-0');
                if (isOpen) {
                    mobileMenu.classList.remove('translate-x-0');
                    mobileMenu.classList.add('translate-x-full');
                } else {
                    mobileMenu.classList.remove('translate-x-full');
                    mobileMenu.classList.add('translate-x-0');
                }
            });

            // Close mobile menu on nav link click
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('translate-x-0');
                    mobileMenu.classList.add('translate-x-full');
                });
            });

            // Modern Sticky 3D Horizontal Scroll Logic
            const heroSection = document.getElementById('hero');
            const scrollTrack = document.getElementById('scroll-track');
            const scrollCards = document.querySelectorAll('.scroll-card');
            
            // UI elements to fade out
            const heroHeadline = document.getElementById('hero-headline');
            const heroSubline = document.getElementById('hero-subline');
            const heroActions = document.getElementById('hero-actions');
            const scrollIndicator = document.getElementById('scroll-indicator');

            if (heroSection && scrollTrack && scrollCards.length > 0) {
                // Optimize rendering
                let ticking = false;

                const update3DScroll = () => {
                    // Calculate scroll progress through the 400vh section
                    const rect = heroSection.getBoundingClientRect();
                    const windowHeight = window.innerHeight;
                    const sectionHeight = rect.height;
                    
                    // The distance we can scroll inside the sticky section
                    const scrollableDistance = sectionHeight - windowHeight; 
                    
                    // Scroll progress from 0.0 to 1.0
                    // Clamp between 0 and 1
                    let progress = -rect.top / scrollableDistance;
                    progress = Math.max(0, Math.min(1, progress));

                    // Fade out UI as we start scrolling
                    if (progress > 0.05) {
                        heroHeadline.style.opacity = '0';
                        heroSubline.style.opacity = '0';
                        heroActions.style.opacity = '0';
                        scrollIndicator.style.opacity = '0';
                        
                        heroHeadline.style.transform = 'translateY(-20px)';
                        heroSubline.style.transform = 'translateY(-20px)';
                        heroActions.style.transform = 'translateY(-20px)';
                    } else {
                        heroHeadline.style.opacity = '1';
                        heroSubline.style.opacity = '1';
                        heroActions.style.opacity = '1';
                        scrollIndicator.style.opacity = '0.6';

                        heroHeadline.style.transform = 'translateY(0)';
                        heroSubline.style.transform = 'translateY(0)';
                        heroActions.style.transform = 'translateY(0)';
                    }

                    // Move track horizontally
                    // Max scroll is total track width - viewport width
                    const trackWidth = scrollTrack.scrollWidth;
                    const maxScrollX = trackWidth - window.innerWidth;
                    
                    // Ease the start of the horizontal scroll so it waits a tiny bit
                    // Let's start moving at progress > 0.1
                    let moveProgress = (progress - 0.1) / 0.9;
                    moveProgress = Math.max(0, Math.min(1, moveProgress));
                    
                    const translateX = moveProgress * maxScrollX;
                    scrollTrack.style.transform = `translate3d(${-translateX}px, 0, 0)`;

                    // Apply 3D Coverflow effect to cards
                    const windowCenter = window.innerWidth / 2;

                    scrollCards.forEach(card => {
                        const cardRect = card.getBoundingClientRect();
                        const cardCenter = cardRect.left + (cardRect.width / 2);
                        
                        // Distance from center of screen (-1.0 to 1.0 roughly, can be more)
                        // Normalized by half viewport width so 1.0 = edge of screen
                        const distance = (cardCenter - windowCenter) / (window.innerWidth / 2);
                        
                        // Clamp distance for calculations
                        const clampedDistance = Math.max(-1.5, Math.min(1.5, distance));

                        // 3D Math parameters (Apechain style tilt and pushback)
                        const maxRotation = 45; // max degrees to rotate Y
                        const maxPushback = 200; // max px to push back on Z
                        const scaleDrop = 0.15; // how much to shrink at edges

                        // Rotation: left side cards rotate left, right rotate right
                        const rotateY = clampedDistance * maxRotation;
                        
                        // Pushback and Scale: further from center = further back
                        const absDistance = Math.abs(clampedDistance);
                        const translateZ = -(absDistance * maxPushback);
                        const scale = 1 - (absDistance * scaleDrop);
                        
                        // Opacity: fade slightly at edges
                        const opacity = 1 - (absDistance * 0.4);

                        // Only apply the expensive transform if the section is in view
                        if (rect.top <= windowHeight && rect.bottom >= 0) {
                            card.style.transform = `translate3d(0, 0, ${translateZ}px) rotateY(${rotateY}deg) scale(${scale})`;
                            card.style.opacity = Math.max(0.2, opacity);
                            
                            // Wake up inner image opacity when near center
                            const img = card.querySelector('img');
                            if (img) {
                                img.style.opacity = (absDistance < 0.3) ? 1 : 0.5;
                            }
                        }
                    });

                    ticking = false;
                };

                window.addEventListener('scroll', () => {
                    if (!ticking) {
                        window.requestAnimationFrame(update3DScroll);
                        ticking = true;
                    }
                }, { passive: true });
                
                // Initial call to set state
                update3DScroll();
            }
        });
    </script>
</body>
</html>
