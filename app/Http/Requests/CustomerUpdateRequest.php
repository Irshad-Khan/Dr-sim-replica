<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerUpdateRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $validateArray = [
            "first_name" => ['required', 'string', 'min:3', 'max:255'],
            "last_name" => ['required', 'string', 'min:3', 'max:255'],
            "email" => ['required', 'email', Rule::unique('users')->ignore(request()->segment(3)), 'max:255'],
            "post_code" => ['required', 'max:255', 'min:3'],
            "phone" => ['required', 'max:255', 'min:10'],
            "country_id" => ['required', 'numeric'],
            "status" => ['required', 'in:0,1'],
            "address" => ['required', 'string', 'min:10']
        ];

        if (!empty($request->password)) {
            $validateArray['password'] = ['required', 'min:8', 'max:255'];
        }

        return $validateArray;
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
