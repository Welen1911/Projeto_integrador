<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatoEditRequest extends FormRequest
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
            'sobre' => ['required', 'string'],
            'curriculo' => ['file'],
            'area' => ['required', 'string', 'max:3'],
            'instituto' => ['array'],
            'curso' => ['array'],
            'tipo' => ['array'],
            'cursando' => ['array'],
            'descricao' => ['array'],
            'empresa' => ['array'],
            'trabalhando' => ['array'],
            'formacaoExists' => ['array'],
            'experienciaExists' => ['array'],
        ];
    }
}
