<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ResumeController extends Controller
{
    /**
     * Show resume upload form (authenticated).
     */
    public function edit()
    {
        return view('admin.resume');
    }

    /**
     * Handle uploaded resume and store as storage/app/public/resume.pdf
     */
    public function update(Request $request)
    {
        $request->validate([
            'resume' => ['required', 'file', 'mimes:pdf', 'max:5120'],
        ]);

        $file = $request->file('resume');

        // Store under public disk as resume.pdf (overwrites existing)
        Storage::disk('public')->putFileAs('', $file, 'resume.pdf');

        return Redirect::back()->with('status', 'Resume uploaded successfully.');
    }
}
