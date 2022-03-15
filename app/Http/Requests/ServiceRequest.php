<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ServiceRequest extends FormRequest
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
        if ($request->has('service_type') && $request->service_type === 'brand') {
            return
                [
                    'title' => ['required', 'string', 'min:3', 'max:255'],
                    'status' => ['required', 'numeric', 'in:0,1'],
                    'service_type' => ['required', 'string', 'in:brand,model'],
                    'mobile_brand_id' => ['required', 'numeric'],
                    'price_by_brand' => ['required', 'numeric'],
                    'average_time' => ['required', 'string'],
                    'delivery_time' => ['required', 'string'],
                    'feature' => ['required']
                ];
        }

        if ($request->has('service_type') && $request->service_type === 'model') {
            return
                [
                    'title' => ['required', 'string', 'min:3', 'max:255'],
                    'status' => ['required', 'numeric', 'in:0,1'],
                    'service_type' => ['required', 'string', 'in:brand,model'],
                    'mobile_model_id' => ['required', 'numeric'],
                    'price_by_model' => ['required', 'numeric'],
                    'average_time' => ['required', 'string'],
                    'delivery_time' => ['required', 'string'],
                    'feature' => ['required']
                ];
        }

        return [
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'status' => ['required', 'numeric', 'in:0,1'],
            'service_type' => ['required', 'string', 'in:brand,model'],
            'average_time' => ['required', 'string'],
            'delivery_time' => ['required', 'string'],
            'feature' => ['required']
        ];
    }
}
