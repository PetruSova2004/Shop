<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email|max:255',
            'password' => 'required|confirmed|max:255',
            'surname' => 'string|nullable|max:255',
            'patronymic' => 'string|nullable|max:255',
            'age' => 'integer|nullable',
            'address' => 'string|nullable|max:255',
            'gender' => 'integer|nullable',
        ];
    }
}
