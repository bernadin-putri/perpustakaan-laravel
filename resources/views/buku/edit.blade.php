<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit Buku - Perpustakaan</title>


    <style>

        * {
            box-sizing: border-box;
        }


        html,
        body {
            margin: 0;
            padding: 0;

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
                    rgba(8, 31, 76, 0.35),
                    rgba(8, 31, 76, 0.35)
                ),
                url('/images/background.png')
                center center / cover fixed no-repeat;

            background-color: #0A2353;
        }


        /* =====================================
           CONTENT
        ===================================== */

        .page-container {

            width: min(1100px, 92%);

            margin:
                45px auto 60px;
        }


        .space-card {

            padding:
                38px 42px;

            border-radius: 24px;

            background:
                linear-gradient(
                    145deg,
                    rgba(10, 38, 91, 0.88),
                    rgba(24, 29, 86, 0.84)
                );

            border:
                1px solid
                rgba(125, 165, 255, 0.25);

            box-shadow:
                0 25px 70px
                rgba(0, 0, 0, 0.35);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);
        }


        /* =====================================
           HEADER
        ===================================== */

        .page-header {

            display: flex;

            align-items: center;

            gap: 20px;

            margin-bottom: 35px;
        }


        .header-icon {

            width: 60px;
            height: 60px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 16px;

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                );

            font-size: 28px;

            box-shadow:
                0 10px 30px
                rgba(110, 65, 255, 0.3);
        }


        .page-title {

            margin: 0;

            font-size: 30px;

            font-weight: 800;

            color: white;
        }


        .page-subtitle {

            margin:
                7px 0 0;

            color:
                rgba(210, 222, 250, 0.68);

            font-size: 13px;
        }


        /* =====================================
           FORM
        ===================================== */

        .book-form {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap:
                22px 25px;
        }


        .form-group {

            display: flex;

            flex-direction: column;
        }


        .form-group.full {

            grid-column:
                1 / -1;
        }


        .form-label {

            margin-bottom: 8px;

            color:
                rgba(242, 246, 255, 0.95);

            font-size: 13px;

            font-weight: 600;
        }


        .form-input {

            width: 100%;

            height: 48px;

            padding:
                0 15px;

            border-radius: 11px;

            border:
                1px solid
                rgba(120, 160, 235, 0.32);

            outline: none;

            background:
                rgba(4, 22, 61, 0.52);

            color: white;

            font-family: inherit;

            font-size: 14px;

            transition:
                all 0.2s ease;
        }


        .form-input:focus {

            border-color:
                #8a63ff;

            background:
                rgba(5, 25, 70, 0.72);

            box-shadow:
                0 0 0 3px
                rgba(125, 85, 255, 0.12);
        }


        .form-input[readonly] {

            color:
                rgba(210, 220, 245, 0.55);

            background:
                rgba(4, 18, 52, 0.38);

            cursor:
                not-allowed;
        }


        .form-input::placeholder {

            color:
                rgba(190, 205, 240, 0.45);
        }


        /* =====================================
           ERROR
        ===================================== */

        .input-error {

            margin-top: 6px;

            color:
                #ff9ca9;

            font-size: 12px;
        }


        /* =====================================
           BUTTON
        ===================================== */

        .form-actions {

            grid-column:
                1 / -1;

            display: flex;

            align-items: center;

            justify-content: flex-end;

            gap: 12px;

            margin-top: 10px;

            padding-top: 25px;

            border-top:
                1px solid
                rgba(255,255,255,0.09);
        }


        .button {

            height: 45px;

            padding:
                0 22px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            border-radius: 11px;

            text-decoration: none;

            font-family: inherit;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            transition:
                all 0.2s ease;
        }


        .back-button {

            color:
                rgba(225, 232, 255, 0.82);

            background:
                rgba(100, 130, 220, 0.12);

            border:
                1px solid
                rgba(130, 165, 235, 0.28);
        }


        .back-button:hover {

            background:
                rgba(100, 130, 220, 0.25);

            transform:
                translateY(-1px);
        }


        .update-button {

            border: none;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                );

            box-shadow:
                0 8px 22px
                rgba(110, 65, 255, 0.3);
        }


        .update-button:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 28px
                rgba(110, 65, 255, 0.43);
        }


        /* =====================================
           RESPONSIVE
        ===================================== */

        @media (max-width: 700px) {

            .page-container {

                width:
                    calc(100% - 30px);

                margin:
                    25px auto 40px;
            }


            .space-card {

                padding:
                    25px 20px;
            }


            .page-header {

                align-items:
                    flex-start;
            }


            .header-icon {

                width: 52px;
                height: 52px;

                flex-shrink: 0;
            }


            .page-title {

                font-size: 24px;
            }


            .book-form {

                grid-template-columns:
                    1fr;
            }


            .form-group.full {

                grid-column:
                    auto;
            }


            .form-actions {

                grid-column:
                    auto;

                flex-direction:
                    column-reverse;

                align-items:
                    stretch;
            }


            .button {

                width:
                    100%;
            }
        }

    </style>

