<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DoctorController;

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

Route::get('/', [HomeController::class, 'index']);//Welcome View Page
Route::get('/redirects',[HomeController::class, 'checkuser']);//Authnticity Of user


Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'), 'verified',])->group(function () {
Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');});


Route::get('/Viewdoctor', [AdminController::class, 'viewdoctor']);//Viewing Doctors  
Route::get('/add_doctor', [AdminController::class, 'add_doctor']);//Viewing Add Doctor form
Route::post('/addingdoc', [AdminController::class, 'adding_doctor']);//Adds A new Registered Doctor
Route::get('/MyAppointments', [AdminController::class, 'admin_appointments']);//Admin Views Appointments
//Route::get('/DeleteAppointment/{id}', [AdminController::class, 'delete_appointmets']);//Admin Deletes Appointments
Route::get('/DeleteDoctors/{id}', [AdminController::class, 'delete_doctors']);//Admin Deletes Doctors
Route::get('/EditDoctors/{id}', [AdminController::class, 'edit_doctor']);//Admin Edit Doctors
Route::post('/UpdatingDoctors/{id}', [AdminController::class, 'updatemydoctors']);//Admin Edit Doctors



Route::post('/appointment', [HomeController::class, 'book_appointment'])->middleware(['auth']);//Booking Appointments
Route::get('/myappointments', [HomeController::class, 'view_appointments']);//Viewing Appointments
Route::get('/cancelappoint/{id}', [HomeController::class, 'cancel_appoint']);//Cancelling Appointments
Route::get('/EditMyAppointment/{id}', [HomeController::class, 'edit_myappoints']);//Editting Patients Appointments
Route::post('/updatingappoints/{id}', [HomeController::class, 'updatemyappoints']);//Updating Patients Appointments


Route::get('/MyPatients/{id}', [DoctorController::class, 'view_mypatients']);//Doctor Views Patients
