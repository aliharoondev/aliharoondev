<?php

namespace App\Http\Requests\V1\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioDetailRequest extends FormRequest
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
            'detail' => 'required',
            'image' => 'required',
            'image2' => 'required',
            'category' => 'required',
            'client' => 'required',
            'project_date' => 'required',
            'project_url' => 'required',
            'portfolio' => 'required',
        ];
    }
}
