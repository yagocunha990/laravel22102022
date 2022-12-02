<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'description'=>'nullable|string|max:250',
                       
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Este campo é Obrigatorio.',
            'name.string'=>'Este valor não estar correto.',
            'name.max'=>'O Valor permitido é 50 caracteres',
            
            'description.string='>'Este valor não estar correto.',
            'description.max'=>'O Valor permitido é 255 caracteres',                       
        ];
    }
}
