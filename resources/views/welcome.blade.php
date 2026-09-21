@extends('layouts.app')

@section('title', 'Sarpras Bakorwil III Malang')

@push('styles')
    @vite(['resources/css/style.css'])
@endpush

@section('content')

<!-- =========================
     NAVBAR
========================== -->
<header class="site-header" id="siteHeader">
    <div class="container">
        <nav class="navbar">

            <div class="brand">
                <div class="brand-mark"><i class="bi bi-signpost-split-fill"></i></div>
                <div class="brand-info">
                    <strong>BAKORWIL III</strong>
                    <span>SARPRAS &middot; MALANG</span>
                </div>
            </div>

            <div class="nav-menu">
                <a href="#beranda" class="nav-item active">Beranda</a>
                <a href="#tentang" class="nav-item">Tentang Kami</a>
                <a href="#tim" class="nav-item">Tim Kami</a>
                <a href="#infografis" class="nav-item">Infografis</a>
                <a href="#dokumentasi" class="nav-item">Dokumentasi</a>
            </div>

            <a href="{{ url('/dashboard') }}" class="nav-contact">
                <i class="bi bi-speedometer2"></i> Masuk Dashboard
            </a>

            <button type="button" class="mobile-toggle" id="mobileToggle">
                <i class="bi bi-list"></i>
            </button>

        </nav>
    </div>

    <div class="mobile-navigation" id="mobileNavigation">
        <a href="#beranda">Beranda</a>
        <a href="#tentang">Tentang Kami</a>
        <a href="#tim">Tim Kami</a>
        <a href="#infografis">Infografis</a>
        <a href="#dokumentasi">Dokumentasi</a>
        <a href="{{ url('/dashboard') }}">Masuk Dashboard</a>
    </div>
</header>


<!-- =========================
     HERO
========================== -->
<section class="hero" id="beranda">
    <div class="hero-background"></div>
    <div class="hero-pattern"></div>

    <div class="container hero-container">

        <div class="hero-content">

            <div class="eyebrow">
                <span class="eyebrow-line"></span>
                SUB BIDANG SARANA DAN PRASARANA I
            </div>

            <h1>Membangun <span>Konektivitas</span> Wilayah Jawa Timur</h1>

            <p>
                Mengoordinasikan, memfasilitasi, memantau, dan mengevaluasi
                pembangunan sarana prasarana di 7 Kabupaten/Kota wilayah kerja
                Bakorwil III Malang — mulai dari jalan & jembatan, lingkungan
                hidup, kehutanan, ESDM, sumber daya air, hingga transportasi.
            </p>

            <div class="hero-actions">
                <a href="{{ url('/dashboard') }}" class="button button-primary">
                    <i class="bi bi-speedometer2"></i> Lihat Dashboard Monitoring
                </a>
                <a href="#tentang" class="button button-outline">
                    Pelajari Lebih Lanjut
                </a>
            </div>

            {{-- TODO: hubungkan ke tabel Statistik saat menu Statistik dibuat --}}
            <div class="hero-stats">
                <div class="hero-stat">
                    <strong>128</strong>
                    <span>Program / Kegiatan Dipantau</span>
                </div>
                <div class="hero-stat">
                    <strong>7</strong>
                    <span>Kabupaten / Kota Wilayah Kerja</span>
                </div>
                <div class="hero-stat">
                    <strong>68%</strong>
                    <span>Rata-rata Progres Pelaksanaan</span>
                </div>
            </div>

        </div>

        <div class="hero-visual">

            <div class="hero-image">
                <div class="image-overlay"></div>

                <div class="hero-image-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>

                <div class="hero-image-content">
                    <span>WILAYAH KERJA</span>
                    <strong>7 Kabupaten<br>& Kota</strong>
                </div>
            </div>

            <div class="hero-card">
                <div class="hero-card-icon"><i class="bi bi-clipboard-check-fill"></i></div>
                <div>
                    <strong>128 Program</strong>
                    <span>Sedang dipantau</span>
                </div>
            </div>

            <div class="hero-number">
                <span>PROGRES</span>
                <strong>68%</strong>
            </div>

        </div>

    </div>
