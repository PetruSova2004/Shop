<?php

namespace App\Http\Requests\Pub\Register;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'string|required|max:255',
            'email' => 'email|required|max:255',
            'password' => 'required|max:255',
            'age' => 'required|integer|digits_between:2,3',
            'address' => 'nullable|string|max:255',
            'gender' => 'required|max:255',
        ];
    }
}
