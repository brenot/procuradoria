<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Andamento extends FormRequest
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
            'tipo_prazo_id'         => 'required',
            'processo_id'           => 'required',
            'tipo_andamento_id'     => 'required',
        ];
    }
}
