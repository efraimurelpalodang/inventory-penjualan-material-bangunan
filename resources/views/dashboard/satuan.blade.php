@extends('layouts.app')
@section('content')
  <x-table.main title="Daftar Satuan" :headers="['Nama Satuan', 'Deskripsi', 'Aksi']">
      @foreach ($satuan as $row)
          <x-table.row :rowData="$row" />
      @endforeach
  </x-table.main>
@endsection
