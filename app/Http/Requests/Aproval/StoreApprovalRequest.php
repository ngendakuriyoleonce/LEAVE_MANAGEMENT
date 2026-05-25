<?php

namespace App\Http\Requests\Aproval;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreApprovalRequest extends FormRequest
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
            
        'leave_id' => 'required|exists:leaves,id',

        'approver_id' => 'required|exists:users,id',

        'step' => 'required|integer|min:1',

        'status' => 'required|in:pending,approved,rejected',

        'comment' => 'nullable|string|max:1000',

        ];
    }
}
