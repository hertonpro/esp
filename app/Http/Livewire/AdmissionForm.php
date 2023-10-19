<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdmissionForm extends Component
{
    public $nv='Niveau licence';
    public $niveaus = ['Niveau licence', 'Niveau mastaire'];
    public $lc=['Licence en Sagefemme','Licence en Santé communautaire','Reconversion Sage Femme'];
    public $ms = ['Master en gestion des programmes sante de la reproduction',
    'Master en Statistique et informatique appliquée à la santé',
    'Master en Epidémiologie, recherche clinique et évaluation de service de santé',
    'Master en Politiques, gestion des projets et des systèmes de santé',
    'epidemiology and applied biostatistics',
    'community and global health'];
    
    public function render()
    {
        return view('livewire.admission-form', [
            'niveaus' => $this->niveaus,
            'lc' => $this->lc,
            'ms' => $this->ms,
        ]);
    }
}
