<?php

namespace App\Http\Requests\RamCatalogs;

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
            'memory_type' => 'required|string',
            'total_volume' => 'required|string',
            'volume' => 'required|integer',
            'tick_rate' => 'required|integer',
            'voltage' => 'required|integer',
            'category_id' => 'nullable|integer',
        ];
    }
}
