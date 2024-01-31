<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class DashboardController extends Controller
{
    public function index()
    {
        $jobCounts = Job::getCountsByStatus();

        return view('dashboard', compact('jobCounts'));
    }
}
