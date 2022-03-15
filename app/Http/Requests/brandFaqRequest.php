<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class brandFaqRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:8', 'max:255'],
            'answer' => ['required', 'string', 'min:10'],
            'mobile_brand_id' => ['required', 'numeric'],
            'status' => ['required', 'numeric', 'in:0,1']
        ];
    }
}