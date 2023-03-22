<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientContoller;
use App\Http\Controllers\ConsultationContoller;
use App\Http\Controllers\OrdonnanceContoller;
use App\Http\Controllers\MedicamentContoller;
use App\Http\Controllers\RendezVousContoller;
use App\Http\Controllers\CertificatMedicalContoller;
use App\Http\Controllers\FactureContoller;
use App\Http\Controllers\AdminContoller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('patient', PatientContoller::class);
Route::resource('consultation', ConsultationContoller::class);
Route::resource('ordonnance', OrdonnanceContoller::class);
Route::resource('medicament', MedicamentContoller::class);
Route::resource('rendez_vous', RendezVousContoller::class);
Route::resource('certificat_medical', CertificatMedicalContoller::class);
Route::resource('facture', FactureContoller::class);
Route::resource('admin', AdminContoller::class);