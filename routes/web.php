<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocController;

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


Route::get('/redirects', [HomeController::class,'index']);
Route::get('/', [HomeController::class,'redirect']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   Route::get('/dashboard', function () {
     return view('dashboard');
    
  })->name('dashboard');
  
});

Route::match(['get', 'post'], '/upload_doctor', [AdminController::class,'upload']);

Route::get('/add_doctor_view', [AdminController::class,'addview']);

Route::match(['get', 'post'], '/appointement', [HomeController::class,'appointement']);

Route::get('/myappointement', [HomeController::class,'myappointement']);

Route::get('/cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);


Route::get('/showappointement', [AdminController::class,'showappointement']);



Route::get('/approved/{id}', [AdminController::class,'approved']);

Route::get('/canceled/{id}', [AdminController::class,'canceled']);

Route::get('/showdoctor', [AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}', [AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}', [AdminController::class,'updatedoctor']);

Route::match(['get', 'post'], '/editdoctor/{id}', [AdminController::class,'editdoctor']);

Route::get('/add_patient_view', [DocController::class,'addpatient']);

Route::match(['get', 'post'], '/upload_patient', [DocController::class,'ajout']);

Route::get('/showpatient', [DocController::class,'showpatient']);

Route::get('/delete_patient/{id}', [DocController::class,'deletepatient']);

Route::get('/update_patient/{id}', [DocController::class,'updatepatient']);

Route::match(['get', 'post'], '/editpatient/{id}', [DocController::class,'editpatient']);

Route::get('/patient_search', [AdminController::class,'patientsearch']);
Route::get('/doctor_search', [AdminController::class,'doctorsearch']);

Route::get('/afficher/{id}', [DocController::class,'afficher']);


Route::get('/monDossier', [HomeController::class,'monDossier']);