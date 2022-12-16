<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
    public function rules(){

        return [
            'name'=>'string|required|max:255',
            'address'=>'string|required|max:255',
            'dni'=>'required|string|unique:clients,name,'.$this->route('dni')->id.'|max:8|min:8',
            'ruc'=>'required|string|unique:clients,name,'.$this->route('ruc')->id.'|max:11|min:11',
            'phone'=>'required|string|unique:clients,name,'.$this->route('phone')->id.'|max:9|min:11',
            'email'=>'required|string|unique:clients,name,'.$this->route('email')->id.'|max:255|email:rfc,dns',
        ];

    }

    public function messages(){
        return [
            'name.string'=>'Este valor não estar correto.',
            'name.required'=>'Este campo é Obrigatorio.',
            'name.max'=>'O Valor permitido é 255 caracteres',

            'dni.string'=>'Este valor não estar correto.',
            'dni.required'=>'Este campo é Obrigatorio.',
            'dni.unique'=>'Este DNI já ese encontra registrado.',
            'dni.min'=>'O valor  permitido é 8 caracteres',
            'dni.max'=>'O Valor permitido é 8 caracteres',

            'ruc.string'=>'Este valor não estar correto.',
            'ruc.unique'=>'Este RUC já  encontra registrado.',
            'ruc.min'=>'O valor  permitido é 11 caracteres',
            'ruc.max'=>'O Valor permitido é 11 caracteres',

            'address.string'=>'Este valor não estar correto.',
            'address'=>'O Valor permitido é 255 caracteres',

            'phone.string'=>'Este valor não estar correto.',
            'phone.unique'=>'Este Celular já  encontra registrado.',
            'phone.min'=>'O valor  permitido é 9 caracteres',
            'phone.max'=>'O Valor permitido é 9 caracteres',

            'email.string'=>'Este valor não estar correto.',
            'email.unique'=>'Este E-mal já  encontra registrado.',
            'email.email'=>'Digite um E-mail válido',
            'email.max'=>'O Valor permitido é 255 caracteres',

        ];
    }

}
