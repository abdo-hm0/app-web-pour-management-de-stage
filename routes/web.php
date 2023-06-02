<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\ProfAuthController;
use App\Http\Controllers\profcontroller;
use App\Http\Controllers\tachecontroller;
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



Route::get('/',[CustomAuthController::class,'login']);

Route::get('/login',[CustomAuthController::class,'login']);

Route::post('/login-student',[CustomAuthController::class,'loginstudent'])->name('login-student');

Route::get('/dashboard', [dashboardController::class,'dashboard'])->middleware('LoggedIn');

Route::post('/login-professor',[ProfAuthController::class,'loginprofessor'])->name('login-professor');

Route::get("/studentprofile",[dashboardController::class,'studentprofile']);

Route::get('/profdashboard', [profController::class,'profdashboard']);

Route::get('/listestagiaires', [profcontroller::class,'index']);

Route::get('show/{id}', [profcontroller::class,'showData']);

Route::get('delete/{id}', [profcontroller::class,'delete']);

Route::get('registerstagiaire',[profcontroller::class,'registration']);

Route::post('registerhim',[profcontroller::class,'store']);

Route::get('studenttache',[tachecontroller::class,'tache']);

Route::get('affectetache',[tachecontroller::class,'affectetache']);



