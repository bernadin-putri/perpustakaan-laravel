<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Perpustakaan - SMK Negeri 2 Surakarta
    </title>


    <style>

        * {
            box-sizing: border-box;
        }


        html,
        body {
            margin: 0;
            padding: 0;

            width: 100%;
            min-height: 100%;
        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            color: white;

            background:
                linear-gradient(
                    rgba(5, 25, 70, 0.25),
                    rgba(5, 25, 70, 0.25)
                ),
                url('/images/background.png')
                center center / cover fixed no-repeat;

            background-color: #071d4d;
        }


        /* =====================================
           NAVBAR
        ===================================== */

        .welcome-navbar {

            width: 100%;

            height: 88px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 65px;

            background:
                linear-gradient(
                    90deg,
                    rgba(7, 30, 75, 0.97),
                    rgba(25, 28, 92, 0.96),
                    rgba(55, 17, 100, 0.97)
                );

            border-bottom:
                1px solid rgba(120, 160, 255, 0.22);

            box-shadow:
                0 5px 25px rgba(0, 0, 0, 0.25);

            position: relative;

            z-index: 10;
        }


        /* BRAND */

        .brand {

            display: flex;

            align-items: center;

            gap: 15px;

            text-decoration: none;

            color: white;
        }


        .brand-icon {

            width: 53px;
            height: 53px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 14px;

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                );

            color: white;

            font-size: 29px;

            box-shadow:
                0 8px 25px
                rgba(115, 70, 255, 0.35);
        }


        .brand-title {

            font-size: 18px;

            font-weight: 800;

            letter-spacing: 1.3px;
        }


        .brand-subtitle {

            margin-top: 7px;

            font-size: 10px;

            color:
                rgba(210, 220, 255, 0.72);

            letter-spacing: 0.8px;
        }


        /* NAV BUTTONS */

        .nav-actions {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .nav-button {

            display: flex;

            align-items: center;
            justify-content: center;

            height: 44px;

            padding: 0 20px;

            border-radius: 11px;

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;

            color: white;

            transition: all 0.2s ease;
        }


        .nav-login {

            border:
                1px solid
                rgba(180, 150, 255, 0.35);

            background:
                rgba(130, 90, 200, 0.15);
        }


        .nav-login:hover {

            background:
                rgba(140, 100, 230, 0.3);

            transform:
                translateY(-1px);
        }


        .nav-register {

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #b94ff4
                );

            box-shadow:
                0 7px 20px
                rgba(110, 65, 255, 0.28);
        }


        .nav-register:hover {

            transform:
                translateY(-1px);

            box-shadow:
                0 10px 25px
                rgba(110, 65, 255, 0.4);
        }


        .nav-dashboard {

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #b94ff4
                );
        }


        /* =====================================
           HERO
        ===================================== */

        .welcome-page {

            min-height:
                calc(100vh - 88px);

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 50px 30px;
        }


        .hero-card {

            width: 100%;

            max-width: 1120px;

            min-height: 535px;

            display: grid;

            grid-template-columns:
                1.05fr
                0.95fr;

            align-items: center;

            gap: 30px;

            padding:
                60px 70px;

            border-radius: 28px;

            background:
                linear-gradient(
                    145deg,
                    rgba(9, 37, 88, 0.88),
                    rgba(23, 29, 84, 0.84)
                );

            border:
                1px solid
                rgba(125, 165, 255, 0.25);

            box-shadow:
                0 30px 80px
                rgba(0, 0, 0, 0.35),

                0 0 45px
                rgba(70, 100, 255, 0.10);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);
        }


        /* =====================================
           HERO TEXT
        ===================================== */

        .hero-content {

            max-width: 590px;
        }


        .hero-badge {

            display: inline-flex;

            align-items: center;

            padding:
                9px 16px;

            margin-bottom: 23px;

            border-radius: 30px;

            background:
                rgba(80, 125, 220, 0.15);

            border:
                1px solid
                rgba(100, 155, 255, 0.35);

            color:
                #cbdcff;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 2px;
        }


        .hero-title {

            margin: 0;

            font-size: 51px;

            line-height: 1.08;

            font-weight: 800;

            letter-spacing: -1px;

            color: white;
        }


        .hero-title span {

            background:
                linear-gradient(
                    90deg,
                    #ffffff,
                    #a7c9ff,
                    #c88cff
                );

            -webkit-background-clip:
                text;

            -webkit-text-fill-color:
                transparent;

            background-clip:
                text;
        }


        .hero-description {

            max-width: 570px;

            margin:
                22px 0 0;

            color:
                rgba(215, 225, 250, 0.75);

            font-size: 16px;

            line-height: 1.7;
        }


        /* =====================================
           HERO BUTTONS
        ===================================== */

        .hero-actions {

            display: flex;

            align-items: center;

            gap: 13px;

            margin-top: 32px;
        }


        .hero-button {

            min-width: 150px;

            height: 49px;

            padding: 0 22px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            border-radius: 12px;

            text-decoration: none;

            font-size: 14px;

            font-weight: 700;

            transition: all 0.2s ease;
        }


        .primary-button {

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                );

            box-shadow:
                0 9px 25px
                rgba(110, 65, 255, 0.3);
        }


        .primary-button:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 13px 30px
                rgba(110, 65, 255, 0.45);
        }


        .secondary-button {

            color: white;

            border:
                1px solid
                rgba(150, 175, 255, 0.3);

            background:
                rgba(100, 130, 220, 0.12);
        }


        .secondary-button:hover {

            background:
                rgba(100, 130, 220, 0.25);

            transform:
                translateY(-2px);
        }


        /* =====================================
           ILLUSTRATION
        ===================================== */

        .hero-visual {

            height: 400px;

            display: flex;

            align-items: center;

            justify-content: center;

            position: relative;
        }


        .visual-glow {

            position: absolute;

            width: 310px;
            height: 310px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(123, 72, 255, 0.35),
                    rgba(45, 110, 255, 0.10),
                    transparent 70%
                );

            filter:
                blur(10px);
        }


        .book-illustration {

            position: relative;

            z-index: 2;

            width: 390px;

            max-width: 100%;

            height: auto;

            filter:
                drop-shadow(
                    0 20px 30px
                    rgba(0, 0, 0, 0.25)
                );

            animation:
                floatingBook
                4s ease-in-out infinite;
        }


        @keyframes floatingBook {

            0%,
            100% {
                transform:
                    translateY(0);
            }

            50% {
                transform:
                    translateY(-9px);
            }
        }


        /* =====================================
           INFO
        ===================================== */

        .info-row {

            display: flex;

            gap: 12px;

            margin-top: 35px;
        }


        .info-card {

            padding:
                12px 16px;

            border-radius: 11px;

            background:
                rgba(90, 120, 210, 0.10);

            border:
                1px solid
                rgba(120, 160, 240, 0.16);

            color:
                rgba(220, 230, 255, 0.72);

            font-size: 11px;
        }


        .info-card strong {

            display: block;

            margin-bottom: 3px;

            color: white;

            font-size: 14px;
        }


        /* =====================================
           FOOTER
        ===================================== */

        .welcome-footer {

            position: absolute;

            bottom: 18px;

            left: 0;
            right: 0;

            text-align: center;

            color:
                rgba(205, 217, 245, 0.45);

            font-size: 10px;
        }


        /* =====================================
           RESPONSIVE
        ===================================== */

        @media (max-width: 1000px) {

            .welcome-navbar {

                padding:
                    0 30px;
            }


            .hero-card {

                grid-template-columns:
                    1fr;

                padding:
                    45px;

                text-align: center;
            }


            .hero-content {

                max-width: 700px;

                margin:
                    0 auto;
            }


            .hero-actions,
            .info-row {

                justify-content: center;
            }


            .hero-visual {

                height: 280px;
            }


            .book-illustration {

                width: 300px;
            }
        }


        @media (max-width: 600px) {

            .welcome-navbar {

                height: auto;

                padding:
                    18px 20px;

                gap: 15px;

                flex-direction: column;
            }


            .brand {

                width: 100%;

                justify-content: center;
            }


            .nav-actions {

                width: 100%;

                justify-content: center;
            }


            .welcome-page {

                min-height:
                    calc(100vh - 130px);

                padding:
                    25px 15px;
            }


            .hero-card {

                padding:
                    32px 22px;

                border-radius: 22px;
            }


            .hero-title {

                font-size: 35px;
            }


            .hero-description {

                font-size: 14px;
            }


            .hero-actions {

                flex-direction: column;

                width: 100%;
            }


            .hero-button {

                width: 100%;
            }


            .info-row {

                flex-direction: column;
            }


            .hero-visual {

                height: 220px;
            }


            .book-illustration {

                width: 250px;
            }


            .brand-title {

                font-size: 16px;
            }


            .brand-subtitle {

                font-size: 9px;
            }
        }

    </style>

