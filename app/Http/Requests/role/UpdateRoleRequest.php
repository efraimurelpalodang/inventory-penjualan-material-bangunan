<?php

namespace App\Http\Requests\role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
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
            'nama_peran' => [
                'required',
                'string',
                'max:15',
                Rule::unique('roles', 'nama_peran')->ignore($this->role->id),
            ],
            'deskripsi' => 'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            'nama_peran.required' => 'Peran tidak boleh kosong',
            'nama_peran.unique' => 'Peran sudah digunakan',
            'nama_peran.max' => 'Peran tidak boleh lebih dari 15 huruf',
            'deskripsi.required' => 'Deskripsi peran tidak boleh kosong',
            'deskripsi.max' => 'Deskripsi tidak boleh lebih dari 50 huruf',
        ];
    }
}
