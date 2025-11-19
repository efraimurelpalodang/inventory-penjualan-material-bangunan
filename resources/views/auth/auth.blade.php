{{-- resources/views/auth/login.blade.php --}}
@extends('auth.layout.app')

@section('title', 'Login')

@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-4">
                        <div class="card shadow-lg border-0 rounded-4 mb-0">
                            <div class="card-body p-5">

                                <!-- Logo -->
                                <div class="text-center mb-4">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('template/assets/images/logos/dark-logo.svg') }}" alt="Logo"
                                            width="180" class="img-fluid">
                                    </a>
                                    <p class="mt-3 text-muted fs-5">Selamat datang kembali!</p>
                                </div>

                                <!-- Form Login -->
                                <form method="POST">
                                    @csrf

                                    <!-- Username / Email -->
                                    <div class="mb-4">
                                        <x-form.input name="username" type="text" label="Username"
                                            placeholder="Masukkan username" :required="true" autofocus
                                            autocomplete="username" :value="old('username')" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-4">
                                        <x-form.input name="password" type="password" label="Password"
                                            placeholder="Masukkan password" :required="true"
                                            autocomplete="current-password" />
                                    </div>

                                    <!-- Remember Me & Forgot Password -->
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label text-dark" for="remember">
                                                Ingat saya
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a class="text-primary fw-medium" href="{{ route('password.request') }}">
                                                Lupa Password?
                                            </a>
                                        @endif
                                    </div>

                                    <!-- Tombol Login -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg rounded-3 py-3">
                                            <i class="ti ti-login me-2"></i>
                                            Masuk
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
