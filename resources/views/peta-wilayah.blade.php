@extends('layouts.app')

@section('title', 'Peta Wilayah Kerja')

@push('styles')
    @vite([
        'resources/css/dashboard.css',
        'resources/css/peta-wilayah.css'
    ])

    {{-- Leaflet --}}
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIINfQ3Yc2s9xYQ1w0Q8F6QJ4zXKxJ7bX0="
        crossorigin=""
    />
@endpush

@section('content')

<div class="sarpras-dashboard">

    @include('partials.sidebar')

    {{-- =====================================================
         KONTEN UTAMA
    ====================================================== --}}

    <main class="dashboard-main">

        <div class="peta-page">


            {{-- =================================================
                 HEADER
            ================================================== --}}

            <div class="peta-page-header">

                <span class="peta-header-icon">
                    🗺️
                </span>

                <h1>
                    Peta Wilayah Kerja
                </h1>

            </div>


            {{-- =================================================
                 LAYOUT
            ================================================== --}}

            <div class="peta-layout">


                {{-- =================================================
                     PETA
                ================================================== --}}

                <main class="peta-main">

                    <div class="peta-card">

                        <div class="map-container">

                            <div id="leaflet-map"></div>

                        </div>

                    </div>

                </main>


                {{-- =================================================
                     SIDEBAR KANAN
                ================================================== --}}

                <aside class="peta-sidebar">


                    {{-- =================================================
                         SEARCH
                    ================================================== --}}

                    <div class="peta-side-card">

                        <div class="side-title">

                            <span>
                                🔎
                            </span>

                            <h3>
                                CARI WILAYAH
                            </h3>

                        </div>


                        <form
                            class="search-wilayah"
                            id="formCariWilayah">

                            <input
                                type="text"
                                id="inputCariWilayah"
                                placeholder="Cari wilayah...">

                            <button type="submit">
                                CARI
                            </button>

                        </form>

                    </div>


                    {{-- =================================================
                         9 WILAYAH KERJA
                    ================================================== --}}

                    <div class="peta-side-card wilayah-card">

                        <div class="side-title">

                            <span>
                                📍
                            </span>

                            <h3>
                                WILAYAH KERJA
                            </h3>

                        </div>


                        <div class="wilayah-carousel">

                            <button
                                type="button"
                                class="carousel-btn prev"
                                id="wilayahPrev">
                                ‹
                            </button>


                            <div class="wilayah-track-wrapper">

                                <div
                                    class="wilayah-track"
                                    id="wilayahTrack">


                                    {{-- =================================================
                                         SET 1
                                    ================================================== --}}

                                    <div
                                        class="wilayah-photo"
                                        data-wilayah="Kota Malang">

                                        <img
                                            src="{{ asset('images/Wilayah/Kota-Malang.png') }}"
                                            alt="Kota Malang">

                                        <span>
                                            KOTA MALANG
                                        </span>

                                    </div>


                                    <div
                                        class="wilayah-photo"
                                        data-wilayah="Kota Batu">

                                        <img
                                            src="{{ asset('images/Wilayah/Kota_Batu.png') }}"
                                            alt="Kota Batu">

                                        <span>
                                            KOTA BATU
                                        </span>

                                    </div>


                                    <div
                                        class="wilayah-photo"
                                        data-wilayah="Kabupaten Pasuruan">

                                        <img
                                            src="{{ asset('images/Wilayah/Kabupaten-Pasuruan.png') }}"
                                            alt="Kabupaten Pasuruan">

                                        <span>
                                            KAB. PASURUAN
                                        </span>

                                    </div>


                                    <div
                                        class="wilayah-photo"
                                        data-wilayah="Kota Pasuruan">

                                        <img
                                            src="{{ asset('images/Wilayah/Kota-Pasuruan.png') }}"
                                            alt="Kota Pasuruan">

                                        <span>
                                            KOTA PASURUAN
                                        </span>

                                    </div>


                                    <div
                                        class="wilayah-photo"
                                        data-wilayah="Kabupaten Blitar">

                                        <img
                                            src="{{ asset('images/Wilayah/Kabupaten-blitar.jpg') }}"
                                            alt="Kabupaten Blitar">

                                        <span>
                                            KAB. BLITAR
                                        </span>

                                    </div>


                                    <div
                                        class="wilayah-photo"
                                        data-wilayah="Kota Blitar">

                                        <img
                                            src="{{ asset('images/Wilayah/Kota-Blitar.png') }}"
                                            alt="Kota Blitar">

                                        <span>
                                            KOTA BLITAR
                                        </span>

                                    </div>


                                    <div
                                        class="wilayah-photo"
                                        data-wilayah="Kabupaten Sidoarjo">

                                        <img
                                            src="{{ asset('images/Wilayah/Kabupaten-Sidoarjo.png') }}"
                                            alt="Kabupaten Sidoarjo">

                                        <span>
                                            KAB. SIDOARJO
                                        </span>

                                    </div>


                                    <div
                                        class="wilayah-photo"
                                        data-wilayah="Kota Surabaya">

                                        <img
                                            src="{{ asset('images/Wilayah/Kota-Surabaya.png') }}"
                                            alt="Kota Surabaya">

                                        <span>
                                            KOTA SURABAYA
                                        </span>

                                    </div>


                                    <div
                                        class="wilayah-photo"
                                        data-wilayah="Kabupaten Malang">

                                        <img
                                            src="{{ asset('images/Wilayah/Kabupaten-Malang.png') }}"
                                            alt="Kabupaten Malang">

                                        <span>
                                            KAB. MALANG
                                        </span>

                                    </div>


                                </div>

                            </div>


                            <button
                                type="button"
                                class="carousel-btn next"
                                id="wilayahNext">
                                ›
                            </button>

                        </div>

                    </div>


                    {{-- =================================================
                         AGENDA
                    ================================================== --}}

                    <div class="peta-side-card agenda-card">

                        <div class="side-title">

                            <span>
                                📅
                            </span>

                            <h3>
                                AGENDA
                            </h3>

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

    </main>

