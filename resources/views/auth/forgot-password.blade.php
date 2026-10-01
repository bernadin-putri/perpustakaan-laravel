<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Lupa Password - Perpustakaan</title>


    <style>

        * {
            box-sizing: border-box;
        }


        html,
        body {
            margin: 0;
            padding: 0;

            min-height: 100vh;
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
           PAGE
        ===================================== */

        .page-wrapper {

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 30px 20px;
        }


        /* =====================================
           CARD
        ===================================== */

        .auth-card {

            width: 100%;

            max-width: 480px;

            padding: 38px 40px;

            border-radius: 24px;

            background:
                linear-gradient(
                    145deg,
                    rgba(10, 38, 91, 0.90),
                    rgba(24, 29, 86, 0.88)
                );

            border:
                1px solid
                rgba(125, 165, 255, 0.25);

            box-shadow:
                0 25px 70px
                rgba(0, 0, 0, 0.40);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);
        }


        /* =====================================
           LOGO
        ===================================== */

        .logo-area {

            display: flex;

            flex-direction: column;

            align-items: center;

            margin-bottom: 28px;
        }


        .logo-icon {

            width: 58px;
            height: 58px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin-bottom: 14px;

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
                rgba(110, 65, 255, 0.35);
        }


        .logo-title {

            margin: 0;

            font-size: 23px;

            font-weight: 800;

            letter-spacing: 1.5px;
        }


        .logo-subtitle {

            margin:
                6px 0 0;

            color:
                rgba(220, 228, 255, 0.60);

            font-size: 11px;

            font-weight: 600;

            letter-spacing: 1px;
        }


        /* =====================================
           TITLE
        ===================================== */

        .form-title {

            margin:
                0 0 8px;

            font-size: 25px;

            font-weight: 800;

            text-align: center;
        }


        .form-description {

            margin:
                0 0 27px;

            color:
                rgba(220, 228, 255, 0.68);

            font-size: 13px;

            line-height: 1.6;

            text-align: center;
        }


        /* =====================================
           STATUS
        ===================================== */

        .status-message {

            margin-bottom: 18px;

            padding:
                12px 14px;

            border-radius: 10px;

            border:
                1px solid
                rgba(86, 225, 233, 0.30);

            background:
                rgba(86, 225, 233, 0.10);

            color:
                #72edf5;

            font-size: 13px;
        }


        /* =====================================
           FORM
        ===================================== */

        .form-group {

            margin-bottom: 20px;
        }


        .form-label {

            display: block;

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


        .form-input::placeholder {

            color:
                rgba(190, 205, 240, 0.40);
        }


        /* =====================================
           ERROR
        ===================================== */

        .error-message {

            margin-top: 7px;

            color:
                #ff9ca9;

            font-size: 12px;
        }


        /* =====================================
           BUTTON
        ===================================== */

        .button-area {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 12px;

            margin-top: 8px;
        }


        .back-link {

            color:
                rgba(220, 228, 255, 0.68);

            font-size: 13px;

            text-decoration: none;

            transition:
                color 0.2s ease;
        }


        .back-link:hover {

            color: white;
        }


        .submit-button {

            min-width: 190px;

            height: 45px;

            padding:
                0 20px;

            border: none;

            border-radius: 11px;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                );

            font-family: inherit;

            font-size: 12px;

            font-weight: 800;

            letter-spacing: 0.3px;

            cursor: pointer;

            box-shadow:
                0 8px 22px
                rgba(110, 65, 255, 0.30);

            transition:
                all 0.2s ease;
        }


        .submit-button:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 28px
                rgba(110, 65, 255, 0.43);
        }


        /* =====================================
           FOOTER
        ===================================== */

        .footer {

            margin-top: 28px;

            padding-top: 20px;

            border-top:
                1px solid
                rgba(255, 255, 255, 0.08);

            color:
                rgba(220, 228, 255, 0.40);

            font-size: 11px;

            text-align: center;
        }


        /* =====================================
           RESPONSIVE
        ===================================== */

        @media (max-width: 500px) {

            .page-wrapper {

                padding:
                    20px 15px;
            }


            .auth-card {

                padding:
                    30px 22px;
            }


            .form-title {

                font-size: 22px;
            }


            .button-area {

                flex-direction:
                    column-reverse;

                align-items:
                    stretch;
            }


            .submit-button {

                width: 100%;
            }


            .back-link {

                text-align: center;
            }
        }

    </style>

</head>


<body>


    <main class="page-wrapper">


        <section class="auth-card">


            {{-- LOGO --}}

            <div class="logo-area">

                <div class="logo-icon">
                    ✦
                </div>

                <h1 class="logo-title">
                    PERPUSTAKAAN
                </h1>

                <p class="logo-subtitle">
                    SMK NEGERI 2 SURAKARTA
                </p>

            </div>


            {{-- TITLE --}}

            <h2 class="form-title">
                Lupa Password?
            </h2>


            <p class="form-description">
                Jangan khawatir. Masukkan alamat email
                yang terdaftar dan kami akan mengirimkan
                link untuk mengatur ulang password kamu.
            </p>


            {{-- SESSION STATUS --}}

            @if (session('status'))

                <div class="status-message">
                    {{ session('status') }}
                </div>

            @endif


            {{-- FORM --}}

            <form
                method="POST"
                action="{{ route('password.email') }}"
            >

                @csrf


                <div class="form-group">

                    <label
                        for="email"
                        class="form-label"
                    >
                        Email
                    </label>


                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-input"
                        placeholder="Masukkan email kamu"
                        required
                        autofocus
                    >


                    @if ($errors->get('email'))

                        @foreach ($errors->get('email') as $message)

                            <div class="error-message">
                                {{ $message }}
                            </div>

                        @endforeach

                    @endif

                </div>


                {{-- BUTTON --}}

                <div class="button-area">

                    <a
                        href="{{ route('login') }}"
                        class="back-link"
                    >
                        ← Kembali ke Login
                    </a>


                    <button
                        type="submit"
                        class="submit-button"
                    >
                        KIRIM LINK RESET PASSWORD
                    </button>

                </div>

            </form>


            {{-- FOOTER --}}

            <div class="footer">
                Sistem Informasi Perpustakaan
                <br>
                SMK Negeri 2 Surakarta
            </div>


        </section>

    </main>


</body>

</html>