<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Buku - Perpustakaan</title>

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

        .page-container {
            width: calc(100% - 150px);
            max-width: 1100px;
            margin: 48px auto;
        }

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

        .form-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 24px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .form-label {
            color: white;

            font-size: 14px;
            font-weight: 700;
        }

        .form-input {
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
        }

        .form-input:focus {
            border-color:
                rgba(160, 130, 255, 0.9);

            box-shadow:
                0 0 15px rgba(110, 90, 255, 0.25);
        }

        .error-box {
            margin-bottom: 25px;

            padding: 15px 18px;

            border-radius: 12px;

            background:
                rgba(230, 60, 90, 0.15);

            border:
                1px solid rgba(240, 80, 110, 0.35);

            color: #ffb4c2;
        }

        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }

        .form-actions {
            display: flex;

            justify-content: flex-end;
            gap: 12px;

            margin-top: 35px;
            padding-top: 25px;

            border-top:
                1px solid rgba(255, 255, 255, 0.10);
        }

        .save-button {
            min-width: 140px;
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

            transition: 0.2s ease;
        }

        .save-button:hover {
            transform: translateY(-2px);
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
        }

        .back-button:hover {
            background:
                rgba(255, 255, 255, 0.14);
        }

        @media (max-width: 800px) {

            .page-container {
                width: calc(100% - 40px);
            }

            .form-card {
                padding: 28px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-title {
                font-size: 32px;
            }
        }

        @media (max-width: 550px) {

            .page-container {
                width: calc(100% - 25px);
            }

            .form-card {
                padding: 22px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .save-button,
            .back-button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    @include('layouts.navigation')

    <div class="page-container">

        <div class="form-card">

            <div class="form-header">

                <span class="form-badge">
                    ✦ &nbsp; MANAJEMEN BUKU
                </span>

                <h1 class="form-title">
                    Tambah Buku
                </h1>

                <p class="form-description">
                    Tambahkan data buku baru ke dalam
                    sistem perpustakaan.
                </p>

            </div>

            @if($errors->any())

                <div class="error-box">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif

            <form
                action="{{ route('buku.store') }}"
                method="POST"
            >

                @csrf

                <div class="form-grid">

                    <div class="form-group">

                        <label
                            for="kode_buku"
                            class="form-label"
                        >
                            Kode Buku
                        </label>

                        <input
                            type="text"
                            name="kode_buku"
                            id="kode_buku"
                            class="form-input"
                            value="{{ old('kode_buku') }}"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label
                            for="judul"
                            class="form-label"
                        >
                            Judul Buku
                        </label>

                        <input
                            type="text"
                            name="judul"
                            id="judul"
                            class="form-input"
                            value="{{ old('judul') }}"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label
                            for="pengarang"
                            class="form-label"
                        >
                            Pengarang
                        </label>

                        <input
                            type="text"
                            name="pengarang"
                            id="pengarang"
                            class="form-input"
                            value="{{ old('pengarang') }}"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label
                            for="penerbit"
                            class="form-label"
                        >
                            Penerbit
                        </label>

                        <input
                            type="text"
                            name="penerbit"
                            id="penerbit"
                            class="form-input"
                            value="{{ old('penerbit') }}"
                        >

                    </div>

                    <div class="form-group">

                        <label
                            for="tahun_terbit"
                            class="form-label"
                        >
                            Tahun Terbit
                        </label>

                        <input
                            type="number"
                            name="tahun_terbit"
                            id="tahun_terbit"
                            class="form-input"
                            value="{{ old('tahun_terbit') }}"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label
                            for="stok"
                            class="form-label"
                        >
                            Stok
                        </label>

                        <input
                            type="number"
                            name="stok"
                            id="stok"
                            class="form-input"
                            value="{{ old('stok') }}"
                            min="0"
                            required
                        >

                    </div>

                </div>

                <div class="form-actions">

                    <a
                        href="{{ route('buku.index') }}"
                        class="back-button"
                    >
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="save-button"
                    >
                        Simpan Buku
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>

</html>