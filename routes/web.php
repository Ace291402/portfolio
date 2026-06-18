<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Models\Skill;
use App\Models\Project;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [ProfileController::class, 'index']);

// Download resume/CV
Route::get('/download-cv', [ProfileController::class, 'downloadCv'])->name('download.cv');

// Contact form handler
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');

/*
|--------------------------------------------------------------------------
| Dashboard (Admin Only)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {

    $skills = Skill::all();
    $projects = Project::all();

    return view('dashboard', compact('skills', 'projects'));

})->middleware(['auth', 'is_admin'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Portfolio Page (Admin Only)
|--------------------------------------------------------------------------
*/
Route::get('/portfolio', [ProfileController::class, 'index'])
    ->middleware(['auth', 'is_admin'])
    ->name('portfolio.index');

/*
|--------------------------------------------------------------------------
| Skills CRUD (Admin Only)
|--------------------------------------------------------------------------
*/
Route::resource('skills', SkillController::class)
    ->middleware(['auth', 'is_admin']);

/*
|--------------------------------------------------------------------------
| Projects CRUD (Admin Only)
|--------------------------------------------------------------------------
*/
Route::resource('projects', ProjectController::class)
    ->middleware(['auth', 'is_admin']);

/*
|--------------------------------------------------------------------------
| Profile Settings (Admin Only)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'is_admin'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    // Resume upload/manage (authenticated & admin only)
    Route::get('/admin/resume', [ResumeController::class, 'edit'])->name('resume.edit');
    Route::post('/admin/resume', [ResumeController::class, 'update'])->name('resume.update');
});

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/
Route::post('/logout', function () {

    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');

})->name('logout');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';