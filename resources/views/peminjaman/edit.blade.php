<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit Peminjaman - Perpustakaan</title>


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

            width: min(900px, 92%);

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

            flex-shrink: 0;

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

        .loan-form {

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


        .form-input,
        .form-select {

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


        .form-select {

            cursor: pointer;
        }


        .form-select option {

            background:
                #102b61;

            color: white;
        }


        .form-input:focus,
        .form-select:focus {

            border-color:
                #8a63ff;

            background:
                rgba(5, 25, 70, 0.72);

            box-shadow:
                0 0 0 3px
                rgba(125, 85, 255, 0.12);
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
                rgba(255, 255, 255, 0.09);
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
            }


            .page-title {

                font-size: 24px;
            }


            .loan-form {

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
                        Edit Peminjaman
                    </h1>

                    <p class="page-subtitle">
                        Perbarui informasi data peminjaman
                        buku perpustakaan.
                    </p>

                </div>

            </div>


            {{-- FORM --}}

            <form
                action="{{ route('peminjaman.update', $peminjaman->id) }}"
                method="POST"
                class="loan-form"
            >

                @csrf

                @method('PUT')


                {{-- BUKU --}}

                <div class="form-group">

                    <label
                        for="buku_id"
                        class="form-label"
                    >
                        Buku
                    </label>

                    <select
                        id="buku_id"
                        name="buku_id"
                        class="form-select"
                        required
                    >

                        @foreach($buku as $item)

                            <option
                                value="{{ $item->id }}"
                                {{ $peminjaman->buku_id == $item->id ? 'selected' : '' }}
                            >
                                {{ $item->judul }}
                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- ANGGOTA --}}

                <div class="form-group">

                    <label
                        for="anggota_id"
                        class="form-label"
                    >
                        Anggota
                    </label>

                    <select
                        id="anggota_id"
                        name="anggota_id"
                        class="form-select"
                        required
                    >

                        @foreach($anggota as $item)

                            <option
                                value="{{ $item->id }}"
                                {{ $peminjaman->anggota_id == $item->id ? 'selected' : '' }}
                            >
                                {{ $item->nis }} -
                                {{ $item->nama }}
                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- TANGGAL PINJAM --}}

                <div class="form-group">

                    <label
                        for="tanggal_pinjam"
                        class="form-label"
                    >
                        Tanggal Pinjam
                    </label>

                    <input
                        id="tanggal_pinjam"
                        type="date"
                        name="tanggal_pinjam"
                        value="{{ old('tanggal_pinjam', $peminjaman->tanggal_pinjam) }}"
                        class="form-input"
                        required
                    >

                </div>


                {{-- TANGGAL KEMBALI --}}

                <div class="form-group">

                    <label
                        for="tanggal_kembali"
                        class="form-label"
                    >
                        Tanggal Kembali
                    </label>

                    <input
                        id="tanggal_kembali"
                        type="date"
                        name="tanggal_kembali"
                        value="{{ old('tanggal_kembali', $peminjaman->tanggal_kembali) }}"
                        class="form-input"
                    >

                </div>


                {{-- STATUS --}}

                <div class="form-group full">

                    <label
                        for="status"
                        class="form-label"
                    >
                        Status Peminjaman
                    </label>

                    <select
                        id="status"
                        name="status"
                        class="form-select"
                        required
                    >

                        <option
                            value="dipinjam"
                            {{ strtolower($peminjaman->status) == 'dipinjam' ? 'selected' : '' }}
                        >
                            Dipinjam
                        </option>

                        <option
                            value="kembali"
                            {{ strtolower($peminjaman->status) == 'kembali' ? 'selected' : '' }}
                        >
                            Kembali
                        </option>

                    </select>

                </div>


                {{-- BUTTON --}}

                <div class="form-actions">

                    <a
                        href="{{ route('peminjaman.index') }}"
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