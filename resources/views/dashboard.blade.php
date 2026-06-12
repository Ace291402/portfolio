<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary": "#283044",
                        "primary-fixed": "#e9ddff",
                        "outline": "#958ea0",
                        "secondary-fixed": "#dae2fd",
                        "on-tertiary": "#263143",
                        "surface-container-highest": "#273647",
                        "secondary-container": "#3f465c",
                        "on-primary-container": "#340080",
                        "tertiary": "#bcc7de",
                        "primary-container": "#a078ff",
                        "inverse-on-surface": "#233143",
                        "on-primary-fixed": "#23005c",
                        "on-tertiary-fixed": "#111c2d",
                        "on-secondary-fixed-variant": "#3f465c",
                        "surface-variant": "#273647",
                        "on-secondary-fixed": "#131b2e",
                        "surface-tint": "#d0bcff",
                        "outline-variant": "#494454",
                        "on-background": "#d4e4fa",
                        "inverse-primary": "#6d3bd7",
                        "tertiary-container": "#8691a7",
                        "surface-container-lowest": "#010f1f",
                        "error": "#ffb4ab",
                        "surface": "#051424",
                        "secondary-fixed-dim": "#bec6e0",
                        "on-error": "#690005",
                        "surface-container-low": "#0d1c2d",
                        "on-tertiary-container": "#1f2a3c",
                        "on-secondary-container": "#adb4ce",
                        "surface-container-high": "#1c2b3c",
                        "error-container": "#93000a",
                        "on-error-container": "#ffdad6",
                        "on-tertiary-fixed-variant": "#3c475a",
                        "on-surface": "#d4e4fa",
                        "primary-fixed-dim": "#d0bcff",
                        "on-primary-fixed-variant": "#5516be",
                        "secondary": "#bec6e0",
                        "surface-dim": "#051424",
                        "tertiary-fixed": "#d8e3fb",
                        "background": "#051424",
                        "tertiary-fixed-dim": "#bcc7de",
                        "surface-container": "#122131",
                        "on-primary": "#3c0091",
                        "surface-bright": "#2c3a4c",
                        "on-surface-variant": "#cbc3d7",
                        "primary": "#d0bcff",
                        "inverse-surface": "#d4e4fa"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "lg": "24px",
                        "unit": "8px",
                        "md": "16px",
                        "xs": "4px",
                        "margin": "40px",
                        "sm": "8px",
                        "xl": "32px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "headline-md": ["Plus Jakarta Sans"],
                        "display-xl": ["Plus Jakarta Sans"],
                        "caption": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "display-xl": ["48px", {
                            "lineHeight": "1.1",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "800"
                        }],
                        "caption": ["12px", {
                            "lineHeight": "1.4",
                            "fontWeight": "500"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        body {
            min-height: 100dvh;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-surface text-on-surface font-body-md antialiased">
    <!-- TopAppBar -->
    <header class="sticky top-0 w-full z-40 bg-surface/80 backdrop-blur-xl border-b border-outline-variant shadow-sm">
        <div class="flex items-center justify-between px-md py-sm w-full max-w-screen-2xl mx-auto">
            <div class="flex items-center gap-sm active:opacity-80 active:scale-95 transition-all cursor-pointer">
                <span class="material-symbols-outlined text-primary text-headline-lg" data-icon="account_tree">account_tree</span>
                <h1 class="font-headline-lg text-headline-lg font-bold text-primary tracking-tight">SkillArch</h1>
            </div>
            <button class="material-symbols-outlined text-primary hover:text-primary transition-colors duration-200 p-2 rounded-full" data-icon="account_circle">account_circle</button><button class="material-symbols-outlined text-primary hover:text-primary transition-colors duration-200 p-2 rounded-full" data-icon="search">search</button>
        </div>
    </header>
    <main class="max-w-screen-2xl mx-auto px-lg pt-lg pb-32">
        <!-- Summary Section -->
        <section class="grid grid-cols-2 gap-md mb-xl">
            <div class="bg-surface-container-low border border-outline-variant rounded-xl p-md shadow-sm">
                <div class="flex flex-col">
                    <span class="font-label-md text-caption text-on-surface-variant uppercase tracking-wider mb-1">TOTAL PROJECTS</span>
                    <span class="font-headline-lg text-headline-lg text-primary">0</span>
                </div>
                <div class="mt-sm flex items-center text-primary font-label-md">
                    <span class="material-symbols-outlined text-[18px]" data-icon="trending_up">trending_up</span>
                    <span class="ml-1">+3 this month</span>
                </div>
            </div>
            <div class="bg-surface-container-low border border-outline-variant rounded-xl p-md shadow-sm">
                <div class="flex flex-col">
                    <span class="font-label-md text-caption text-on-surface-variant uppercase tracking-wider mb-1">TOTAL SKILLS</span>
                    <span class="font-headline-lg text-headline-lg text-primary"></span>
                </div>
                <div class="mt-sm flex items-center text-primary font-label-md">
                    <span class="material-symbols-outlined text-[18px]" data-icon="verified">verified</span>
                    <span class="ml-1">8 advanced</span>
                </div>
            </div>
        </section>
        <!-- Recent Projects Section -->
        <section class="mb-xl">
            <div class="flex justify-between items-end mb-md px-1">
                <h2 class="font-headline-md text-headline-md text-on-surface">Recent Projects</h2>
                <button class="font-label-md text-on-surface-variant hover:text-primary transition-colors">View All</button>
            </div>
            <div class="flex overflow-x-auto gap-md hide-scrollbar -mx-lg px-lg pb-md">
                <!-- Project Card 1 -->
                <div class="min-w-[280px] bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden shadow-sm flex-shrink-0 group">
                    <div class="relative h-44 overflow-hidden">
                        <img alt="Software Development Workspace" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsR47FVYYFS3u11i7inlpOH60BHSq8tNGS-Xt8D-oo7I9yhI8woYZ4V2lFAUJmpP7LL_qONvVzJ49COD3YFA-_TUk-eUkd6kMCQ5Rgja3Tf7qmZbHxaCwBNt6Qk0TKIDCl_ibPkVm9DVmp-MaNDgtnnXyvRqmAhCDPvPQfDbPler-Kj4duYZV5Zsqd8ulArIcHKeKynCu-3gViUl5Y2ngp5grnkgeC0-xblM31ytjztEbbZHB5atNf-WeH8blvS63QYXlz5QmTeefd" />
                        <div class="absolute top-sm right-sm bg-primary text-on-primary font-label-md px-2 py-1 rounded-lg text-[10px] uppercase tracking-widest shadow-lg">ACTIVE</div>
                    </div>
                    <div class="p-md">
                        <h3 class="font-headline-md text-body-lg font-bold mb-1">Quantum Ledger API</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-md">Financial backend infrastructure overhaul.</p>
                        <div class="flex flex-wrap gap-xs">
                            <span class="bg-surface-container-highest text-on-surface-variant px-2.5 py-1 rounded-full font-label-md text-[10px] uppercase">TYPESCRIPT</span>
                            <span class="bg-surface-container-highest text-on-surface-variant px-2.5 py-1 rounded-full font-label-md text-[10px] uppercase">RUST</span>
                            <span class="bg-surface-container-highest text-on-surface-variant px-2.5 py-1 rounded-full font-label-md text-[10px] uppercase">POSTGRES</span>
                        </div>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div class="min-w-[280px] bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden shadow-sm flex-shrink-0 group">
                    <div class="relative h-44 overflow-hidden">
                        <img alt="Industrial Design Process" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJL4tG5-sjd7RmivgrFyDwZKTtdxLAIaLxOwtRArUw45ExElftTrY58FRUtUG7mld-qeunpQDoHMfxXaKMDWeJqeCmhdbzNwNy3Btwn4FMiuKqy3bfx5yKeMRwBWKnnsc2Vzc0_ZZY35oQF_Mcrx6pfV5ZzKOTVHoYIr_3VVzgzwt3FAX_kYcVzSLZlM6LLQ0iryTHDGbTmlEVFlja8jI2_1B1r9Eov60wxrjpUWopPiF8vPIryq8Qj9IiighELRrSqbxMeUmAxciF" />
                        <div class="absolute top-sm right-sm bg-secondary-container text-on-secondary-container font-label-md px-2 py-1 rounded-lg text-[10px] uppercase tracking-widest shadow-lg">PLANNING</div>
                    </div>
                    <div class="p-md">
                        <h3 class="font-headline-md text-body-lg font-bold mb-1">Nexus Mobile App</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-md">Cross-platform ecosystem for smart home.</p>
                        <div class="flex flex-wrap gap-xs">
                            <span class="bg-surface-container-highest text-on-surface-variant px-2.5 py-1 rounded-full font-label-md text-[10px] uppercase">FLUTTER</span>
                            <span class="bg-surface-container-highest text-on-surface-variant px-2.5 py-1 rounded-full font-label-md text-[10px] uppercase">DART</span>
                            <span class="bg-surface-container-highest text-on-surface-variant px-2.5 py-1 rounded-full font-label-md text-[10px] uppercase">IOT</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Skills Section -->
        <!-- Top Skills Section -->
        <section>
            <div class="flex justify-between items-end mb-md px-1">
                <h2 class="font-headline-md text-headline-md text-on-surface">Top Skills</h2>
                <a href="{{ route('skills.create') }}" class="font-label-md text-primary hover:underline">
                    Add Skill
                </a>
            </div>

            <div class="space-y-md">

                @foreach($skills as $skill)
                <div class="bg-surface-container-low border border-outline-variant rounded-xl p-md shadow-sm">

                    <div class="flex justify-between items-center mb-md">

                        <div class="flex items-center gap-md">
                            <div class="w-12 h-12 rounded-xl bg-primary-container/20 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary-container">code</span>
                            </div>

                            <div>
                                <h4 class="font-label-md text-body-lg font-bold text-on-surface">
                                    {{ $skill->name }}
                                </h4>
                                <span class="font-label-md text-caption text-on-surface-variant uppercase tracking-wider">
                                    {{ $skill->category }}
                                </span>
                            </div>
                        </div>

                        <span class="font-headline-md text-body-lg text-primary">
                            {{ $skill->level }}%
                        </span>
                    </div>

                    <div class="w-full h-2.5 bg-surface-container-highest rounded-full overflow-hidden">
                        <div class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(208,188,255,0.4)]"
                            style="width: {{ $skill->level }}%">
                        </div>
                    </div>

                </div>
                @endforeach

            </div>
        </section>
    </main>
    <!-- BottomNavBar -->
    <nav class="fixed bottom-0 w-full z-50 rounded-t-xl bg-surface-container-low/90 backdrop-blur-lg border-t border-outline-variant shadow-lg h-18">
        <div class="flex justify-around items-center h-full w-full px-4 py-2">
            <!-- Dashboard (Active) -->
            <button class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-xl py-1.5 active:scale-90 transition-all px-2">
                <span class="material-symbols-outlined" data-icon="dashboard" style="font-variation-settings: 'FILL' 1;">dashboard</span>
                <span class="font-label-md text-label-md">Dashboard</span>
            </button>
            <!-- Projects -->
            <a href="{{ route('projects.index') }}" class="flex flex-col items-center justify-center text-on-surface-variant hover:bg-surface-container-highest rounded-xl py-1.5 active:scale-90 transition-all px-2">
                <span class="material-symbols-outlined">folder_shared</span>
                <span class="font-label-md text-label-md">Projects</span>
            </a>

            <!-- Skills -->
            <a href="{{ route('skills.index') }}" class="flex flex-col items-center justify-center text-on-surface-variant hover:bg-surface-container-highest rounded-xl py-1.5 active:scale-90 transition-all px-2">
                <span class="material-symbols-outlined">psychology</span>
                <span class="font-label-md text-label-md">Skills</span>
            </a>

            <!-- Logout -->
            <button class="flex flex-col items-center justify-center text-error hover:bg-error-container/20 rounded-xl py-1.5 active:scale-90 transition-all px-2">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-label-md text-label-md">Logout</span>
            </button>
        </div>
    </nav>
</body>

</html>