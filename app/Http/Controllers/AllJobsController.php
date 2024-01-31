<?php
// app/Http/Controllers/AllJobsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class AllJobsController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('pages.all-jobs', compact('jobs'));
    }

    public function edit(Job $job)
    {
        return view('pages.edit-job', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'salary' => 'required|numeric|between:0,999999.99',
            'location' => 'required|string|max:255',
            'job_description' => 'required|string',
            'status' => 'required|in:saved,applied,interview,offered,rejected',
        ]);

        $job->update([
            'job_title' => $request->input('job_title'),
            'company_name' => $request->input('company_name'),
            'salary' => $request->input('salary'),
            'location' => $request->input('location'),
            'job_description' => $request->input('job_description'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('all-jobs')->with('success', 'Job updated successfully!');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('all-jobs')->with('success', 'Job deleted successfully!');
    }
}
