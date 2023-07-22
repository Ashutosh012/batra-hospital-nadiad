<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

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

Route::get('blog-list', [BlogController::class,'blogList'])->name('blog-list');
Route::get('/{slug}', [BlogController::class, 'showBlogDetail'])->name('blog-detail');

//Route::get('/{slug}', [PageController::class, 'pageDetail'])->name('page-detail');

Route::get('/c/contact', [ContactController::class, 'contactUs'])->name('contact');

Route::get('/e/email', function () {
    return view('emails.appointment');
});