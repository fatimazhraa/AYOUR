<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// app/Http/Controllers/DomainController.php
// app/Http/Controllers/DomainController.php
// app/Http/Controllers/DomainController.php
// app/Http/Controllers/DomainController.php
namespace App\Http\Controllers;



// app/Http/Controllers/DomainController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request; // Import the Request class

class DomainController extends Controller
{
    public function ajaxSearch(Request $request)
    {
        $domain = $request->query('domain');

        // Perform the domain search logic here
        // For demonstration purposes, let's simulate a result
        $exists = (bool) rand(0, 1);

        $resultHTML = '
            <h1>Domain Search Result</h1>
            <p>Domain: ' . $domain . '</p>
            <p>Status: ' . ($exists ? 'Exists' : 'Does Not Exist') . '</p>
        ';

        return response()->json(['result' => $resultHTML]);
    }
}
