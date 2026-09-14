@extends('layouts.app')

@section('title', 'Peta Wilayah Kerja')

@section('content')

@vite(['resources/css/peta-wilayah.css'])

<div class="peta-page">

    {{-- =========================
         HEADER
    ========================== --}}
    <div class="peta-page-header">
        <div>
            <span class="peta-kicker">BAKORWIL III MALANG</span>
            <h1>PETA WILAYAH KERJA</h1>
            <p>
                Wilayah kerja Sub Bidang Sarana dan Prasarana I
            </p>
        </div>
    </div>


    {{-- =========================
         CONTENT UTAMA
    ========================== --}}
    <div class="peta-layout">

        {{-- =========================
             KIRI : PETA
        ========================== --}}
        <main class="peta-main">

            <div class="peta-card">

                <div class="peta-card-header">
                    <div>
                        <span class="peta-icon">🗺️</span>
                        <h2>PETA WILAYAH KERJA</h2>
                    </div>

                    <span class="jumlah-wilayah">
                        7 Wilayah
                    </span>
                </div>


                {{-- =========================
                     PETA SVG KAMU
                ========================== --}}
                <div class="map-container">

                    <svg
                        class="wilayah-map"
                        viewBox="0 0 700 500"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        {{-- LAUT JAWA --}}
                        <text
                            x="555"
                            y="75"
                            class="sea-text"
                        >
                            LAUT JAWA
                        </text>


                        {{-- TUBAN --}}
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


                        {{-- LAMONGAN --}}
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


                        {{-- GRESIK --}}
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


                        {{-- BANGKALAN --}}
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


                        {{-- MALANG --}}
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


                        {{-- PASURUAN --}}
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


                        {{-- KOTA MALANG --}}
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


                        {{-- KOMPAS --}}
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

            </div>

        </main>


        {{-- =========================
             KANAN : SIDEBAR
        ========================== --}}
        <aside class="peta-sidebar">

            {{-- =========================
                 CARI
            ========================== --}}
            <div class="peta-side-card">

                <div class="side-title">
                    <span>🔎</span>
                    <h3>CARI WILAYAH</h3>
                </div>

                <form class="search-wilayah">
                    <input
                        type="text"
                        placeholder="Cari wilayah..."
                    >

                    <button type="button">
                        CARI
                    </button>
                </form>

            </div>


            {{-- =========================
                 WILAYAH KERJA
            ========================== --}}
            <div class="peta-side-card wilayah-card">

                <div class="side-title">
                    <span>📍</span>
                    <h3>WILAYAH KERJA</h3>
                </div>


                <div class="wilayah-carousel">

                    <button class="carousel-btn prev">
                        ‹
                    </button>


                    <div class="wilayah-track">

                        <div class="wilayah-photo">
                            <img
                                src="{{ asset('images/Wilayah/Kota-Malang.png') }}"
                                alt="Kota Malang"
                            >
                            <span>KOTA MALANG</span>
                        </div>

                        <div class="wilayah-photo">
                            <img
                                src="{{ asset('images/Wilayah/Kota-Pasuruan.png') }}"
                                alt="Kota Pasuruan"
                            >
                            <span>KOTA PASURUAN</span>
                        </div>

                        <div class="wilayah-photo">
                            <img
                                src="{{ asset('images/Wilayah/Kabupaten-Malang.png') }}"
                                alt="Kabupaten Malang"
                            >
                            <span>KAB. MALANG</span>
                        </div>

                        <div class="wilayah-photo">
                            <img
                                src="{{ asset('images/Wilayah/Kabupaten-Pasuruan.png') }}"
                                alt="Kabupaten Pasuruan"
                            >
                            <span>KAB. PASURUAN</span>
                        </div>

                    </div>


                    <button class="carousel-btn next">
                        ›
                    </button>

                </div>

            </div>


            {{-- =========================
                 AGENDA
            ========================== --}}
            <div class="peta-side-card agenda-card">

                <div class="side-title">
                    <span>📅</span>
                    <h3>AGENDA</h3>
                </div>

                <div class="agenda-date">
                    SEPTEMBER 2026
                </div>

                <div class="agenda-item">
                    <span class="agenda-dot blue"></span>

                    <div>
                        <strong>
                            Monitoring Sarana Prasarana
                        </strong>

                        <small>
                            Kabupaten Malang
                        </small>
                    </div>
                </div>


                <div class="agenda-item">
                    <span class="agenda-dot green"></span>

                    <div>
                        <strong>
                            Koordinasi Penanganan
                        </strong>

                        <small>
                            Kabupaten Pasuruan
                        </small>
                    </div>
                </div>


                <div class="agenda-item">
                    <span class="agenda-dot orange"></span>

                    <div>
                        <strong>
                            Evaluasi Program
                        </strong>

                        <small>
                            Kota Malang
                        </small>
                    </div>
                </div>

            </div>

        </aside>

    </div>

</div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const track = document.querySelector('.wilayah-track');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');

    if (!track || !prevBtn || !nextBtn) return;

    const scrollAmount = 150;

    nextBtn.addEventListener('click', function () {
        track.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    prevBtn.addEventListener('click', function () {
        track.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });

});
</script>
@endsection