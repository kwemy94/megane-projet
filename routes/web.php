<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('connexion', function () {
    return view('connexion');
});
Route::get('creerCompte', function () {
    return view('formCreercompte');
});
Route::post('/medicament',[App\http\Controllers\medicamentsController::class,"enregComprime"]);

// Route::get('/patient', [App\http\Controllers\PatientController::class, 'index']);
Route::get('/patient', [App\http\Controllers\PatientController::class, 'index'])->name('patient-index');
Route::get('/patient/show/{patient_id}', [App\http\Controllers\PatientController::class, 'show'])->name('patient-show');
Route::post('/patient/store', [App\http\Controllers\PatientController::class, 'store'])->name('patient-store');
Route::get('enregistrement', function () {
    return view('patient.enregistrement');
});