</section>


<!-- =========================
     INTRO
     (sudah tersambung ke database: profil_singkat)
========================== -->
<section class="intro-section">
    <div class="container intro-grid">

        <div>
            <span class="section-label">TENTANG KAMI</span>
            <h2>Koordinator Pembangunan Sarana Prasarana di Wilayah Kerja Bakorwil III</h2>
            <a href="#tentang" class="text-link">
                Selengkapnya <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="intro-text">
            {{ $profil->profil_singkat ?? 'Bakorwil III Malang, khususnya Sub Bidang Sarana dan Prasarana I, berperan sebagai penghubung antara Pemerintah Provinsi Jawa Timur dengan OPD dan instansi terkait di wilayah kerja.' }}
        </div>

    </div>
</section>


<!-- =========================
     TENTANG / ABOUT
     (feature-list sudah tersambung ke database: fungsi_utama)
========================== -->
<section class="about-section" id="tentang">
    <div class="container about-grid">

        <div class="about-visual">
            <div class="about-main-image">
                <div>
                    <i class="bi bi-building"></i>
                    <span>BAKORWIL III MALANG</span>
                </div>
            </div>

            <div class="about-experience">
                <strong>7</strong>
                <span>KAB/KOTA<br>TERLAYANI</span>
            </div>
        </div>

        <div class="about-content">
            <span class="section-label">FUNGSI UTAMA</span>
            <h2>Koordinasi, Fasilitasi, Pemantauan & Evaluasi</h2>

            <p>
                Empat fungsi utama ini menjadi landasan kerja kami dalam
                mendukung pembangunan sarana prasarana yang tepat sasaran
                di seluruh wilayah kerja.
            </p>

            <div class="feature-list">

                @forelse ($fungsiUtama as $fungsi)
                    <div class="feature">
                        <div class="feature-icon" style="font-size: 18px;">{{ $fungsi->icon }}</div>
                        <div>
                            <strong>{{ ucfirst(strtolower($fungsi->judul)) }}</strong>
                            <span>{{ \Illuminate\Support\Str::limit($fungsi->deskripsi, 75) }}</span>
                        </div>
                    </div>
                @empty
                    <p style="font-size: 12px; color: #999;">Belum ada data fungsi utama.</p>
                @endforelse

            </div>
        </div>

    </div>
</section>


<!-- =========================
     TIM
========================== -->
<section class="team-section" id="tim">
    <div class="container">

        <div class="section-heading">
            <div>
                <span class="section-label">TIM KAMI</span>
                <h2>Tim Sarpras Bakorwil III Malang</h2>
            </div>
            <p>Tim yang berdedikasi dalam mengawal pembangunan sarana prasarana di wilayah kerja.</p>
        </div>

        {{-- TODO: hubungkan ke tabel Tim saat menu Tim Sarpras dibuat --}}
        <div class="team-grid">

            <div class="team-card">
                <div class="team-photo"><i class="bi bi-person-circle"></i></div>
                <div class="team-info">
                    <span>KEPALA SUB BIDANG</span>
                    <h3>Nama Pejabat</h3>
                    <p>Sarana & Prasarana I</p>
                </div>
            </div>

            <div class="team-card">
                <div class="team-photo"><i class="bi bi-person-circle"></i></div>
                <div class="team-info">
                    <span>STAF</span>
                    <h3>Nama Staf</h3>
                    <p>Koordinasi Wilayah</p>
                </div>
            </div>

            <div class="team-card">
                <div class="team-photo"><i class="bi bi-person-circle"></i></div>
                <div class="team-info">
                    <span>STAF</span>
                    <h3>Nama Staf</h3>
                    <p>Monitoring & Evaluasi</p>
                </div>
            </div>

            <div class="team-card">
                <div class="team-photo"><i class="bi bi-person-circle"></i></div>
                <div class="team-info">
                    <span>STAF</span>
                    <h3>Nama Staf</h3>
                    <p>Administrasi</p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- =========================
     INFOGRAFIS
