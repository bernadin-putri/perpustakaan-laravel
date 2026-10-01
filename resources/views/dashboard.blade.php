<x-app-layout>

    <style>
        /* =====================================================
           BACKGROUND
        ===================================================== */

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;

            font-family: Arial, Helvetica, sans-serif;
            color: white;

            background-color: #0A2353 !important;
        }

        body {
            background-image:
                linear-gradient(
                    rgba(8, 31, 76, 0.35),
                    rgba(8, 31, 76, 0.35)
                ),
                url('/images/background.png') !important;

            background-position: center center !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;
        }

        /* Hilangkan background bawaan Breeze */
        main {
            background: transparent !important;
        }


        /* =====================================================
           CONTAINER
        ===================================================== */

        .dashboard-container {
            width: 100%;
            max-width: 1250px;
            margin: 0 auto;

            padding: 45px 30px 70px;

            box-sizing: border-box;
        }


        /* =====================================================
           CARD UTAMA
        ===================================================== */

        .dashboard-card {
            background: rgba(10, 25, 65, 0.72);

            border: 1px solid rgba(130, 170, 255, 0.25);

            border-radius: 28px;

            padding: 42px;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.35),
                inset 0 0 30px rgba(100, 140, 255, 0.04);

            backdrop-filter: blur(12px);
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .dashboard-badge {
            display: inline-flex;

            align-items: center;
            gap: 8px;

            padding: 9px 16px;
            margin-bottom: 18px;

            border-radius: 50px;

            background: rgba(80, 120, 255, 0.12);

            border: 1px solid rgba(130, 170, 255, 0.3);

            color: #b9d5ff;

            font-size: 12px;
            font-weight: bold;

            letter-spacing: 1.5px;
        }


        .dashboard-title {
            margin: 0;

            font-size: 42px;
            line-height: 1.15;

            font-weight: 800;

            color: #ffffff;
        }


        .dashboard-title span {
            color: #8bbcff;
        }


        .dashboard-description {
            max-width: 750px;

            margin-top: 15px;
            margin-bottom: 35px;

            color: rgba(230, 240, 255, 0.75);

            font-size: 16px;
            line-height: 1.7;
        }


        /* =====================================================
           JUDUL SECTION
        ===================================================== */

        .section-title {
            margin: 0 0 18px;

            color: #ffffff;

            font-size: 20px;
            font-weight: 700;
        }


        /* =====================================================
           STATISTIK
        ===================================================== */

        .stats-grid {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 35px;
        }


        .stat-card {
            position: relative;

            padding: 23px;

            background: rgba(20, 43, 92, 0.65);

            border: 1px solid rgba(130, 170, 255, 0.2);

            border-radius: 20px;

            overflow: hidden;

            transition: all 0.25s ease;
        }


        .stat-card:hover {
            transform: translateY(-4px);

            background: rgba(35, 65, 125, 0.75);

            border-color: rgba(130, 180, 255, 0.45);

            box-shadow:
                0 12px 30px rgba(0, 0, 0, 0.25),
                0 0 25px rgba(80, 140, 255, 0.08);
        }


        .stat-icon {
            width: 48px;
            height: 48px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin-bottom: 15px;

            border-radius: 14px;

            background: rgba(90, 135, 255, 0.15);

            border: 1px solid rgba(130, 175, 255, 0.25);

            font-size: 23px;
        }


        .stat-number {
            margin-bottom: 5px;

            color: #ffffff;

            font-size: 30px;
            font-weight: 800;
        }


        .stat-label {
            color: rgba(220, 235, 255, 0.68);

            font-size: 13px;
        }


        /* =====================================================
           MENU CEPAT
        ===================================================== */

        .quick-section {
            margin-bottom: 35px;
        }


        .quick-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 18px;
        }


        .quick-card {
            display: flex;

            align-items: center;

            gap: 15px;

            padding: 19px 20px;

            color: white;

            text-decoration: none;

            background: rgba(20, 43, 92, 0.65);

            border: 1px solid rgba(130, 170, 255, 0.2);

            border-radius: 18px;

            transition: all 0.25s ease;
        }


        .quick-card:hover {
            transform: translateY(-4px);

            background: rgba(35, 65, 125, 0.75);

            border-color: rgba(130, 180, 255, 0.5);

            box-shadow:
                0 12px 30px rgba(0, 0, 0, 0.25),
                0 0 20px rgba(80, 140, 255, 0.08);
        }


        .quick-icon {
            width: 48px;
            height: 48px;

            flex-shrink: 0;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 14px;

            background: rgba(90, 135, 255, 0.15);

            border: 1px solid rgba(130, 175, 255, 0.25);

            font-size: 22px;
        }


        .quick-content {
            flex: 1;
        }


        .quick-title {
            margin-bottom: 4px;

            font-size: 15px;
            font-weight: bold;

            color: #ffffff;
        }


        .quick-description {
            color: rgba(220, 235, 255, 0.6);

            font-size: 12px;
        }


        .quick-arrow {
            color: #8bbcff;

            font-size: 20px;
        }


        /* =====================================================
           PEMINJAMAN TERBARU
        ===================================================== */

        .recent-section {
            margin-bottom: 35px;
        }


        .recent-header {
            display: flex;

            align-items: center;
            justify-content: space-between;

            margin-bottom: 18px;
        }


        .view-all {
            color: #8bbcff;

            font-size: 13px;
            font-weight: bold;

            text-decoration: none;
        }


        .view-all:hover {
            color: #b9d5ff;
        }


        .recent-table-wrapper {
            overflow-x: auto;

            border-radius: 18px;

            border: 1px solid rgba(130, 170, 255, 0.18);
        }


        .recent-table {
            width: 100%;

            border-collapse: collapse;

            background: rgba(20, 43, 92, 0.5);
        }


        .recent-table th {
            padding: 15px 18px;

            text-align: left;

            color: #aecdff;

            background: rgba(30, 55, 110, 0.65);

            font-size: 12px;
            font-weight: bold;

            letter-spacing: 0.5px;
        }


        .recent-table td {
            padding: 15px 18px;

            color: rgba(235, 242, 255, 0.82);

            border-top: 1px solid rgba(130, 170, 255, 0.1);

            font-size: 13px;
        }


        .recent-table tr:hover td {
            background: rgba(80, 120, 220, 0.07);
        }


        .book-name {
            color: #ffffff;

            font-weight: 600;
        }


        .member-name {
            color: rgba(220, 235, 255, 0.78);
        }


        .date-text {
            color: rgba(220, 235, 255, 0.65);
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status-badge {
            display: inline-block;

            padding: 6px 11px;

            border-radius: 50px;

            font-size: 11px;
            font-weight: bold;
        }


        .status-dipinjam {
            color: #ffd98a;

            background: rgba(255, 190, 70, 0.12);

            border: 1px solid rgba(255, 190, 70, 0.2);
        }


        .status-kembali {
            color: #8ff0b0;

            background: rgba(60, 210, 120, 0.12);

            border: 1px solid rgba(60, 210, 120, 0.2);
        }


        .status-lain {
            color: #b9d5ff;

            background: rgba(100, 150, 255, 0.12);

            border: 1px solid rgba(100, 150, 255, 0.2);
        }


        .empty-data {
            padding: 35px 20px !important;

            text-align: center;

            color: rgba(220, 235, 255, 0.55) !important;
        }


        /* =====================================================
           STATUS LOGIN
        ===================================================== */

        .welcome-box {
            padding: 22px 25px;

            border-radius: 18px;

            background: rgba(80, 120, 220, 0.08);

            border: 1px solid rgba(130, 170, 255, 0.16);
        }


        .welcome-label {
            margin-bottom: 6px;

            color: #91bfff;

            font-size: 12px;
            font-weight: bold;

            letter-spacing: 1px;

            text-transform: uppercase;
        }


        .welcome-text {
            color: rgba(235, 242, 255, 0.85);

            font-size: 14px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .quick-grid {
                grid-template-columns: 1fr;
            }
        }


        @media (max-width: 700px) {

            .dashboard-container {
                padding: 30px 15px 50px;
            }

            .dashboard-card {
                padding: 28px 20px;

                border-radius: 22px;
            }

            .dashboard-title {
                font-size: 32px;
            }

            .dashboard-description {
                font-size: 14px;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;

                gap: 12px;
            }

            .stat-card {
                padding: 18px;
            }

            .stat-number {
                font-size: 25px;
            }
        }


        @media (max-width: 480px) {

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .dashboard-title {
                font-size: 28px;
            }
        }
    </style>


    <div class="dashboard-container">

        <div class="dashboard-card">


            <!-- =================================================
                 HEADER
            ================================================== -->

            <div class="dashboard-badge">
                ✦ DASHBOARD PERPUSTAKAAN
            </div>


            <h1 class="dashboard-title">
                Selamat Datang di <span>Perpustakaan</span>
            </h1>


            <p class="dashboard-description">
                Sistem Informasi Perpustakaan SMK Negeri 2 Surakarta.
                Kelola data buku, anggota, dan peminjaman melalui satu sistem
                yang terintegrasi.
            </p>



            <!-- =================================================
                 STATISTIK
            ================================================== -->

            <div class="section-title">
                Ringkasan Perpustakaan
            </div>


            <div class="stats-grid">


                <!-- TOTAL BUKU -->

                <div class="stat-card">

                    <div class="stat-icon">
                        📚
                    </div>

                    <div class="stat-number">
                        {{ $totalBuku }}
                    </div>

                    <div class="stat-label">
                        Total Buku
                    </div>

                </div>



                <!-- TOTAL ANGGOTA -->

                <div class="stat-card">

                    <div class="stat-icon">
                        👤
                    </div>

                    <div class="stat-number">
                        {{ $totalAnggota }}
                    </div>

                    <div class="stat-label">
                        Total Anggota
                    </div>

                </div>



                <!-- TOTAL PEMINJAMAN -->

                <div class="stat-card">

                    <div class="stat-icon">
                        📖
                    </div>

                    <div class="stat-number">
                        {{ $totalPeminjaman }}
                    </div>

                    <div class="stat-label">
                        Total Peminjaman
                    </div>

                </div>



                <!-- SEDANG DIPINJAM -->

                <div class="stat-card">

                    <div class="stat-icon">
                        🔄
                    </div>

                    <div class="stat-number">
                        {{ $sedangDipinjam }}
                    </div>

                    <div class="stat-label">
                        Sedang Dipinjam
                    </div>

                </div>

            </div>



            <!-- =================================================
                 MENU CEPAT
            ================================================== -->

            <div class="quick-section">

                <div class="section-title">
                    Menu Cepat
                </div>


                <div class="quick-grid">


                    <!-- TAMBAH BUKU -->

                    <a
                        href="{{ route('buku.create') }}"
                        class="quick-card"
                    >

                        <div class="quick-icon">
                            ➕
                        </div>


                        <div class="quick-content">

                            <div class="quick-title">
                                Tambah Buku
                            </div>

                            <div class="quick-description">
                                Tambahkan buku baru
                            </div>

                        </div>


                        <div class="quick-arrow">
                            →
                        </div>

                    </a>



                    <!-- TAMBAH ANGGOTA -->

                    <a
                        href="{{ route('anggota.create') }}"
                        class="quick-card"
                    >

                        <div class="quick-icon">
                            👤
                        </div>


                        <div class="quick-content">

                            <div class="quick-title">
                                Tambah Anggota
                            </div>

                            <div class="quick-description">
                                Tambahkan anggota baru
                            </div>

                        </div>


                        <div class="quick-arrow">
                            →
                        </div>

                    </a>



                    <!-- TAMBAH PEMINJAMAN -->

                    <a
                        href="{{ route('peminjaman.create') }}"
                        class="quick-card"
                    >

                        <div class="quick-icon">
                            📖
                        </div>


                        <div class="quick-content">

                            <div class="quick-title">
                                Tambah Peminjaman
                            </div>

                            <div class="quick-description">
                                Catat peminjaman buku
                            </div>

                        </div>


                        <div class="quick-arrow">
                            →
                        </div>

                    </a>

                </div>

            </div>



            <!-- =================================================
                 PEMINJAMAN TERBARU
            ================================================== -->

            <div class="recent-section">


                <div class="recent-header">

                    <div
                        class="section-title"
                        style="margin-bottom: 0;"
                    >
                        Peminjaman Terbaru
                    </div>


                    <a
                        href="{{ route('peminjaman.index') }}"
                        class="view-all"
                    >
                        Lihat Semua →
                    </a>

                </div>



                <div class="recent-table-wrapper">

                    <table class="recent-table">

                        <thead>

                            <tr>

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
                                    Status
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse ($peminjamanTerbaru as $item)

                                <tr>

                                    <td>

                                        <div class="book-name">
                                            {{ $item->buku->judul ?? '-' }}
                                        </div>

                                    </td>


                                    <td>

                                        <div class="member-name">
                                            {{ $item->anggota->nama ?? '-' }}
                                        </div>

                                    </td>


                                    <td>

                                        <div class="date-text">

                                            {{ $item->tanggal_pinjam
                                                ? \Carbon\Carbon::parse($item->tanggal_pinjam)->format('d/m/Y')
                                                : '-'
                                            }}

                                        </div>

                                    </td>


                                    <td>

                                        @if ($item->status == 'Dipinjam')

                                            <span class="status-badge status-dipinjam">
                                                Dipinjam
                                            </span>

                                        @elseif ($item->status == 'Kembali')

                                            <span class="status-badge status-kembali">
                                                Kembali
                                            </span>

                                        @else

                                            <span class="status-badge status-lain">
                                                {{ $item->status ?? '-' }}
                                            </span>

                                        @endif

                                    </td>

                                </tr>


                            @empty

                                <tr>

                                    <td
                                        colspan="4"
                                        class="empty-data"
                                    >
                                        Belum ada data peminjaman.
                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>



            <!-- =================================================
                 STATUS LOGIN
            ================================================== -->

            <div class="welcome-box">

                <div class="welcome-label">
                    Status Login
                </div>


                <div class="welcome-text">

                    Selamat datang,
                    <strong>
                        {{ Auth::user()->name ?? 'Pengguna' }}
                    </strong>.

                    Kamu berhasil masuk ke sistem perpustakaan.

                </div>

            </div>


        </div>

    </div>

</x-app-layout>