@extends('layouts.app')

@section('title', 'Tentang Sarpras')

@push('styles')
    @vite(['resources/css/dashboard.css'])
@endpush

@section('content')

<div class="sarpras-dashboard">

    @include('partials.sidebar')

    <main class="dashboard-main">

        <!-- HEADER -->
        <header class="dashboard-header">
            <div class="header-text">
                <h1>TENTANG KAMI</h1>
                <h2>Sub Bidang Sarana dan Prasarana I</h2>
                <p>
                    Profil, tugas pokok, dan fungsi Sub Bidang Sarana dan Prasarana I
                    Bakorwil III Malang dalam mendukung pembangunan wilayah kerja.
                </p>
            </div>
        </header>

        @if (session('success'))
            <div style="padding: 10px 16px; margin-bottom: 14px; background: #e8f4ee; border: 1px solid #b7ddc9; border-radius: 10px; color: #116b42; font-size: 11px; font-weight: 600;">
                {{ session('success') }}
            </div>
        @endif

        <!-- TOMBOL KELOLA -->
        <div style="display: flex; justify-content: flex-end; margin-bottom: 12px;">
            <a href="{{ route('tentang-sarpras.kelola') }}"
               style="display: inline-flex; align-items: center; gap: 6px; padding: 9px 16px; border-radius: 8px; background: #1e88e5; color: #fff; font-size: 11.5px; font-weight: 700; text-decoration: none;">
                <i class="bi bi-pencil-square"></i> Kelola Konten
            </a>
        </div>

        <!-- PROFIL SINGKAT -->
        <section class="scope-section">
            <div class="section-title">
                <h2>PROFIL SINGKAT</h2>
                <span></span>
            </div>

            <p style="font-size: 12px; line-height: 1.8; color: #444; margin: 0;">
                {{ $profil->profil_singkat ?? 'Belum ada profil. Klik "Kelola Konten" untuk menambahkan.' }}
            </p>
        </section>

        <!-- TUGAS POKOK & FUNGSI -->
        <section class="scope-section" style="margin-top: 15px;">
            <div class="section-title">
                <h2>TUGAS POKOK & FUNGSI</h2>
                <span></span>
            </div>

            <div class="function-grid">

                @forelse ($fungsiUtama as $fungsi)
                    <div class="function-card {{ $fungsi->warna }}-card">
                        <div class="function-image">{{ $fungsi->icon }}</div>
                        <h3>{{ $fungsi->judul }}</h3>
                        <p>{{ $fungsi->deskripsi }}</p>
                    </div>
                @empty
                    <p style="font-size: 11px; color: #888;">Belum ada data. Klik "Kelola Konten" untuk menambahkan.</p>
                @endforelse

            </div>
        </section>

        <!-- RUANG LINGKUP -->
        <section class="scope-section" style="margin-top: 15px;">
            <div class="section-title">
                <h2>RUANG LINGKUP SARANA PRASARANA</h2>
                <span></span>
            </div>

            <div class="scope-grid">
                @forelse ($ruangLingkup as $ruang)
                    <div class="scope-item">
                        <div>{{ $ruang->icon }}</div>
                        <span>{!! $ruang->label !!}</span>
                    </div>
                @empty
                    <p style="font-size: 11px; color: #888;">Belum ada data.</p>
                @endforelse
            </div>
        </section>

        <!-- TUJUAN -->
        <section class="purpose-section">
            <div class="purpose-title">
                🎯 <strong>TUJUAN</strong>
            </div>
            <p>
                {{ $profil->tujuan ?? 'Belum ada tujuan. Klik "Kelola Konten" untuk menambahkan.' }}
            </p>
        </section>

    </main>

</div>

@endsection