</head>


<body>


    {{-- NAVBAR --}}

    @include('layouts.navigation')


    {{-- CONTENT --}}

    <main class="page-container">

        <section class="space-card">


            {{-- HEADER --}}

            <div class="page-header">

                <div class="header-icon">
                    ✎
                </div>

                <div>

                    <h1 class="page-title">
                        Edit Buku
                    </h1>

                    <p class="page-subtitle">
                        Perbarui informasi buku yang tersimpan
                        di perpustakaan.
                    </p>

                </div>

            </div>


            {{-- FORM --}}

            <form
                action="{{ route('buku.update', $buku->id) }}"
                method="POST"
                class="book-form"
            >

                @csrf

                @method('PUT')


                {{-- KODE BUKU --}}

                <div class="form-group">

                    <label
                        for="kode_buku"
                        class="form-label"
                    >
                        Kode Buku
                    </label>

                    <input
                        id="kode_buku"
                        type="text"
                        name="kode_buku"
                        value="{{ old('kode_buku', $buku->kode_buku) }}"
                        class="form-input"
                        readonly
                    >

                    @error('kode_buku')

                        <div class="input-error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- JUDUL --}}

                <div class="form-group">

                    <label
                        for="judul"
                        class="form-label"
                    >
                        Judul Buku
                    </label>

                    <input
                        id="judul"
                        type="text"
                        name="judul"
                        value="{{ old('judul', $buku->judul) }}"
                        class="form-input"
                        required
                    >

                    @error('judul')

                        <div class="input-error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- PENGARANG --}}

                <div class="form-group">

                    <label
                        for="pengarang"
                        class="form-label"
                    >
                        Pengarang
                    </label>

                    <input
                        id="pengarang"
                        type="text"
                        name="pengarang"
                        value="{{ old('pengarang', $buku->pengarang) }}"
                        class="form-input"
                        required
                    >

                    @error('pengarang')

                        <div class="input-error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- PENERBIT --}}

                <div class="form-group">

                    <label
                        for="penerbit"
                        class="form-label"
                    >
                        Penerbit
                    </label>

                    <input
                        id="penerbit"
                        type="text"
                        name="penerbit"
                        value="{{ old('penerbit', $buku->penerbit) }}"
                        class="form-input"
                        required
                    >

                    @error('penerbit')

                        <div class="input-error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- TAHUN TERBIT --}}

                <div class="form-group">

                    <label
                        for="tahun_terbit"
                        class="form-label"
                    >
                        Tahun Terbit
                    </label>

                    <input
                        id="tahun_terbit"
                        type="number"
                        name="tahun_terbit"
                        value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"
                        class="form-input"
                        required
                    >

                    @error('tahun_terbit')

                        <div class="input-error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- STOK --}}

                <div class="form-group">

                    <label
                        for="stok"
                        class="form-label"
                    >
                        Stok
                    </label>

                    <input
                        id="stok"
                        type="number"
                        name="stok"
                        value="{{ old('stok', $buku->stok) }}"
                        class="form-input"
                        min="0"
                        required
                    >

                    @error('stok')

                        <div class="input-error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- BUTTON --}}

                <div class="form-actions">

                    <a
                        href="{{ route('buku.index') }}"
                        class="button back-button"
                    >
                        ← Kembali
                    </a>


                    <button
                        type="submit"
                        class="button update-button"
                    >
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </section>

    </main>


</body>

</html>