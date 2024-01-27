<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddJobController;
use App\Http\Controllers\AllJobsController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});
Route::get('/', [HalamanController::class, 'index'])->name('home');

// Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'register'])->name('register');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/add-job', [AddJobController::class, 'index'])->name('add-job');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/add-job', [AddJobController::class, 'index'])->name('add-job');
    Route::get('/all-jobs', [AllJobsController::class, 'index'])->name('all-jobs');
    Route::get('/stats', [StatsController::class, 'index'])->name('stats');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/add-job', [AddJobController::class, 'store']);
});
