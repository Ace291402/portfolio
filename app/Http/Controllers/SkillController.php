<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        Skill::create([
            'name' => $request->name,
            'category' => $request->category,
            'level' => $request->level,
        ]);

        return redirect()->back(); // or redirect('/portfolio')
    }

    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $skill->update($request->all());

        return redirect()->route('skills.index');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return back();
    }
}
