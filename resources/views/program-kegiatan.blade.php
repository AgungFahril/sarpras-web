@extends('layouts.app')

@section('title', 'Program & Kegiatan')

@push('styles')
    @vite(['resources/css/dashboard.css'])
@endpush

@section('content')

<div class="sarpras-dashboard">

    @include('partials.sidebar')

    <main class="dashboard-main">

        <header class="dashboard-header">
            <div class="header-text">
                <h1>PROGRAM & KEGIATAN</h1>
                <h2>Monitoring Pelaksanaan</h2>
                <p>Daftar program/kegiatan pembangunan sarana prasarana yang sedang dipantau di seluruh wilayah kerja.</p>
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
             TABEL DAFTAR PROGRAM
        ==================================================== -->
        <section class="scope-section">
            <div class="section-title">
                <h2>DAFTAR PROGRAM ({{ $programList->count() }})</h2>
                <span></span>
            </div>

            <div style="overflow-x: auto;">
                <table style="width:100%; border-collapse: collapse; font-size: 11px;">
                    <thead>
                        <tr style="background:#f7fafc; text-align:left;">
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Nama Program</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Bidang</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Wilayah</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Status</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Progres</th>
                            <th style="padding:10px 8px; border-bottom:2px solid #e5eaee; white-space:nowrap;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($programList as $program)
                            <tr style="border-bottom:1px solid #edf1f4;">
                                <td style="padding:10px 8px; font-weight:600; color:#173e68;">{{ $program->nama_program }}</td>
                                <td style="padding:10px 8px;">{{ $program->bidang }}</td>
                                <td style="padding:10px 8px;">{{ $program->wilayah }}</td>
                                <td style="padding:10px 8px;">
                                    @php
                                        $badgeColor = match($program->status) {
                                            'Selesai' => '#e8f4ee; color:#116b42',
                                            'Berjalan' => '#e1effb; color:#2678bd',
                                            default => '#fff2e6; color:#dc8615',
                                        };
                                    @endphp
                                    <span style="padding:3px 9px; border-radius:20px; font-size:9.5px; font-weight:700; background:{{ $badgeColor }};">
                                        {{ $program->status }}
                                    </span>
                                </td>
                                <td style="padding:10px 8px; white-space:nowrap;">
                                    <div style="display:flex; align-items:center; gap:6px;">
                                        <div style="width:60px; height:6px; border-radius:4px; background:#edf1f4; overflow:hidden;">
                                            <div style="width:{{ $program->progres }}%; height:100%; background:#1e88e5;"></div>
                                        </div>
                                        <span>{{ $program->progres }}%</span>
                                    </div>
                                </td>
                                <td style="padding:10px 8px; white-space:nowrap;">
                                    <button type="button" onclick="document.getElementById('edit-{{ $program->id }}').style.display = document.getElementById('edit-{{ $program->id }}').style.display === 'none' ? 'table-row' : 'none';"
                                        style="padding:5px 10px; border:1px solid #dbe6ee; border-radius:6px; background:#fff; color:#173e68; font-size:10px; font-weight:700; cursor:pointer;">
                                        <i class="bi bi-pencil"></i> Edit
                                    </button>
                                    <form method="POST" action="{{ route('program-kegiatan.destroy', $program) }}" style="display:inline;" onsubmit="return confirm('Hapus program ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="padding:5px 10px; border:1px solid #f6c6c6; border-radius:6px; background:#fdecec; color:#b3261e; font-size:10px; font-weight:700; cursor:pointer;">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- BARIS EDIT (tersembunyi, muncul saat tombol Edit diklik) -->
                            <tr id="edit-{{ $program->id }}" style="display:none; background:#f7fafc;">
                                <td colspan="6" style="padding:14px;">
                                    <form method="POST" action="{{ route('program-kegiatan.update', $program) }}" style="display:flex; flex-wrap:wrap; gap:8px; align-items:flex-end;">
                                        @csrf
                                        @method('PUT')

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Nama Program</label>
                                            <input type="text" name="nama_program" value="{{ $program->nama_program }}" required
                                                style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px; width:220px;">
                                        </div>

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Bidang</label>
                                            <select name="bidang" required style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px;">
                                                @foreach ($bidangList as $bidang)
                                                    <option value="{{ $bidang }}" {{ $program->bidang === $bidang ? 'selected' : '' }}>{{ $bidang }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Wilayah</label>
                                            <input type="text" name="wilayah" value="{{ $program->wilayah }}" required
                                                style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px; width:150px;">
                                        </div>

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Status</label>
                                            <select name="status" required style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px;">
                                                @foreach ($statusList as $status)
                                                    <option value="{{ $status }}" {{ $program->status === $status ? 'selected' : '' }}>{{ $status }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div>
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Progres (%)</label>
                                            <input type="number" name="progres" value="{{ $program->progres }}" min="0" max="100" required
                                                style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px; width:70px;">
                                        </div>

                                        <div style="flex:1; min-width:200px;">
                                            <label style="display:block; font-size:9px; font-weight:700; color:#173e68; margin-bottom:3px;">Keterangan</label>
                                            <input type="text" name="keterangan" value="{{ $program->keterangan }}"
                                                style="padding:7px 9px; border:1px solid #dbe6ee; border-radius:6px; font-size:11px; width:100%;">
                                        </div>

                                        <button type="submit" style="padding:8px 16px; border:none; border-radius:6px; background:#1e88e5; color:#fff; font-size:10.5px; font-weight:700; cursor:pointer;">
                                            Simpan
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" style="padding:20px; text-align:center; color:#888; font-size:11px;">
                                    Belum ada program. Tambahkan lewat form di bawah.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>

        <!-- ===================================================
             FORM TAMBAH PROGRAM BARU
        ==================================================== -->
        <section class="scope-section" style="margin-top: 15px;">
            <div class="section-title">
                <h2>+ TAMBAH PROGRAM BARU</h2>
                <span></span>
            </div>

            <form method="POST" action="{{ route('program-kegiatan.store') }}" style="display:flex; flex-wrap:wrap; gap:10px; align-items:flex-end;">
                @csrf

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Nama Program</label>
                    <input type="text" name="nama_program" placeholder="Contoh: Pembangunan Jembatan..." required
                        style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px; width:240px;">
                </div>

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Bidang</label>
                    <select name="bidang" required style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px;">
                        @foreach ($bidangList as $bidang)
                            <option value="{{ $bidang }}">{{ $bidang }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Wilayah</label>
                    <input type="text" name="wilayah" placeholder="Contoh: Kabupaten Malang" required
                        style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px; width:160px;">
                </div>

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Status</label>
                    <select name="status" required style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px;">
                        @foreach ($statusList as $status)
                            <option value="{{ $status }}">{{ $status }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Progres (%)</label>
                    <input type="number" name="progres" min="0" max="100" value="0" required
                        style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px; width:80px;">
                </div>

                <div style="flex:1; min-width:200px;">
                    <label style="display:block; font-size:10px; font-weight:700; color:#173e68; margin-bottom:4px;">Keterangan (opsional)</label>
                    <input type="text" name="keterangan" placeholder="Catatan tambahan"
                        style="padding:9px 11px; border:1px solid #dbe6ee; border-radius:7px; font-size:11.5px; width:100%;">
                </div>

                <button type="submit" style="padding:10px 20px; border:none; border-radius:7px; background:#198754; color:#fff; font-size:11px; font-weight:700; cursor:pointer;">
                    <i class="bi bi-plus-circle"></i> Tambah
                </button>
            </form>
        </section>

    </main>

</div>

@endsection
