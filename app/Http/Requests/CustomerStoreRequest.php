<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            "first_name" => ['required', 'string', 'min:3', 'max:255'],
            "last_name" => ['required', 'string', 'min:3', 'max:255'],
            "email" => ['required', 'email', 'unique:users,email', 'max:255'],
            "password" => ['required', 'min:8', 'max:255'],
            "post_code" => ['required', 'max:255', 'min:3'],
            "phone" => ['required', 'max:255', 'min:10'],
            "country_id" => ['required', 'numeric'],
            "status" => ['required', 'in:0,1'],
            "address" => ['required', 'string', 'min:10']
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
