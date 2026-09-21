@extends('layouts.app')

@section('title', 'Kelola Tentang Sarpras')

@push('styles')
    @vite(['resources/css/dashboard.css'])
@endpush

@section('content')

<div class="sarpras-dashboard">

    @include('partials.sidebar')

    <main class="dashboard-main">

        <header class="dashboard-header">
            <div class="header-text">
                <h1>KELOLA KONTEN</h1>
                <h2>Tentang Sarpras</h2>
                <p>Ubah profil, tugas pokok & fungsi, serta ruang lingkup yang tampil di halaman Tentang Sarpras.</p>
            </div>
        </header>

        @if (session('success'))
            <div style="padding: 10px 16px; margin-bottom: 14px; background: #e8f4ee; border: 1px solid #b7ddc9; border-radius: 10px; color: #116b42; font-size: 11px; font-weight: 600;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div style="padding: 10px 16px; margin-bottom: 14px; background: #fdecec; border: 1px solid #f6c6c6; border-radius: 10px; color: #b3261e; font-size: 11px; font-weight: 600;">
                {{ $errors->first() }}
            </div>
        @endif

        <div style="display:flex; justify-content:flex-end; margin-bottom:12px;">
            <a href="{{ route('tentang-sarpras') }}"
               style="display:inline-flex; align-items:center; gap:6px; padding:9px 16px; border-radius:8px; background:#eef3f6; color:#173e68; font-size:11.5px; font-weight:700; text-decoration:none;">
                <i class="bi bi-eye"></i> Lihat Halaman
            </a>
        </div>

        <!-- ===================================================
             FORM: PROFIL SINGKAT & TUJUAN
        ==================================================== -->
        <section class="scope-section">
            <div class="section-title">
                <h2>PROFIL SINGKAT & TUJUAN</h2>
                <span></span>
            </div>

            <form method="POST" action="{{ route('tentang-sarpras.profil.update') }}">
                @csrf

                <div style="margin-bottom: 14px;">
                    <label style="display:block; font-size:11px; font-weight:700; color:#173e68; margin-bottom:6px;">Profil Singkat</label>
                    <textarea name="profil_singkat" rows="5"
                        style="width:100%; padding:10px 12px; border:1px solid #dbe6ee; border-radius:9px; font-family:inherit; font-size:12px; color:#173e68; resize:vertical;"
                    >{{ old('profil_singkat', $profil->profil_singkat ?? '') }}</textarea>
                </div>

                <div style="margin-bottom: 14px;">
                    <label style="display:block; font-size:11px; font-weight:700; color:#173e68; margin-bottom:6px;">Tujuan</label>
                    <textarea name="tujuan" rows="4"
                        style="width:100%; padding:10px 12px; border:1px solid #dbe6ee; border-radius:9px; font-family:inherit; font-size:12px; color:#173e68; resize:vertical;"
                    >{{ old('tujuan', $profil->tujuan ?? '') }}</textarea>
                </div>

                <button type="submit"
                    style="padding:10px 20px; border:none; border-radius:8px; background:#1e88e5; color:#fff; font-size:11.5px; font-weight:700; cursor:pointer;">
                    <i class="bi bi-check-circle"></i> Simpan Profil & Tujuan
                </button>
            </form>
        </section>


        <!-- ===================================================
             TUGAS POKOK & FUNGSI (CRUD)
        ==================================================== -->
        <section class="scope-section" style="margin-top: 15px;">
            <div class="section-title">
                <h2>TUGAS POKOK & FUNGSI</h2>
                <span></span>
            </div>

            <!-- DAFTAR YANG SUDAH ADA -->
            <div style="display:flex; flex-direction:column; gap:10px; margin-bottom:20px;">
                @forelse ($fungsiUtama as $fungsi)
                    <div style="display:flex; align-items:flex-start; gap:12px; padding:12px; border:1px solid #e5eaee; border-radius:10px;">

                        <div style="font-size:24px;">{{ $fungsi->icon }}</div>

                        <form method="POST" action="{{ route('tentang-sarpras.fungsi.update', $fungsi) }}" style="flex:1; display:flex; flex-direction:column; gap:8px;">
                            @csrf
                            @method('PUT')

                            <div style="display:flex; gap:8px;">
                                <input type="text" name="icon" value="{{ $fungsi->icon }}" placeholder="Emoji"
                                    style="width:60px; padding:8px; border:1px solid #dbe6ee; border-radius:7px; font-size:14px; text-align:center;">
                                <input type="text" name="judul" value="{{ $fungsi->judul }}" placeholder="Judul"
                                    style="flex:1; padding:8px 10px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px; font-weight:700;">
                                <select name="warna" style="padding:8px 10px; border:1px solid #dbe6ee; border-radius:7px; font-size:11px;">
                                    <option value="blue"   {{ $fungsi->warna === 'blue' ? 'selected' : '' }}>Biru</option>
                                    <option value="green"  {{ $fungsi->warna === 'green' ? 'selected' : '' }}>Hijau</option>
                                    <option value="orange" {{ $fungsi->warna === 'orange' ? 'selected' : '' }}>Oranye</option>
                                    <option value="purple" {{ $fungsi->warna === 'purple' ? 'selected' : '' }}>Ungu</option>
                                </select>
                            </div>

                            <textarea name="deskripsi" rows="2"
                                style="width:100%; padding:8px 10px; border:1px solid #dbe6ee; border-radius:7px; font-size:11px; resize:vertical;"
                            >{{ $fungsi->deskripsi }}</textarea>

                            <div style="display:flex; gap:8px;">
                                <button type="submit" style="padding:7px 14px; border:none; border-radius:7px; background:#1e88e5; color:#fff; font-size:10.5px; font-weight:700; cursor:pointer;">
                                    Simpan
                                </button>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('tentang-sarpras.fungsi.destroy', $fungsi) }}"
                              onsubmit="return confirm('Hapus fungsi ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding:7px 10px; border:1px solid #f6c6c6; border-radius:7px; background:#fdecec; color:#b3261e; font-size:10.5px; font-weight:700; cursor:pointer;">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>

                    </div>
                @empty
                    <p style="font-size: 11px; color: #888;">Belum ada data.</p>
                @endforelse
            </div>

            <!-- FORM TAMBAH BARU -->
            <div style="padding:14px; border:1px dashed #b6c6d4; border-radius:10px;">
                <strong style="display:block; font-size:11px; color:#173e68; margin-bottom:10px;">+ Tambah Fungsi Baru</strong>

                <form method="POST" action="{{ route('tentang-sarpras.fungsi.store') }}" style="display:flex; flex-direction:column; gap:8px;">
                    @csrf

                    <div style="display:flex; gap:8px;">
                        <input type="text" name="icon" placeholder="Emoji (misal: 🚀)" required
                            style="width:100px; padding:8px; border:1px solid #dbe6ee; border-radius:7px; font-size:13px;">
                        <input type="text" name="judul" placeholder="Judul" required
                            style="flex:1; padding:8px 10px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px;">
                        <select name="warna" required style="padding:8px 10px; border:1px solid #dbe6ee; border-radius:7px; font-size:11px;">
                            <option value="blue">Biru</option>
                            <option value="green">Hijau</option>
                            <option value="orange">Oranye</option>
                            <option value="purple">Ungu</option>
                        </select>
                    </div>

                    <textarea name="deskripsi" rows="2" placeholder="Deskripsi" required
                        style="width:100%; padding:8px 10px; border:1px solid #dbe6ee; border-radius:7px; font-size:11px; resize:vertical;"></textarea>

                    <button type="submit" style="align-self:flex-start; padding:8px 16px; border:none; border-radius:7px; background:#198754; color:#fff; font-size:10.5px; font-weight:700; cursor:pointer;">
                        <i class="bi bi-plus-circle"></i> Tambah
                    </button>
                </form>
            </div>
        </section>


        <!-- ===================================================
             RUANG LINGKUP (CRUD)
        ==================================================== -->
        <section class="scope-section" style="margin-top: 15px;">
            <div class="section-title">
                <h2>RUANG LINGKUP SARANA PRASARANA</h2>
                <span></span>
            </div>

            <div style="display:flex; flex-direction:column; gap:8px; margin-bottom:20px;">
                @forelse ($ruangLingkup as $ruang)
                    <div style="display:flex; align-items:center; gap:10px; padding:10px; border:1px solid #e5eaee; border-radius:10px;">

                        <form method="POST" action="{{ route('tentang-sarpras.ruang.update', $ruang) }}" style="flex:1; display:flex; align-items:center; gap:8px;">
                            @csrf
                            @method('PUT')

                            <input type="text" name="icon" value="{{ $ruang->icon }}"
                                style="width:50px; padding:7px; border:1px solid #dbe6ee; border-radius:6px; font-size:14px; text-align:center;">
                            <input type="text" name="label" value="{{ $ruang->label }}" placeholder="Gunakan <br> untuk 2 baris"
                                style="flex:1; padding:7px 10px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px;">

                            <button type="submit" style="padding:7px 12px; border:none; border-radius:6px; background:#1e88e5; color:#fff; font-size:10px; font-weight:700; cursor:pointer;">
                                Simpan
                            </button>
                        </form>

                        <form method="POST" action="{{ route('tentang-sarpras.ruang.destroy', $ruang) }}"
                              onsubmit="return confirm('Hapus item ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding:7px 10px; border:1px solid #f6c6c6; border-radius:6px; background:#fdecec; color:#b3261e; font-size:10px; font-weight:700; cursor:pointer;">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>

                    </div>
                @empty
                    <p style="font-size: 11px; color: #888;">Belum ada data.</p>
                @endforelse
            </div>

            <div style="padding:14px; border:1px dashed #b6c6d4; border-radius:10px;">
                <strong style="display:block; font-size:11px; color:#173e68; margin-bottom:10px;">+ Tambah Ruang Lingkup Baru</strong>

                <form method="POST" action="{{ route('tentang-sarpras.ruang.store') }}" style="display:flex; gap:8px;">
                    @csrf

                    <input type="text" name="icon" placeholder="Emoji" required
                        style="width:70px; padding:8px; border:1px solid #dbe6ee; border-radius:7px; font-size:13px; text-align:center;">
                    <input type="text" name="label" placeholder="Label (boleh <br> untuk 2 baris)" required
                        style="flex:1; padding:8px 10px; border:1px solid #dbe6ee; border-radius:7px; font-size:11px;">

                    <button type="submit" style="padding:8px 16px; border:none; border-radius:7px; background:#198754; color:#fff; font-size:10.5px; font-weight:700; cursor:pointer;">
                        <i class="bi bi-plus-circle"></i> Tambah
                    </button>
                </form>
            </div>
        </section>

    </main>

</div>

@endsection
