<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CARTEController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\SERVICEController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
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
//Route::get('/Blog', function(){
   // return view('blog');
//})->name('blog');
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


Route::get('/page-de-telechargement', function () {
    return view('downloads');
});
Route::get('/telecharger-logiciel', function () {
    $file = public_path('downloads/Hplus ftp client v2.2.exe'); // Assurez-vous de remplacer "nom_du_logiciel.exe" par le nom de votre fichier
    $headers = [
        'Content-Type' => 'application/octet-stream',
    ];

    return response()->download($file, 'Hplus ftp client v2.2.exe', $headers); // Assurez-vous de remplacer "nom_du_logiciel.exe" par le nom de votre fichier
})->name('telecharger-logiciel');


Route::get('/blog/{id}', [PostController::class, 'show'])->name('post.show');
Route::Resource('/blog',PostController::class);



Route::get('/check-domain', [DomainController::class, 'checkDomain'])->name('check.domain');





