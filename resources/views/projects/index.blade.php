<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between px-6 py-4 gap-4">
            <div class="flex items-center gap-3">
                <a href="{{ route('dashboard') }}" class="p-2 rounded-full hover:bg-slate-800 transition">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-violet-300">Projects Admin</h1>
                    <p class="text-slate-400">Create and manage portfolio projects.</p>
                </div>
            </div>
            <a href="{{ route('projects.create') }}" class="rounded-xl bg-violet-500 px-4 py-2 text-white hover:bg-violet-600 transition">Add Project</a>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-8">
        @if(session('success'))
            <div class="mb-6 rounded-xl bg-emerald-500/10 border border-emerald-500/20 p-4 text-emerald-200">
                {{ session('success') }}
            </div>
        @endif

        <div class="space-y-6">
            @forelse($projects as $project)
                <div class="grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-4 bg-slate-900 border border-slate-700 rounded-3xl p-6 shadow-sm">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-4">
                            <img src="{{ $project->image ? asset('storage/' . $project->image) : 'https://via.placeholder.com/120x80?text=No+Image' }}" alt="{{ $project->title }}" class="h-20 w-32 rounded-2xl object-cover border border-slate-700" />
                            <div>
                                <h2 class="text-xl font-bold text-white">{{ $project->title }}</h2>
                                <p class="text-slate-400">{{ \Illuminate\Support\Str::limit($project->description, 90) }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-3 text-sm text-slate-300">
                            <div><span class="font-semibold text-slate-100">Category:</span> {{ $project->category ?? 'N/A' }}</div>
                            <div><span class="font-semibold text-slate-100">Target Date:</span> {{ optional($project->target_date)->format('M d, Y') ?? 'N/A' }}</div>
                            <div class="col-span-2">
                                <span class="font-semibold text-slate-100">Skills:</span>
                                @forelse($project->skills ?? [] as $skill)
                                    <span class="inline-flex items-center rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-200 mr-2 mt-2">{{ $skill }}</span>
                                @empty
                                    <span class="text-slate-400">None</span>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-3">
                        <a href="{{ route('projects.edit', $project) }}" class="rounded-xl bg-violet-500 px-4 py-3 text-center text-white hover:bg-violet-600 transition">Edit</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Delete this project?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full rounded-xl border border-red-500 px-4 py-3 text-red-300 hover:bg-red-500/10 transition">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="rounded-3xl border border-slate-700 bg-slate-900 p-10 text-center text-slate-400">
                    No projects yet. Use the Add Project button to publish your first project.
                </div>
            @endforelse
        </div>
    </main>
</body>

</html>
