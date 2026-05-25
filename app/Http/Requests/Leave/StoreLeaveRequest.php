<?php

namespace App\Http\Requests\Leave;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreLeaveRequest extends FormRequest
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
            'employee_id' => 'required|exists:employees,id',

        'leave_type_id' => 'required|exists:leave_types,id',

        'from_date' => 'required|date',

        'to_date' => 'required|date|after_or_equal:from_date',

        'total_days' => 'required|integer|min:1',

        'reason' => 'required|string|min:10|max:1000',

        'status' => 'required|in:pending,approved,rejected',

        'attachment' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ];
    }
}
