<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Perpustakaan') }}
    </title>


    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    />


    <!-- CSS Perpustakaan -->

    <link
        rel="stylesheet"
        href="{{ asset('css/perpustakaan.css') }}"
    >


    <!-- Scripts -->

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])


    <style>

        html,
        body {
            margin: 0;
            padding: 0;

            min-height: 100vh;

            font-family: Arial, Helvetica, sans-serif;

            color: white;

            background-color: #0A2353 !important;

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


        /*
         * Wrapper utama Breeze
         * Jangan gunakan bg-gray-100
         */

        .min-h-screen {
            min-height: 100vh;

            background: transparent !important;
        }


        /*
         * Konten halaman
         */

        main {
            background: transparent !important;
        }


        /*
         * Header bawaan Breeze
         * Dibuat transparan karena navbar
         * perpustakaan sudah digunakan.
         */

        header {
            background: transparent !important;

            box-shadow: none !important;
        }

    </style>

</head>


<body>

    <div class="min-h-screen">

        @include('layouts.navigation')


        <!-- Page Heading -->

        @isset($header)

            <header>

                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                    {{ $header }}

                </div>

            </header>

        @endisset


        <!-- Page Content -->

        <main>

            {{ $slot }}

        </main>

    </div>

</body>

</html>