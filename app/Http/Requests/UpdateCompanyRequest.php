<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
        $companyId = $this->route('company')->id;

        return [
            'name' => 'sometimes|required|string|max:255',
            'nip' => "sometimes|required|string|size:10|unique:companies,nip,$companyId",
            'address' => 'sometimes|required|string|max:255',
            'city' => 'sometimes|required|string|max:100',
            'postal_code' => 'sometimes|required|regex:/^\d{2}-\d{3}$/',
        ];
    }
}
