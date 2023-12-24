<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VagaRequest extends FormRequest
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
            'titulo' => ['required', 'string'],
            'vinculo' => ['required', 'string', 'max:3'],
            'area' => ['required', 'string'],
            'descricao' => ['required', 'string'],
            'atributo' => ['array'],
            'requisito' => ['array'],
            'atributoExists' => ['array'],
            'requisitoExists' => ['array'],            
        ];
    }
}
