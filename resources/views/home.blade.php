@extends('layouts.app')

@section('title', 'Dashboard Sarpras')

@push('styles')
    @vite(['resources/css/dashboard.css'])
@endpush

@section('content')

<div class="sarpras-dashboard">

   @include('partials.sidebar')

    <!-- =========================
         KONTEN UTAMA
    ========================== -->
    <main class="dashboard-main">


        <!-- =========================
             HEADER
        ========================== -->
        <header class="dashboard-header">

            <div class="header-text">

                <h1>
                    SUB BIDANG SARANA DAN PRASARANA I
                </h1>

                <h2>
                    BAKORWIL III MALANG
                </h2>

                <p>
                    Koordinasi, Fasilitasi, Pemantauan dan Evaluasi
                    Pembangunan Sarana Prasarana di Wilayah Kerja
                </p>

            </div>


            <div class="header-illustration">

                <img
                    src="{{ asset('images/pemandangan.png') }}"
                    alt="Ilustrasi Malang">

            </div>

        </header>


        <!-- =========================
             STATISTIK
        ========================== -->
        <section class="statistic-grid">

            <div class="stat-card blue">

                <div class="stat-icon">📋</div>

                <div>
                    <span>PROGRAM / KEGIATAN</span>
                    <strong>128</strong>
                    <small>Kegiatan Dipantau</small>
                </div>

            </div>


            <div class="stat-card green">

                <div class="stat-icon">📈</div>

                <div>
                    <span>PROGRES PELAKSANAAN</span>
                    <strong>68%</strong>
                    <small>Rata-rata Progres</small>
                </div>

            </div>


            <div class="stat-card orange">

                <div class="stat-icon">⚠️</div>

                <div>
                    <span>PERMASALAHAN</span>
                    <strong>36</strong>
                    <small>Perlu Koordinasi</small>
                </div>

            </div>


            <div class="stat-card purple">

                <div class="stat-icon">📑</div>

                <div>
                    <span>MONEV</span>
                    <strong>96</strong>
                    <small>Kegiatan Dimonitor</small>
                </div>

            </div>


            <div class="stat-card teal">

                <div class="stat-icon">✓</div>

                <div>
                    <span>TINDAK LANJUT</span>
                    <strong>54</strong>
                    <small>Rekomendasi</small>
                </div>

            </div>


            <div class="stat-card navy">

                <div class="stat-icon">🗺️</div>

                <div>
                    <span>WILAYAH</span>
                    <strong>7</strong>
                    <small>Kab / Kota</small>
                </div>

            </div>

        </section>



        <!-- =====================================================
             BAGIAN ATAS
             KIRI  = FUNGSI UTAMA
             KANAN = PETA + INFORMASI TERKINI
        ====================================================== -->
        <section class="dashboard-top-grid">


            <!-- =========================
                 KIRI
            ========================== -->
            <div class="function-area">

                <div class="section-title">

                    <span></span>

                    <h2>FUNGSI UTAMA</h2>

                    <span></span>

                </div>


                 <div class="function-grid">

        <!-- KOORDINASI -->
        <div class="function-card blue-card">

            <div class="function-image">
                👨‍💼
            </div>

            <h3>KOORDINASI</h3>

            <p>
                Mengkoordinasikan perencanaan,
                pelaksanaan dan penyelesaian
                permasalahan sarana prasarana
                dengan OPD dan instansi terkait
                di wilayah kerja.
            </p>

        </div>


        <!-- FASILITASI -->
        <div class="function-card green-card">

            <div class="function-image">
                📊
            </div>

            <h3>FASILITASI</h3>

            <p>
                Memfasilitasi program/kegiatan
                pembangunan sarana prasarana
                agar berjalan efektif, tepat sasaran
                dan sesuai kebutuhan wilayah.
            </p>

        </div>


        <!-- PEMANTAUAN -->
        <div class="function-card orange-card">

            <div class="function-image">
                👷
            </div>

            <h3>PEMANTAUAN</h3>

            <p>
                Melakukan monitoring lapangan
                terhadap progres fisik, keuangan
                dan kendala pelaksanaan pembangunan
                sarana prasarana.
            </p>

        </div>


        <!-- EVALUASI -->
        <div class="function-card purple-card">

            <div class="function-image">
                📈
            </div>

            <h3>EVALUASI</h3>

            <p>
                Mengevaluasi hasil pelaksanaan
                program/kegiatan sebagai dasar
                rekomendasi perbaikan dan
                pengambilan keputusan.
            </p>

        </div>

    </div>


    <!-- =====================================================
         RUANG LINGKUP
         DIPINDAHKAN KE AREA KOSONG SEBELAH KIRI
    ====================================================== -->

    <section class="scope-section">

        <div class="section-title">

            <span></span>

            <h2>RUANG LINGKUP SARANA PRASARANA</h2>

            <span></span>

        </div>


        <div class="scope-grid">

            <div class="scope-item">
                <div>🛣️</div>
                <span>Jalan &<br>Jembatan</span>
            </div>


            <div class="scope-item">
                <div>🌿</div>
                <span>Lingkungan<br>Hidup</span>
            </div>


            <div class="scope-item">
                <div>🌳</div>
                <span>Kehutanan</span>
            </div>


            <div class="scope-item">
                <div>⚡</div>
                <span>ESDM</span>
            </div>


            <div class="scope-item">
                <div>💧</div>
                <span>Sumber Daya<br>Air</span>
            </div>


            <div class="scope-item">
                <div>🚌</div>
                <span>Transportasi</span>
            </div>


            <div class="scope-item">
                <div>🏢</div>
                <span>Prasarana<br>Lainnya</span>
            </div>

        </div>

    </section>

