<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Buku - Perpustakaan</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        * {
            box-sizing: border-box;
        }

        html,
      body {
    margin: 0;
    padding: 0;
    min-height: 100vh;

    font-family: Arial, Helvetica, sans-serif;
    color: white;

    background:
        linear-gradient(
            rgba(8, 31, 76, 0.35),
            rgba(8, 31, 76, 0.35)
        ),
        url('/images/background.png')
        center center / cover fixed no-repeat;

    background-color: #0A2353;
}



        /* =====================================================
           MAIN
        ===================================================== */

        .page-container {
            position: relative;

            z-index: 2;

            width: calc(100% - 150px);

            max-width: 1450px;

            margin: 48px auto;
        }


        /* =====================================================
           MAIN CARD
        ===================================================== */

        .space-card {
            position: relative;

            overflow: hidden;

            padding: 38px;

            border-radius: 25px;

            border:
                1px solid rgba(150, 205, 255, 0.28);

            background:
                linear-gradient(
                    135deg,
                    rgba(52, 84, 185, 0.70),
                    rgba(39, 52, 137, 0.72),
                    rgba(79, 51, 150, 0.58)
                );

            backdrop-filter: blur(15px);

            -webkit-backdrop-filter: blur(15px);

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.35);
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero-section {
            min-height: 270px;

            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                390px;

            column-gap: 30px;

            align-items: center;

            position: relative;
        }


        .hero-content {
            position: relative;

            z-index: 3;

            padding-left: 0;
        }


        .hero-badge {
            display: inline-flex;

            align-items: center;

            padding: 8px 16px;

            margin-bottom: 16px;

            border:
                1px solid rgba(86, 225, 233, 0.42);

            border-radius: 22px;

            background:
                rgba(86, 225, 233, 0.10);

            color: #9ceef7;

            font-size: 12px;

            font-weight: 800;

            letter-spacing: 1px;
        }


        .space-title {
            margin: 0;

            font-size: 44px;

            line-height: 1.12;

            font-weight: 800;

            letter-spacing: -1px;

            background:
                linear-gradient(
                    90deg,
                    #ffffff 0%,
                    #9DECF4 45%,
                    #C36CFF 100%
                );

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;

            background-clip: text;
        }


        .hero-description {
            max-width: 680px;

            margin: 15px 0 0;

            color:
                rgba(255, 255, 255, 0.72);

            font-size: 16px;

            line-height: 1.6;
        }


        /* =====================================================
           BOOK IMAGE
        ===================================================== */

        .hero-image-area {
            height: 270px;

            display: flex;

            align-items: center;

            justify-content: center;

            position: relative;
        }


       .book-illustration {
    width: 100%;
    max-width: 650px;
    height: auto;
    display: block;
    margin: 0 auto;
    object-fit: contain;
    transform: scale(1.15);
}


        .book-illustration:hover {
            transform:
                translateY(-7px)
                scale(1.04);

            filter:
                drop-shadow(
                    0 25px 35px
                    rgba(86, 225, 233, 0.25)
                );
        }


        /* =====================================================
           TOOLBAR
        ===================================================== */

        .toolbar {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 25px;

            margin-top: 8px;

            margin-bottom: 28px;
        }


        .space-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 170px;

            height: 48px;

            padding: 0 22px;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #5B58EB,
                    #BB63FF
                );

            color: white;

            text-decoration: none;

            font-size: 15px;

            font-weight: 800;

            box-shadow:
                0 9px 25px
                rgba(91, 88, 235, 0.35);

            transition: 0.25s ease;
        }


        .space-button:hover {
            transform: translateY(-2px);

            box-shadow:
                0 13px 32px
                rgba(187, 99, 255, 0.42);
        }


        /* =====================================================
           SEARCH
        ===================================================== */

        .search-box {
            width: 380px;

            height: 48px;

            position: relative;
        }


        .search-box input {
            width: 100%;

            height: 100%;

            padding: 0 18px;

            outline: none;

            border:
                1px solid rgba(255, 255, 255, 0.25);

            border-radius: 12px;

            background:
                rgba(255, 255, 255, 0.07);

            color: white;

            font-size: 14px;

            transition: 0.25s ease;
        }


        .search-box input::placeholder {
            color:
                rgba(255, 255, 255, 0.55);
        }


        .search-box input:focus {
            border-color:
                rgba(86, 225, 233, 0.65);

            background:
                rgba(255, 255, 255, 0.10);

            box-shadow:
                0 0 20px
                rgba(86, 225, 233, 0.12);
        }


        /* =====================================================
           TABLE WRAPPER
        ===================================================== */

        .table-wrapper {
            width: 100%;

            overflow-x: auto;

            border-radius: 17px;

            box-shadow:
                0 15px 35px
                rgba(0, 0, 0, 0.20);
        }


        /* =====================================================
           TABLE
        ===================================================== */

        .space-table {
            width: 100%;

            min-width: 950px;

            border-collapse: separate;

            border-spacing: 0;

            overflow: hidden;

            border-radius: 17px;

            background:
                rgba(8, 31, 76, 0.82);
        }


        .space-table thead {
            background:
                linear-gradient(
                    90deg,
                    #25378F,
                    #4348D4,
                    #5B58EB
                );
        }


        .space-table th {
            height: 58px;

            padding: 0 22px;

            color: white;

            text-align: left;

            font-size: 15px;

            font-weight: 800;

            white-space: nowrap;

            border-right:
                1px solid
                rgba(255, 255, 255, 0.10);
        }


        .space-table th:first-child {
            width: 75px;

            border-top-left-radius: 17px;
        }


        .space-table th:nth-child(2) {
            width: 180px;
        }


        .space-table th:nth-child(3) {
            width: 220px;
        }


        .space-table th:nth-child(4) {
            width: 180px;
        }


        .space-table th:nth-child(5) {
            width: 230px;
        }


        .space-table th:nth-child(6) {
            width: 180px;
        }


        .space-table th:nth-child(7) {
            width: 100px;
        }


        .space-table th:last-child {
            width: 220px;

            border-right: none;

            border-top-right-radius: 17px;
        }


        .space-table td {
            height: 80px;

            padding: 0 22px;

            color:
                rgba(255, 255, 255, 0.92);

            font-size: 15px;

            white-space: nowrap;

            border-bottom:
                1px solid
                rgba(255, 255, 255, 0.10);
        }


        .space-table tbody tr {
            transition:
                background 0.2s ease;
        }


        .space-table tbody tr:hover {
            background:
                rgba(91, 88, 235, 0.17);
        }


        .space-table tbody tr:last-child td {
            border-bottom: none;
        }


        /* =====================================================
           ACTION
        ===================================================== */

        .action-buttons {
            display: flex;

            align-items: center;

            gap: 10px;
        }


        .edit-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 58px;

            height: 38px;

            padding: 0 14px;

            border-radius: 9px;

            background:
                linear-gradient(
                    135deg,
                    #5B58EB,
                    #BB63FF
                );

            color: white;

            text-decoration: none;

            font-size: 13px;

            font-weight: 800;

            transition: 0.2s ease;
        }


        .delete-button {
            height: 38px;

            padding: 0 15px;

            border: none;

            border-radius: 9px;

            background:
                #D83D67;

            color: white;

            font-size: 13px;

            font-weight: 800;

            cursor: pointer;

            transition: 0.2s ease;
        }


        .edit-button:hover,
        .delete-button:hover {
            transform:
                translateY(-2px);
        }


        .delete-button:hover {
            background:
                #ED4B75;
        }


        /* =====================================================
           SUCCESS
        ===================================================== */

        .success-message {
            margin-bottom: 20px;

            padding: 13px 18px;

            border-radius: 10px;

            border:
                1px solid rgba(86, 225, 233, 0.30);

            background:
                rgba(86, 225, 233, 0.10);

            color: #72EDF5;

            font-size: 14px;
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty-data {
            height: 100px !important;

            text-align: center;

            color:
                rgba(255, 255, 255, 0.55) !important;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1150px) {

            .nav-container {
                width: calc(100% - 50px);
            }

            .page-container {
                width: calc(100% - 70px);
            }

            .nav-brand {
                min-width: 230px;
            }

            .hero-section {
                grid-template-columns:
                    minmax(0, 1fr)
                    320px;
            }

            .book-illustration {
                width: 300px;
                height: 230px;
            }

            .space-title {
                font-size: 38px;
            }

        }


        @media (max-width: 900px) {

            .nav-container {
                flex-wrap: wrap;

                padding: 14px 0;
            }

            .nav-menu {
                order: 3;

                width: 100%;

                justify-content: center;
            }

            .hero-section {
                grid-template-columns: 1fr;

                text-align: center;
            }

            .hero-content {
                display: flex;

                flex-direction: column;

                align-items: center;
            }

            .hero-image-area {
                height: 180px;

                margin-top: -10px;
            }

            .book-illustration {
                width: 240px;
                height: 190px;
            }

            .hero-description {
                max-width: 600px;
            }

        }


        @media (max-width: 650px) {

            .nav-container {
                width: calc(100% - 30px);
            }

            .page-container {
                width: calc(100% - 30px);

                margin: 25px auto;
            }

            .space-card {
                padding: 22px;
            }

            .nav-user {
                margin-left: auto;
            }

            .user-info {
                display: none;
            }

            .nav-menu {
                overflow-x: auto;

                justify-content: flex-start;
            }

            .space-title {
                font-size: 31px;
            }

            .toolbar {
                flex-direction: column;

                align-items: stretch;
            }

            .space-button {
                width: 100%;
            }

            .search-box {
                width: 100%;
            }

        }

    </style>

</head>


<body>


    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    @include('layouts.navigation')


    {{-- =====================================================
         MAIN CONTENT
    ====================================================== --}}

    <main class="page-container">

        <section class="space-card">


            {{-- =================================================
                 HERO
            ================================================== --}}

            <div class="hero-section">


                {{-- TEXT --}}

                <div class="hero-content">

                    <div class="hero-badge">
                        ✦ &nbsp; MANAJEMEN BUKU
                    </div>


                    <h1 class="space-title">
                        Data Buku Perpustakaan
                    </h1>


                    <p class="hero-description">
                        Kelola koleksi buku yang tersedia di
                        perpustakaan SMK Negeri 2 Surakarta.
                    </p>

                </div>


                {{-- BOOK IMAGE --}}

                <div class="hero-image-area">

                    <img
                        src="{{ asset('images/books.png') }}"
                        alt="Ilustrasi Buku"
                        class="book-illustration"
                    >

                </div>

            </div>


            {{-- =================================================
                 SUCCESS
            ================================================== --}}

            @if (session('success'))

                <div class="success-message">

                    {{ session('success') }}

                </div>

            @endif


            {{-- =================================================
                 TOOLBAR
            ================================================== --}}

            <div class="toolbar">


                <a
                    href="{{ route('buku.create') }}"
                    class="space-button"
                >
                    ＋ &nbsp; Tambah Buku
                </a>


                <div class="search-box">

                    <input
                        type="text"
                        id="searchBuku"
                        placeholder="Cari buku..."
                    >

                </div>

            </div>


            {{-- =================================================
                 TABLE
            ================================================== --}}

            <div class="table-wrapper">

                <table
                    class="space-table"
                    id="tableBuku"
                >

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Kode Buku</th>

                            <th>Judul</th>

                            <th>Pengarang</th>

                            <th>Penerbit</th>

                            <th>Tahun Terbit</th>

                            <th>Stok</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse ($buku as $item)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $item->kode_buku }}
                                </td>

                                <td>
                                    {{ $item->judul }}
                                </td>

                                <td>
                                    {{ $item->pengarang }}
                                </td>

                                <td>
                                    {{ $item->penerbit }}
                                </td>

                                <td>
                                    {{ $item->tahun_terbit }}
                                </td>

                                <td>
                                    {{ $item->stok }}
                                </td>

                                <td>

                                    <div class="action-buttons">


                                        {{-- EDIT --}}

                                        <a
                                            href="{{ route('buku.edit', $item->id) }}"
                                            class="edit-button"
                                        >
                                            Edit
                                        </a>


                                        {{-- HAPUS --}}

                                        <form
                                            action="{{ route('buku.destroy', $item->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus buku ini?')"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="delete-button"
                                            >
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="8"
                                    class="empty-data"
                                >
                                    Belum ada data buku.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </section>

    </main>


    {{-- =====================================================
         SEARCH
    ====================================================== --}}

    <script>

        const searchInput =
            document.getElementById('searchBuku');

        const table =
            document.getElementById('tableBuku');


        searchInput.addEventListener(
            'keyup',
            function () {

                const keyword =
                    this.value.toLowerCase();

                const rows =
                    table.querySelectorAll(
                        'tbody tr'
                    );


                rows.forEach(function (row) {

                    const text =
                        row.textContent.toLowerCase();


                    if (text.includes(keyword)) {

                        row.style.display = '';

                    } else {

                        row.style.display = 'none';

                    }

                });

            }
        );

    </script>


</body>

</html>