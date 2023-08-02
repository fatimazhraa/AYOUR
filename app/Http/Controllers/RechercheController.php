<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RechercheController extends Controller
{
    public function verifierDisponibilite(Request $request)
    {
        $domain = $request->input('domain');

        // Résolution DNS pour vérifier la disponibilité du nom de domaine
        $isAvailable = $this->checkDomainAvailability($domain); // Appel à la fonction checkDomainAvailability dans le même contrôleur

        return response()->json(['isAvailable' => $isAvailable]);
    }

    // Méthode privée pour la vérification de disponibilité du nom de domaine
    private function checkDomainAvailability($domain)
    {
        $records = dns_get_record($domain, DNS_ALL);
        return empty($records);
    }
}
