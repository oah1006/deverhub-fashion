<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:2', 'max:255', "unique:products,title,{$this->product}"],
            'sku' => ['nullable', 'string', 'min:2', 'max:255', 'unique:products,sku'],
            'catalog_id' => ['nullable', 'exists:catalogs,id'],
            'product_id' => ['nullable', 'exists:products,id'],
            'description' => ['nullable', 'string', 'min:2', 'max:255'],
            'stock' => ['integer'],
            'unit_price' => ['string', 'nullable']
        ];
    }
}
