<?php

namespace App\Http\Requests\satuan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSatuanRequest extends FormRequest
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
            'nama' => [
                'required',
                'string',
                'max:15',
                Rule::unique('satuans', 'nama')->ignore($this->satuan->id),
            ],
            'deskripsi' => 'required|max:50'
        ];
    }
}
