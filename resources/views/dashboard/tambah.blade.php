@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-3">Tambah Barang</h4>

            <x-form.form action="/barang/store" buttonText="Tambah Barang" class="p-2 p-md-2">

                <div class="col-md-6">
                    <x-form.input name="kode" label="Kode Barang" placeholder="Masukkan kode barang" :required="true"
                        id="kode" />
                </div>

                <div class="col-md-6">
                    <x-form.input name="nama" label="Nama Barang" placeholder="Masukkan nama barang" :required="true"
                        id="nama" />
                </div>

                <div class="col-md-3">
                    <x-form.input name="harga" type="number" label="Harga" placeholder="Masukkan harga"
                        :required="true" id="harga" />
                </div>

                <div class="col-md-3">
                    <x-form.input name="stok" type="number" label="Stok Barang" placeholder="Masukkan stok barang"
                        :required="true" id="harga" />
                </div>

                <div class="col-md-6">
                    <x-form.select name="satuan" label="Satuan" :required="true" id="satuan">
                        @foreach ($satuans as $satuan)
                            <option value="{{ $satuan->id }}">{{ $satuan->nama }}</option>
                        @endforeach
                    </x-form.select>
                </div>

            </x-form.form>
        </div>
    </div>
@endsection
