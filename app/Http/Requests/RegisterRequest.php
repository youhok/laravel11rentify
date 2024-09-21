<?php

namespace App\Http\Requests;

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
            // 'name' => 'required|min:3',
            // 'username' => 'required|string|min:4|unique:users',
            // 'email' => 'required|email|unique:users',
            
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15', // Adjust according to your validation needs
            'email' => 'required|string|email|max:255|unique:users',
            'role_id' => 'required|integer', // Assuming role_id is required
            // 'password' => 'required|string|min:8|confirmed',
            'password' => 'required|min:6',
        ];
    }
}
