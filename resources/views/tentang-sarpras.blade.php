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

        <!-- PROFIL SINGKAT -->
        <section class="scope-section">
            <div class="section-title">
                <h2>PROFIL SINGKAT</h2>
                <span></span>
            </div>

            <p style="font-size: 12px; line-height: 1.8; color: #444; margin: 0;">
                Sub Bidang Sarana dan Prasarana I merupakan bagian dari Badan
                Koordinasi Wilayah (Bakorwil) III Malang, Pemerintah Provinsi
                Jawa Timur, yang bertugas mengoordinasikan, memfasilitasi,
                memantau, dan mengevaluasi pelaksanaan pembangunan sarana
                prasarana di 7 Kabupaten/Kota wilayah kerja: Kota Malang,
                Kabupaten Malang, Kota Pasuruan, Kabupaten Pasuruan, Tuban,
                Lamongan, Gresik, dan Bangkalan.
            </p>
        </section>

        <!-- TUGAS POKOK & FUNGSI -->
        <section class="scope-section" style="margin-top: 15px;">
            <div class="section-title">
                <h2>TUGAS POKOK & FUNGSI</h2>
                <span></span>
            </div>

            <div class="function-grid">

                <div class="function-card blue-card">
                    <div class="function-image">👨‍💼</div>
                    <h3>KOORDINASI</h3>
                    <p>
                        Mengoordinasikan perencanaan, pelaksanaan, dan
                        penyelesaian permasalahan sarana prasarana dengan
                        OPD dan instansi terkait di wilayah kerja.
                    </p>
                </div>

                <div class="function-card green-card">
                    <div class="function-image">📊</div>
                    <h3>FASILITASI</h3>
                    <p>
                        Memfasilitasi program/kegiatan pembangunan sarana
                        prasarana agar berjalan efektif, tepat sasaran, dan
                        sesuai kebutuhan wilayah.
                    </p>
                </div>

                <div class="function-card orange-card">
                    <div class="function-image">👷</div>
                    <h3>PEMANTAUAN</h3>
                    <p>
                        Melakukan monitoring lapangan terhadap progres fisik,
                        keuangan, dan kendala pelaksanaan pembangunan sarana
                        prasarana.
                    </p>
                </div>

                <div class="function-card purple-card">
                    <div class="function-image">📈</div>
                    <h3>EVALUASI</h3>
                    <p>
                        Mengevaluasi hasil pelaksanaan program/kegiatan
                        sebagai dasar rekomendasi perbaikan dan pengambilan
                        keputusan.
                    </p>
                </div>

            </div>
        </section>

        <!-- RUANG LINGKUP -->
        <section class="scope-section" style="margin-top: 15px;">
            <div class="section-title">
                <h2>RUANG LINGKUP SARANA PRASARANA</h2>
                <span></span>
            </div>

            <div class="scope-grid">
                <div class="scope-item"><div>🛣️</div><span>Jalan &<br>Jembatan</span></div>
                <div class="scope-item"><div>🌿</div><span>Lingkungan<br>Hidup</span></div>
                <div class="scope-item"><div>🌳</div><span>Kehutanan</span></div>
                <div class="scope-item"><div>⚡</div><span>ESDM</span></div>
                <div class="scope-item"><div>💧</div><span>Sumber Daya<br>Air</span></div>
                <div class="scope-item"><div>🚌</div><span>Transportasi</span></div>
                <div class="scope-item"><div>🏢</div><span>Prasarana<br>Lainnya</span></div>
            </div>
        </section>

        <!-- TUJUAN -->
        <section class="purpose-section">
            <div class="purpose-title">
                🎯 <strong>TUJUAN</strong>
            </div>
            <p>
                Mewujudkan koordinasi yang efektif, fasilitasi yang responsif,
                pemantauan yang akurat, dan evaluasi yang objektif untuk
                pembangunan sarana prasarana yang berkualitas dan
                berkelanjutan di wilayah kerja Bakorwil III Malang.
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