<?php

namespace App\Http\Requests\V1\Experience;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperienceRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'section' => 'required',
            'start_date' => 'required',
            'end_date' => 'sometimes',
            'company_name' => 'required',
            'company_address' => 'required',
            'work_type' => 'required',
            'job_type' => 'required',
            'detail' => 'sometimes',
        ];
    }
}
