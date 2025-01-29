<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConjuntoRequest extends FormRequest
{
    
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'nombre'=>['required','string','min:5', 'unique:conjuntos,nombre,'. request()->conjunto->id .',id'],
            'direccion'=>['required','string'],
        ];
    }
}
