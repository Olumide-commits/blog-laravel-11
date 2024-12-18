<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;;


=======
>>>>>>> origin/main
class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

<<<<<<< HEAD

    /**/

=======
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
>>>>>>> origin/main
    public function rules(): array
    {
        return [
            'name' => 'required|string',
<<<<<<< HEAD
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
            'username' => 'nullable|string|unique:users',
            'age' => 'nullable|integer',
            'address' => 'nullable|string',
            'gender' => 'nullable|integer',
            'role' => 'required|string|in:Admin,Guest',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

=======
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'username' => 'nullable|string|unique',
            'age' => 'nullable|integer',
            'address' => 'nullable|string',
            'gender' => 'nullable|integer',
>>>>>>> origin/main
        ];
    }
}
