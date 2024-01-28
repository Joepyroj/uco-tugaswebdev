<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllJobsController extends Controller
{
    public function index()
    {
        return view('pages.all-jobs');
    }

    // Add other methods as needed
}
