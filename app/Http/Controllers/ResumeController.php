<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class ResumeController extends Controller
{
    /**
     * Show resume upload form (authenticated).
     */
    public function edit()
    {
        $resumePdfExists = Storage::disk('public')->exists('resume.pdf');
        $resumeTxtExists = Storage::disk('public')->exists('resume.txt');
        $resumeUpdatedAt = null;
        $resumeText = '';
        $resumeTextUpdatedAt = null;

        if ($resumePdfExists) {
            $resumeUpdatedAt = Carbon::createFromTimestamp(
                Storage::disk('public')->lastModified('resume.pdf')
            )->format('F j, Y \a\t g:i A');
        }

        if ($resumeTxtExists) {
            $resumeText = Storage::disk('public')->get('resume.txt');
            $resumeTextUpdatedAt = Carbon::createFromTimestamp(
                Storage::disk('public')->lastModified('resume.txt')
            )->format('F j, Y \a\t g:i A');
        }

        return view('admin.resume', [
            'resumePdfExists' => $resumePdfExists,
            'resumeTxtExists' => $resumeTxtExists,
            'resumeUpdatedAt' => $resumeUpdatedAt,
            'resumeText' => $resumeText,
            'resumeTextUpdatedAt' => $resumeTextUpdatedAt,
        ]);
    }

    /**
     * Handle uploaded resume and store as storage/app/public/resume.pdf or resume.txt.
     */
    public function update(Request $request)
    {
        $request->validate([
            'resume' => ['nullable', 'file', 'mimes:pdf', 'max:5120'],
            'resume_text' => ['nullable', 'string', 'max:10000'],
        ]);

        if (!$request->hasFile('resume') && !$request->filled('resume_text')) {
            return Redirect::back()->withErrors(['resume_text' => 'Please upload a PDF or enter resume text.']);
        }

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            Storage::disk('public')->putFileAs('', $file, 'resume.pdf');
        }

        if ($request->filled('resume_text')) {
            Storage::disk('public')->put('resume.txt', $request->input('resume_text'));
        }

        return Redirect::back()->with('status', 'Resume saved successfully.');
    }
}
