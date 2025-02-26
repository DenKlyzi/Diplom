<?php

namespace App\Http\Requests\OtherCatalogs;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'preview_image' => 'required',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'characteristicOne' => 'required|string',
            'characteristicTwo' => 'required|string',
            'characteristicThree' => 'required|string',
            'characteristicFour' => 'required|string',
            'characteristicFive' => 'required|string',
            'category_id' => 'nullable|integer',
        ];
    }
}
