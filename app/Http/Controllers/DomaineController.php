<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomaineController extends Controller
{
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
    public function Affichage(){
        return view("layouts.home.domaine");
    }
}

