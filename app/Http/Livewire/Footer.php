<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\publications;

class Footer extends Component
{
    public function render()
    {
        // Récupère la dernière publications
        $lastPub = publications::latest()->first();
        return view('livewire.footer',compact('lastPub'));
    }
}
