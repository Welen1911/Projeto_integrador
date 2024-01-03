<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InforRequest extends FormRequest
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
            'perfil' => ['image'],
            'rua' => ['required', 'string'],
            'numero' => ['required', 'string'],
            'bairro' => ['required', 'string'],
            'complemento' => ['nullable', 'string'],
            'cep' => ['required', 'string'],
            'cidade' => ['required', 'string'],
            'estado' => ['required', 'string'],
            'celular' => ['required', 'string'],
            'fixo' => ['nullable', 'string'],
        ];
    }
}
