<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar - Perpustakaan</title>

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
            font-family: Arial, Helvetica, sans-serif;
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


        /* ==============================
           HALAMAN REGISTER
        ============================== */

        .register-page {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 35px 20px;
        }


        /* ==============================
           CARD
        ============================== */

        .register-card {
            width: 100%;
            max-width: 470px;

            padding: 34px 46px 30px;

            border-radius: 24px;

            background:
                linear-gradient(
                    145deg,
                    rgba(10, 38, 91, 0.88),
                    rgba(24, 29, 86, 0.86)
                );

            border: 1px solid rgba(120, 165, 255, 0.32);

            box-shadow:
                0 25px 70px rgba(0, 0, 0, 0.42),
                0 0 35px rgba(75, 90, 255, 0.15);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }


        /* ==============================
           LOGO
        ============================== */

        .web-logo {
            width: 62px;
            height: 62px;

            margin: 0 auto 14px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 17px;

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                );

            box-shadow:
                0 10px 30px rgba(120, 70, 255, 0.40);

            color: white;

            font-size: 33px;
            font-weight: 700;
        }


        /* ==============================
           HEADER
        ============================== */

        .register-header {
            text-align: center;

            margin-bottom: 25px;
        }


        .register-title {
            margin: 0;

            color: white;

            font-size: 27px;
            font-weight: 800;

            letter-spacing: 0.8px;
        }


        .register-subtitle {
            margin: 7px 0 0;

            color: rgba(215, 225, 255, 0.72);

            font-size: 12px;

            letter-spacing: 0.4px;
        }


        /* ==============================
           FORM
        ============================== */

        .form-group {
            margin-bottom: 17px;
        }


        .form-label {
            display: block;

            margin-bottom: 7px;

            color: #f4f6ff;

            font-size: 13px;
            font-weight: 600;
        }


        .input-wrapper {
            position: relative;
        }


        .input-icon {
            position: absolute;

            left: 15px;
            top: 50%;

            transform: translateY(-50%);

            color: #aebce5;

            font-size: 17px;

            pointer-events: none;
        }


        .form-input {
            width: 100%;
            height: 47px;

            padding: 0 45px 0 45px;

            border-radius: 11px;

            border: 1px solid rgba(110, 155, 235, 0.38);

            outline: none;

            background:
                rgba(4, 22, 61, 0.52);

            color: white;

            font-family: inherit;
            font-size: 13px;

            transition: all 0.2s ease;
        }


        .form-input::placeholder {
            color: rgba(190, 205, 240, 0.55);
        }


        .form-input:focus {
            border-color: #8a63ff;

            background:
                rgba(5, 25, 70, 0.72);

            box-shadow:
                0 0 0 3px rgba(125, 85, 255, 0.12),
                0 0 18px rgba(105, 75, 255, 0.12);
        }


        /* ==============================
           PASSWORD TOGGLE
        ============================== */

        .password-toggle {
            position: absolute;

            right: 13px;
            top: 50%;

            transform: translateY(-50%);

            border: none;
            background: transparent;

            color: #aebce5;

            font-size: 16px;

            cursor: pointer;
        }


        /* ==============================
           ERROR
        ============================== */

        .input-error {
            margin-top: 6px;

            color: #ff9ca9;

            font-size: 11px;
        }


        /* ==============================
           BOTTOM ACTION
        ============================== */

        .register-actions {
            display: flex;

            align-items: center;
            justify-content: space-between;

            margin-top: 23px;

            gap: 15px;
        }


        .login-link {
            color: #bc8cff;

            font-size: 12px;

            text-decoration: none;

            transition: 0.2s;
        }


        .login-link:hover {
            color: white;
        }


        /* ==============================
           REGISTER BUTTON
        ============================== */

        .register-button {
            min-width: 125px;

            height: 44px;

            padding: 0 21px;

            border: none;
            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #6748ff,
                    #c44ff0
                );

            color: white;

            font-family: inherit;

            font-size: 13px;
            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 9px 25px rgba(110, 65, 255, 0.34);

            transition: all 0.2s ease;
        }


        .register-button:hover {
            transform: translateY(-2px);

            box-shadow:
                0 13px 30px rgba(110, 65, 255, 0.48);
        }


        .register-button:active {
            transform: translateY(0);
        }


        .register-arrow {
            margin-left: 6px;

            font-size: 16px;
        }


        /* ==============================
           FOOTER
        ============================== */

        .register-footer {
            margin-top: 22px;
            padding-top: 16px;

            border-top:
                1px solid rgba(255, 255, 255, 0.10);

            text-align: center;

            color:
                rgba(205, 217, 245, 0.55);

            font-size: 10px;

            line-height: 1.6;
        }


        /* ==============================
           RESPONSIVE
        ============================== */

        @media (max-width: 520px) {

            .register-page {
                padding: 25px 15px;
            }

            .register-card {
                padding: 30px 25px 26px;

                border-radius: 20px;
            }

            .register-title {
                font-size: 23px;
            }

            .register-actions {
                flex-direction: column-reverse;

                align-items: stretch;
            }

            .register-button {
                width: 100%;
            }

            .login-link {
                text-align: center;
            }
        }

    </style>

