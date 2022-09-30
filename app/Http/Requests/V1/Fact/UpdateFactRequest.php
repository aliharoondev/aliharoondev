<?php

namespace App\Http\Requests\V1\Fact;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFactRequest extends FormRequest
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
            'title' => 'required',
            'section' => 'required',
            'icon' => 'required',
            'number' => 'required',
            'detail' => 'required',
        ];
    }
}
