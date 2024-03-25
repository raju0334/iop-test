<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'cat_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'buy_price' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'qty' => 'required',
            'sku' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required',
        ];

        
    }
    public function messages()
    
        {
            return[
                'cat_id.required' => 'Category name field is required',
                'name.required' => 'Category name field is required',
                'buy_price.required' => 'Product buy_price field is required',
                'price.required' => 'Product price field is required',
                'discount_price.required' => 'Product discount_price field is required',
                'qty.required' => 'Product qty field is required',
                'sku.required' => 'Product sku field is required',
                'short_description.required' => 'Product short_description field is required',
                'long_description.required' => 'Product name field is required',
                'image.required' => 'Product image field is required',
            ];
        }
}
