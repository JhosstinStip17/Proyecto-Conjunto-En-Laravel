<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConjuntoRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre'=>['required','string','min:5', 'unique:conjuntos,nombre'],
            'direccion'=>['required','string'],

        ];
    }
}
