<?php

namespace App\Http\Requests\pengguna;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePenggunaRequest extends FormRequest
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
            'nama_pengguna' => 'required|string|max:100',
            'username'      => [
                'required',
                'string',
                Rule::unique('penggunas', 'username')->ignore($this->pengguna->id),
            ],
            'jk'            => 'required|in:L,P',
            'telp'          => 'required|string|regex:/^08[0-9]{8,13}$/',
            'role_id'       => 'required|exists:roles,id',
            'password'      => 'nullable|min:6',
        ];
    }

    public function messages()
    {
        return [
            'role_id.required'       => 'Peran pengguna wajib dipilih.',
            'role_id.exists'         => 'Peran yang dipilih tidak valid.',
            'username.required'      => 'Username wajib diisi.',
            'username.min'           => 'panjang username minimal 4 huruf.',
            'username.max'           => 'panjang username maximal 15 huruf.',
            'username.unique'        => 'Username sudah dipakai orang lain.',
            'username.regex'         => 'Username hanya boleh huruf, angka, titik, dan underscore.',
            'password.required'      => 'Password wajib diisi.',
            'password.confirmed'     => 'Konfirmasi password tidak cocok.',
            'password.min'           => 'Password minimal 6 karakter.',
            'nama_pengguna.required' => 'Nama lengkap wajib diisi.',
            'jk.required'            => 'Jenis kelamin harus dipilih.',
            'jk.in'                  => 'Jenis kelamin tidak valid.',
            'telp.required'          => 'Nomor HP wajib diisi.',
            'telp.regex'             => 'Format nomor HP tidak valid',
        ];
    }
}
