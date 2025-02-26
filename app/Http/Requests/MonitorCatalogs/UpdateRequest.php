<?php

namespace App\Http\Requests\MonitorCatalogs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'price' => 'required|integer',
            'count' => 'required|integer',

            'diagonal' => 'required|string',
            'monitor_type' => 'required|string',
            'frame_rate' => 'required|integer',
            'game_monitor' => 'required|integer',
            'response_time' => 'required|integer',
            'category_id' => 'nullable|integer',
        ];
    }
}
