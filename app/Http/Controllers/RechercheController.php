<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RechercheController extends Controller
{
    public function verifierDisponibilite(Request $request)
    {
        $domain = $request->input('domain');
        $isAvailable = true; // Remplacez cela par votre logique de vérification de disponibilité

        return response()->json(['isAvailable' => $isAvailable]);
    }
}
