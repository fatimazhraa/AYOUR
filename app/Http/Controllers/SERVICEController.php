<?php

namespace App\Http\Controllers;
use App\Models\CARTE;
use Illuminate\Http\Request;

class SERVICEController extends Controller
{
    public function index()
    {
        $cartes = CARTE::all();
        return view('service', ['cartes' => $cartes]);
    }
    public function showDetails($id)
{
    $card1 = CARTE::find($id); // Récupérez les détails de la carte à partir de la base de données en fonction de l'ID
    // Effectuez toute autre logique supplémentaire ou récupération de données ici
    $card2 = CARTE::all();
    return view('detailcarte', compact('card1' , 'card2'));
}

}





