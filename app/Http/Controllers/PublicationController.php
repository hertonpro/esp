<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FileController;
use App\Models\publications;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        // Récupère la dernière publications
        $lastPub = publications::latest()->first();
        define('lastPub', publications::latest()->first());
        // Récupère les 2 avant-dernières publications
        $vders = publications::latest()->skip(1)->take(2)->get();
        // Récupère les reste de  publications
        $pubs = publications::get()->slice(0, -3);
        // Partage la dernière publication avec toutes les vues
        view()->share('lastPub', lastPub);
        return view('publications.index', compact('lastPub', 'vders', 'pubs'));
    }
    public function create()
    {
        return view('publications.create');
    }

    public function store(Request $request)
    {
        function slugify($title)
        {
            // Convertir le titre en minuscules et supprimer les espaces
            $title = strtolower(trim($title));

            // Remplacer les caractères spéciaux par des tirets
            $title = preg_replace('/[^\w\d\-\ ]/', '-', $title);

            // Remplacer les espaces par des tirets
            $title = str_replace(' ', '-', $title);

            // Supprimer les tirets doubles
            $title = preg_replace('/\-{2,}/', '-', $title);

            // Renvoyer le slug
            return $title;
        }
        // Vérifier si un fichier a été sélectionné
        if (!$request->hasFile('image')) {
            // Aucun fichier n'a été sélectionné
            //dd("fdgfkgkldjf");
            return redirect()->back()->with('error', `Aucun fichier n'a été sélectionné.`);
        }



        //dd($request['image']);
        /** @var UpleadedFile $image */
        $image = $request->file('image');
        $imagePath = $image->store('images', 'public');

        $post = \App\Models\publications::create([
            'title' => $request->input('title'),
            'slug' => slugify($request->input('title')),
            'resume' => $request->input('resume'),
            'link' => $request->input('link'),
            'image' => $imagePath,
            'author' => $request->input('author'),
            'category' => $request->input('category'),
        ]);
        return redirect()->to('publications/new')->with('success', "L'publicationś à été publié !!!", ['id' => $post->id]);
    }
    // Affiche une publication
    public function show($slug)
    {
        // Récupère la publication
        $publication = publications::where('slug', $slug)->first();
        // Récupère les 3 dernières publications
        $ders = publications::latest()->take(3)->get();
        // Vérifie si la publication existe
        if (!$publication) {
            return abort(404);
        }

        // Affiche la publication
        return view('publications.show', compact('publication', 'ders'));
    }
}
