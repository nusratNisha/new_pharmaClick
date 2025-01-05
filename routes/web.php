<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// routes/web.php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactUsController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

//Route::get('/', function () {
//    return redirect('/home');
//});

Route::get('/home', 'MainController@home')->name('home');

// Update the route names to match the ones in the Blade view
Route::get('/appointments', 'AppointmentsController@appointments')->name('appointments.index');
Route::get('/medicine/order', 'MedicineOrderController@medicineOrder')->name('medicine.order');

// Medical Services route
Route::get('/medicalServices', 'MedicalServicesController@medicalServices')->name('medicalServices');


Route::get('/contact-us', [ContactUsController::class, 'showContactForm'])->name('contactUs.form');