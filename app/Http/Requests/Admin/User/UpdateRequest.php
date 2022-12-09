<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'string',
            'email' => 'required|string|email|unique:users,email,' . $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',
            'logo' => 'file',
        ];
    }
    public function messages()
    {
        return [
            'name.string' => 'The name data must be a valid string',
            'email.email' => 'The email must be a valid email',
            'email.unique' => 'user already exists',
            'logo.file' => 'The email must be a valid file',
        ];
    }
}
