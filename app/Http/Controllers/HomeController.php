<?php

namespace App\Http\Controllers;

use App\Models\publications;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // Récupère la dernière publications
        $lastPub = publications::latest()->first();
        // Récupère les 2 avant-dernières publications
        $vders = publications::latest()->skip(1)->take(2)->get();
        // Récupère les reste de  publications
        return view('index',compact('lastPub','vders'));
    }
}
