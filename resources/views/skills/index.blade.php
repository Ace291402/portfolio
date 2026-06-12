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

                body {
                        font-family: 'Plus Jakarta Sans', sans-serif;
                }
        </style>
</head>

<body class="bg-background text-on-background min-h-screen font-body-md">
        <!-- TopAppBar component from COMPONENTS_9 -->
        <header class="docked full-width top-0 sticky z-40 bg-surface/80 backdrop-blur-xl border-b border-outline-variant shadow-sm">
                <div class="flex items-center justify-between px-md py-sm w-full max-w-screen-2xl mx-auto">
                        <div class="flex items-center gap-md">
                                <span class="material-symbols-outlined text-primary text-3xl" data-icon="account_tree">account_tree</span>
                                <h1 class="font-headline-lg text-headline-lg font-bold text-primary tracking-tight">Add Skill</h1>
                        </div>
                        <button onclick="window.history.back()"
                                class="flex items-center gap-2 hover:text-primary transition-colors duration-200 p-2 rounded-full active:opacity-80 active:scale-95">
                                <span class="fas fa-arrow-left"></span>
                                <span>Back</span>
                        </button>
                </div>
        </header>
        <main class="flex flex-col items-center justify-center min-h-[calc(100vh-136px)] p-md">
                <!-- Add Skill Modal Content (Aura Professional Restyle) -->
                <div class="w-full max-w-md bg-surface-container-lowest rounded-xl shadow-2xl overflow-hidden border border-outline-variant/30">
                        <!-- Modal Header -->
                        <div class="px-lg py-lg flex items-center justify-between border-b border-outline-variant/20">
                                <div>
                                        <h2 class="font-headline-md text-headline-md text-on-surface">Add New Skill</h2>
                                        <p class="font-caption text-caption text-on-surface-variant mt-xs">Define a new proficiency for your professional profile.</p>
                                </div>
                                <button class="text-on-surface-variant hover:text-primary transition-colors p-sm">
                                        <span class="material-symbols-outlined" data-icon="close">close</span>
                                </button>
                        </div>
                        <!-- Modal Form -->
                        <form method="POST" action="{{ route('skills.store') }}" class="px-lg py-lg space-y-xl">
                                @csrf

                                <!-- Skill Name -->
                                <div class="space-y-sm">
                                        <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest text-[10px]">
                                                Description Skill
                                        </label>

                                        <input
                                                type="text"
                                                name="name"
                                                id="skill_name"
                                                placeholder="e.g. Laravel, React, PHP"
                                                class="w-full px-md py-md bg-surface-container border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all font-body-md text-body-md text-on-surface placeholder:text-outline/50" />
                                </div>

                                <!-- CATEGORY (IMPORTANT FIX) -->
                                <div class="space-y-sm">
                                        <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest text-[10px]">
                                                Category
                                        </label>

                                        <div class="relative">

                                                <!-- Button UI (same design) -->
                                                <button type="button" id="dropdownBtn"
                                                        class="w-full flex items-center justify-between bg-surface-container border border-outline-variant rounded-lg px-md py-md text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all">

                                                        <span id="selectedValue" class="flex items-center gap-2">
                                                                💻 python
                                                        </span>

                                                        <span class="material-symbols-outlined text-outline">expand_more</span>
                                                </button>

                                                <!-- THIS IS IMPORTANT (backend value) -->
                                                <input type="hidden" name="category" id="categoryInput" value="python">

                                                <!-- Dropdown -->
                                                <div id="dropdownMenu"
                                                        class="hidden absolute w-full mt-2 bg-surface-container border border-outline-variant rounded-lg shadow-lg z-50 overflow-hidden">

                                                        <div class="max-h-60 overflow-y-auto">

                                                                <div class="px-4 py-2 hover:bg-primary/10 cursor-pointer" data-value="python">🐍 Python</div>
                                                                <div class="px-4 py-2 hover:bg-primary/10 cursor-pointer" data-value="java">☕ Java</div>
                                                                <div class="px-4 py-2 hover:bg-primary/10 cursor-pointer" data-value="javascript">🟨 JavaScript</div>
                                                                <div class="px-4 py-2 hover:bg-primary/10 cursor-pointer" data-value="php">🐘 PHP</div>
                                                                <div class="px-4 py-2 hover:bg-primary/10 cursor-pointer" data-value="laravel">🚀 Laravel</div>
                                                                <div class="px-4 py-2 hover:bg-primary/10 cursor-pointer" data-value="react">⚛️ React</div>

                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <script>
                                        const btn = document.getElementById("dropdownBtn");
                                        const menu = document.getElementById("dropdownMenu");
                                        const selected = document.getElementById("selectedValue");
                                        const categoryInput = document.getElementById("categoryInput");

                                        btn.addEventListener("click", () => {
                                                menu.classList.toggle("hidden");
                                        });

                                        document.querySelectorAll("#dropdownMenu div[data-value]").forEach(item => {
                                                item.addEventListener("click", () => {
                                                        selected.innerHTML = item.innerHTML;
                                                        categoryInput.value = item.dataset.value;
                                                        menu.classList.add("hidden");
                                                });
                                        });
                                </script>

                                <!-- SLIDER -->
                                <div class="space-y-md">

                                        <div class="flex justify-between items-center">
                                                <label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest text-[10px]">
                                                        Proficiency Level
                                                </label>

                                                <span id="levelText"
                                                        class="font-label-md text-label-md text-primary px-md py-xs bg-primary/10 border border-primary/20 rounded-full">
                                                        Advanced
                                                </span>
                                        </div>

                                        <input
                                                type="range"
                                                name="percentage"
                                                min="1"
                                                max="100"
                                                value="75"
                                                id="skillRange"
                                                class="w-full accent-violet-500 cursor-pointer" />

                                        <script>
                                                const range = document.getElementById("skillRange");
                                                const levelText = document.getElementById("levelText");

                                                range.addEventListener("input", () => {
                                                        const value = range.value;

                                                        if (value < 25) levelText.textContent = "Beginner";
                                                        else if (value < 50) levelText.textContent = "Intermediate";
                                                        else if (value < 75) levelText.textContent = "Skilled";
                                                        else levelText.textContent = "Advanced";
                                                });
                                        </script>
                                </div>

                                <!-- SUBMIT BUTTON -->
                                <button type="submit"
                                        class="w-full py-md bg-primary text-on-primary font-headline-md text-body-md rounded-lg shadow-xl shadow-primary/20 hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-sm mt-xl">

                                        <span class="material-symbols-outlined">add_circle</span>
                                        Add to Profile

                                </button>

                        </form>
                </div>
        </main>
        <!-- BottomNavBar component from COMPONENTS_9 -->
        <nav class="fixed bottom-0 w-full z-50 rounded-t-xl bg-surface-container-low/90 backdrop-blur-lg border-t border-outline-variant shadow-lg md:hidden">
                <div class="flex justify-around items-center px-4 py-2 w-full h-16">
                        <a class="flex flex-col items-center justify-center text-on-surface-variant hover:bg-surface-container-highest transition-all px-4 py-1.5" href="#">
                                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                                <span class="font-label-md text-label-md">Dashboard</span>
                        </a>
                        <a class="flex flex-col items-center justify-center text-on-surface-variant hover:bg-surface-container-highest transition-all px-4 py-1.5" href="#">
                                <span class="material-symbols-outlined" data-icon="folder_shared">folder_shared</span>
                                <span class="font-label-md text-label-md">Projects</span>
                        </a>
                        <a class="flex flex-col items-center justify-center text-on-surface-variant hover:bg-surface-container-highest transition-all px-4 py-1.5" href="#">
                                <span class="material-symbols-outlined" data-icon="psychology">psychology</span>
                                <span class="font-label-md text-label-md">Skills</span>
                        </a>
                        <a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-xl px-4 py-1.5 active:scale-90 duration-150" href="#">
                                <span class="material-symbols-outlined" data-icon="add_circle">add_circle</span>
                                <span class="font-label-md text-label-md">Add</span>
                        </a>
                </div>
        </nav>
        <!-- Spacing for bottom nav on mobile -->
        <div class="h-16 md:hidden"></div>
</body>

</html>