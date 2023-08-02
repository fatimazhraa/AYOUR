<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CARTEController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\SERVICEController;
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

Route::get('/', [CARTEController::class, 'index'])->name('home');
Route::get('/card/{id}', [CARTEController::class, 'showDetails'])->name('card.details');
Route::post('/recherche', [RechercheController::class, 'verifierDisponibilite'])->name('recherche');
Route::get('/hebergement', function(){
    return view('hebergement');
})->name('hebergement');
Route::get('/VPSCloud', function(){
    return view('VPSCloud');
})->name('VPSCloud');
Route::get('/ServeurDedie', function(){
    return view('ServeurDedie');
})->name('ServeurDedie');
Route::get('/Apropos', function(){
    return view('Apropos');
})->name('Apropos');
Route::get('/FAQ', function(){
    return view('FAQ');
})->name('FAQ');
Route::get('/Hplus', function(){
    return view('Hplus');
})->name('Hplus');
Route::get('/Blog', function(){
    return view('blog');
})->name('blog');
Route::get('/Condition', function(){
    return view('condition');
})->name('condition');
Route::get('/Contact', function(){
    return view('contact');
})->name('contact');
Route::get('/Domaine', function(){
    return view('domaine');
})->name('domaine');
Route::get('/service', [SERVICEController::class, 'index'])->name('service');

Route::get('/card/{id}', [SERVICEController::class, 'showDetails'])->name('card.details');