</div>

            <!-- =========================
                 KANAN
            ========================== -->
            <div class="right-column">


          <!-- =====================
     PETA WILAYAH KERJA
====================== -->
<div class="map-section">

    <!-- JUDUL -->
    <div class="map-header">
        <h2>PETA WILAYAH KERJA</h2>
    </div>


    <!-- =====================
         PETA SVG
    ====================== -->
    <div class="map-container">

        <svg
            class="wilayah-map"
            viewBox="0 0 700 500"
            xmlns="http://www.w3.org/2000/svg"
        >

            <!-- LAUT JAWA -->
            <text
                x="555"
                y="75"
                class="sea-text"
            >
                LAUT JAWA
            </text>


            <!-- =====================
                 TUBAN
            ====================== -->
            <path
                class="wilayah tuban"
                d="M120 90
                   L170 55
                   L240 48
                   L285 65
                   L330 55
                   L370 80
                   L390 125
                   L355 155
                   L310 160
                   L270 145
                   L220 160
                   L175 145
                   L135 155
                   L110 125 Z"
            />

            <text
                x="245"
                y="110"
                class="wilayah-label"
            >
                TUBAN
            </text>


            <!-- =====================
                 LAMONGAN
            ====================== -->
            <path
                class="wilayah lamongan"
                d="M390 80
                   L445 70
                   L500 90
                   L535 120
                   L520 165
                   L485 190
                   L430 175
                   L395 150
                   L355 155
                   L390 125 Z"
            />

            <text
                x="445"
                y="130"
                class="wilayah-label"
            >
                LAMONGAN
            </text>


            <!-- =====================
                 GRESIK
            ====================== -->
            <path
                class="wilayah gresik"
                d="M535 120
                   L590 110
                   L635 135
                   L650 175
                   L625 220
                   L585 230
                   L545 210
                   L520 165 Z"
            />

            <text
                x="585"
                y="175"
                class="wilayah-label"
            >
                GRESIK
            </text>


            <!-- =====================
                 BANGKALAN
            ====================== -->
            <path
                class="wilayah bangkalan"
                d="M100 160
                   L135 155
                   L175 145
                   L220 160
                   L205 200
                   L175 225
                   L145 250
                   L115 235
                   L95 205
                   L80 180 Z"
            />

            <text
                x="145"
                y="200"
                class="wilayah-label"
            >
                BANGKALAN
            </text>


            <!-- =====================
                 MALANG
            ====================== -->
            <path
                class="wilayah malang"
                d="M260 180
                   L310 160
                   L355 155
                   L395 180
                   L430 210
                   L420 255
                   L390 290
                   L345 300
                   L300 285
                   L260 300
                   L225 270
                   L210 230 Z"
            />

            <text
                x="320"
                y="235"
                class="wilayah-label"
            >
                MALANG
            </text>


            <!-- =====================
                 PASURUAN
            ====================== -->
            <path
                class="wilayah pasuruan"
                d="M430 210
                   L485 190
                   L545 210
                   L575 235
                   L560 280
                   L530 315
                   L480 325
                   L440 305
                   L420 255 Z"
            />

            <text
                x="500"
                y="260"
                class="wilayah-label"
            >
                PASURUAN
            </text>


            <!-- =====================
                 KOTA MALANG
            ====================== -->
            <path
                class="wilayah kota-malang"
                d="M300 285
                   L345 300
                   L390 290
                   L405 325
                   L385 360
                   L350 375
                   L315 355
                   L285 330 Z"
            />

            <text
                x="345"
                y="330"
                text-anchor="middle"
                class="wilayah-label small"
            >
                KOTA
            </text>

            <text
                x="345"
                y="348"
                text-anchor="middle"
                class="wilayah-label small"
            >
                MALANG
            </text>


            <!-- =====================
                 KOMPAS
            ====================== -->
            <circle
                cx="625"
                cy="395"
                r="32"
                class="compass-circle"
            />

            <text
                x="625"
                y="355"
                text-anchor="middle"
                class="compass-text"
            >
                N
            </text>

            <path
                d="M625 365
                   L638 400
                   L625 390
                   L612 400 Z"
                class="compass-arrow"
            />

        </svg>

    </div>


  <!-- =========================
     FOTO 7 WILAYAH
