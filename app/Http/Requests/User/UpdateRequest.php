<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
<<<<<<< HEAD
            'username' => 'nullable|string|unique:users',
            'age' => 'nullable|integer',
            'address' => 'nullable|string',
            'gender' => 'nullable|integer',
            'role' => 'required|string|in:Admin,Guest',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
=======
            'username' => 'nullable|string|unique',
            'age' => 'nullable|integer',
            'address' => 'nullable|string',
            'gender' => 'nullable|integer',
>>>>>>> origin/main
        ];
    }
}
