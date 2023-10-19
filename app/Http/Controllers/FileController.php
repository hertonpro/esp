<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request,$folder) {
        // Vérifier si le fichier a été envoyé
        if (!$request->hasFile('file')) {
            return response()->json(['error' => 'Le fichier n\'a pas été envoyé.'], 400);
        }

        // Obtenir le fichier
        $file = $request->file('file');

        // Générer un nom de fichier unique
        $name = $file->hashName();

        // Déplacer le fichier vers la destination
        $file->move($folder, $name);

        // Renvoyer le nom du fichier
        return response()->json(['name' => $name], 201);
    }
}
