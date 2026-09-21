{{--
    PARTIAL: SIDEBAR DASHBOARD
    Dipakai di semua halaman dashboard (home, tentang-sarpras, dll)
    lewat @include('partials.sidebar')

    Active state otomatis mengikuti route yang sedang aktif,
    jadi tidak perlu di-hardcode manual di tiap halaman.
--}}
<aside class="sidebar">

    <div class="sidebar-scroll">

        <!-- LOGO -->
        <div class="sidebar-logo">
            <div class="logo-circle">
                <img src="{{ asset('images/logo-provinsi-jawa-timur-baru.png') }}" alt="Logo Bakorwil III">
            </div>
            <div>
                <strong>BAKORWIL III</strong>
                <span>MALANG</span>
            </div>
        </div>

        <!-- MENU -->
        <nav class="sidebar-menu">

            <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <span class="menu-icon"><i class="bi bi-grid-1x2-fill"></i></span>
                <span class="menu-text">Dashboard</span>
            </a>

            <a href="{{ route('tentang-sarpras') }}" class="sidebar-link {{ request()->routeIs('tentang-sarpras') ? 'active' : '' }}">
                <span class="menu-icon"><i class="bi bi-building"></i></span>
                <span class="menu-text">Tentang Sarpras</span>
            </a>

            <!-- SARANA & PRASARANA -->
            <div class="sidebar-dropdown {{ request()->routeIs('sarpras.*') ? 'open' : '' }}" id="sarprasDropdown">

                <button type="button" class="sidebar-link sidebar-dropdown-toggle">
                    <span class="menu-icon"><i class="bi bi-signpost-split-fill"></i></span>
                    <span class="menu-text">Sarana & Prasarana</span>
                    <span class="dropdown-arrow"><i class="bi bi-chevron-right"></i></span>
                </button>

                <div class="sidebar-submenu" id="sarprasSubmenu" style="max-height: 0; overflow: hidden;">
                    <a href="#"><span><i class="bi bi-signpost-2"></i></span> Jalan & Jembatan</a>
                    <a href="#"><span><i class="bi bi-tree"></i></span> Lingkungan Hidup</a>
                    <a href="#"><span><i class="bi bi-flower2"></i></span> Kehutanan</a>
                    <a href="#"><span><i class="bi bi-lightning-charge"></i></span> ESDM</a>
                    <a href="#"><span><i class="bi bi-droplet-fill"></i></span> Sumber Daya Air</a>
                    <a href="#"><span><i class="bi bi-bus-front-fill"></i></span> Transportasi</a>
                </div>

            </div>

            <a href="{{ route('program-kegiatan') }}" class="sidebar-link {{ request()->routeIs('program-kegiatan') ? 'active' : '' }}">
                <span class="menu-icon"><i class="bi bi-clipboard-check-fill"></i></span>
                <span class="menu-text">Program & Kegiatan</span>
            </a>

            <a href="{{ route('peta.wilayah') }}" class="sidebar-link {{ request()->routeIs('peta.wilayah') ? 'active' : '' }}">
                <span class="menu-icon"><i class="bi bi-geo-alt-fill"></i></span>
                <span class="menu-text">Wilayah Kerja</span>
            </a>

            <a href="#" class="sidebar-link">
                <span class="menu-icon"><i class="bi bi-bar-chart-line-fill"></i></span>
                <span class="menu-text">Infografis</span>
            </a>

            <a href="#" class="sidebar-link">
                <span class="menu-icon"><i class="bi bi-camera-fill"></i></span>
                <span class="menu-text">Dokumentasi</span>
            </a>

            <a href="#" class="sidebar-link">
                <span class="menu-icon"><i class="bi bi-people-fill"></i></span>
                <span class="menu-text">Tim Sarpras</span>
            </a>

        </nav>

    </div>

    <!-- FOOTER: USER INFO + LOGOUT -->
    <div class="sidebar-footer">

        <div class="sidebar-status">
            <div class="user-avatar">{{ substr(auth()->user()->name ?? 'A', 0, 1) }}</div>
            <div class="sidebar-status-text">
                <strong>{{ auth()->user()->name ?? 'Admin' }}</strong>
                <small>{{ auth()->user()->email ?? '-' }}</small>
            </div>
            <span class="status-dot"></span>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-button">
                <i class="bi bi-box-arrow-right"></i> Keluar
            </button>
        </form>

    </div>

</aside>


@once
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const dropdown  = document.getElementById('sarprasDropdown');
    const submenu   = document.getElementById('sarprasSubmenu');
    if (!dropdown || !submenu) return;

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
@endonce