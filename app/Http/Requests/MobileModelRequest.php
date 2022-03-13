<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class MobileModelRequest extends FormRequest
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
        $validateData = [
            'name' => ['required', 'min:3', 'max:255'],
            "brand_id" => ['required', 'numeric'],
            "status" => ['required', 'in:0,1']
        ];

        if ($request->has('image')) {
            $validateData['image'] = ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'];
        }
        return $validateData;
    }

    public function messages()
    {
        return [
            'brand_id.required' => 'Brand field is required',
            'brand_id.numeric' => 'Brand should be numeric',
            'status.in' => 'Status should be Active or Inactive',
        ];
    }
}
