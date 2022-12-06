<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required|string|max:255',

            'email'=>'required|email|string|unique:providers,email,'.$this->route
            ('provider')->id.'|max:255',


            'ruc_number'=>'required|string|min:11|unique:providers,
            ruc_number,'.$this->route('provider')->id.'|max:255',

            'address'=>'nullable|string|max:11',

            'phone'=>'required|string|min:9|unique:providers,phone'.
            $this->route('provider')->id.'|max:9',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Este campo é Obrigatorio.',
            'name.string'=>'Este valor não estar correto.',
            'name.max'=>'O Valor permitido é 255 caracteres',

            'email.required='>'Este campo é Obrigatorio.',
            'email.email='>'Este não é o formato de um E-mail.',
            'email.string'=>'Este valor não estar correto.',
            'email.max'=>'O Valor permitido é 255 caracteres',
            'email.unique'=>'Esse E-mail já estar cadastrado.',

            'ruc_number.required='>'Este campo é Obrigatorio.',
            'ruc_number.string'=>'Este valor não estar correto.',
            'ruc_number.max'=>'O Valor permitido é 11 caracteres',
            'ruc_number.min'=>'Só é permitido é 11 caracteres',
            'ruc_number.unique'=>'já estar cadastrado.',

            'address.max'=>'O Valor permitido é 255 caracteres',
            'address.string'=>'Este valor não estar correto.',

            'phone.required='>'Este campo é Obrigatorio.',
            'phone.string'=>'Este valor não estar correto.',
            'phone.max'=>'O Valor permitido é 9 caracteres',
            'phone.min'=>'Só é permitido é 9 caracteres',
            'phone.unique'=>'já estar cadastrado.',


        ];
    }

}
