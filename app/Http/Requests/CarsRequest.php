<?php

namespace App\Http\Requests;

use App\Rules\RegistrationRule;
use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
//    public function authorize(): bool
//    {
//        return false;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'reg_number' => ['required', new RegistrationRule],
            'brand' => 'required',
            'model' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'reg_number.required' => 'Please enter registration number.',
            'brand.required' => 'Please enter brand.',
            'model.required' => 'Please enter model.',
        ];
    }
}
