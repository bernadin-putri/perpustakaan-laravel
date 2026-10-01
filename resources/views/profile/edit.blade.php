<x-app-layout>

    <style>

        /* =====================================================
           GLOBAL
        ===================================================== */

        html,
        body {

            margin: 0;
            padding: 0;

            min-height: 100vh;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            color: white;

            background-color:
                #0A2353 !important;

            background-image:

                linear-gradient(
                    rgba(8, 31, 76, 0.35),
                    rgba(8, 31, 76, 0.35)
                ),

                url('/images/background.png') !important;

            background-position:
                center center !important;

            background-size:
                cover !important;

            background-repeat:
                no-repeat !important;

            background-attachment:
                fixed !important;

            overflow-x:
                hidden !important;
        }


        .min-h-screen {

            min-height:
                100vh;

            background:
                transparent !important;
        }


        main {

            background:
                transparent !important;
        }


        /* =====================================================
           PROFILE CONTAINER
        ===================================================== */

        .profile-container {

            width:
                100%;

            max-width:
                1100px;

            margin:
                0 auto;

            padding:
                45px 30px 70px;

            box-sizing:
                border-box;
        }


        /* =====================================================
           HEADER PROFIL
        ===================================================== */

        .profile-header {

            margin-bottom:
                28px;
        }


        .profile-badge {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                9px 16px;

            margin-bottom:
                16px;

            border-radius:
                50px;

            background:
                rgba(80, 120, 255, 0.12);

            border:
                1px solid
                rgba(130, 170, 255, 0.30);

            color:
                #b9d5ff;

            font-size:
                12px;

            font-weight:
                800;

            letter-spacing:
                1.5px;
        }


        .profile-title {

            margin:
                0;

            color:
                #ffffff;

            font-size:
                38px;

            line-height:
                1.2;

            font-weight:
                800;
        }


        .profile-description {

            max-width:
                700px;

            margin:
                12px 0 0;

            color:
                rgba(230, 240, 255, 0.70);

            font-size:
                15px;

            line-height:
                1.7;
        }


        /* =====================================================
           PROFILE CARD

           PENTING:
           Tidak menggunakan backdrop-filter.
           Tidak menggunakan overflow:hidden.
           Tidak menggunakan transform.
           
           Ini supaya modal Breeze tetap bisa keluar
           dari container ketika dibuka.
        ===================================================== */

        .profile-card {

            position:
                relative;

            width:
                100%;

            margin-bottom:
                22px;

            padding:
                30px;

            box-sizing:
                border-box;

            background:
                linear-gradient(
                    145deg,
                    rgba(10, 38, 91, 0.88),
                    rgba(24, 29, 86, 0.84)
                );

            border:
                1px solid
                rgba(125, 165, 255, 0.25);

            border-radius:
                22px;

            box-shadow:
                0 20px 55px
                rgba(0, 0, 0, 0.30),

                inset 0 0 30px
                rgba(100, 140, 255, 0.03);
        }


        .profile-card-content {

            width:
                100%;

            max-width:
                900px;
        }


        /* =====================================================
           TEXT
        ===================================================== */

        .profile-card h2,
        .profile-card h3 {

            color:
                #ffffff !important;

            font-weight:
                700 !important;
        }


        .profile-card p {

            color:
                rgba(220, 235, 255, 0.70) !important;
        }


        .profile-card label {

            color:
                #dceaff !important;

            font-weight:
                600 !important;
        }


        /* =====================================================
           INPUT
        ===================================================== */

        .profile-card input,
        .profile-card textarea,
        .profile-card select {

            width:
                100%;

            box-sizing:
                border-box;

            color:
                #ffffff !important;

            background:
                rgba(10, 30, 70, 0.65) !important;

            border:
                1px solid
                rgba(130, 170, 255, 0.25) !important;

            border-radius:
                10px !important;

            outline:
                none !important;

            box-shadow:
                none !important;

            transition:
                border-color 0.2s ease,
                background 0.2s ease;
        }


        .profile-card input:focus,
        .profile-card textarea:focus,
        .profile-card select:focus {

            border-color:
                rgba(130, 180, 255, 0.65) !important;

            background:
                rgba(5, 25, 70, 0.75) !important;

            box-shadow:
                0 0 0 3px
                rgba(125, 85, 255, 0.12) !important;
        }


        .profile-card input::placeholder,
        .profile-card textarea::placeholder {

            color:
                rgba(210, 225, 255, 0.40) !important;
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .profile-card button {

            border-radius:
                10px !important;

            transition:
                all 0.2s ease !important;
        }


        .profile-card button[type="submit"] {

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                ) !important;

            color:
                #ffffff !important;

            border:
                none !important;

            box-shadow:
                0 8px 22px
                rgba(110, 65, 255, 0.28);
        }


        .profile-card button[type="submit"]:hover {

            background:
                linear-gradient(
                    135deg,
                    #805fff,
                    #ca61ff
                ) !important;

            transform:
                translateY(-1px);

            box-shadow:
                0 12px 28px
                rgba(110, 65, 255, 0.40);
        }


        /* =====================================================
           DELETE ACCOUNT CARD
        ===================================================== */

        .profile-card:last-child {

            border:
                1px solid
                rgba(255, 100, 120, 0.25) !important;

            background:
                linear-gradient(
                    145deg,
                    rgba(45, 27, 72, 0.92),
                    rgba(31, 25, 67, 0.90)
                ) !important;
        }


        .profile-card:last-child h2,
        .profile-card:last-child h3 {

            color:
                #ffffff !important;
        }


        .profile-card:last-child p {

            color:
                rgba(225, 235, 255, 0.72) !important;
        }


        /* =====================================================
           DELETE ACCOUNT BUTTON
        ===================================================== */

        .profile-card:last-child button {

            border-radius:
                10px !important;
        }


        /* =====================================================
           LINKS
        ===================================================== */

        .profile-card a {

            color:
                #9bc5ff !important;

            transition:
                color 0.2s ease;
        }


        .profile-card a:hover {

            color:
                #ffffff !important;
        }


        /* =====================================================
           ERROR MESSAGE
        ===================================================== */

        .profile-card [class*="text-red"],
        .profile-card [class*="text-danger"] {

            color:
                #ff9ca9 !important;
        }


        /* =====================================================
           SUCCESS MESSAGE
        ===================================================== */

        .profile-card [class*="text-green"],
        .profile-card [class*="text-emerald"] {

            color:
                #72edf5 !important;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 700px) {

            .profile-container {

                padding:
                    30px 15px 50px;
            }


            .profile-title {

                font-size:
                    30px;
            }


            .profile-description {

                font-size:
                    14px;
            }


            .profile-card {

                padding:
                    22px 18px;

                border-radius:
                    18px;
            }

        }

    </style>


    <!-- =====================================================
         PROFILE CONTENT
    ===================================================== -->

    <div class="profile-container">


        <!-- =================================================
             HEADER PROFIL
        ================================================== -->

        <div class="profile-header">

            <div class="profile-badge">

                ✦ PENGATURAN PROFIL

            </div>


            <h1 class="profile-title">

                Profil Pengguna

            </h1>


            <p class="profile-description">

                Kelola informasi akun, kata sandi,
                dan keamanan akun kamu.

            </p>

        </div>


        <!-- =================================================
             INFORMASI PROFIL
        ================================================== -->

        <div class="profile-card">

            <div class="profile-card-content">

                @include(
                    'profile.partials.update-profile-information-form'
                )

            </div>

        </div>


        <!-- =================================================
             UPDATE PASSWORD
        ================================================== -->

        <div class="profile-card">

            <div class="profile-card-content">

                @include(
                    'profile.partials.update-password-form'
                )

            </div>

        </div>


        <!-- =================================================
             DELETE ACCOUNT
        ================================================== -->

        <div class="profile-card">

            <div class="profile-card-content">

                @include(
                    'profile.partials.delete-user-form'
                )

            </div>

        </div>


    </div>

</x-app-layout>