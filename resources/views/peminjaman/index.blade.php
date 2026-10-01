<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Peminjaman - Perpustakaan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

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
           MAIN CONTAINER
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


        /* ICON */

        .hero-icon {
            width: 190px;

            height: 190px;

            justify-self: center;

            display: flex;

            align-items: center;

            justify-content: center;

            border:
                1px solid rgba(150, 205, 255, 0.25);

            border-radius: 30px;

            background:
                rgba(20, 30, 100, 0.25);

            box-shadow:
                0 0 40px rgba(130, 90, 255, 0.18);

            font-size: 80px;
        }


        /* =====================================================
           TOOLBAR
        ===================================================== */

        .toolbar {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 30px;

            margin-top: 25px;

            margin-bottom: 28px;
        }


        /* =====================================================
           TOMBOL TAMBAH
        ===================================================== */

        .space-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 220px;

            height: 50px;

            padding: 0 24px;

            border-radius: 12px;

            text-decoration: none;

            color: white;

            font-size: 15px;

            font-weight: 800;

            background:
                linear-gradient(
                    135deg,
                    #635bff,
                    #a84fff
                );

            border:
                1px solid rgba(255, 255, 255, 0.15);

            box-shadow:
                0 8px 20px rgba(80, 60, 220, 0.3);

            transition: 0.2s ease;
        }


        .space-button:hover {
            transform:
                translateY(-2px);

            box-shadow:
                0 12px 25px rgba(80, 60, 220, 0.45);
        }


        /* =====================================================
           SEARCH
        ===================================================== */

        .search-box {
            margin: 0;

            display: flex;

            justify-content: flex-end;

            flex: 1;
        }


        .search-box input {
            width: 390px;

            height: 50px;

            padding: 0 20px;

            border-radius: 13px;

            border:
                1px solid rgba(255, 255, 255, 0.20);

            outline: none;

            background:
                rgba(255, 255, 255, 0.08);

            color: white;

            font-size: 14px;
        }


        .search-box input::placeholder {
            color:
                rgba(255, 255, 255, 0.55);
        }


        .search-box input:focus {
            border-color:
                rgba(140, 120, 255, 0.8);

            box-shadow:
                0 0 15px rgba(100, 80, 255, 0.2);
        }


        /* =====================================================
           SUCCESS
        ===================================================== */

        .success-message {
            padding: 13px 18px;

            margin-bottom: 20px;

            border-radius: 12px;

            background:
                rgba(40, 200, 130, 0.15);

            border:
                1px solid rgba(70, 220, 150, 0.35);

            color: #9ff5c8;
        }


        /* =====================================================
           TABLE
        ===================================================== */

        .table-wrapper {
            width: 100%;

            overflow-x: auto;

            border-radius: 17px;

            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.20);
        }


        .space-table {
            width: 100%;

            min-width: 1000px;

            border-collapse: separate;

            border-spacing: 0;

            overflow: hidden;

            border-radius: 17px;

            background:
                rgba(8, 31, 76, 0.82);
        }


        /* HEADER */

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

            padding: 0 18px;

            color: white;

            text-align: left;

            font-size: 14px;

            font-weight: 800;

            white-space: nowrap;

            border-right:
                1px solid
                rgba(255, 255, 255, 0.10);
        }


        .space-table th:first-child {
            width: 70px;

            border-top-left-radius: 17px;
        }


        .space-table th:nth-child(2) {
            width: 220px;
        }


        .space-table th:nth-child(3) {
            width: 220px;
        }


        .space-table th:nth-child(4) {
            width: 170px;
        }


        .space-table th:nth-child(5) {
            width: 180px;
        }


        .space-table th:nth-child(6) {
            width: 150px;
        }


        .space-table th:last-child {
            width: 210px;

            border-right: none;

            border-top-right-radius: 17px;
        }


        /* BODY */

        .space-table td {
            height: 80px;

            padding: 0 18px;

            color:
                rgba(255, 255, 255, 0.92);

            font-size: 14px;

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
           STATUS
        ===================================================== */

        .status-badge {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 90px;

            height: 32px;

            padding: 0 12px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 800;

            text-transform: capitalize;
        }


        .status-dipinjam {
            background:
                rgba(255, 180, 70, 0.18);

            border:
                1px solid rgba(255, 190, 80, 0.35);

            color:
                #ffd27d;
        }


        .status-kembali {
            background:
                rgba(50, 210, 140, 0.18);

            border:
                1px solid rgba(70, 220, 150, 0.35);

            color:
                #9ff5c8;
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


        .delete-form {
            margin: 0;
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty-row {
            height: 100px !important;

            text-align: center !important;

            color:
                rgba(255, 255, 255, 0.60) !important;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .page-container {
                width:
                    calc(100% - 60px);
            }


            .hero-section {
                grid-template-columns: 1fr;
            }


            .hero-icon {
                display: none;
            }

        }


        @media (max-width: 700px) {

            .page-container {
                width:
                    calc(100% - 30px);

                margin-top: 25px;
            }


            .space-card {
                padding: 22px;
            }


            .space-title {
                font-size: 32px;
            }


            .toolbar {
                align-items: stretch;

                flex-direction: column;
            }


            .space-button {
                width: 100%;
            }


            .search-box {
                width: 100%;

                justify-content: stretch;
            }


            .search-box input {
                width: 100%;
            }

        }

    </style>

</head>


<body>


    <!-- =====================================================
         NAVBAR
    ===================================================== -->

    @include('layouts.navigation')


    <!-- =====================================================
         MAIN
    ===================================================== -->

    <div class="page-container">

        <div class="space-card">


            <!-- =================================================
                 HERO
            ================================================= -->

            <div class="hero-section">

                <div class="hero-content">

                    <span class="hero-badge">
                        ✦ &nbsp; MANAJEMEN PEMINJAMAN
                    </span>


                    <h1 class="space-title">
                        Data Peminjaman Perpustakaan
                    </h1>


                    <p class="hero-description">
                        Kelola data peminjaman buku dan anggota
                        perpustakaan SMK Negeri 2 Surakarta.
                    </p>

                </div>


                <div class="hero-icon">
                    📚
                </div>

            </div>


            <!-- =================================================
                 TOOLBAR
            ================================================= -->

            <div class="toolbar">


                <!-- TAMBAH -->

                <a
                    href="{{ route('peminjaman.create') }}"
                    class="space-button"
                >
                    + &nbsp; Tambah Peminjaman
                </a>


                <!-- SEARCH -->

                <div class="search-box">

                    <input
                        type="text"
                        id="searchPeminjaman"
                        placeholder="Cari peminjaman..."
                    >

                </div>

            </div>


            <!-- =================================================
                 SUCCESS
            ================================================= -->

            @if(session('success'))

                <div class="success-message">

                    ✓ {{ session('success') }}

                </div>

            @endif


            <!-- =================================================
                 TABLE
            ================================================= -->

            <div class="table-wrapper">

                <table class="space-table">

                    <thead>

                        <tr>

                            <th>
                                No
                            </th>

                            <th>
                                Buku
                            </th>

                            <th>
                                Anggota
                            </th>

                            <th>
                                Tanggal Pinjam
                            </th>

                            <th>
                                Tanggal Kembali
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody id="peminjamanTable">


                        @forelse($peminjaman as $item)

                            <tr>


                                <!-- NO -->

                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                <!-- BUKU -->

                                <td>
                                    {{ $item->buku->judul ?? '-' }}
                                </td>


                                <!-- ANGGOTA -->

                                <td>
                                    {{ $item->anggota->nama ?? '-' }}
                                </td>


                                <!-- TANGGAL PINJAM -->

                                <td>
                                    {{ $item->tanggal_pinjam }}
                                </td>


                                <!-- TANGGAL KEMBALI -->

                                <td>
                                    {{ $item->tanggal_kembali ?? '-' }}
                                </td>


                                <!-- STATUS -->

                                <td>

                                    @if($item->status === 'dipinjam')

                                        <span class="status-badge status-dipinjam">
                                            Dipinjam
                                        </span>

                                    @else

                                        <span class="status-badge status-kembali">
                                            Kembali
                                        </span>

                                    @endif

                                </td>


                                <!-- AKSI -->

                                <td>

                                    <div class="action-buttons">


                                        <!-- EDIT -->

                                        <a
                                            href="{{ route('peminjaman.edit', $item->id) }}"
                                            class="edit-button"
                                        >
                                            Edit
                                        </a>


                                        <!-- HAPUS -->

                                        <form
                                            action="{{ route('peminjaman.destroy', $item->id) }}"
                                            method="POST"
                                            class="delete-form"
                                        >

                                            @csrf

                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="delete-button"
                                                onclick="return confirm('Yakin ingin menghapus data peminjaman ini?')"
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
                                    colspan="7"
                                    class="empty-row"
                                >
                                    Belum ada data peminjaman.
                                </td>

                            </tr>

                        @endforelse


                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <!-- =====================================================
         SEARCH SCRIPT
    ===================================================== -->

    <script>

        const searchInput =
            document.getElementById('searchPeminjaman');


        searchInput.addEventListener(
            'keyup',
            function () {

                const keyword =
                    this.value.toLowerCase();


                const rows =
                    document.querySelectorAll(
                        '#peminjamanTable tr'
                    );


                rows.forEach(
                    function (row) {

                        const text =
                            row.innerText.toLowerCase();


                        if (
                            text.includes(keyword)
                        ) {

                            row.style.display = '';

                        } else {

                            row.style.display = 'none';

                        }

                    }
                );

            }
        );

    </script>


</body>

</html>