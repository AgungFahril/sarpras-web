@extends('layouts.app')

@section('title', 'Login - Sarpras Bakorwil III Malang')

@push('styles')
    @vite(['resources/css/login.css'])
@endpush

@section('content')

<div class="login-page">

    <div class="login-card">

        <div class="login-brand">
            <div class="logo-circle">
                <img
                    src="{{ asset('images/logo-provinsi-jawa-timur-baru.png') }}"
                    alt="Logo Bakorwil III">
            </div>
            <div class="login-brand-text">
                <strong>BAKORWIL III</strong>
                <span>SARPRAS &middot; MALANG</span>
            </div>
        </div>

        <h1>Masuk ke Dashboard</h1>
        <p class="login-subtitle">Silakan login untuk mengakses Dashboard Sarpras.</p>

        @if ($errors->any())
            <div class="login-alert">
                <i class="bi bi-exclamation-circle-fill"></i>
                <span>{{ $errors->first() }}</span>
            </div>
        @endif

        <form method="POST" action="{{ route('login.attempt') }}" class="login-form">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-wrapper">
                    <i class="bi bi-envelope-fill"></i>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        placeholder="nama@bakorwil3.jatimprov.go.id"
                        required
                        autofocus>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <i class="bi bi-lock-fill"></i>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Masukkan password"
                        required>
                    <button type="button" class="toggle-password" id="togglePassword">
                        <i class="bi bi-eye-fill"></i>
                    </button>
                </div>
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    <span>Ingat saya</span>
                </label>
            </div>

            <button type="submit" class="login-button">
                Masuk <i class="bi bi-arrow-right"></i>
            </button>

        </form>

        <a href="{{ url('/') }}" class="back-home">
            <i class="bi bi-arrow-left"></i> Kembali ke Beranda
        </a>

    </div>

</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    toggleBtn.addEventListener('click', function () {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        toggleBtn.querySelector('i').className = isPassword ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
    });
});
</script>
@endpush