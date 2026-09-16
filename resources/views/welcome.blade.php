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
                <div class="logo-circle">
                    <img src="{{ asset('images/logo-provinsi-jawa-timur-baru.png') }}" alt="Logo Bakorwil III">
                </div>
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
     HERO (gaya "dashboard-header")
========================== -->
<section class="hero" id="beranda">
    <div class="container">

        <div class="hero-banner">

            <div class="hero-content">

                <div class="eyebrow">
                    <span class="eyebrow-line"></span>
                    SUB BIDANG SARANA DAN PRASARANA I
                </div>

                <h1>Membangun <span>Konektivitas</span> Wilayah Jawa Timur</h1>

                <p>
                    Mengoordinasikan, memfasilitasi, memantau, dan mengevaluasi
                    pembangunan sarana prasarana di 7 Kabupaten/Kota wilayah kerja
                    Bakorwil III Malang.
                </p>

                <div class="hero-actions">
                    <a href="{{ url('/dashboard') }}" class="button button-primary">
                        <i class="bi bi-speedometer2"></i> Lihat Dashboard Monitoring
                    </a>
                    <a href="#tentang" class="button button-outline">
                        Pelajari Lebih Lanjut
                    </a>
                </div>

            </div>

            <div class="hero-visual">
                <img src="{{ asset('images/pemandangan.png') }}" alt="Ilustrasi Malang">
            </div>

        </div>

        <!-- Mini-stat, gayanya identik dengan .stat-card di dashboard -->
        <div class="hero-stats">

            <div class="hero-stat">
                <div class="hero-stat-icon"><i class="bi bi-clipboard-check-fill"></i></div>
                <div>
                    <span>PROGRAM / KEGIATAN</span>
                    <strong>128</strong>
                    <small>Kegiatan Dipantau</small>
                </div>
            </div>

            <div class="hero-stat">
                <div class="hero-stat-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div>
                    <span>WILAYAH KERJA</span>
                    <strong>7</strong>
                    <small>Kabupaten / Kota</small>
                </div>
            </div>

            <div class="hero-stat">
                <div class="hero-stat-icon"><i class="bi bi-graph-up-arrow"></i></div>
                <div>
                    <span>PROGRES PELAKSANAAN</span>
                    <strong>68%</strong>
                    <small>Rata-rata Progres</small>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- =========================
     INTRO
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
            Bakorwil III Malang, khususnya Sub Bidang Sarana dan Prasarana I,
            berperan sebagai penghubung antara Pemerintah Provinsi Jawa Timur
            dengan OPD dan instansi terkait di wilayah kerja, guna memastikan
            pembangunan sarana prasarana berjalan tepat sasaran, efektif, dan
            berkelanjutan bagi masyarakat.
        </div>

    </div>
</section>


<!-- =========================
     TENTANG / ABOUT
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

            {{-- TODO: ganti dengan data yang sesuai --}}
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

                <div class="feature">
                    <div class="feature-icon"><i class="bi bi-people-fill"></i></div>
                    <div>
                        <strong>Koordinasi</strong>
                        <span>Perencanaan & penyelesaian permasalahan dengan OPD terkait.</span>
                    </div>
                </div>

                <div class="feature">
                    <div class="feature-icon"><i class="bi bi-bar-chart-fill"></i></div>
                    <div>
                        <strong>Fasilitasi</strong>
                        <span>Mendukung program agar berjalan efektif dan tepat sasaran.</span>
                    </div>
                </div>

                <div class="feature">
                    <div class="feature-icon"><i class="bi bi-binoculars-fill"></i></div>
                    <div>
                        <strong>Pemantauan</strong>
                        <span>Monitoring lapangan terhadap progres fisik dan keuangan.</span>
                    </div>
                </div>

                <div class="feature">
                    <div class="feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
                    <div>
                        <strong>Evaluasi</strong>
                        <span>Dasar rekomendasi perbaikan dan pengambilan keputusan.</span>
                    </div>
                </div>

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

        {{-- TODO: ganti foto & nama berikut dengan data tim yang sebenarnya --}}
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

            <div class="infographic-card">
                <div class="infographic-image">
                    <i class="bi bi-signpost-2"></i>
                    <span>JALAN & JEMBATAN</span>
                </div>
                <div class="infographic-info">
                    <span>INFRASTRUKTUR</span>
                    <h3>Progres Pembangunan Jalan & Jembatan</h3>
                    <a href="#">Lihat Detail <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="infographic-card">
                <div class="infographic-image">
                    <i class="bi bi-droplet-fill"></i>
                    <span>SUMBER DAYA AIR</span>
                </div>
                <div class="infographic-info">
                    <span>LINGKUNGAN</span>
                    <h3>Pengelolaan Sumber Daya Air Wilayah</h3>
                    <a href="#">Lihat Detail <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="infographic-card">
                <div class="infographic-image">
                    <i class="bi bi-bus-front-fill"></i>
                    <span>TRANSPORTASI</span>
                </div>
                <div class="infographic-info">
                    <span>MOBILITAS</span>
                    <h3>Konektivitas Transportasi Antarwilayah</h3>
                    <a href="#">Lihat Detail <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

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

        {{-- TODO: ganti placeholder berikut dengan foto dokumentasi asli --}}
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
                        <div class="logo-circle">
                            <img src="{{ asset('images/logo-provinsi-jawa-timur-baru.png') }}" alt="Logo Bakorwil III">
                        </div>
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

            {{-- TODO: ganti dengan alamat, telepon, dan email resmi instansi --}}
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
        header.classList.toggle('scrolled', window.scrollY > 20);
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