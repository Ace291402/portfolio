<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        // For now, just log the contact message. This keeps the form functional without extra setup.
        Log::info('Contact form submitted', $data);

        return Redirect::back()->with('status', 'Message received. Thank you!');
    }
}
