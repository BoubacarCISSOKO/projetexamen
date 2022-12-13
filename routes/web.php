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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// bachelier
Route::get('/bachelier', [App\Http\Controllers\BachelierController::class, 'index'])->name('bachelier.index');
Route::get('/bachelier/cree', [App\Http\Controllers\BachelierController::class, 'create'])->name('bachelier.create');
Route::post('/bachelier/save', [App\Http\Controllers\BachelierController::class, 'store'])->name('bachelier.register');



// bachelier
Route::get('/demande', [App\Http\Controllers\DemandeController::class, 'index'])->name('demande.index');
Route::get('/demande/cree', [App\Http\Controllers\DemandeController::class, 'create'])->name('demande.create');
Route::post('/demande/save', [App\Http\Controllers\DemandeController::class, 'store'])->name('demande.register');
