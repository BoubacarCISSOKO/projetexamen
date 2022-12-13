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


// bachelier
Route::get('/utilisateur', [App\Http\Controllers\UtilisateurController::class, 'index'])->name('utilisateur.index');
Route::get('/utilisateur/cree', [App\Http\Controllers\UtilisateurController::class, 'create'])->name('utilisateur.create');
Route::post('/utilisateur/save', [App\Http\Controllers\UtilisateurController::class, 'store'])->name('utilisateur.register');

Route::get('/utilisateur/connexion', [App\Http\Controllers\UtilisateurController::class, 'createConnexion'])->name('utilisateur.connexion.create');
Route::get('/utilisateur/connexion/{numeroCarteEtudiant}', [App\Http\Controllers\UtilisateurController::class, 'storeConnexion'])->name('utilisateur.connexion.store');


