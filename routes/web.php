<?php

use App\Http\Controllers\HomeController;
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
Route::get('/about', fn () => view('About'));
Route::get('/jobs', [HomeController::class, 'jobs']);
Route::get('/login', fn () => view('auth/login'));
Route::get('/register', fn () => view('auth/register'));
Route::get('/job-apply', fn () => view('AppliedJob'));
Route::get('/test', fn () => view('test'));
Route::get('/advice', fn () => view('Advice'));
Route::get('/partner-companies', fn () => view('Companies'));
Route::get('/job-posting', fn () => view('JobPostForm'));
