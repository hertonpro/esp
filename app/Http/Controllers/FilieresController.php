<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilieresController extends Controller
{
    
    public function show($id)
{
    $filieres = ['lsf', 'rsf', 'lsc', 'mgpsr', 'msias', 'merce', 'mpgps', 'meab', 'mcgh'];

    // Obtenir la clé de la valeur
    $key = array_search($id, $filieres);

    // Obtenir le nom de la vue à afficher
    $viewName = $filieres[$key];

    // Afficher la vue
    return view($viewName);
}
    
}
