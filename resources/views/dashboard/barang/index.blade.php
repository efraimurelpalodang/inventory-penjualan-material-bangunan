@extends('layouts.app')
@section('content')
    <x-table.main 
        title="Barang" 
        :headers="['Kode', 'Nama Barang', 'Harga Jual', 'Stok Barang', 'Satuan', 'Aksi']" 
        routeCreate="/barang/tambah"
    >
        @foreach ($barang as $row)
            <x-table.row :rowData="$row" />
        @endforeach
    </x-table.main>
    {{-- PAGINATION TETAP MUNCUL! --}}
    <div class="mt-4 d-flex justify-content-center">
        {{ $barang->links() }}
    </div>

@endsection
