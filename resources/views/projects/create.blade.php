<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-slate-950 text-white min-h-screen">
    <header class="sticky top-0 z-50 bg-slate-900 border-b border-slate-700">
        <div class="max-w-4xl mx-auto flex items-center justify-between px-6 py-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('projects.index') }}" class="p-2 rounded-full hover:bg-slate-800 transition">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
                <h1 class="text-2xl font-bold text-violet-300">Add Project</h1>
            </div>
            <a href="{{ route('projects.index') }}" class="px-4 py-2 rounded-lg border border-slate-600 hover:bg-slate-800 transition">Back</a>
        </div>
    </header>

    <main class="max-w-3xl mx-auto px-6 py-8">
        @if(session('success'))
            <div class="mb-6 rounded-xl bg-emerald-500/10 border border-emerald-500/20 p-4 text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-6 rounded-xl bg-red-500/10 border border-red-500/20 p-4 text-red-200">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-8">
            <h2 class="text-3xl font-bold mb-2">New Project</h2>
            <p class="text-slate-400">Define your next technical milestone.</p>
        </div>

        <form class="space-y-6" method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            @csrf

            <section class="space-y-2">
                <label class="block text-sm text-slate-300">Project Image</label>
                <label class="relative cursor-pointer border border-slate-700 rounded-xl bg-slate-900 aspect-video flex items-center justify-center overflow-hidden hover:border-violet-400 transition">
                    <input type="file" name="image" id="image" accept="image/*" class="hidden" onchange="previewImage(event)" />
                    <img id="preview" class="absolute inset-0 w-full h-full object-cover opacity-0" />
                    <div id="placeholder" class="flex flex-col items-center gap-3 z-10">
                        <div class="w-14 h-14 rounded-full bg-violet-500/20 flex items-center justify-center">
                            <span class="material-symbols-outlined text-violet-300">add_a_photo</span>
                        </div>
                        <p class="text-sm text-slate-300">Upload Cover Image</p>
                    </div>
                </label>
            </section>

            <div class="space-y-2">
                <label for="project-title" class="block text-sm text-slate-300">Project Title</label>
                <input type="text" id="project-title" name="title" value="{{ old('title') }}" placeholder="Enter project title" class="w-full rounded-xl bg-slate-900 border border-slate-700 px-4 py-3 focus:border-violet-400 focus:ring-0" required>
            </div>

            <div class="space-y-2">
                <label for="project-desc" class="block text-sm text-slate-300">Description</label>
                <textarea id="project-desc" name="description" rows="5" placeholder="Describe your project..." class="w-full rounded-xl bg-slate-900 border border-slate-700 px-4 py-3 resize-none focus:border-violet-400 focus:ring-0">{{ old('description') }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label for="project-date" class="block text-sm text-slate-300">Target Date</label>
                    <input type="date" id="project-date" name="target_date" value="{{ old('target_date') }}" class="w-full rounded-xl bg-slate-900 border border-slate-700 px-4 py-3 focus:border-violet-400 focus:ring-0">
                </div>
                <div class="space-y-2">
                    <label for="category" class="block text-sm text-slate-300">Category</label>
                    <select id="category" name="category" class="w-full rounded-xl bg-slate-900 border border-slate-700 px-4 py-3 focus:border-violet-400 focus:ring-0">
                        @foreach(['Architecture', 'Frontend', 'Backend', 'DevOps'] as $category)
                            <option value="{{ $category }}" {{ old('category') === $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <section class="space-y-3">
                <label class="block text-sm text-slate-300">Required Skills</label>
                <div id="skill-list" class="flex flex-wrap gap-2"></div>
                <div class="flex gap-2">
                    <input type="text" id="skill-input" placeholder="Example: Laravel" class="flex-1 rounded-xl bg-slate-900 border border-slate-700 px-4 py-3 focus:border-violet-400 focus:ring-0">
                    <button type="button" onclick="addSkill()" class="px-4 rounded-xl bg-violet-500 hover:bg-violet-600 transition"><span class="material-symbols-outlined">add</span></button>
                </div>
                <input type="hidden" name="skills" id="skills-data" value="{{ old('skills') }}">
            </section>

            <div class="pt-4 space-y-3">
                <button type="submit" class="w-full py-4 rounded-xl bg-violet-500 hover:bg-violet-600 font-semibold transition">Save Project</button>
                <a href="{{ route('projects.index') }}" class="block w-full text-center py-4 rounded-xl border border-slate-700 hover:bg-slate-800 transition">Cancel</a>
            </div>
        </form>
    </main>

    <script>
        function previewImage(event) {
            const input = event.target;
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('preview');
                    const placeholder = document.getElementById('placeholder');
                    preview.src = e.target.result;
                    preview.style.opacity = '1';
                    placeholder.style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        }

        let skills = [];

        function addSkill() {
            const input = document.getElementById('skill-input');
            const value = input.value.trim();
            if (value === '') return;
            if (skills.includes(value)) {
                alert('Skill already added');
                return;
            }
            skills.push(value);
            input.value = '';
            renderSkills();
        }

        function removeSkill(skill) {
            skills = skills.filter(s => s !== skill);
            renderSkills();
        }

        function renderSkills() {
            const container = document.getElementById('skill-list');
            const hidden = document.getElementById('skills-data');
            container.innerHTML = '';
            skills.forEach(skill => {
                container.innerHTML += `
                    <div class="bg-surface-container-high text-on-surface px-4 py-2 rounded-full border border-outline-variant flex items-center gap-2">
                        ${skill}
                        <span onclick="removeSkill('${skill}')" class="material-symbols-outlined text-[16px] cursor-pointer hover:text-primary">close</span>
                    </div>
                `;
            });
            hidden.value = JSON.stringify(skills);
        }

        document.addEventListener('DOMContentLoaded', function () {
            const oldSkills = document.getElementById('skills-data').value;
            if (oldSkills) {
                try {
                    const parsed = JSON.parse(oldSkills);
                    if (Array.isArray(parsed)) {
                        skills = parsed;
                        renderSkills();
                    }
                } catch (error) {
                }
            }
        });
    </script>
</body>

</html>