========================== -->

<section class="infographic-section" id="infografis">
    <div class="container">

        <div class="section-heading light">
            <div>
                <span class="section-label">INFOGRAFIS</span>
                <h2>Ruang Lingkup Sarana Prasarana</h2>
            </div>
            <p>Ringkasan capaian di setiap bidang yang menjadi ruang lingkup kerja kami.</p>
        </div>

        <div class="infographic-grid">

            @php
                $iconBidang = [
                    'Jalan & Jembatan'   => 'bi-signpost-2',
                    'Lingkungan Hidup'   => 'bi-tree-fill',
                    'Kehutanan'          => 'bi-tree',
                    'ESDM'               => 'bi-lightning-charge-fill',
                    'Sumber Daya Air'    => 'bi-droplet-fill',
                    'Transportasi'       => 'bi-bus-front-fill',
                    'Prasarana Lainnya'  => 'bi-building',
                ];
            @endphp

            @forelse ($programByBidang as $bidang)
                <div class="infographic-card">
                    <div class="infographic-image">
                        <i class="bi {{ $iconBidang[$bidang->bidang] ?? 'bi-building' }}"></i>
                        <span>{{ strtoupper($bidang->bidang) }}</span>
                    </div>
                    <div class="infographic-info">
                        <span>{{ $bidang->total }} PROGRAM &middot; RATA-RATA {{ $bidang->rata_progres }}%</span>
                        <h3>Progres Pembangunan {{ $bidang->bidang }}</h3>
                        <a href="#dokumentasi">Lihat Program <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            @empty
                <p style="color:#eee; font-size:12px;">Belum ada data program & kegiatan.</p>
            @endforelse

        </div>

    </div>
</section>

<!-- =========================
     DAFTAR PROGRAM & KEGIATAN
     (tersambung langsung ke tabel program_kegiatan / CRUD admin)
========================== -->
<section class="documentation-section" id="program">
    <div class="container">

        <div class="section-heading">
            <div>
                <span class="section-label">PROGRAM & KEGIATAN</span>
                <h2>Program Terbaru yang Dipantau</h2>
            </div>
            <a href="{{ url('/dashboard') }}" class="text-link dark-button">
                Lihat Semua <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse: collapse; font-size: 12px;">
                <thead>
                    <tr style="text-align:left;">
                        <th style="padding:10px 8px; border-bottom:2px solid rgba(255,255,255,.15);">Nama Program</th>
                        <th style="padding:10px 8px; border-bottom:2px solid rgba(255,255,255,.15);">Bidang</th>
                        <th style="padding:10px 8px; border-bottom:2px solid rgba(255,255,255,.15);">Wilayah</th>
                        <th style="padding:10px 8px; border-bottom:2px solid rgba(255,255,255,.15);">Status</th>
                        <th style="padding:10px 8px; border-bottom:2px solid rgba(255,255,255,.15);">Progres</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($programTerbaru as $program)
                        <tr style="border-bottom:1px solid rgba(255,255,255,.08);">
                            <td style="padding:10px 8px; font-weight:600;">{{ $program->nama_program }}</td>
                            <td style="padding:10px 8px;">{{ $program->bidang }}</td>
                            <td style="padding:10px 8px;">{{ $program->wilayah }}</td>
                            <td style="padding:10px 8px;">
                                @php
                                    $badge = match($program->status) {
                                        'Selesai'  => 'background:#e8f4ee; color:#116b42',
                                        'Berjalan' => 'background:#e1effb; color:#2678bd',
                                        default    => 'background:#fff2e6; color:#dc8615',
                                    };
                                @endphp
                                <span style="padding:3px 10px; border-radius:20px; font-size:10px; font-weight:700; {{ $badge }}">
                                    {{ $program->status }}
                                </span>
                            </td>
                            <td style="padding:10px 8px; white-space:nowrap;">
                                <div style="display:flex; align-items:center; gap:6px;">
                                    <div style="width:70px; height:6px; border-radius:4px; background:rgba(255,255,255,.15); overflow:hidden;">
                                        <div style="width:{{ $program->progres }}%; height:100%; background:#1e88e5;"></div>
                                    </div>
                                    <span>{{ $program->progres }}%</span>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="padding:20px; text-align:center; opacity:.7;">
                                Belum ada program & kegiatan yang tercatat.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- =========================
     DOKUMENTASI
