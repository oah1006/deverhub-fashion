<?php

namespace App\Http\Requests\Admin;

use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            'status' => ['required', 'in:pending,delivering,succeed,canceled'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:rfc,dns', 'string'],
            'gender' => ['required', 'in:0,1,2'],
            'address' => ['required', 'string'],
            'phone_number' => ['required', new PhoneNumber],
            'shipping_fee' => ['required', 'numeric', 'min:0'],
            'created_at' => ['required', 'date', 'before_or_equal:now']
        ];

    }
}
