@extends('layouts.app')

@section('title', 'Infografis')

@push('styles')
    @vite(['resources/css/dashboard.css'])
@endpush

@section('content')

<div class="sarpras-dashboard">

    @include('partials.sidebar')

    <main class="dashboard-main">

        <header class="dashboard-header">
            <div class="header-text">
                <h1>INFOGRAFIS</h1>
                <h2>Kelola Poster Infografis</h2>
                <p>Poster yang diunggah di sini akan tampil di bagian Infografis pada halaman publik jika statusnya ditayangkan.</p>
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

        <!-- ===================================================
             TABEL DAFTAR INFOGRAFIS
        ==================================================== -->
        <section class="scope-section">
            <div class="section-title">
                <h2>DAFTAR INFOGRAFIS ({{ $items->count() }})</h2>
                <span></span>
            </div>

            <div style="overflow-x: auto;">
                <table style="width:100%; border-collapse: collapse; font-size: 11px;">
                    <thead>
                        <tr style="background:#f7fafc; text-align:left;">
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Gambar</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Judul</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Kategori</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Tahun</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Urutan</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Status</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr style="border-bottom:1px solid #edf1f4;">
                                <td style="padding:10px 8px;">
                                    <a href="{{ asset('storage/'.$item->gambar) }}" target="_blank">
                                        <img src="{{ asset('storage/'.$item->gambar) }}" alt="{{ $item->judul }}"
                                            style="width:70px; height:48px; object-fit:cover; border-radius:6px; border:1px solid #e5eaee; display:block;">
                                    </a>
                                </td>
                                <td style="padding:10px 8px; font-weight:600; color:#173e68;">{{ $item->judul }}</td>
                                <td style="padding:10px 8px;">{{ $item->kategori }}</td>
                                <td style="padding:10px 8px;">{{ $item->tahun ?? '-' }}</td>
                                <td style="padding:10px 8px;">{{ $item->urutan }}</td>
                                <td style="padding:10px 8px;">
                                    @if ($item->is_published)
                                        <span style="padding:3px 9px; border-radius:20px; font-size:9.5px; font-weight:700; background:#e8f4ee; color:#116b42;">Tayang</span>
                                    @else
                                        <span style="padding:3px 9px; border-radius:20px; font-size:9.5px; font-weight:700; background:#fff2e6; color:#dc8615;">Draft</span>
                                    @endif
                                </td>
                                <td style="padding:10px 8px; white-space:nowrap;">
                                    <button type="button" onclick="document.getElementById('edit-{{ $item->id }}').style.display = document.getElementById('edit-{{ $item->id }}').style.display === 'none' ? 'table-row' : 'none';"
                                        style="padding:5px 10px; border:1px solid #dbe6ee; border-radius:6px; background:#fff; color:#173e68; font-size:10px; font-weight:700; cursor:pointer;">
                                        <i class="bi bi-pencil"></i> Edit
                                    </button>
                                    <form method="POST" action="{{ route('infografis.destroy', $item) }}" style="display:inline;" onsubmit="return confirm('Hapus infografis ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="padding:5px 10px; border:1px solid #f6c6c6; border-radius:6px; background:#fdecec; color:#b3261e; font-size:10px; font-weight:700; cursor:pointer;">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- BARIS EDIT (tersembunyi, muncul saat tombol Edit diklik) -->
                            <tr id="edit-{{ $item->id }}" style="display:none; background:#f7fafc;">
                                <td colspan="7" style="padding:14px;">
                                    <form method="POST" action="{{ route('infografis.update', $item) }}" enctype="multipart/form-data"
                                        style="display:flex; flex-wrap:wrap; gap:8px; align-items:flex-end;">
                                        @csrf
                                        @method('PUT')

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Judul</label>
                                            <input type="text" name="judul" value="{{ $item->judul }}" required
                                                style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px; width:220px;">
                                        </div>

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Kategori</label>
                                            <select name="kategori" required style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px;">
                                                @foreach ($kategori as $k)
                                                    <option value="{{ $k }}" {{ $item->kategori === $k ? 'selected' : '' }}>{{ $k }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Tahun</label>
                                            <input type="number" name="tahun" value="{{ $item->tahun }}" min="2000" max="2100"
                                                style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px; width:80px;">
                                        </div>

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Urutan</label>
                                            <input type="number" name="urutan" value="{{ $item->urutan }}" min="0"
                                                style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px; width:70px;">
                                        </div>

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Ganti Gambar (opsional)</label>
                                            <input type="file" name="gambar" accept="image/*" style="font-size:10.5px;">
                                        </div>

                                        <div style="flex:1; min-width:200px;">
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Deskripsi</label>
                                            <input type="text" name="deskripsi" value="{{ $item->deskripsi }}"
                                                style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px; width:100%;">
                                        </div>

                                        <label style="display:flex; align-items:center; gap:5px; font-size:10.5px; font-weight:600; color:#173e68; padding-bottom:7px;">
                                            <input type="checkbox" name="is_published" value="1" {{ $item->is_published ? 'checked' : '' }}>
                                            Tayangkan
                                        </label>

                                        <button type="submit" style="padding:8px 16px; border:none; border-radius:6px; background:#1e88e5; color:#fff; font-size:10.5px; font-weight:700; cursor:pointer;">
                                            Simpan
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" style="padding:20px; text-align:center; color:#888; font-size:11px;">
                                    Belum ada infografis. Tambahkan lewat form di bawah.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>

        <!-- ===================================================
             FORM TAMBAH INFOGRAFIS BARU
        ==================================================== -->
        <section class="scope-section" style="margin-top: 15px;">
            <div class="section-title">
                <h2>+ TAMBAH INFOGRAFIS BARU</h2>
                <span></span>
            </div>

            <form method="POST" action="{{ route('infografis.store') }}" enctype="multipart/form-data"
                style="display:flex; flex-wrap:wrap; gap:10px; align-items:flex-end;">
                @csrf

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Judul</label>
                    <input type="text" name="judul" placeholder="Contoh: Capaian Jalan & Jembatan 2026" required
                        style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px; width:260px;">
                </div>

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Kategori</label>
                    <select name="kategori" required style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px;">
                        @foreach ($kategori as $k)
                            <option value="{{ $k }}">{{ $k }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Tahun</label>
                    <input type="number" name="tahun" min="2000" max="2100" value="{{ date('Y') }}"
                        style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px; width:90px;">
                </div>

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Urutan</label>
                    <input type="number" name="urutan" min="0" value="0"
                        style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px; width:80px;">
                </div>

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Gambar (maks 5 MB)</label>
                    <input type="file" name="gambar" accept="image/*" required style="font-size:11px;">
                </div>

                <div style="flex:1; min-width:200px;">
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Deskripsi (opsional)</label>
                    <input type="text" name="deskripsi" placeholder="Keterangan singkat poster"
                        style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px; width:100%;">
                </div>

                <label style="display:flex; align-items:center; gap:5px; font-size:11px; font-weight:600; color:#173e68; padding-bottom:9px;">
                    <input type="checkbox" name="is_published" value="1" checked>
                    Tayangkan
                </label>

                <button type="submit" style="padding:10px 20px; border:none; border-radius:7px; background:#198754; color:#fff; font-size:11px; font-weight:700; cursor:pointer;">
                    <i class="bi bi-plus-circle"></i> Tambah
                </button>
            </form>
        </section>

    </main>

</div>

@endsection