========================== -->
<section class="documentation-section" id="dokumentasi">
    <div class="container">

        <div class="section-heading">
            <div>
                <span class="section-label">DOKUMENTASI</span>
                <h2>Kegiatan di Lapangan</h2>
            </div>
            <a href="#" class="text-link dark-button">
                Lihat Semua <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        {{-- TODO: hubungkan ke tabel Dokumentasi saat menunya dibuat --}}
        <div class="documentation-grid">

            <div class="documentation-large">
                <div class="documentation-placeholder">
                    <i class="bi bi-camera-fill"></i>
                    <span>Monev Jl. Provinsi Malang</span>
                </div>
            </div>

            <div>
                <div class="documentation-small"><i class="bi bi-camera-fill"></i></div>
                <div class="documentation-small"><i class="bi bi-camera-fill"></i></div>
            </div>

            <div>
                <div class="documentation-small"><i class="bi bi-camera-fill"></i></div>
                <div class="documentation-small"><i class="bi bi-camera-fill"></i></div>
            </div>

        </div>

    </div>
</section>


<!-- =========================
     CTA
========================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta">
            <div>
                <span>PANTAU SECARA REAL-TIME</span>
                <h2>Ingin melihat progres pembangunan sarana prasarana di wilayah Anda?</h2>
            </div>

            <a href="{{ url('/dashboard') }}" class="button button-white">
                <i class="bi bi-speedometer2"></i> Lihat Dashboard Monitoring
            </a>
        </div>
    </div>
</section>


<!-- =========================
     FOOTER
========================== -->
<footer class="footer">
    <div class="container">

        <div class="footer-grid">

            <div>
                <div class="footer-brand">
                    <div class="brand">
                        <div class="brand-mark"><i class="bi bi-signpost-split-fill"></i></div>
                        <div class="brand-info">
                            <strong>BAKORWIL III</strong>
                            <span>SARPRAS &middot; MALANG</span>
                        </div>
                    </div>
                </div>
                <p class="footer-description">
                    Sub Bidang Sarana dan Prasarana I Bakorwil III Malang —
                    mengoordinasikan, memfasilitasi, memantau, dan mengevaluasi
                    pembangunan sarana prasarana di 7 Kabupaten/Kota wilayah kerja.
                </p>
            </div>

            <div>
                <h4>TAUTAN</h4>
                <a href="#beranda">Beranda</a>
                <a href="#tentang">Tentang Kami</a>
                <a href="#tim">Tim Kami</a>
                <a href="#infografis">Infografis</a>
                <a href="#dokumentasi">Dokumentasi</a>
            </div>

            <div>
                <h4>KONTAK</h4>
                <p><i class="bi bi-geo-alt"></i> Jl. Contoh No. 1, Malang, Jawa Timur</p>
                <p><i class="bi bi-telephone"></i> (0341) 000-0000</p>
                <p><i class="bi bi-envelope"></i> sarpras@bakorwil3.jatimprov.go.id</p>
            </div>

        </div>

        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Bakorwil III Malang. Seluruh hak cipta dilindungi.</span>
            <span>Sub Bidang Sarana dan Prasarana I</span>
        </div>

    </div>
</footer>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    const header = document.getElementById('siteHeader');
    window.addEventListener('scroll', function () {
        header.classList.toggle('scrolled', window.scrollY > 30);
    });

    const mobileToggle = document.getElementById('mobileToggle');
    const mobileNav = document.getElementById('mobileNavigation');

    mobileToggle.addEventListener('click', function () {
        mobileNav.classList.toggle('open');
    });

    mobileNav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            mobileNav.classList.remove('open');
        });
    });

});
</script>
@endpush