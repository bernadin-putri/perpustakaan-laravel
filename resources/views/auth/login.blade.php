<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Perpustakaan</title>

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
   REGISTER LINK
============================== */

.register-link {
    margin-top: 20px;

    text-align: center;

    color: rgba(210, 220, 245, 0.65);

    font-size: 12px;
}


.register-link a {
    margin-left: 4px;

    color: #bd8cff;

    font-weight: 600;

    text-decoration: none;

    transition: 0.2s;
}


.register-link a:hover {
    color: white;

    text-decoration: underline;
}

        /* ==============================
           HALAMAN LOGIN
        ============================== */

        .login-page {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 45px 20px;
        }


        /* ==============================
           CARD
        ============================== */

        .login-card {
            width: 100%;
            max-width: 470px;

            padding: 40px 46px 32px;

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
            width: 72px;
            height: 72px;

            margin: 0 auto 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                );

            box-shadow:
                0 10px 30px rgba(120, 70, 255, 0.40);

            color: white;

            font-size: 38px;
            font-weight: 700;
        }


        /* ==============================
           HEADER
        ============================== */

        .login-header {
            text-align: center;

            margin-bottom: 32px;
        }


        .login-title {
            margin: 0;

            color: white;

            font-size: 30px;
            font-weight: 800;

            letter-spacing: 1px;
        }


        .login-subtitle {
            margin: 9px 0 0;

            color: rgba(215, 225, 255, 0.72);

            font-size: 13px;
            font-weight: 500;

            letter-spacing: 0.4px;
        }


        /* ==============================
           SESSION STATUS
        ============================== */

        .session-status {
            margin-bottom: 18px;

            padding: 12px 14px;

            border-radius: 10px;

            background: rgba(65, 210, 160, 0.12);

            border: 1px solid rgba(65, 210, 160, 0.25);

            color: #baffdf;

            font-size: 13px;
        }


        /* ==============================
           FORM
        ============================== */

        .form-group {
            margin-bottom: 21px;
        }


        .form-label {
            display: block;

            margin-bottom: 8px;

            color: #f4f6ff;

            font-size: 14px;
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

            font-size: 18px;

            pointer-events: none;
        }


        .form-input {
            width: 100%;
            height: 50px;

            padding: 0 15px 0 47px;

            border-radius: 11px;

            border: 1px solid rgba(110, 155, 235, 0.38);

            outline: none;

            background:
                rgba(4, 22, 61, 0.52);

            color: white;

            font-family: inherit;
            font-size: 14px;

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
           PASSWORD EYE
        ============================== */

        .password-toggle {
            position: absolute;

            right: 14px;
            top: 50%;

            transform: translateY(-50%);

            border: none;
            background: transparent;

            color: #aebce5;

            font-size: 17px;

            cursor: pointer;
        }


        /* ==============================
           ERROR
        ============================== */

        .input-error {
            margin-top: 7px;

            color: #ff9ca9;

            font-size: 12px;
        }


        /* ==============================
           REMEMBER
        ============================== */

        .remember-row {
            display: flex;
            align-items: center;

            margin-top: 2px;
        }


        .remember-checkbox {
            width: 16px;
            height: 16px;

            margin: 0;

            accent-color: #8755ff;

            cursor: pointer;
        }


        .remember-label {
            margin-left: 9px;

            color: rgba(220, 228, 250, 0.75);

            font-size: 13px;

            cursor: pointer;
        }


        /* ==============================
           ACTION
        ============================== */

        .login-actions {
            display: flex;

            align-items: center;
            justify-content: space-between;

            margin-top: 28px;

            gap: 20px;
        }


        .forgot-link {
            color: #bc8cff;

            font-size: 13px;

            text-decoration: none;

            transition: 0.2s;
        }


        .forgot-link:hover {
            color: white;
        }


        /* ==============================
           LOGIN BUTTON
        ============================== */

        .login-button {
            min-width: 130px;

            height: 47px;

            padding: 0 25px;

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

            font-size: 14px;
            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 9px 25px rgba(110, 65, 255, 0.34);

            transition: all 0.2s ease;
        }


        .login-button:hover {
            transform: translateY(-2px);

            box-shadow:
                0 13px 30px rgba(110, 65, 255, 0.48);
        }


        .login-button:active {
            transform: translateY(0);
        }


        .login-arrow {
            margin-left: 7px;

            font-size: 17px;
        }


        /* ==============================
           FOOTER
        ============================== */

        .login-footer {
            margin-top: 28px;
            padding-top: 20px;

            border-top:
                1px solid rgba(255, 255, 255, 0.10);

            text-align: center;

            color:
                rgba(205, 217, 245, 0.55);

            font-size: 11px;

            line-height: 1.6;
        }


        /* ==============================
           RESPONSIVE
        ============================== */

        @media (max-width: 520px) {

            .login-page {
                padding: 25px 15px;
            }

            .login-card {
                padding: 34px 25px 28px;

                border-radius: 20px;
            }

            .login-title {
                font-size: 25px;
            }

            .login-actions {
                flex-direction: column-reverse;

                align-items: stretch;
            }

            .login-button {
                width: 100%;
            }

            .forgot-link {
                text-align: center;
            }
        }

    </style>

</head>


<body>

    <div class="login-page">

        <div class="login-card">


            {{-- LOGO WEBSITE --}}
            <div class="web-logo">
                ✦
            </div>


            {{-- HEADER --}}
            <div class="login-header">

                <h1 class="login-title">
                    PERPUSTAKAAN
                </h1>

                <p class="login-subtitle">
                    SMK NEGERI 2 SURAKARTA
                </p>

            </div>


            {{-- SESSION STATUS --}}
            @if (session('status'))

                <div class="session-status">
                    {{ session('status') }}
                </div>

            @endif


            {{-- FORM LOGIN --}}
            <form method="POST" action="{{ route('login') }}">

                @csrf


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
                            autofocus
                            autocomplete="username"
                            placeholder="Masukkan email kamu">

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
                            autocomplete="current-password"
                            placeholder="Masukkan password kamu">

                        <button
                            type="button"
                            class="password-toggle"
                            onclick="togglePassword()"
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


                {{-- REMEMBER ME --}}
                <div class="remember-row">

                    <input
                        id="remember_me"
                        type="checkbox"
                        class="remember-checkbox"
                        name="remember">

                    <label
                        for="remember_me"
                        class="remember-label">

                        Ingat saya

                    </label>

                </div>


                {{-- ACTION --}}
                <div class="login-actions">

                    @if (Route::has('password.request'))

                        <a
                            class="forgot-link"
                            href="{{ route('password.request') }}">

                            Lupa password?

                        </a>

                    @endif


                    <button
                        type="submit"
                        class="login-button">

                        Login

                        <span class="login-arrow">
                            →
                        </span>

                    </button>

                </div>

            </form>


            {{-- REGISTER LINK --}}
            <div class="register-link">

                Belum punya akun?

                <a href="{{ route('register') }}">
                    Daftar di sini
                </a>

            </div>

            
            {{-- FOOTER --}}
            <div class="login-footer">

                Sistem Informasi Perpustakaan
                <br>
                SMK Negeri 2 Surakarta

            </div>

        </div>

    </div>


    <script>

        function togglePassword() {

            const password =
                document.getElementById('password');

            const button =
                document.getElementById('passwordButton');


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