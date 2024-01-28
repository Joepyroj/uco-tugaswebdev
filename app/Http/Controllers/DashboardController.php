<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Create a dashboard.blade.php file in the "resources/views" directory
    }
}
