<?php

namespace App\Http\Requests\LeaveType;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreLeaveTypeRequest extends FormRequest
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
            'name' => 'required|string|max:100|unique:leave_types,name',

        'days_allowed' => 'required|integer|min:1',

        'description' => 'nullable|string|max:1000',

        'status' => 'required|boolean',
        ];
    }
}
