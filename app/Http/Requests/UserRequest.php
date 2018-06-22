<?php

namespace GestionFlotas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
      
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
     * @return array
     */
    public function rules()
    {
        return [
           'name' => 'required',
        'apellido' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'telefono' => 'required|max:9|min:6',
        'codigo_trabajador' => 'required',
        ];
    }
}
