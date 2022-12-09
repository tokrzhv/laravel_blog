<?php

namespace App\Http\Requests\Admin\User;

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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|string|unique:users',
            'role' => 'required|integer',
            'logo' => 'file',
            //'password' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required',
            'name.string' => 'The name data must be a valid string',
            'email.required' => 'The email field is required',
            'email.email' => 'The email must be a valid email',
            'logo.file' => 'The email must be a valid file',
            'email.string' => 'The email data must be a valid string',
            'email.unique' => 'The user already exists',
          //  'password.required' => 'The password field is required',
            //'password.string' => 'The password data must be a valid string',
        ];
    }
}
