<?php

namespace App\Http\Requests\barang;

use Illuminate\Foundation\Http\FormRequest;

class StoreBarangRequest extends FormRequest
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
            'kode'    => 'required|string|max:15|unique:barangs,kode',
            'nama_barang'    => 'required|string|max:100',
            'satuan_id'  => 'required|exists:satuans,id',
            'harga_jual'   => 'required|numeric|min:0',
            'jumlah_stok'    => 'required|integer|min:0',
        ];
    }

    public function messages()
    {
        return [
            'kode.required'    => 'Kode barang wajib diisi',
            'nama_barang.required'    => 'Nama barang wajib diisi',
            'kode.unique'      => 'Kode barang sudah ada',
            'kode.max'         => 'Kode barang tidak boleh lebih da ri 15 huruf',
            'satuan_id.required'  => 'Satuan wajib diisi',
            'satuan_id.exists'    => 'Satuan tidak valid',
            'jumlah_stok.required'    => 'Stok wajib diisi',
            'jumlah_stok.integer'     => 'Stok harus berupa angka bulat',
            'jumlah_stok.min'         => 'Stok tidak boleh kurang dari nol',
            'harga_jual.required'   => 'Harga wajib diisi',
            'harga_jual.min'        => 'Harga tidak boleh kurang dari nol',
        ];
    }
}
