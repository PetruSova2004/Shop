<?php

namespace App\Http\Requests\Pub\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends FormRequest
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
            'firstname' => 'required|string',
            'lastname' => 'nullable',
            'email' => 'required|email',
            'company' => 'nullable',
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'additional_information' => 'nullable',
        ];
    }
}
