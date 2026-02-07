<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IdentityUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nik' => ['nullable', 'string', 'size:16', Rule::unique('user_details')->ignore($this->user()->detail->id ?? 0)],
            'address' => ['nullable', 'string'],
            'place_of_birth' => ['nullable', 'string', 'max:255'],
            'date_of_birth' => ['nullable', 'date'],
            'gender' => ['nullable', 'in:Male,Female'],
            'occupation' => ['nullable', 'string', 'max:255'],
        ];
    }
}
