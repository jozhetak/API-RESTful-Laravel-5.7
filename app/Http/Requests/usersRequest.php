<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
    //REQUEST PARA VALIDAR LOS DATOS
    public function rules()
    {
        return [
            'nombre' => 'required|max:70',
            'apellido' => 'required|max:70',
            'password' => 'required|max:70',
            'telefono' => 'required|max:255',
            'email' => 'required|unique:users,email',
        ];
    }
}
