<?php

//Se especifica en que carpeta se encuentra FaqRequest.php(este mismo arhivo)
namespace App\Http\Requests\Admin;
//Se importa el archivo FaqRequest.php
use Illuminate\Foundation\Http\FormRequest;
//
class FaqRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //Name es el nombre del campo en el formulario en este caso es name="name"
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
        ];
    }
}