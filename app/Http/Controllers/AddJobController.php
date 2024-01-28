<?php
// app/Http/Controllers/AddJobController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class AddJobController extends Controller
{
    public function index()
    {
        return view('pages.add-job');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'salary' => 'required|numeric|between:0,999999.99',
            'location' => 'required|string|max:255',
            'job_description' => 'required|string',
        ]);

        // Assuming you have the user information available in the session or authentication
        $userId = auth()->id(); // Retrieve the authenticated user's ID

        // Create a new job with the provided data
        Job::create([
            'user_id' => $userId,
            'job_title' => $request->input('job_title'),
            'company_name' => $request->input('company_name'),
            'salary' => $request->input('salary'),
            'location' => $request->input('location'),
            'job_description' => $request->input('job_description'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Job added successfully!');
    }
}
