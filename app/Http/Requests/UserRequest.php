<?php

namespace App\Http\Requests;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cpf' => "required|string|formato_cpf|cpf",
        ];
    }

    public function attributes()
    {
        return [
            'cpf' => 'cpf',
        ];
    }

    public function messages()
    {
        return [
            // customiza mensagens de erro
            'cpf.min' => 'O campo CPF precisa ter no mínimo 11 dígitos. ',
            'cpf.max' => 'O campo CPF precisa ter no máximo 14 dígitos. ',
        ];
    }
}
