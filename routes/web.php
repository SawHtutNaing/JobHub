<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', fn () => view('About'))->name('about');
Route::get('/jobs', [HomeController::class, 'jobs']);
Route::prefix('auth')->group(function () {
    Route::get('/login', fn () => view('auth/login'))->name('auth.login');

    Route::post('/register', [AuthController::class, 'makeRegister'])->name('auth.register');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
});

Route::get('/job-apply', [JobController::class, 'apply']);

Route::get('/test', [HomeController::class, 'test']);
Route::get('/advice', fn () => view('Advice'));
Route::get('/partner-companies', fn () => view('Companies'));
Route::get('/job-posting', fn () => view('JobPostForm'));



// 