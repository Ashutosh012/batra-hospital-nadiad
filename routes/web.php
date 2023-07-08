<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;

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

Route::get('/', function () {
    return view('home');
});

Route::controller(AppointmentController::class)->group(function(){
    Route::post('verify-otp', 'verifyOtp')->name('verify-otp');
    Route::post('verify-user', 'getOtp')->name('verify-user');
    Route::post('book-appointment', 'bookAppointment')->name('book-appointment');
});

Route::controller(BlogController::class)->group(function(){
    Route::get('{slug}', 'showBlogDetail')->name('blog-detail');
    Route::get('/b/blog-list', 'blogList')->name('blog-list');
});
