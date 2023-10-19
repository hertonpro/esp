<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeadmissionController extends Controller
{
    public function show(string $id)
    {
        $post = \App\Models\demandeadmission::findOrFail($id);
        return $post;
    }

    public function store(Request $request)
    {
        //dd($request->input('doc'));
        $g1 = [
            $request->input('ang1'),
            $request->input('univg1'),
            $request->input('facg1'),
            $request->input('opg1'),
            $request->input('meng1'),
            $request->input('infog1'),
        ];
        $g2 = [
            $request->input('ang2'),
            $request->input('univg2'),
            $request->input('facg2'),
            $request->input('opg2'),
            $request->input('meng2'),
            $request->input('infog2'),
        ];
        $g3 = [
            $request->input('ang3'),
            $request->input('univg3'),
            $request->input('facg3'),
            $request->input('opg3'),
            $request->input('meng3'),
            $request->input('infog3'),
        ];
        $l1 = [
            $request->input('anl1'),
            $request->input('univl1'),
            $request->input('facl1'),
            $request->input('opl1'),
            $request->input('menl1'),
            $request->input('infol1'),
        ];
        $l2 = [
            $request->input('anl2'),
            $request->input('univl2'),
            $request->input('facl2'),
            $request->input('opl2'),
            $request->input('menl2'),
            $request->input('infol2'),
        ];
        $d3 = [
            $request->input('and3'),
            $request->input('univd3'),
            $request->input('facd3'),
            $request->input('opd3'),
            $request->input('mend3'),
            $request->input('infod3'),
        ];
        $d4 = [
            $request->input('and4'),
            $request->input('univd4'),
            $request->input('facd4'),
            $request->input('opd4'),
            $request->input('mend4'),
            $request->input('infod4'),
        ];
        $obs = [
            $request->input('anobs'),
            $request->input('univobs'),
            $request->input('facobs'),
            $request->input('opobs'),
            $request->input('menobs'),
            $request->input('infoobs'),
        ];
        $post = \App\Models\Demandeadmission::create([
            'nom' => $request->input('nom'),
            'postnom' => $request->input('postnom'),
            'prenom' => $request->input('prenom'),
            'lieu_naissance' => $request->input('lieu_naissance'),
            'date_naissance' => $request->input('date_naissance'),
            'sexe' => $request->input('sexe'),
            'etatcivil' => $request->input('etatcivil'),
            'nationalite' => $request->input('nationalite'),
            'tel' => $request->input('tel'),
            'email' => $request->input('email'),
            'g1' => implode(',', $g1),
            'g2' => implode(',', $g2),
            'g3' => implode(',', $g3),
            'l1' => implode(',', $l1),
            'l2' => implode(',', $l2),
            'd3' => implode(',', $d3),
            'd4' => implode(',', $d4),
            'obs' => implode(',', $obs),
            'doc' => 'okok',
            'payid' => $request->input('payid'),
        ]);
        return redirect()->to('confirmationadmission')->with('success', "Le formulaire a été bien soumis !!!", ['id' => $post->id] );
    }
}
