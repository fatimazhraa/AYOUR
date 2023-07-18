<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CARTEController;
use App\Http\Controllers\RechercheController;
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

/*Route::get('/', function () {
    return view('home');
});*/

/*Route::get('/', function () {
    $cartes = \App\Models\CARTE::all();
    return view('home', ['cartes' => $cartes]);
});*/

Route::get('/', [CARTEController::class, 'index']);
Route::get('/card/{id}', [CARTEController::class, 'showDetails'])->name('card.details');
Route::post('/recherche', [RechercheController::class, 'verifierDisponibilite'])->name('recherche');
