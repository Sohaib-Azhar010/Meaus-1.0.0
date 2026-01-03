<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LeadershipController;
use App\Http\Controllers\SpeakersEventsController;
use App\Http\Controllers\SponsorshipController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/leadership', [LeadershipController::class, 'index'])->name('leadership');
Route::get('/speakers-events', [SpeakersEventsController::class, 'index'])->name('speakers-events');
Route::get('/sponsorship', [SponsorshipController::class, 'index'])->name('sponsorship');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/price', [ServiceController::class, 'pricing'])->name('price');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/search', [HomeController::class, 'search'])->name('search');

