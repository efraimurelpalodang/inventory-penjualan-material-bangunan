@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-3">Tambah Pengguna</h4>

            <x-form.form :action="route('pengguna.store')" buttonText="Tambah Pengguna" class="p-2 p-md-2" back="/pengguna">

                <div class="col-md-12">
                    <x-form.input name="nama_pengguna" label="Nama Pengguna" placeholder="Masukkan nama pengguna"
                        :required="true" id="nama_pengguna" />
                </div>

                <div class="col-md-6">
                    <x-form.input name="username" label="Username" :value="old('username')" :required="true" id="username"
                        placeholder="Masukkan username" class="{{ $errors->has('username') ? 'is-invalid' : '' }}" />
                </div>

                <div class="col-md-6">
                    <x-form.input name="password" label="Password" placeholder="Masukkan password" :required="true"
                        id="password" />
                </div>

                <div class="col-md-4">
                    <x-form.input name="telp" label="No Handphone" placeholder="Masukkan nomor hp" :required="true"
                        id="telp" />
                </div>

                <div class="col-md-4">
                    <x-form.select name="jk" label="Jenis Kelamin" :required="true">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L" {{ old('jk') == 'L' ? 'selected' : '' }}>
                            Laki-Laki
                        </option>
                        <option value="P" {{ old('jk') == 'P' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </x-form.select>
                </div>

                <div class="col-md-4">
                    <x-form.select name="role_id" label="Peran Pengguna" :required="true">
                        <option value="">Pilih Peran Pengguna</option>
                        @foreach ($roles as $r)
                            <option value="{{ $r->id }}" {{ old('satuan_id') == $r->id ? 'selected' : '' }}>
                                {{ $r->nama_peran }}
                            </option>
                        @endforeach
                    </x-form.select>
                </div>

            </x-form.form>
        </div>
    </div>
@endsection
