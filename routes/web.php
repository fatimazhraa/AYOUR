<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CARTEController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\SERVICEController;
use App\Http\Controllers\SERVICEADMINController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
<<<<<<< HEAD
use App\Http\Controllers\BLOGADMINController;
use App\Http\Controllers\MessageController;
=======
use App\Http\Controllers\Controller;
use App\Http\Controllers\DomaineController;



>>>>>>> 0120991de277d5a6d4bb487abfdcf584ce3e82f0


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
Route::get('/admin', function () {
    return view('admin.home');
});


Route::get('/blog/{id}', [PostController::class, 'show'])->name('post.show');
Route::Resource('/blog',PostController::class);








//ADMIN

   //SERVICE
      //ajouter

      Route::get('/ajouter-service',[SERVICEADMINController::class,'index'])->name('ajouter-service');
      Route::post('/Enregistrer',[SERVICEADMINController::class, 'store'])->name('store.service');

      //modifier

      Route::get('/update', [SERVICEADMINController::class, 'DataTableindex'])->name('update');
      Route::get('/edit{id}', [SERVICEADMINController::class, 'DataUpdateIndex']);
      Route::post('/dataUpdate{id}', [SERVICEADMINController::class, 'DataUpdate']);

      //supprimer

      Route::get('/delete', [SERVICEADMINController::class, 'DataTableindex2'])->name('delete');
      Route::get('/deletepage{id}', [SERVICEADMINController::class, 'DeleteActionIndex']);
      Route::get('supprimer{id}', [SERVICEADMINController::class, 'supprimer']);

  //BLOG
     //ajouter
     Route::get('/ajouter', [BLOGADMINController::class, 'DataTableindex'])->name('ajouter');
     Route::get('/ajouter-carte{id}', [BLOGADMINController::class, 'DataAjouterIndex']);
     Route::post('/Enregistrer-carte',[BLOGADMINController::class, 'store'])->name('store.blog');
     //modifier
     Route::get('/updateB', [BLOGADMINController::class, 'DataTable'])->name('updateB');
      Route::get('/Blog_edit{id}', [BLOGADMINController::class, 'DataUpdate']);

      Route::post('/BlogdataUpdate{id}', [BLOGADMINController::class, 'DataUpdateBlog']);
      //supprimer

      Route::get('/delete-Blog', [BLOGADMINController::class, 'DataTableindex2'])->name('Blog-delete');
      Route::get('/deletepage-Blog{id}', [BLOGADMINController::class, 'DeleteActionIndex']);
      Route::get('supprimer-Blog{id}', [BLOGADMINController::class, 'supprimer']);



//message
Route::get('/domaine', [MessageController::class, 'index'])->name('domaine');
Route::post('/submit-form', [MessageController::class, 'store'])->name('submit.form');
Route::get('/message', [MessageController::class, 'show'])->name('message');
Route::post('/marquer-repondu/{id}', [MessageController::class, 'marquerRepondu'])->name('marquer.repondu');





Route::Resource('/blog',PostController::class);
<<<<<<< HEAD
Route::get('/blog/{id}', [PostController::class, 'show'])->name('post.show');
=======


Route::get('/check-domain', [DomaineController::class, 'checkDomain'])->name('check.domain');


>>>>>>> 0120991de277d5a6d4bb487abfdcf584ce3e82f0

