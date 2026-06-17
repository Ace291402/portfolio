<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>

<body class="bg-slate-950 text-white min-h-screen">
    <header class="sticky top-0 z-50 bg-slate-900 border-b border-slate-700">
        <div class="max-w-6xl mx-auto flex items-center justify-between px-6 py-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('dashboard') }}" class="p-2 rounded-full hover:bg-slate-800 transition">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-violet-300">Skills Admin</h1>
                    <p class="text-slate-400">Create and manage portfolio skills.</p>
                </div>
            </div>
            <a href="{{ route('skills.create') }}" class="rounded-xl bg-violet-500 px-4 py-2 text-white hover:bg-violet-600 transition">Add Skill</a>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-8">
        @if(session('success'))
            <div class="mb-6 rounded-xl bg-emerald-500/10 border border-emerald-500/20 p-4 text-emerald-200">
                {{ session('success') }}
            </div>
        @endif

        <div class="space-y-4">
            @forelse($skills as $skill)
                <div class="grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-4 bg-slate-900 border border-slate-700 rounded-2xl p-6 shadow-sm">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-14 h-14 rounded-xl bg-violet-500/20 flex items-center justify-center flex-shrink-0">
                                @if($skill->icon_class)
                                    <i class="devicon-{{ $skill->icon_class }} colored text-[24px]"></i>
                                @else
                                    <span class="material-symbols-outlined text-violet-300 text-2xl">code</span>
                                @endif
                            </div>
                            <div>
                                <h2 class="text-lg font-bold text-white">{{ $skill->name }}</h2>
                                <p class="text-sm text-slate-400">{{ $skill->category }} • {{ $skill->level_label }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="flex-1 h-2 rounded-full bg-slate-800 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-violet-500 to-violet-400" style="width: {{ $skill->level }}%;\"></div>
                            </div>
                            <span class="text-sm font-semibold text-violet-300 min-w-fit">{{ $skill->level }}%</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 justify-start lg:justify-between">
                        <a href="{{ route('skills.edit', $skill) }}" class="rounded-lg bg-violet-500 px-4 py-2 text-center text-white hover:bg-violet-600 transition text-sm">Edit</a>
                        <form action="{{ route('skills.destroy', $skill) }}" method="POST" onsubmit="return confirm('Delete this skill?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full rounded-lg border border-red-500 px-4 py-2 text-red-300 hover:bg-red-500/10 transition text-sm">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="rounded-2xl border border-slate-700 bg-slate-900 p-10 text-center text-slate-400">
                    No skills yet. Use the Add Skill button to add your first skill.
                </div>
            @endforelse
        </div>
    </main>
</body>

</html>
