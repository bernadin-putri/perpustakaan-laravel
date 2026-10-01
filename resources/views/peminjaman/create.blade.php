<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Peminjaman - Perpustakaan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;

            font-family: Arial, sans-serif;

            color: white;

            background-image:
                linear-gradient(
                    rgba(8, 31, 76, 0.45),
                    rgba(35, 27, 105, 0.45)
                ),
                url('/images/background.png');

            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .page-container {
            position: relative;

            z-index: 2;

            width: calc(100% - 150px);

            max-width: 1100px;

            margin: 48px auto;
        }


        /* =====================================================
           CARD
        ===================================================== */

        .form-card {
            padding: 42px;

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
           HEADER
        ===================================================== */

        .form-header {
            margin-bottom: 35px;
        }


        .form-badge {
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


        .form-title {
            margin: 0;

            font-size: 40px;

            line-height: 1.15;

            font-weight: 800;

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


        .form-description {
            margin-top: 12px;

            color:
                rgba(255, 255, 255, 0.70);

            font-size: 15px;

            line-height: 1.6;
        }


        /* =====================================================
           FORM GRID
        ===================================================== */

        .form-grid {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 24px;
        }


        .form-group {
            display: flex;

            flex-direction: column;

            gap: 9px;
        }


        .form-group.full {
            grid-column: 1 / -1;
        }


        .form-label {
            color: white;

            font-size: 14px;

            font-weight: 700;
        }


        .form-input,
        .form-select {
            width: 100%;

            height: 50px;

            padding: 0 16px;

            border:
                1px solid rgba(255, 255, 255, 0.18);

            border-radius: 12px;

            outline: none;

            background:
                rgba(8, 31, 76, 0.45);

            color: white;

            font-size: 14px;

            transition: 0.2s ease;
        }


        .form-select option {
            color: #111827;

            background: white;
        }


        .form-input:focus,
        .form-select:focus {
            border-color:
                rgba(160, 130, 255, 0.9);

            box-shadow:
                0 0 15px rgba(110, 90, 255, 0.25);
        }


        /* =====================================================
           ERROR
        ===================================================== */

        .error-box {
            margin-bottom: 25px;

            padding: 15px 18px;

            border-radius: 12px;

            background:
                rgba(230, 60, 90, 0.15);

            border:
                1px solid rgba(240, 80, 110, 0.35);

            color:
                #ffb4c2;
        }


        .error-box ul {
            margin: 0;

            padding-left: 20px;
        }


        /* =====================================================
           BUTTONS
        ===================================================== */

        .form-actions {
            display: flex;

            align-items: center;

            justify-content: flex-end;

            gap: 12px;

            margin-top: 35px;

            padding-top: 25px;

            border-top:
                1px solid rgba(255, 255, 255, 0.10);
        }


        .save-button {
            min-width: 150px;

            height: 48px;

            padding: 0 22px;

            border: none;

            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #635bff,
                    #a84fff
                );

            color: white;

            font-size: 14px;

            font-weight: 800;

            cursor: pointer;

            box-shadow:
                0 8px 20px rgba(80, 60, 220, 0.3);

            transition: 0.2s ease;
        }


        .save-button:hover {
            transform:
                translateY(-2px);

            box-shadow:
                0 12px 25px rgba(80, 60, 220, 0.45);
        }


        .back-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 110px;

            height: 48px;

            padding: 0 20px;

            border-radius: 11px;

            border:
                1px solid rgba(255, 255, 255, 0.20);

            background:
                rgba(255, 255, 255, 0.08);

            color: white;

            text-decoration: none;

            font-size: 14px;

            font-weight: 700;

            transition: 0.2s ease;
        }


        .back-button:hover {
            background:
                rgba(255, 255, 255, 0.14);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 800px) {

            .page-container {
                width:
                    calc(100% - 40px);

                margin:
                    30px auto;
            }


            .form-card {
                padding: 28px;
            }


            .form-grid {
                grid-template-columns: 1fr;
            }


            .form-group.full {
                grid-column: auto;
            }


            .form-title {
                font-size: 32px;
            }

        }


        @media (max-width: 550px) {

            .page-container {
                width:
                    calc(100% - 25px);
            }


            .form-card {
                padding: 22px;
            }


            .form-actions {
                flex-direction: column-reverse;

                align-items: stretch;
            }


            .save-button,
            .back-button {
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

        <div class="form-card">


            <!-- HEADER -->

            <div class="form-header">

                <span class="form-badge">
                    ✦ &nbsp; PEMINJAMAN
                </span>


                <h1 class="form-title">
                    Tambah Peminjaman
                </h1>


                <p class="form-description">
                    Tambahkan data peminjaman buku
                    ke dalam sistem perpustakaan.
                </p>

            </div>


            <!-- ERROR -->

            @if($errors->any())

                <div class="error-box">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- FORM -->

            <form
                action="{{ route('peminjaman.store') }}"
                method="POST"
            >

                @csrf


                <div class="form-grid">


                    <!-- BUKU -->

                    <div class="form-group">

                        <label
                            for="buku_id"
                            class="form-label"
                        >
                            Buku
                        </label>


                        <select
                            name="buku_id"
                            id="buku_id"
                            class="form-select"
                            required
                        >

                            <option value="">
                                -- Pilih Buku --
                            </option>


                            @foreach($buku as $item)

                                <option
                                    value="{{ $item->id }}"
                                    {{ old('buku_id') == $item->id ? 'selected' : '' }}
                                >
                                    {{ $item->judul }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    <!-- ANGGOTA -->

                    <div class="form-group">

                        <label
                            for="anggota_id"
                            class="form-label"
                        >
                            Anggota
                        </label>


                        <select
                            name="anggota_id"
                            id="anggota_id"
                            class="form-select"
                            required
                        >

                            <option value="">
                                -- Pilih Anggota --
                            </option>


                            @foreach($anggota as $item)

                                <option
                                    value="{{ $item->id }}"
                                    {{ old('anggota_id') == $item->id ? 'selected' : '' }}
                                >
                                    {{ $item->nama }}
                                    - {{ $item->nis }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    <!-- TANGGAL PINJAM -->

                    <div class="form-group">

                        <label
                            for="tanggal_pinjam"
                            class="form-label"
                        >
                            Tanggal Pinjam
                        </label>


                        <input
                            type="date"
                            name="tanggal_pinjam"
                            id="tanggal_pinjam"
                            class="form-input"
                            value="{{ old('tanggal_pinjam') }}"
                            required
                        >

                    </div>


                    <!-- TANGGAL KEMBALI -->

                    <div class="form-group">

                        <label
                            for="tanggal_kembali"
                            class="form-label"
                        >
                            Tanggal Kembali
                        </label>


                        <input
                            type="date"
                            name="tanggal_kembali"
                            id="tanggal_kembali"
                            class="form-input"
                            value="{{ old('tanggal_kembali') }}"
                        >

                    </div>


                    <!-- STATUS -->

                    <div class="form-group full">

                        <label
                            for="status"
                            class="form-label"
                        >
                            Status
                        </label>


                        <select
                            name="status"
                            id="status"
                            class="form-select"
                            required
                        >

                            <option value="">
                                -- Pilih Status --
                            </option>


                            <option
                                value="dipinjam"
                                {{ old('status') == 'dipinjam' ? 'selected' : '' }}
                            >
                                Dipinjam
                            </option>


                            <option
                                value="kembali"
                                {{ old('status') == 'kembali' ? 'selected' : '' }}
                            >
                                Kembali
                            </option>

                        </select>

                    </div>

                </div>


                <!-- BUTTON -->

                <div class="form-actions">

                    <a
                        href="{{ route('peminjaman.index') }}"
                        class="back-button"
                    >
                        Kembali
                    </a>


                    <button
                        type="submit"
                        class="save-button"
                    >
                        Simpan Peminjaman
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>

</html>