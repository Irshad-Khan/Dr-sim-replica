<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MobileBrandRequest extends FormRequest
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
            "status" => ['required', 'in:0,1'],
        ];
    }

    public function messages()
    {
        return [
            'status.in' => 'Status should be Active or Inactive',
        ];
    }
}
