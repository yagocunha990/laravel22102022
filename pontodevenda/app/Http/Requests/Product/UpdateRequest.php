<?php

namespace App\Http\Requests\Product;

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
    public function rules()
    {
        return [
            'name'=>'string|required|unique:products,name,'.$this->route('product')->id.'|max:255',

           

            'image'=>'required|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required',
            'category_id'=>'integer|required|exists:App\Models\Category,id',
            'provider_id'=>'integer|required|exists:App\Models\Provider,id',

    ];
    }

    public function messages(){
        return [
            'name.string'=>'Este valor não estar correto.',
            'name.required'=>'Este campo é Obrigatorio.',
            'name.unique'=>'Este valor já estar cadastrado.',
            'name.max'=>'O Valor permitido é 255 caracteres',

            'image.required'=>'Este campo é Obrigatorio.',
            'image.dimensions='>'Só é permitido imagens de 100X200 px',

            'sell_price.required'=>'Este campo é Obrigatorio.',

            'category_id.integer'=>'Este campo tem que ser inteiro.',
            'category_id.required'=>'Este campo é Obrigatorio.',
            'category_id.exists'=>'Esta categoria já existe.',


            'provider_id.integer'=>'Este campo tem que ser inteiro.',
            'provider_id.required'=>'Este campo é Obrigatorio.',
            'provider_id.exists'=>'Este fornecedor já existe.',


        ];
    }

}
