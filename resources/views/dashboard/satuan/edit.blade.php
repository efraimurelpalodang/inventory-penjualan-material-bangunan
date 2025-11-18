@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-3">Tambah Satuan</h4>
            <x-form.form :action="route('satuan.update', $satuan)" buttonText="Simpan Perubahan" class="p-2 p-md-2" back="/satuan" method="PUT">
                <div class="col-md-6">
                    <x-form.input name="nama" label="Nama Satuan" :value="$satuan->nama" :required="true" id="nama"
                        placeholder="Masukkan satuan barang" class="{{ $errors->has('kode') ? 'is-invalid' : '' }}" />
                </div>

                <div class="col-md-6">
                    <x-form.input name="deskripsi" label="Deskripsi" placeholder="Masukkan deskripsi satuan" :value="$satuan->deskripsi"
                        :required="true" id="deskripsi" />
                </div>
            </x-form.form>
        </div>
    </div>
@endsection
