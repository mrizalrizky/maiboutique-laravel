<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'username' => 'string|min:5|max:20|unique:users',
            'email' => 'string|email|unique:users',
            'password' => 'string|min:5|max:20',
            'phone' => 'min:10|max:13',
            'address' => 'string|min:5',
        ];
    }
}
