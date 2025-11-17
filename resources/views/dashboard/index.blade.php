@extends('layouts.app')
@section('content')
    <div class="row">
        <x-cart.bar-cart></x-cart.bar-cart>
        <x-cart.pie-cart></x-cart.pie-cart>
    </div>
@section('script')
    <script src="{{ asset('template') }}/assets/js/dashboard.js"></script>
@endsection
@endsection
