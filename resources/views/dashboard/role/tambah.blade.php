@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-3">Tambah Peran</h4>
            <x-form.form :action="route('role.store')" buttonText="Tambah Peran" class="p-2 p-md-2" back="/role">
                <div class="col-md-6">
                    <x-form.input name="nama_peran" label="Nama Peran" :value="old('nama_peran')" :required="true" id="nama_peran"
                        placeholder="Masukkan nama peran" class="{{ $errors->has('nama_peran') ? 'is-invalid' : '' }}" />
                </div>

                <div class="col-md-6">
                    <x-form.input name="deskripsi" label="Deskripsi" placeholder="Masukkan deskripsi peran" :value="old('deskripsi')"
                        :required="true" id="deskripsi" />
                </div>
            </x-form.form>
        </div>
    </div>
@endsection
