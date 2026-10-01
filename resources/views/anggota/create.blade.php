<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Anggota - Perpustakaan</title>

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

            max-width: 900px;

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

            grid-template-columns: 1fr;

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

        @media (max-width: 600px) {

            .page-container {
                width: calc(100% - 25px);

                margin-top: 25px;
            }

            .form-card {
                padding: 22px;
            }

            .form-title {
                font-size: 32px;
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
                    ✦ &nbsp; MANAJEMEN ANGGOTA
                </span>

                <h1 class="form-title">
                    Tambah Anggota
                </h1>

                <p class="form-description">
                    Tambahkan data anggota baru ke dalam
                    sistem perpustakaan.
                </p>

            </div>

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

            <form
                action="{{ route('anggota.store') }}"
                method="POST"
            >

                @csrf

                <div class="form-grid">

                    <div class="form-group">

                        <label
                            for="nis"
                            class="form-label"
                        >
                            NIS
                        </label>

                        <input
                            type="text"
                            name="nis"
                            id="nis"
                            class="form-input"
                            value="{{ old('nis') }}"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label
                            for="nama"
                            class="form-label"
                        >
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            name="nama"
                            id="nama"
                            class="form-input"
                            value="{{ old('nama') }}"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label
                            for="kelas"
                            class="form-label"
                        >
                            Kelas
                        </label>

                        <input
                            type="text"
                            name="kelas"
                            id="kelas"
                            class="form-input"
                            value="{{ old('kelas') }}"
                            placeholder="Contoh: 12 PPLG B"
                            required
                        >

                    </div>

                </div>

                <div class="form-actions">

                    <a
                        href="{{ route('anggota.index') }}"
                        class="back-button"
                    >
                        Kembali
                    </a>

                    <button
                        type="submit"
                        class="save-button"
                    >
                        Simpan Anggota
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>

</html>