<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>

<body class="bg-slate-950 text-white min-h-screen">
    <header class="sticky top-0 z-50 bg-slate-900 border-b border-slate-700">
        <div class="max-w-4xl mx-auto flex items-center justify-between px-6 py-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('skills.index') }}" class="p-2 rounded-full hover:bg-slate-800 transition">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
                <h1 class="text-2xl font-bold text-violet-300">Edit Skill</h1>
            </div>
            <a href="{{ route('skills.index') }}" class="px-4 py-2 rounded-lg border border-slate-600 hover:bg-slate-800 transition">Back</a>
        </div>
    </header>

    <main class="max-w-3xl mx-auto px-6 py-8">
        @if($errors->any())
            <div class="mb-6 rounded-xl bg-red-500/10 border border-red-500/20 p-4 text-red-200">
                <h3 class="font-bold mb-2">Please fix the following errors:</h3>
                <ul class="list-disc pl-5 space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-8">
            <h2 class="text-3xl font-bold mb-2">Update Skill</h2>
            <p class="text-slate-400">Modify your skill information.</p>
        </div>

        <form action="{{ route('skills.update', $skill) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Skill Name -->
            <div class="space-y-2">
                <label class="block text-sm text-slate-300">Skill Name</label>
                <input type="text" name="name" value="{{ old('name', $skill->name) }}" 
                    placeholder="e.g., Laravel, React, HTML, CSS"
                    class="w-full rounded-xl bg-slate-900 border border-slate-700 px-4 py-3 text-white placeholder:text-slate-500 focus:border-violet-400 focus:ring-0 transition" 
                    required />
                @error('name')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category -->
            <div class="space-y-2">
                <label class="block text-sm text-slate-300">Category</label>
                <div class="relative">
                    <button type="button" id="dropdownBtn"
                        class="w-full flex items-center justify-between rounded-xl bg-slate-900 border border-slate-700 px-4 py-3 text-slate-300 hover:border-violet-400 focus:border-violet-400 focus:ring-0 transition">
                        <span id="selectedValue" class="text-white">{{ old('category', $skill->category) }}</span>
                        <span class="material-symbols-outlined text-slate-500">expand_more</span>
                    </button>
                    <input type="hidden" name="category" id="categoryInput" value="{{ old('category', $skill->category) }}">
                    <div id="dropdownMenu" class="hidden absolute z-50 top-full mt-2 w-full rounded-xl border border-slate-700 bg-slate-900 shadow-xl overflow-hidden">
                        @foreach(['Language' => '📝 Language', 'Framework' => '🚀 Framework', 'Database' => '🗄️ Database', 'Tool' => '🔧 Tool', 'Frontend' => '🎨 Frontend', 'Backend' => '⚙️ Backend'] as $value => $label)
                            <button type="button" data-value="{{ $value }}" class="w-full text-left px-4 py-3 text-slate-300 hover:bg-violet-500/20 hover:text-violet-300 transition">{{ $label }}</button>
                        @endforeach
                    </div>
                </div>
                @error('category')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Proficiency Level -->
            <div class="space-y-3">
                <div class="flex items-end justify-between">
                    <label class="block text-sm text-slate-300">Proficiency Level</label>
                    <div class="flex items-baseline gap-2">
                        <span id="levelValue" class="text-2xl font-bold text-violet-300">{{ $skill->level }}</span>
                        <span class="text-sm text-slate-400">%</span>
                    </div>
                </div>
                <input type="range" name="level" id="skillRange" min="0" max="100" value="{{ old('level', $skill->level) }}" 
                    class="w-full h-2 rounded-full bg-slate-800 accent-violet-500 cursor-pointer" />
                <div class="flex justify-between items-center">
                    <span id="levelLabel" class="inline-block rounded-full bg-violet-500/20 px-3 py-1 text-violet-300 font-semibold text-xs uppercase tracking-widest">Advanced</span>
                    <p class="text-xs text-slate-500">0% Beginner • 50% Intermediate • 75% Advanced • 100% Mastered</p>
                </div>
                @error('level')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Buttons -->
            <div class="pt-4 space-y-3">
                <button type="submit" class="w-full py-3 rounded-xl bg-violet-500 hover:bg-violet-600 font-semibold transition">
                    Update Skill
                </button>
                <a href="{{ route('skills.index') }}" class="block w-full text-center py-3 rounded-xl border border-slate-700 text-slate-300 hover:bg-slate-800 transition">
                    Cancel
                </a>
            </div>
        </form>
    </main>

    <script>
        const dropdownBtn = document.getElementById('dropdownBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const selectedValue = document.getElementById('selectedValue');
        const categoryInput = document.getElementById('categoryInput');
        const skillRange = document.getElementById('skillRange');
        const levelLabel = document.getElementById('levelLabel');
        const levelValue = document.getElementById('levelValue');

        dropdownBtn?.addEventListener('click', (e) => {
            e.preventDefault();
            dropdownMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('#dropdownMenu button[data-value]').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                selectedValue.textContent = item.textContent;
                categoryInput.value = item.dataset.value;
                dropdownMenu.classList.add('hidden');
            });
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('#dropdownBtn') && !e.target.closest('#dropdownMenu')) {
                dropdownMenu.classList.add('hidden');
            }
        });

        if (skillRange) {
            const updateLabel = () => {
                const value = Number(skillRange.value);
                levelValue.textContent = value;
                
                if (value >= 80) levelLabel.textContent = 'Mastered';
                else if (value >= 55) levelLabel.textContent = 'Advanced';
                else if (value >= 30) levelLabel.textContent = 'Intermediate';
                else levelLabel.textContent = 'Beginner';
            };
            updateLabel();
            skillRange.addEventListener('input', updateLabel);
        }
    </script>
</body>

</html>
