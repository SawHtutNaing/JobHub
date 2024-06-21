<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobApplyDetailsController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileTypeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', fn () => view('About'))->name('about');
// Route::get('/jobs-view', [HomeController::class, 'jobs']);
//jobs search and crud 
// Route::prefix('jobs')->group(function () {
//     Route::get('/filter', [JobController::class, 'filter'])->name('jobs.filter');
// });
Route::resource('jobs', JobController::class)->middleware('auth');




//jobs search and crud 

Route::prefix('auth')->group(function () {
    Route::get('/login', fn () => view('auth/login'))->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

    Route::post('/register', [AuthController::class, 'makeRegister'])->name('auth.register');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
});

Route::get('/job-apply/{job}', [JobController::class, 'apply'])->name('job-apply');

Route::get('/test', [HomeController::class, 'test']);
Route::get('/advice', fn () => view('Advice'));
Route::get('/partner-companies', fn () => view('Companies'));


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    //prifile
    Route::get('/profile', [ProfileTypeController::class, 'profile'])->name('profile');
    Route::get('profile-setting', [ProfileTypeController::class, 'profileSetting'])->name('profileSetting');
    Route::post('profile-setting', [ProfileTypeController::class, 'profileSettingStore'])->name('profileSettingStore');


    //job apply 

    Route::post('job-apply-detail', [JobApplyDetailsController::class, 'store'])->name('jobApplyDetail');
});
