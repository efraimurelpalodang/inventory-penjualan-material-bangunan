@extends('layouts.app')
@section('content')
  <x-table.main title="Daftar Peran" :headers="['Nama Peran', 'Deskripsi']">
      @foreach ($roles as $row)
          <x-table.row :rowData="$row" />
      @endforeach
  </x-table.main>
@endsection
