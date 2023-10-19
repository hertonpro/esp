<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandeadmission extends Model
{
    use HasFactory;

    protected $fillable =['nom','postnom','prenom','lieu_naissance','date_naissance','sexe','etatcivil','nationalite', 'tel','email','g1','g2','g3','l1','l2','d3','d4','obs','doc','payid'];
}
