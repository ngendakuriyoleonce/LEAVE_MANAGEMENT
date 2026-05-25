<?php

namespace App\Http\Requests\Employee;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'employee_id' => 'required|string|unique:employees,employee_id',

        'phone' => 'required|string|max:20',

        'nationality' => 'required|string|max:100',

        'department' => 'required|string|max:100',

        'designation' => 'required|string|max:100',

        'date_of_joining' => 'required|date',

        'user_id' => 'required|exists:users,id',
        ];
    }
}
