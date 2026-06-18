<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Skill;
use App\Models\Project;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function index()
    {
        $skills = Skill::all();
        $projects = Project::all();

        return view('portfolio.index', compact('skills', 'projects'));
    }
    
    /**
     * Download the CV/resume file if present in storage/app/public/resume.pdf
     */
    public function downloadCv()
    {
        $pdfPath = storage_path('app/public/resume.pdf');
        $textPath = storage_path('app/public/resume.txt');

        if (file_exists($pdfPath)) {
            return response()->download($pdfPath, 'Resume.pdf');
        }

        if (file_exists($textPath)) {
            return response()->download($textPath, 'Resume.txt');
        }

        // Fallback: return a downloadable plain-text resume if no custom file exists.
        $contents = "Name: Michael Angelo\nEmail: michaelangelo@example.com\n\nSummary:\nMotivated fresh graduate experienced in Laravel, PHP, MySQL, Tailwind and web development.\n\nProjects:\n- DOST Project (Laravel)\n- Barangay API Project\n\nPlease update your resume via the admin resume page.";

        return response($contents, 200, [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => 'attachment; filename="Resume.txt"',
        ]);
    }
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
