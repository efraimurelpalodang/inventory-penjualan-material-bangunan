@extends('layouts.app')
@section('content')
    <x-table.main title="Daftar Barang" :headers="['Kode', 'Nama Barang', 'Harga Jual', 'Stok Barang', 'Satuan', 'Aksi']">
        @foreach ($barang as $row)
            <x-table.row :rowData="$row" />
        @endforeach
    </x-table.main>
@endsection
