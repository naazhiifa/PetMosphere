<?php

use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [PetController::class,'index']);

Route::get('/about', function(){
    return view('about');
});


Route::get('/index', function(){
    return view('petpet');
});

Route::get('/', [PetController::class, 'index']);

Route::get('/petpet',[PetController::class,'petpet']);
Route::get('/petshop', [PetController::class, 'index']);
Route::get('/petshop/{id}', [PetController::class, 'show']);
Route::post('/petshop', [PetController::class, 'store']);
Route::patch('/petshop/{id}', [PetController::class, 'update']); 
Route::delete('/petshop/{id}', [PetController::class, 'destroy']);


Route::get('/petshop/data/create', [PetController::class, 'create']);
Route::get('/petshop/{id}/edit', [PetController::class, 'edit']);
Route::get('/petshop/data/index', [PetController::class, 'index']);




