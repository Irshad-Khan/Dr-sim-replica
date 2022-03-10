<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NetworkProviderRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:255'],
            "country_id" => ['required', 'numeric'],
            "status" => ['required', 'in:0,1'],
        ];
    }

    public function messages()
    {
        return [
            'country_id.required' => 'Country field is required',
            'country_id.numeric' => 'Country should be numeric',
            'status.in' => 'Status should be Active or Inactive',
        ];
    }
}
