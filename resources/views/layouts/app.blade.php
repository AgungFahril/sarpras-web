<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Bidang Sarana dan Prasarana')</title>

    <meta name="description"
          content="Website informasi Bidang Sarana dan Prasarana">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet"
          href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->

    <header class="site-header" id="siteHeader">

        <div class="container">

            <nav class="navbar">

                <!-- BRAND -->

                <a href="{{ url('/') }}" class="brand">

                    <div class="brand-mark">
                        <i class="bi bi-buildings-fill"></i>
                    </div>

                    <div class="brand-info">

                        <strong>SARPRAS</strong>

                        <span>
                            Sarana & Prasarana
                        </span>

                    </div>

                </a>


                <!-- DESKTOP NAVIGATION -->

                <div class="nav-menu">

                    <a href="{{ url('/') }}"
                       class="nav-item active">
                        Beranda
                    </a>

                    <a href="#tentang"
                       class="nav-item">
                        Tentang
                    </a>

                    <a href="#tim"
                       class="nav-item">
                        Tim
                    </a>

                    <a href="#infografis"
                       class="nav-item">
                        Infografis
                    </a>

                    <a href="#dokumentasi"
                       class="nav-item">
                        Dokumentasi
                    </a>

                </div>


                <!-- CONTACT BUTTON -->

                <a href="#kontak"
                   class="nav-contact">

                    Hubungi Kami

                    <i class="bi bi-arrow-up-right"></i>

                </a>


                <!-- MOBILE BUTTON -->

                <button class="mobile-toggle"
                        id="mobileToggle"
                        aria-label="Menu">

                    <i class="bi bi-list"></i>

                </button>

            </nav>

        </div>

    </header>


    <!-- MOBILE NAVIGATION -->

    <div class="mobile-navigation"
         id="mobileNavigation">

        <a href="{{ url('/') }}">
            Beranda
        </a>

        <a href="#tentang">
            Tentang
        </a>

        <a href="#tim">
            Tim
        </a>

        <a href="#infografis">
            Infografis
        </a>

        <a href="#dokumentasi">
            Dokumentasi
        </a>

        <a href="#kontak">
            Hubungi Kami
        </a>

    </div>


    <!-- CONTENT -->

    @yield('content')


    <!-- =========================
         JAVASCRIPT
    ========================== -->

    <script>

        const toggle =
            document.getElementById('mobileToggle');

        const navigation =
            document.getElementById('mobileNavigation');


        toggle.addEventListener('click', function () {

            navigation.classList.toggle('open');

            const icon =
                toggle.querySelector('i');

            if (navigation.classList.contains('open')) {

                icon.classList.remove('bi-list');

                icon.classList.add('bi-x-lg');

            } else {

                icon.classList.remove('bi-x-lg');

                icon.classList.add('bi-list');

            }

        });


        // Navbar shadow ketika scroll

        const header =
            document.getElementById('siteHeader');

        window.addEventListener('scroll', function () {

            if (window.scrollY > 20) {

                header.classList.add('scrolled');

            } else {

                header.classList.remove('scrolled');

            }

        });


        // Tutup mobile menu ketika link diklik

        document.querySelectorAll('.mobile-navigation a')
            .forEach(function (link) {

                link.addEventListener('click', function () {

                    navigation.classList.remove('open');

                    toggle.querySelector('i')
                        .classList.remove('bi-x-lg');

                    toggle.querySelector('i')
                        .classList.add('bi-list');

                });

            });

    </script>

</body>
</html>