</div>

@endsection


{{-- =========================================================
     JAVASCRIPT
========================================================= --}}

@push('scripts')

<script
    src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin="">
</script>


<script>

document.addEventListener('DOMContentLoaded', function () {


    /* =====================================================
       DATA 9 WILAYAH KERJA
    ====================================================== */

    const wilayahData = [

        {
            id: 'kota-malang',
            nama: 'Kota Malang',
            lat: -7.9797,
            lng: 112.6304
        },

        {
            id: 'kota-batu',
            nama: 'Kota Batu',
            lat: -7.8705,
            lng: 112.5260
        },

        {
            id: 'kab-pasuruan',
            nama: 'Kabupaten Pasuruan',
            lat: -7.6469,
            lng: 112.9060
        },

        {
            id: 'kota-pasuruan',
            nama: 'Kota Pasuruan',
            lat: -7.6453,
            lng: 112.9075
        },

        {
            id: 'kab-blitar',
            nama: 'Kabupaten Blitar',
            lat: -8.0950,
            lng: 112.1627
        },

        {
            id: 'kota-blitar',
            nama: 'Kota Blitar',
            lat: -8.0983,
            lng: 112.1688
        },

        {
            id: 'kab-sidoarjo',
            nama: 'Kabupaten Sidoarjo',
            lat: -7.4478,
            lng: 112.7183
        },

        {
            id: 'kota-surabaya',
            nama: 'Kota Surabaya',
            lat: -7.2463,
            lng: 112.7378
        },

        {
            id: 'kab-malang',
            nama: 'Kabupaten Malang',
            lat: -8.1314,
            lng: 112.5729
        }

    ];


    /* =====================================================
       MAP
    ====================================================== */

    const mapElement =
        document.getElementById('leaflet-map');


    if (mapElement && typeof L !== 'undefined') {


        const map = L.map('leaflet-map', {

            scrollWheelZoom: true,

            zoomControl: true

        });


        /* =================================================
           OPENSTREETMAP
        ================================================== */

        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            {

                maxZoom: 19,

                attribution:
                    '&copy; OpenStreetMap contributors'

            }
        ).addTo(map);


        /* =================================================
           MARKER GROUP
        ================================================== */

        const markerGroup =
            L.featureGroup().addTo(map);


        wilayahData.forEach(function (wilayah) {


            const marker = L.marker(
                [
                    wilayah.lat,
                    wilayah.lng
                ]
            );


            marker
                .bindPopup(`
                    <div class="wilayah-popup">

                        <div class="popup-icon">
                            📍
                        </div>

                        <strong>
                            ${wilayah.nama}
                        </strong>

                        <small>
                            Wilayah Kerja Bakorwil III Malang
                        </small>

                    </div>
                `);


            marker
                .bindTooltip(
                    wilayah.nama,
                    {
                        direction: 'top',
                        offset: [0, -8]
                    }
                );


            marker
                .addTo(markerGroup);


            wilayah.marker = marker;

        });


        /* =================================================
           TAMPILKAN SEMUA 9 WILAYAH
        ================================================== */

        map.fitBounds(
            markerGroup.getBounds(),
            {
                padding: [35, 35]
            }
        );


        /* =================================================
           KLIK LOGO -> PIN DIPUSATKAN
        ================================================== */

        document
            .querySelectorAll('.wilayah-photo')
            .forEach(function (card) {


                card.addEventListener(
                    'click',
                    function () {

                        const nama =
                            this.dataset.wilayah;


                        const wilayah =
                            wilayahData.find(
                                function (item) {
                                    return item.nama === nama;
                                }
                            );


                        if (!wilayah) {
                            return;
                        }


                        map.flyTo(
                            [
                                wilayah.lat,
                                wilayah.lng
                            ],
                            12,
                            {
                                duration: 1
                            }
                        );


                        wilayah.marker.openPopup();

                    }
                );

            });


        /* =================================================
           INVALIDATE MAP
        ================================================== */

        setTimeout(
            function () {
                map.invalidateSize();
            },
            500
        );


        window.addEventListener(
            'resize',
            function () {
                map.invalidateSize();
            }
        );


        /* =================================================
           SEARCH WILAYAH
        ================================================== */

        const searchForm =
            document.getElementById(
                'formCariWilayah'
            );


        const searchInput =
            document.getElementById(
                'inputCariWilayah'
            );


        if (searchForm && searchInput) {


            searchForm.addEventListener(
                'submit',
                function (event) {

                    event.preventDefault();


                    const keyword =
                        searchInput.value
                            .trim()
                            .toLowerCase();


                    if (!keyword) {

                        map.fitBounds(
                            markerGroup.getBounds(),
                            {
                                padding: [35, 35]
                            }
                        );

                        return;

                    }


                    const hasil =
                        wilayahData.find(
                            function (wilayah) {

                                return wilayah.nama
                                    .toLowerCase()
                                    .includes(keyword);

                            }
                        );


                    if (hasil) {


                        map.flyTo(
                            [
                                hasil.lat,
                                hasil.lng
                            ],
                            12,
                            {
                                duration: 1
                            }
                        );


                        hasil.marker.openPopup();


                    } else {

                        alert(
                            'Wilayah tidak ditemukan.'
                        );

                    }

                }
            );

        }

    }


    /* =====================================================
       CAROUSEL 9 WILAYAH
    ====================================================== */

    const track =
        document.getElementById(
            'wilayahTrack'
        );


    const prev =
        document.getElementById(
            'wilayahPrev'
        );


    const next =
        document.getElementById(
            'wilayahNext'
        );


    if (track) {


        const items =
            Array.from(
                track.children
            );


        items.forEach(
            function (item) {

                const clone =
                    item.cloneNode(true);

                clone.classList.add(
                    'carousel-clone'
                );

                track.appendChild(clone);

            }
        );


        let posisi = 0;


        const step = 116;


        let timer;


        function bergerakOtomatis() {


            posisi += step;


            if (
                posisi >=
                track.scrollWidth / 2
            ) {

                posisi = 0;

            }


            track.scrollTo({

                left: posisi,

                behavior: 'smooth'

            });

        }


        function mulaiCarousel() {

            timer =
                setInterval(
                    bergerakOtomatis,
                    2200
                );

        }


        function berhentiCarousel() {

            clearInterval(timer);

        }


        mulaiCarousel();


        track.addEventListener(
            'mouseenter',
            berhentiCarousel
        );


        track.addEventListener(
            'mouseleave',
            mulaiCarousel
        );


        if (prev) {

            prev.addEventListener(
                'click',
                function () {

                    posisi -= step;


                    if (posisi < 0) {

                        posisi =
                            track.scrollWidth / 2;

                    }


                    track.scrollTo({

                        left: posisi,

                        behavior: 'smooth'

                    });

                }
            );

        }


        if (next) {

            next.addEventListener(
                'click',
                function () {

                    posisi += step;


                    if (
                        posisi >=
                        track.scrollWidth / 2
                    ) {

                        posisi = 0;

                    }


                    track.scrollTo({

                        left: posisi,

                        behavior: 'smooth'

                    });

                }
            );

        }

    }

});

</script>

@endpush