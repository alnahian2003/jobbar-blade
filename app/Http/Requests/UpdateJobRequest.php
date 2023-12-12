<?php

namespace App\Http\Requests;

use App\Enums\EmploymentType;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateJobRequest extends FormRequest
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
            'title' => 'required|string|max:60',
            'employment_type' => ['required', Rule::enum(EmploymentType::class)],
            'company_name' => 'required|string|max:50',
            'role' => 'required|string|max:100',
            'apply_url' => 'required|url|max:255',
            'company_logo' => 'required|url|max:255',
            'description' => 'required',
            'salary' => 'required|max:20',
        ];
    }
}
