<?php

use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\ContactFormController;
use App\Http\Controllers\User\PHPMailerTestController;
use App\Http\Controllers\User\TestimonialController;
use App\Http\Controllers\User\TourPackageController;
use App\Http\Controllers\User\StudyVisaController;
use App\Http\Controllers\User\TouristVisaController;
use App\Http\Controllers\User\PostLandingController;
use App\Http\Controllers\User\CurrencyExchangeController;
use App\Http\Controllers\User\FlightTicketController;
use App\Http\Controllers\User\CountryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[IndexController::class,'indexview'])->name('index');
Route::get("/about",[AboutController::class,'aboutview'])->name('about');
Route::get("/contact",[ContactController::class,'contactview'])->name('contact');
Route::post("/contact-form",[ContactFormController::class,'submitContactForm'])->name('contact.submit');
Route::get("/test-email",[PHPMailerTestController::class,'testEmail'])->name('test.email');
Route::get("/testimonial",[TestimonialController::class,'testimonialview'])->name('testimonial');
Route::get("/tourpackage",[TourPackageController::class,'tourpackageview'])->name('tourpackage');
Route::get("/studyvisa",[StudyVisaController::class,'studyvisaview'])->name('studyvisa');
Route::get("/touristvisa",[TouristVisaController::class,'touristvisaview'])->name('touristvisa');
Route::get("/postlanding",[PostLandingController::class,'postlandingview'])->name('postlanding');
Route::get("/currencyexchange",[CurrencyExchangeController::class,'currencyexchangeview'])->name('currencyexchange');
Route::get("/flightticket",[FlightTicketController::class,'flightticketview'])->name('flightticket');
Route::get("/countries",[CountryController::class,'countryview'])->name('countries');

// Admin panel redirect
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});