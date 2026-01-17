<?php

namespace App\Http\Requests\Tasks;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
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
            'title' => [
                'required', 
                'min:5', 
                'max:255', 
                'regex:/^[a-zA-Z0-9 _-]+$/'
            ],
            'description' => [
                'nullable',
                'string',
                'min:5',
                'max:1000',
                'regex:/^[a-zA-Z0-9 _-]+$/'
            ],
            'status' => [
                'required',
                'in:pending,in_progress,done'
            ],
        ];
    }
}
