<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'image' => 'required|image',
            'name' => 'required|min:5|max:20|unique:products',
            'description' => 'required|min:5',
            'price' => 'required|integer|gte:1000',
            'stock' => 'required|integer|gte:1'
        ];
    }
}
