<?php

namespace App\Http\Controllers;

use App\Models\CARTE;
use Illuminate\Http\Request;

class CARTEController extends Controller
{
    public function index()
    {
       

        $cartes = CARTE::all();
        return view('home', ['cartes' => $cartes]);
    }
    public function showDetails($id)
{
    $card = CARTE::find($id); // Récupérez les détails de la carte à partir de la base de données en fonction de l'ID
    // Effectuez toute autre logique supplémentaire ou récupération de données ici

    return view('detailcarte', compact('card'));
}

public function checkDomain(Request $request)
{
    
    $domainName = $data = $request->input('domain_name');;
    $dnsRecord = dns_get_record($domainName);
     
    if (empty($dnsRecord)) {
       // Domain name does not exist...

        
        

        return response()->json(['exists' => 'false']);
    } else {
        // Domain name exists...
        return response()->json(['exists' => 'true']);
    }
}





}
