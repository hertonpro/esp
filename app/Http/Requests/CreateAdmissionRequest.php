<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdmissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'niveau' => ['required'],
            'filiere' => ['required'],
            'nom' => ['required','min:3'],
            'postnom' => ['required','min:3'],
            'prenom' => ['required','min:3'],
            'lieu_naissance' => ['required','min:3'],
            'date_naissance' => ['required','regex:^(0?[1-9]|[12][0-9]|3[01])- /.[- /.]\d{2,4}$'],
            'sexe' => ['required','min:1'],
            'etatcivil' => ['required','min:3'],
            'nationalite' => ['required'],
            'tel' => ['required','min:8'],
            'email' => ['required','min:3','regex:^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$'],
        ];
    }
}
