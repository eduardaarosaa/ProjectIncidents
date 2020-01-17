<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestIncident extends FormRequest
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
            'title'=>'required|min:3|max:255',
            'description'=>'required|min:5|max:500',
            'type'=>'required'
        ];
    }

    public function messages(){

        return[

            'title.required'=>'O campo título é obrigatório!',
            'title.min'=>'Poucos caracteres no campo title, minímo 3',
            'title.max'=>'Muitos caracteres no campo title, máximo 500',
            'description.required'=>'O campo descrição é obrigatório!',
            'description.min'=>'Poucos caracteres no campo descrição, mínimo 5',
            'description.max'=>'Muitos caracteres no campo descrição, máximo 500',
            'type.required'=>'O campo tipo é obrigatório!'



        ];
    }
}
