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
            'username' => 'nullable|string|min:5|max:20|unique:users',
            'email' => 'nullable|string|email|unique:users',
            'phone' => 'nullable|min:10|max:13',
            'address' => 'nullable|string|min:5',
        ];
    }
}
