<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PROGRAMMER.DEV | Laravel Expert Portfolio</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">


</head>

<body class="selection:bg-primary selection:text-on-primary-fixed">
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 bg-[#091328]/80 backdrop-blur-xl shadow-[0_20px_50px_rgba(0,0,0,0.3)]">
        <div class="flex justify-between items-center px-8 py-4 max-w-7xl mx-auto">
            <div class="text-2xl font-bold tracking-tighter text-[#ba9eff] font-['Space_Grotesk']">
                MY PORFOLIO.DEV
            </div>
            <div class="hidden md:flex items-center space-x-8 font-['Space_Grotesk'] tracking-tight">
                <a class="text-[#dee5ff]/70 font-medium hover:text-[#ba9eff] transition-colors duration-300" href="#about">About</a>
                <a class="text-[#dee5ff]/70 font-medium hover:text-[#ba9eff] transition-colors duration-300" href="#skills">Skills</a>
                <a class="text-[#dee5ff]/70 font-medium hover:text-[#ba9eff] transition-colors duration-300" href="#projects">Projects</a>
                <a class="text-[#dee5ff]/70 font-medium hover:text-[#ba9eff] transition-colors duration-300" href="#contact">Contact</a>
            </div>
            <div class="flex items-center gap-3">
                <!-- Guest Mode Button -->
                <button class="inline-block bg-surface-container border border-outline-variant/30 px-6 py-2 rounded-full text-on-surface font-bold scale-95 active:scale-90 transition-transform hover:bg-surface-container-highest">
                    👁️ Guest Mode
                </button>
                <!-- Admin Mode Button/Link -->
                @if(auth()->check() && auth()->user()->role === 'admin')
                    <a href="/dashboard" class="inline-block bg-gradient-to-r from-primary-dim to-primary px-6 py-2 rounded-full text-on-primary-fixed font-bold scale-95 active:scale-90 transition-transform hover:shadow-[0_0_20px_rgba(186,158,255,0.4)]">
                        🔐 Admin Dashboard
                    </a>
                @else
                    <a href="/login" class="inline-block bg-gradient-to-r from-primary-dim to-primary px-6 py-2 rounded-full text-on-primary-fixed font-bold scale-95 active:scale-90 transition-transform hover:shadow-[0_0_20px_rgba(186,158,255,0.4)]">
                        🔐 Admin Login
                    </a>
                @endif
            </div>
        </div>
    </nav>
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center px-8 overflow-hidden hero-glow">
            <div class="max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="z-10">
                    <span class="inline-block py-1 px-3 rounded-full bg-surface-container text-primary font-bold text-xs tracking-widest mb-6 border border-outline-variant/20 uppercase">Developer Trainee &amp; Programmer</span>
                    <h1 class="text-6xl md:text-8xl font-headline font-bold text-on-surface tracking-tighter leading-none mb-8">
                        Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-tertiary">MICHAEL ANGELO.</span>
                    </h1>
                    <p class="text-xl text-on-surface-variant max-w-lg mb-10 leading-relaxed">
                        “From student to developer—coding my future one project at a time.”
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#contact" class="inline-flex bg-gradient-to-r from-primary-dim to-primary text-on-primary-fixed font-bold py-4 px-8 rounded-full items-center gap-2 group transition-all">
                            Hire Me
                            <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </a>
                        <a href="{{ route('download.cv') }}" class="inline-flex bg-transparent border border-outline-variant/30 text-on-surface font-bold py-4 px-8 rounded-full hover:bg-surface-variant transition-colors" target="_blank">
                            Download CV
                        </a>
                    </div>
                </div>
                <div class="relative flex justify-center items-center">
                    <div class="absolute -z-10 w-[500px] h-[500px] bg-primary/10 blur-[120px] rounded-full"></div>
                    <img src="images/myPhoto.png" alt="My Photo" style="max-width: 100%; height: auto;" />
                </div>
            </div>
        </section>
        <!-- About Me Section -->
        <section class="py-24 px-8 bg-surface-container-low" id="about">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-16 items-center">
                <div class="md:col-span-5 relative group">
                    <div class="absolute -inset-4 bg-gradient-to-br from-primary to-tertiary opacity-20 blur-2xl group-hover:opacity-40 transition-opacity"></div>
                    <div class="relative bg-surface-container rounded-2xl overflow-hidden border border-outline-variant/10">
                        <img alt="Profile Image" class="w-full aspect-[4/5] object-cover grayscale hover:grayscale-0 transition-all duration-700" data-alt="Portrait of a professional developer in a minimalist dark studio setting with soft purple rim lighting, reflecting a high-tech modern aesthetic" src="images/myPhoto.png" />
                    </div>
                </div>
                <div class="md:col-span-7">
                    <h2 class="text-4xl font-headline font-bold mb-8 flex items-center gap-4">
                        <span class="w-12 h-[2px] bg-primary"></span>
                        About Me
                    </h2>
                    <div class="space-y-6 text-lg text-on-surface-variant leading-relaxed">
                        <p>
                            I am a motivated fresh graduate with a <span class="text-tertiary font-bold"> strong foundation in technology </span>, and a passion for continuous learning.I enjoy building practical and user-friendly systems, and I am eager to apply my skills in real-world projects.
                        </p>
                        <p>
                            With a positive <span class="text-primary">mindset, adaptability, and dedication,</span> I am ready to grow professionally and contribute to meaningful work.
                        </p>

                    </div>
                    <div class="mt-12 grid grid-cols-2 gap-8">
                        <div>
                            <div class="text-3xl font-headline font-bold text-primary">5+</div>
                            <div class="text-sm text-on-surface-variant uppercase tracking-widest mt-1">Projects Made</div>
                        </div>
                        <div>
                            <div class="text-3xl font-headline font-bold text-tertiary">99.9%</div>
                            <div class="text-sm text-on-surface-variant uppercase tracking-widest mt-1">Code Uptime</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skills Section -->
        <!-- Skills Section -->
        <section class="py-24 px-8" id="skills">
            <div class="max-w-7xl mx-auto">

                <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                    <div>
                        <h2 class="text-4xl font-headline font-bold mb-4">Technical Proficiency</h2>
                        <p class="text-on-surface-variant max-w-md">
                            My technical skills updated dynamically from database.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-8">

                    @forelse($skills as $skill)

                    <div class="skill-card group text-center">

                        <div class="w-16 h-16 mx-auto rounded-xl bg-primary/10 flex items-center justify-center mb-2">
                        @if($skill->icon_class)
                            <i class="devicon-{{ $skill->icon_class }} colored text-[36px]"></i>
                        @else
                            <span class="material-symbols-outlined text-primary">code</span>
                        @endif
                    </div>

                    <span class="block font-bold text-on-surface">
                        {{ $skill->name }}
                    </span>

                    <p class="text-on-surface-variant text-sm uppercase tracking-[0.18em] mt-2">
                        {{ $skill->level_label }} • {{ $skill->level }}%
                    </p>

                    <div class="w-full h-2 bg-surface-container-highest rounded-full mt-3 overflow-hidden">
                        <div class="h-full bg-primary"
                            style="width: {{ $skill->level }}%;">
                        </div>
                    </div>
                    </div>

                    @empty
                    <p class="text-on-surface-variant">No skills found.</p>
                    @endforelse

                </div>

            </div>
        </section>
        <!-- Projects Section -->
        <section class="py-24 px-8 bg-surface-container-low" id="projects">
            <div class="max-w-7xl mx-auto">
                <div class="mb-16">
                    <h2 class="text-4xl font-headline font-bold mb-4">Featured Work

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                            @forelse($projects as $project)

                            <div class="group">

                                <div class="relative rounded-2xl overflow-hidden bg-surface-container aspect-video mb-6 border border-outline-variant/10">

                                    <img
                                        src="{{ $project->image ? asset('storage/' . $project->image) : asset('images/default.png') }}"
                                        class="w-full h-full object-cover" />

                                    <div class="absolute bottom-4 left-4">
                                        <span class="bg-primary text-white px-3 py-1 rounded-full text-xs">
                                            {{ $project->title }}
                                        </span>
                                    </div>

                                </div>

                                <h3 class="text-2xl font-bold">{{ $project->title }}</h3>

                                <p class="text-gray-400">
                                    {{ $project->description }}
                                </p>

                            </div>

                            @empty
                            <p class="text-gray-500">No projects yet.</p>
                            @endforelse

                        </div>
                    </h2>

                    <p class="text-on-surface-variant max-w-md">Your project is more than just code—it’s a reflection of your logic, creativity, and persistence, shaped line by line into something uniquely yours.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Project Card 1 -->
                <div class="group">
                    <div class="relative rounded-2xl overflow-hidden bg-surface-container aspect-video mb-6 border border-outline-variant/10 group-hover:border-primary/40 transition-all">
                        <img alt="Fintech Dashboard" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Modern dark fintech dashboard interface with vibrant purple data visualizations, sleek typography, and glassmorphic panels" src="images/DOST.png" />
                        <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent opacity-60"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="bg-tertiary text-on-primary-fixed px-3 py-1 rounded-full text-xs font-bold">Department of Science and Technology (DOST)</span>
                            <div class="flex gap-2">
                                <span class="w-8 h-8 rounded-full bg-white/10 backdrop-blur flex items-center justify-center border border-white/20">
                                    <span class="material-symbols-outlined text-sm">link</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 group-hover:text-primary transition-colors">DOST PROJECT</h3>
                    <p class="text-on-surface-variant leading-relaxed mb-4"> project 2026-2027</p>
                    <div class="flex gap-4">
                        <span class="text-xs font-mono text-primary/80">Laravel 11</span>
                        <span class="text-xs font-mono text-primary/80">MySQL Cluster</span>
                        <span class="text-xs font-mono text-primary/80">Tailwind</span>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div class="group">
                    <div class="relative rounded-2xl overflow-hidden bg-surface-container aspect-video mb-6 border border-outline-variant/10 group-hover:border-primary/40 transition-all">
                        <img alt="AI CRM Platform" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Interface of an AI-driven SaaS platform showing neural network maps and data nodes in deep violet and electric blue color scheme" src="images/BarangayAPI.png" />
                        <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent opacity-60"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <span class="bg-primary text-on-primary-fixed px-3 py-1 rounded-full text-xs font-bold">Barangay API Project</span>
                            <div class="flex gap-2">
                                <span class="w-8 h-8 rounded-full bg-white/10 backdrop-blur flex items-center justify-center border border-white/20">
                                    <span class="material-symbols-outlined text-sm">code</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 group-hover:text-primary transition-colors">BARANGAY API PROJECT</h3>
                    <p class="text-on-surface-variant leading-relaxed mb-4">Project 2025-2026.</p>
                    <div class="flex gap-4">
                        <span class="text-xs font-mono text-primary/80">C# 3</span>
                        <span class="text-xs font-mono text-primary/80">SwaggerAPI</span>
                        <span class="text-xs font-mono text-primary/80">SQL</span>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Get in Touch Section -->
        <section class="py-24 px-8" id="contact">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-5xl font-headline font-bold mb-6 tracking-tight">Let’s turn your ideas into <span class="text-tertiary">scalable solutions.</span></h2>
                    <p class="text-on-surface-variant text-lg">Now onboarding new projects for Q4 2024—reach out and let’s design your next system.</p>
                </div>
                <div class="bg-surface-container rounded-3xl p-8 md:p-12 border border-outline-variant/10 shadow-2xl relative overflow-hidden">
                    <!-- Glassy decorative element -->
                    <div class="absolute -top-24 -right-24 w-64 h-64 bg-primary/20 blur-[80px] rounded-full"></div>
                    <form action="{{ route('contact.send') }}" method="POST" class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-8">
                        @csrf
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-on-surface-variant uppercase tracking-widest ml-1">Your Name</label>
                            <input name="name" class="w-full bg-surface-container-lowest border-none rounded-xl py-4 px-6 focus:ring-2 focus:ring-primary/50 text-on-surface placeholder:text-on-surface-variant/40 transition-all" placeholder="Michael Angelo S Lugo" type="text" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-on-surface-variant uppercase tracking-widest ml-1">Email Address</label>
                            <input name="email" class="w-full bg-surface-container-lowest border-none rounded-xl py-4 px-6 focus:ring-2 focus:ring-primary/50 text-on-surface placeholder:text-on-surface-variant/40 transition-all" placeholder="MichaelAngelo@example.com" type="email" />
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="text-sm font-bold text-on-surface-variant uppercase tracking-widest ml-1">Project Message</label>
                            <textarea name="message" class="w-full bg-surface-container-lowest border-none rounded-xl py-4 px-6 focus:ring-2 focus:ring-primary/50 text-on-surface placeholder:text-on-surface-variant/40 transition-all" placeholder="Tell me about your vision..." rows="4"></textarea>
                        </div>
                        <div class="md:col-span-2 mt-4">
                            <button class="w-full bg-gradient-to-r from-primary-dim to-primary py-4 rounded-xl text-on-primary-fixed font-black text-lg tracking-widest uppercase hover:shadow-[0_10px_30px_rgba(132,85,239,0.3)] transition-all flex items-center justify-center gap-3" type="submit">
                                Initialize Connection
                                <span class="material-symbols-outlined">send</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-[#060e20] w-full py-12 px-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 max-w-7xl mx-auto">
            <div class="text-lg font-black text-[#dee5ff] font-['Manrope']">
                MY PORTFOLIO.DEV
            </div>
            <div class="text-[#dee5ff]/50 font-['Manrope'] text-sm tracking-wide">
                © 2026 Programmer. Fresh graduate passionate about clean code & real-world solutions.&amp; Passion.
            </div>
            <div class="flex gap-6">
                <a class="text-[#dee5ff]/50 hover:text-[#ff6f7e] transition-all duration-300 hover:-translate-y-1" href="https://github.com/Ace291402">GitHub</a>
                <a class="text-[#dee5ff]/50 hover:text-[#ff6f7e] transition-all duration-300 hover:-translate-y-1" href="https://www.facebook.com/lugomichael010">Facebook</a>
            </div>
        </div>
    </footer>
</body>

</html>