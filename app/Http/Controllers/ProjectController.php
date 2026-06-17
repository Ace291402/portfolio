<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'target_date' => 'nullable|date',
            'skills' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
        }

        $skills = [];
        if (!empty($validated['skills'])) {
            $skills = json_decode($validated['skills'], true) ?: [];
        }

        Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'category' => $validated['category'] ?? null,
            'target_date' => $validated['target_date'] ?? null,
            'skills' => $skills,
            'image' => $path,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project added successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'target_date' => 'nullable|date',
            'skills' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $project->image = $request->file('image')->store('projects', 'public');
        }

        $skills = [];
        if (!empty($validated['skills'])) {
            $skills = json_decode($validated['skills'], true) ?: [];
        }

        $project->update([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'category' => $validated['category'] ?? null,
            'target_date' => $validated['target_date'] ?? null,
            'skills' => $skills,
            'image' => $project->image,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
