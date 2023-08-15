<?php

namespace App\Http\Controllers;

use App\Models\CARTE;
use Illuminate\Http\Request;
use App\Http\Livewire\DomainSearch;

class CARTEController extends Controller
{
    public function index()
    {
       

        $cartes = CARTE::all();
        return view('home', ['cartes' => $cartes,'domainSearch' => DomainSearch::class]);
    }
    public function showDetails($id)
{
    $card = CARTE::find($id); // Récupérez les détails de la carte à partir de la base de données en fonction de l'ID
    // Effectuez toute autre logique supplémentaire ou récupération de données ici

    return view('detailcarte', compact('card'));
}







}
