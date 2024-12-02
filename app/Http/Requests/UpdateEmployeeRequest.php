<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
     */
    public function rules(): array
    {

        $employeeId = $this->route('employee')->id;

        return [
            'first_name' => 'sometimes|required|string|max:100',
            'last_name' => 'sometimes|required|string|max:100',
            'email' => "sometimes|required|string|email|unique:employees,email,$employeeId",
            'phone' => 'nullable|string|max:20',
            'company_id' => 'sometimes|required|exists:companies,id',
        ];
    }
}
