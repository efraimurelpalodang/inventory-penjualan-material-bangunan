@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-3">Tambah Barang</h4>

            <x-form.form action="/barang/store" buttonText="Tambah Barang" class="p-2 p-md-2" back="/barang" >

                <div class="col-md-6">
                    <x-form.input name="kode" label="Kode Barang" :value="old('kode')" :required="true" id="kode" placeholder="Masukkan kode barang"
                        class="{{ $errors->has('kode') ? 'is-invalid' : '' }}" />
                    @if ($errors->has('kode'))
                        <div class="invalid-feedback">
                            {{ $errors->first('kode') }}
                        </div>
                    @endif
                </div>

                <div class="col-md-6">
                    <x-form.input name="nama_barang" label="Nama Barang" placeholder="Masukkan nama barang" :required="true"
                        id="nama" />
                </div>

                <div class="col-md-3">
                    <x-form.input name="harga_jual" type="number" label="Harga" placeholder="Masukkan harga"
                        :required="true" id="harga" />
                </div>

                <div class="col-md-3">
                    <x-form.input name="jumlah_stok" type="number" label="Stok Barang" placeholder="Masukkan stok barang"
                        :required="true" id="harga" />
                </div>

                <div class="col-md-6">
                    <x-form.select name="satuan_id" label="Satuan" :required="true">
                        <option value="">Pilih Satuan</option>
                        @foreach ($satuans as $s)
                            <option value="{{ $s->id }}" {{ old('satuan_id') == $s->id ? 'selected' : '' }}>
                                {{ $s->nama }}
                            </option>
                        @endforeach
                    </x-form.select>
                </div>

            </x-form.form>
        </div>
    </div>
@endsection
