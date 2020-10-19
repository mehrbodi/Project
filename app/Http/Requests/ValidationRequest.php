<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            'address' => 'required',
            'owner' => 'nullable',
            'postal_code' => 'required',
            'house_number' => 'required',
            'phones' => 'required',
            'mobile_phone' => 'nullable',
            'home_phone' => 'nullable',
            'work_phone' => 'nullable',
        ];

    }
    public function messages()
    {
        return [
            'address.required' => 'آدرس باید وارد شود',
            'phones.required' => 'شماره تلفن باید وارد شود',
            'postal_code.required' => 'کد پستی باید وارد شود',
            'house_number.required' => 'شماره خانه باید وارد شود',
        ];
    }
}
