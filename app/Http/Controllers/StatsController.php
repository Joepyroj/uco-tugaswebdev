<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class StatsController extends Controller
{
    public function index()
    {
        return view('pages.stats');
    }

    // Add other methods as needed
}