</head>


<body>

    <div class="register-page">

        <div class="register-card">


            {{-- LOGO WEBSITE --}}
            <div class="web-logo">
                ✦
            </div>


            {{-- HEADER --}}
            <div class="register-header">

                <h1 class="register-title">
                    BUAT AKUN
                </h1>

                <p class="register-subtitle">
                    PERPUSTAKAAN SMK NEGERI 2 SURAKARTA
                </p>

            </div>


            {{-- FORM REGISTER --}}
            <form method="POST" action="{{ route('register') }}">

                @csrf


                {{-- NAMA --}}
                <div class="form-group">

                    <label
                        for="name"
                        class="form-label">

                        Nama Lengkap

                    </label>


                    <div class="input-wrapper">

                        <span class="input-icon">
                            ♟
                        </span>

                        <input
                            id="name"
                            class="form-input"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            placeholder="Masukkan nama lengkap">

                    </div>


                    @if ($errors->get('name'))

                        <div class="input-error">
                            {{ $errors->first('name') }}
                        </div>

                    @endif

                </div>


                {{-- EMAIL --}}
                <div class="form-group">

                    <label
                        for="email"
                        class="form-label">

                        Email

                    </label>


                    <div class="input-wrapper">

                        <span class="input-icon">
                            ✉
                        </span>

                        <input
                            id="email"
                            class="form-input"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="username"
                            placeholder="Masukkan email">

                    </div>


                    @if ($errors->get('email'))

                        <div class="input-error">
                            {{ $errors->first('email') }}
                        </div>

                    @endif

                </div>


                {{-- PASSWORD --}}
                <div class="form-group">

                    <label
                        for="password"
                        class="form-label">

                        Password

                    </label>


                    <div class="input-wrapper">

                        <span class="input-icon">
                            🔒
                        </span>

                        <input
                            id="password"
                            class="form-input"
                            type="password"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="Buat password">

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('password', 'passwordButton')"
                            id="passwordButton">

                            ◉

                        </button>

                    </div>


                    @if ($errors->get('password'))

                        <div class="input-error">
                            {{ $errors->first('password') }}
                        </div>

                    @endif

                </div>


                {{-- KONFIRMASI PASSWORD --}}
                <div class="form-group">

                    <label
                        for="password_confirmation"
                        class="form-label">

                        Konfirmasi Password

                    </label>


                    <div class="input-wrapper">

                        <span class="input-icon">
                            🔒
                        </span>

                        <input
                            id="password_confirmation"
                            class="form-input"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Ulangi password">

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword('password_confirmation', 'confirmPasswordButton')"
                            id="confirmPasswordButton">

                            ◉

                        </button>

                    </div>


                    @if ($errors->get('password_confirmation'))

                        <div class="input-error">
                            {{ $errors->first('password_confirmation') }}
                        </div>

                    @endif

                </div>


                {{-- ACTION --}}
                <div class="register-actions">

                    <a
                        href="{{ route('login') }}"
                        class="login-link">

                        Sudah punya akun? Login

                    </a>


                    <button
                        type="submit"
                        class="register-button">

                        Daftar

                        <span class="register-arrow">
                            →
                        </span>

                    </button>

                </div>

            </form>


            {{-- FOOTER --}}
            <div class="register-footer">

                Sistem Informasi Perpustakaan
                <br>
                SMK Negeri 2 Surakarta

            </div>

        </div>

    </div>


    <script>

        function togglePassword(inputId, buttonId) {

            const password =
                document.getElementById(inputId);

            const button =
                document.getElementById(buttonId);


            if (password.type === 'password') {

                password.type = 'text';

                button.textContent = '◉';

            } else {

                password.type = 'password';

                button.textContent = '◉';

            }

        }

    </script>

</body>

</html>