</head>


<body>


    {{-- =========================================
         NAVBAR
    ========================================== --}}

    <nav class="welcome-navbar">


        {{-- BRAND --}}
        <a
            href="{{ url('/') }}"
            class="brand"
        >

            <div class="brand-icon">
                ✦
            </div>

            <div>

                <div class="brand-title">
                    PERPUSTAKAAN
                </div>

                <div class="brand-subtitle">
                    SMK NEGERI 2 SURAKARTA
                </div>

            </div>

        </a>


        {{-- NAVIGATION --}}
        <div class="nav-actions">

            @auth

                <a
                    href="{{ route('dashboard') }}"
                    class="nav-button nav-dashboard"
                >
                    Dashboard
                </a>

            @else

                <a
                    href="{{ route('login') }}"
                    class="nav-button nav-login"
                >
                    Login
                </a>


                @if (Route::has('register'))

                    <a
                        href="{{ route('register') }}"
                        class="nav-button nav-register"
                    >
                        Daftar
                    </a>

                @endif

            @endauth

        </div>

    </nav>


    {{-- =========================================
         HERO
    ========================================== --}}

    <main class="welcome-page">


        <section class="hero-card">


            {{-- TEXT --}}
            <div class="hero-content">


                <div class="hero-badge">
                    ✦ &nbsp; SISTEM INFORMASI PERPUSTAKAAN
                </div>


                <h1 class="hero-title">

                    Selamat Datang di

                    <br>

                    <span>Perpustakaan</span>

                </h1>


                <p class="hero-description">

                    Kelola data buku, anggota, dan peminjaman
                    dengan lebih mudah melalui sistem informasi
                    perpustakaan SMK Negeri 2 Surakarta.

                </p>


                {{-- BUTTON --}}
                <div class="hero-actions">


                    @auth

                        <a
                            href="{{ route('dashboard') }}"
                            class="hero-button primary-button"
                        >
                            Buka Dashboard →
                        </a>

                    @else

                        <a
                            href="{{ route('login') }}"
                            class="hero-button primary-button"
                        >
                            Masuk ke Sistem →
                        </a>


                        @if (Route::has('register'))

                            <a
                                href="{{ route('register') }}"
                                class="hero-button secondary-button"
                            >
                                Buat Akun
                            </a>

                        @endif

                    @endauth

                </div>


                {{-- INFO --}}
                <div class="info-row">

                    <div class="info-card">

                        <strong>📚 Buku</strong>

                        Kelola koleksi

                    </div>


                    <div class="info-card">

                        <strong>👤 Anggota</strong>

                        Data anggota

                    </div>


                    <div class="info-card">

                        <strong>↻ Peminjaman</strong>

                        Kelola peminjaman

                    </div>

                </div>


            </div>


            {{-- VISUAL --}}
            <div class="hero-visual">

                <div class="visual-glow"></div>


                <img
                    src="{{ asset('images/books.png') }}"
                    alt="Ilustrasi Buku Perpustakaan"
                    class="book-illustration"
                >

            </div>


        </section>


    </main>


    {{-- FOOTER --}}

    <div class="welcome-footer">

        Sistem Informasi Perpustakaan
        •
        SMK Negeri 2 Surakarta

    </div>


</body>

</html>