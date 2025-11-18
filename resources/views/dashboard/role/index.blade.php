@extends('layouts.app')
@section('content')
  <x-table.main title="Peran" :headers="['Nama Peran', 'Deskripsi', 'Aksi']" :routeCreate="route('role.create')">
      @foreach ($roles as $row)
          <x-table.row :rowData="$row" />
      @endforeach
  </x-table.main>
@endsection
