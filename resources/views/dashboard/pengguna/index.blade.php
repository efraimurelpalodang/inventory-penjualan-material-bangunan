@extends('layouts.app')
@section('content')
    <x-table.main 
        title="Barang" 
        :headers="['Username', 'Nama Pengguna','Peran', 'Handphone', 'Aksi']" 
        :routeCreate="route('barang.create')"
    >
        @foreach ($pengguna as $row)
            <x-table.row :rowData="$row" />
        @endforeach
    </x-table.main>
    {{-- PAGINATION TETAP MUNCUL! --}}
    <div class="mt-4 d-flex justify-content-center">
        {{ $pengguna->links() }}
    </div>

@endsection