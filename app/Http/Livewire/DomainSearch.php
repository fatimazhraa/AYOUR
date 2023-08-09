<?php

namespace App\Http\Livewire;

use Livewire\Component;




// app/Http/Livewire/DomainSearch.php


// app/Http/Livewire/DomainSearch.php


// app/Http/Livewire/DomainSearch.php
use Illuminate\Support\Facades\Session;

class DomainSearch extends Component
{
    public $domain = '';
    public $exists = null;

    public function searchDomain()
    {
        // Simulate domain search result for demonstration
        $validDomains = ['google.com', 'example.com', 'example.org'];
        
        // Check if the domain is in the valid domains array
        $this->exists = in_array($this->domain, $validDomains);

        // Store the result in the session
        Session::put('domain_exists', $this->exists);
    }

    public function render()
    {
        return view('livewire.domain-search');
    }
}
