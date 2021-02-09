<?php

namespace App\Http\Requests\Simulator;

use Illuminate\Foundation\Http\FormRequest;

class SimulatorRequest extends FormRequest
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
            "loan_amount" => 'required|numeric',
            'institutions' => 'array',
            'covenants' => 'array',
            'installment' => 'integer',
        ];
    }
}
