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

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MedicineOrderController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect('/home');
});


// Protected routes for pending users
Route::middleware(['auth', 'check.status'])->group(function () {

    Route::get('/home', [MainController::class, 'home'])->name('home');

    // Update the route names to match the ones in the Blade view
    Route::get('/appointments', [AppointmentsController::class, 'appointments'])->name('appointments.index');
    //Route::get('/medicine/order', 'MedicineOrderController@medicineOrder')->name('medicine.order');
    Route::get('/medicine/order', [MedicineOrderController::class, 'medicineOrder'])->name('medicine.order');


    // Medical Services route
    Route::get('/medicalServices', 'MedicalServicesController@medicalServices')->name('medicalServices');


    Route::get('/contact-us', [ContactUsController::class, 'showContactForm'])->name('contactUs.form');
    Route::resource('users', UserController::class);

    //approve user 
    Route::get('/user_approve/{id}', [UserController::class, 'approve'])->name('user.approve');

    //reject user
    Route::get('/user_reject/{id}', [UserController::class, 'reject'])->name('user.reject');

    //cancel appointment
    Route::get('/appointment_cancel/{id}', [AppointmentsController::class, 'cancel'])->name('appointment.cancel');

    //approve appointment
    Route::get('/appointment_approve/{id}', [AppointmentsController::class, 'approve'])->name('appointment.approve');

    Route::post('/appointments', [AppointmentsController::class, 'store'])->name('appointments.store');
});





Route::get('/pending-approval', [UserController::class, 'showPendingApproval'])->name('pending_approval');





Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
