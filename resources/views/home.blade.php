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
         PETA SVG 9 WILAYAH
    ====================== -->
    <div class="map-container">

        <svg
            class="wilayah-map"
            viewBox="0 0 700 500"
            xmlns="http://www.w3.org/2000/svg"
        >

            <!-- =====================
                 BACKGROUND / AREA JAWA TIMUR
            ====================== -->
            <path
                class="map-shadow"
                d="
                    M95 175
                    L165 105
                    L285 82
                    L405 92
                    L525 78
                    L615 122
                    L635 205
                    L605 295
                    L560 355
                    L450 425
                    L345 462
                    L235 448
                    L135 400
                    L85 335
                    L70 250
                    Z
                "
            />


            <!-- =====================
                 KOTA SURABAYA
                 (paling utara, di tepi pantai)
            ====================== -->
            <path
                class="wilayah kota-surabaya"
                d="
                    M462 95
                    L532 80
                    L578 118
                    L562 168
                    L502 178
                    L458 138
                    Z
                "
            />

            <text
                x="518"
                y="122"
                class="wilayah-label small"
            >
                KOTA
            </text>

            <text
                x="518"
                y="138"
                class="wilayah-label small"
            >
                SURABAYA
            </text>


            <!-- =====================
                 KABUPATEN SIDOARJO
                 (tepat di selatan Surabaya)
            ====================== -->
            <path
                class="wilayah sidoarjo"
                d="
                    M458 138
                    L502 178
                    L562 168
                    L588 218
                    L548 262
                    L478 248
                    L438 195
                    Z
                "
            />

            <text
                x="510"
                y="205"
                class="wilayah-label small"
            >
                KAB.
            </text>

            <text
                x="510"
                y="221"
                class="wilayah-label small"
            >
                SIDOARJO
            </text>


            <!-- =====================
                 KOTA PASURUAN
                 (enclave pesisir, timur Sidoarjo)
            ====================== -->
            <path
                class="wilayah kota-pasuruan"
                d="
                    M548 262
                    L588 218
                    L616 238
                    L620 278
                    L586 302
                    L552 288
                    Z
                "
            />

            <text
                x="585"
                y="258"
                class="wilayah-label tiny"
            >
                KOTA
            </text>

            <text
                x="585"
                y="270"
                class="wilayah-label tiny"
            >
                PASURUAN
            </text>


            <!-- =====================
                 KABUPATEN PASURUAN
                 (selatan Sidoarjo & Kota Pasuruan)
            ====================== -->
            <path
                class="wilayah kabupaten-pasuruan"
                d="
                    M438 195
                    L478 248
                    L548 262
                    L552 288
                    L586 302
                    L560 355
                    L472 385
                    L392 335
                    L378 245
                    Z
                "
            />

            <text
                x="475"
                y="300"
                class="wilayah-label small"
            >
                KAB.
            </text>

            <text
                x="475"
                y="316"
                class="wilayah-label small"
            >
                PASURUAN
            </text>


            <!-- =====================
                 KABUPATEN MALANG
                 (wilayah tengah, terbesar)
            ====================== -->
            <path
                class="wilayah kabupaten-malang"
                d="
                    M278 230
                    L378 245
                    L392 335
                    L472 385
                    L442 435
                    L340 465
                    L245 445
                    L188 395
                    L172 315
                    L205 265
                    Z
                "
            />

            <text
                x="305"
                y="378"
                class="wilayah-label small"
            >
                KABUPATEN
            </text>

            <text
                x="305"
                y="396"
                class="wilayah-label"
            >
                MALANG
            </text>


            <!-- =====================
                 KOTA BATU
                 (enclave utara Kab. Malang)
            ====================== -->
            <path
                class="wilayah kota-batu"
                d="
                    M292 208
                    L342 188
                    L378 218
                    L358 258
                    L308 264
                    L278 228
                    Z
                "
            />

            <text
                x="328"
                y="230"
                class="wilayah-label tiny"
            >
                KOTA BATU
            </text>


            <!-- =====================
                 KOTA MALANG
                 (enclave di tengah Kab. Malang)
            ====================== -->
            <path
                class="wilayah kota-malang"
                d="
                    M300 305
                    L346 295
                    L372 326
                    L352 360
                    L306 358
                    L280 328
                    Z
                "
            />

            <text
                x="326"
                y="326"
                class="wilayah-label tiny"
            >
                KOTA
            </text>

            <text
                x="326"
                y="338"
                class="wilayah-label tiny"
            >
                MALANG
            </text>


            <!-- =====================
                 KABUPATEN BLITAR
                 (barat Kab. Malang)
            ====================== -->
            <path
                class="wilayah kabupaten-blitar"
                d="
                    M172 315
                    L188 395
                    L245 445
                    L340 465
                    L272 492
                    L172 476
                    L98 424
                    L78 342
                    L112 272
                    Z
                "
            />

            <text
                x="165"
                y="453"
                class="wilayah-label small"
            >
                KABUPATEN
            </text>

            <text
                x="165"
                y="471"
                class="wilayah-label"
            >
                BLITAR
            </text>


            <!-- =====================
                 KOTA BLITAR
                 (enclave di tengah Kab. Blitar)
            ====================== -->
            <path
                class="wilayah kota-blitar"
                d="
                    M178 378
                    L220 368
                    L246 394
                    L226 420
                    L184 414
                    L162 392
                    Z
                "
            />

            <text
                x="203"
                y="396"
                class="wilayah-label tiny"
            >
                KOTA
            </text>

            <text
                x="203"
                y="408"
                class="wilayah-label tiny"
            >
                BLITAR
            </text>


            <!-- =====================
                 LABEL LAUT
            ====================== -->
            <text
                x="480"
                y="475"
                class="sea-text"
            >
                SAMUDERA INDONESIA
            </text>


            <!-- =====================
                 KOMPAS
            ====================== -->
            <g class="compass">
                <circle
                    cx="655"
                    cy="418"
                    r="28"
                    class="compass-circle"
                />

                <text
                    x="655"
                    y="376"
                    text-anchor="middle"
                    class="compass-text"
                >
                    N
                </text>

                <path
                    d="
                        M655 386
                        L668 424
                        L655 416
                        L642 424
                        Z
                    "
                    class="compass-arrow"
                />
            </g>

        </svg>

    </div>
    
    <!-- =====================================================
         CAROUSEL 9 LOGO / FOTO WILAYAH
    ====================================================== -->
    <div class="wilayah-carousel">

        <div class="wilayah-track">

            <!-- SET 1 -->

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota-Malang.png') }}"
                     alt="Logo Kota Malang">
                <span>KOTA MALANG</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota_Batu.png') }}"
                     alt="Logo Kota Batu">
                <span>KOTA BATU</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kabupaten-Pasuruan.png') }}"
                     alt="Logo Kabupaten Pasuruan">
                <span>KAB. PASURUAN</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota-Pasuruan.png') }}"
                     alt="Logo Kota Pasuruan">
                <span>KOTA PASURUAN</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/kabupaten-blitar.jpg') }}"
                     alt="Logo Kabupaten Blitar">
                <span>KAB. BLITAR</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota-Blitar.png') }}"
                     alt="Logo Kota Blitar">
                <span>KOTA BLITAR</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kabupaten-Sidoarjo.png') }}"
                     alt="Logo Kabupaten Sidoarjo">
                <span>KAB. SIDOARJO</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota-Surabaya.png') }}"
                     alt="Logo Kota Surabaya">
                <span>KOTA SURABAYA</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kabupaten-Malang.png') }}"
                     alt="Logo Kabupaten Malang">
                <span>KAB. MALANG</span>
            </div>


            <!-- SET 2 - DUPLIKASI -->

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota-Malang.png') }}"
                     alt="Logo Kota Malang">
                <span>KOTA MALANG</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota_Batu.png') }}"
                     alt="Logo Kota Batu">
                <span>KOTA BATU</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kabupaten-Pasuruan.png') }}"
                     alt="Logo Kabupaten Pasuruan">
                <span>KAB. PASURUAN</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota-Pasuruan.png') }}"
                     alt="Logo Kota Pasuruan">
                <span>KOTA PASURUAN</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/kabupaten-blitar.jpg') }}"
                     alt="Logo Kabupaten Blitar">
                <span>KAB. BLITAR</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota-Blitar.png') }}"
                     alt="Logo Kota Blitar">
                <span>KOTA BLITAR</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kabupaten-Sidoarjo.png') }}"
                     alt="Logo Kabupaten Sidoarjo">
                <span>KAB. SIDOARJO</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kota-Surabaya.png') }}"
                     alt="Logo Kota Surabaya">
                <span>KOTA SURABAYA</span>
            </div>

            <div class="wilayah-photo">
                <img src="{{ asset('images/Wilayah/Kabupaten-Malang.png') }}"
                     alt="Logo Kabupaten Malang">
                <span>KAB. MALANG</span>
            </div>

        </div>

    </div>

    <!-- =========================
         DAFTAR 9 WILAYAH
    ========================== -->
    <div class="wilayah-legend">

        <div class="legend-item">
            <span class="legend-color kota-malang-color"></span>
            <span>Kota Malang</span>
        </div>

        <div class="legend-item">
            <span class="legend-color kota-batu-color"></span>
            <span>Kota Batu</span>
        </div>

        <div class="legend-item">
            <span class="legend-color kab-pasuruan-color"></span>
            <span>Kab. Pasuruan</span>
        </div>

        <div class="legend-item">
            <span class="legend-color kota-pasuruan-color"></span>
            <span>Kota Pasuruan</span>
        </div>

        <div class="legend-item">
            <span class="legend-color kab-blitar-color"></span>
            <span>Kab. Blitar</span>
        </div>

        <div class="legend-item">
            <span class="legend-color kota-blitar-color"></span>
            <span>Kota Blitar</span>
        </div>

        <div class="legend-item">
            <span class="legend-color sidoarjo-color"></span>
            <span>Kab. Sidoarjo</span>
        </div>

        <div class="legend-item">
            <span class="legend-color surabaya-color"></span>
            <span>Kota Surabaya</span>
        </div>

        <div class="legend-item">
            <span class="legend-color kab-malang-color"></span>
            <span>Kab. Malang</span>
        </div>

    </div>


    <!-- =========================
         TOTAL WILAYAH
    ========================== -->
    <div class="map-total">

        <span>📍</span>

        <strong>
            9 KABUPATEN / KOTA WILAYAH KERJA
        </strong>

    </div>

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