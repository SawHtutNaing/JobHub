<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobApplyDetailsController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileTypeController;
use App\Models\JobApplyDetails;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route::get('/jobs-view', [HomeController::class, 'jobs']);
//jobs search and crud 
// Route::prefix('jobs')->group(function () {
//     Route::get('/filter', [JobController::class, 'filter'])->name('jobs.filter');
// });




//jobs search and crud 

Route::prefix('auth')->group(function () {
    Route::get('/login', fn () => view('auth/login'))->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::post('/register', [AuthController::class, 'makeRegister'])->name('auth.register');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
});

Route::get('/job-apply/{job}', [JobController::class, 'apply'])->name('job-apply');

Route::get('/test', [HomeController::class, 'test']);
Route::get('/advice', fn () => view('Advice'));
Route::get('/partner-companies', fn () => view('Companies'));

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['middleware' => ['auth', 'verified']], function () {
    //prifile
    Route::get('/profile', [ProfileTypeController::class, 'profile'])->name('profile');
    Route::get('profile-setting', [ProfileTypeController::class, 'profileSetting'])->name('profileSetting');
    Route::post('profile-setting', [ProfileTypeController::class, 'profileSettingStore'])->name('profileSettingStore');


    //job apply 

    Route::post('job-apply-detail', [JobApplyDetailsController::class, 'store'])->name('jobApplyDetail');



    //company to view record and user to view his applied job

    Route::get('view-my-applied-job/{job}', [JobController::class, 'userView'])->name('viewMyAppliedJOb');
    Route::get('view-my-posted-job/{job}', [JobController::class, 'companyView'])->name('viewMyPostedJOb');
    // company accept the interview 
    Route::get('accept_interview/{jobApplyDetails}', [JobApplyDetailsController::class, 'acceptInterview'])->name('accept-interview');

    Route::resource('jobs', JobController::class);
});
