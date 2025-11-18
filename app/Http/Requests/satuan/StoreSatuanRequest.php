<?php

namespace App\Http\Requests\satuan;

use Illuminate\Foundation\Http\FormRequest;

class StoreSatuanRequest extends FormRequest
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
            'nama' => 'required|unique:satuans,nama|string|max:15',
            'deskripsi' => 'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'nama satuan tidak boleh kosong',
            'nama.uniq' => 'satuan sudah digunakan',
            'nama.string' => 'nama satuan tidak boleh mengandung angka',
            'nama.max' => 'nama satuan tidak boleh lebih dari 15 huruf',
            'deskripsi.required' => 'deskripsi satuan tidak boleh kosong',
            'deskripsi.max' => 'nama satuan tidak boleh lebih dari 50 huruf',
        ];
    }
}
