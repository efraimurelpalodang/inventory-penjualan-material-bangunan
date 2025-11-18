@extends('layouts.app')
@section('content')
  <x-table.main title="Satuan" :headers="['Nama Satuan', 'Deskripsi', 'Aksi']" :routeCreate="route('satuan.create')">
      @foreach ($satuan as $row)
          <x-table.row :rowData="$row" />
      @endforeach
  </x-table.main>
@endsection