========================== --> 
{{-- =========================
     FOTO WILAYAH
========================= --}}
<div class="wilayah-carousel">

    <div class="wilayah-track">

        {{-- SET 1 --}}
        <div class="wilayah-photo">
            <img src="{{ asset('images/Wilayah/Kota-Malang.png') }}" alt="Kota Malang">
            <span>KOTA MALANG</span>
        </div>

        <div class="wilayah-photo">
            <img src="{{ asset('images/Wilayah/Kota-Pasuruan.png') }}" alt="Kota Pasuruan">
            <span>KOTA PASURUAN</span>
        </div>

        <div class="wilayah-photo">
            <img src="{{ asset('images/Wilayah/Kabupaten-Malang.png') }}" alt="Kabupaten Malang">
            <span>KAB. MALANG</span>
        </div>

        <div class="wilayah-photo">
            <img src="{{ asset('images/Wilayah/Kabupaten-Pasuruan.png') }}" alt="Kabupaten Pasuruan">
            <span>KAB. PASURUAN</span>
        </div>


        {{-- SET 2 / DUPLIKASI UNTUK ANIMASI --}}
        <div class="wilayah-photo">
            <img src="{{ asset('images/Wilayah/Kota-Malang.png') }}" alt="Kota Malang">
            <span>KOTA MALANG</span>
        </div>

        <div class="wilayah-photo">
            <img src="{{ asset('images/Wilayah/Kota-Pasuruan.png') }}" alt="Kota Pasuruan">
            <span>KOTA PASURUAN</span>
        </div>

        <div class="wilayah-photo">
            <img src="{{ asset('images/Wilayah/Kabupaten-Malang.png') }}" alt="Kabupaten Malang">
            <span>KAB. MALANG</span>
        </div>

        <div class="wilayah-photo">
            <img src="{{ asset('images/Wilayah/Kabupaten-Pasuruan.png') }}" alt="Kabupaten Pasuruan">
            <span>KAB. PASURUAN</span>
        </div>

    </div>

</div>

    {{-- =========================
     TOTAL WILAYAH
    ========================== --}}
<div class="map-total">

    <span>📍</span>

    <strong>
        7 KABUPATEN / KOTA
    </strong>

</div>

                <!-- =====================
                     INFORMASI TERKINI
                ====================== -->
                <div class="latest-section">

                    <div class="latest-header">
                        <h2>INFORMASI TERKINI</h2>
                    </div>


                    <div class="latest-item">

                        <span>📋</span>

                        <div>

                            <strong>
                                Monev Jl. Provinsi Malang
                            </strong>

                            <small>
                                24 Mei 2025
                            </small>

                        </div>

                        <b>›</b>

                    </div>


                    <div class="latest-item">

                        <span>🌊</span>

                        <div>

                            <strong>
                                Koordinasi Penanganan Banjir
                            </strong>

                            <small>
                                Kab. Pasuruan · 20 Mei 2025
                            </small>

                        </div>

                        <b>›</b>

                    </div>


                    <div class="latest-item">

                        <span>🏢</span>

                        <div>

                            <strong>
                                Evaluasi Program Drainase
                            </strong>

                            <small>
                                Kota Malang · 18 Mei 2025
                            </small>

                        </div>

                        <b>›</b>

                    </div>


                    <a href="#" class="see-all">
                        Lihat Semua →
                    </a>

                </div>

            </div>

        </section>


        <!-- =========================
             TUJUAN
        ========================== -->
        <section class="purpose-section">

            <div class="purpose-title">

                🎯

                <strong>TUJUAN</strong>

            </div>


            <p>
                Mewujudkan koordinasi yang efektif, fasilitasi yang
                responsif, pemantauan yang akurat, dan evaluasi yang
                objektif untuk pembangunan sarana prasarana yang
                berkualitas dan berkelanjutan di wilayah kerja
                Bakorwil III Malang.
            </p>

        </section>


    </main>

</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const dropdown  = document.getElementById('sarprasDropdown');
    const submenu   = document.getElementById('sarprasSubmenu');
    const toggleBtn = dropdown.querySelector('.sidebar-dropdown-toggle');
    let closeTimer = null;

    function openSubmenu() {
        clearTimeout(closeTimer);
        dropdown.classList.add('open');
        submenu.style.maxHeight = submenu.scrollHeight + 'px';
    }
    function closeSubmenu() {
        dropdown.classList.remove('open');
        submenu.style.maxHeight = '0';
    }

    dropdown.addEventListener('mouseenter', openSubmenu);
    dropdown.addEventListener('mouseleave', () => { closeTimer = setTimeout(closeSubmenu, 180); });
    toggleBtn.addEventListener('click', e => {
        e.preventDefault();
        dropdown.classList.contains('open') ? closeSubmenu() : openSubmenu();
    });
});
</script>
@endpush