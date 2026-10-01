<section class="delete-account-section">

    <style>

        /* =====================================================
           DELETE ACCOUNT SECTION
        ===================================================== */

        .delete-account-section {
            width: 100%;
        }


        .delete-account-section header h2 {
            margin: 0;

            color: #ffffff !important;

            font-size: 20px !important;

            font-weight: 700 !important;
        }


        .delete-account-section header p {
            margin-top: 8px;

            max-width: 850px;

            color:
                rgba(225, 235, 255, 0.70) !important;

            font-size: 14px !important;

            line-height: 1.7;
        }


        /* =====================================================
           BUTTON DELETE ACCOUNT
        ===================================================== */

        .delete-main-button {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            margin-top: 18px;

            padding: 11px 20px;

            border: none !important;

            border-radius: 10px !important;

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                ) !important;

            color: #ffffff !important;

            font-size: 13px;

            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 8px 22px
                rgba(110, 65, 255, 0.28);

            transition:
                all 0.2s ease;
        }


        .delete-main-button:hover {

            transform:
                translateY(-1px);

            box-shadow:
                0 12px 28px
                rgba(110, 65, 255, 0.40);
        }


        /* =====================================================
           MODAL BACKGROUND
        ===================================================== */

        .custom-delete-modal {

            position: fixed;

            inset: 0;

            z-index: 999999;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 25px;

            background:
                rgba(2, 10, 30, 0.78);

            backdrop-filter:
                blur(5px);

            -webkit-backdrop-filter:
                blur(5px);
        }


        /* =====================================================
           MODAL BOX
        ===================================================== */

        .custom-delete-modal-box {

            width: 100%;

            max-width: 600px;

            padding: 32px;

            box-sizing: border-box;

            border-radius: 20px;

            background:
                linear-gradient(
                    145deg,
                    #102b68,
                    #1b205b
                );

            border:
                1px solid
                rgba(130, 170, 255, 0.32);

            box-shadow:
                0 30px 80px
                rgba(0, 0, 0, 0.60);

            color: #ffffff;
        }


        /* =====================================================
           MODAL TITLE
        ===================================================== */

        .custom-delete-modal-title {

            margin: 0;

            color:
                #ffffff !important;

            font-size:
                23px;

            line-height:
                1.4;

            font-weight:
                800;
        }


        /* =====================================================
           MODAL DESCRIPTION
        ===================================================== */

        .custom-delete-modal-description {

            margin:
                12px 0 0;

            color:
                rgba(225, 235, 255, 0.78) !important;

            font-size:
                14px;

            line-height:
                1.7;
        }


        /* =====================================================
           PASSWORD
        ===================================================== */

        .custom-delete-password {

            width: 100%;

            height: 52px;

            margin-top: 24px;

            padding:
                0 16px;

            box-sizing:
                border-box;

            color:
                #ffffff !important;

            background:
                rgba(4, 22, 61, 0.78) !important;

            border:
                1px solid
                rgba(130, 170, 255, 0.38) !important;

            border-radius:
                11px !important;

            outline:
                none !important;

            font-size:
                14px;

            transition:
                all 0.2s ease;
        }


        .custom-delete-password:focus {

            border-color:
                #9a6cff !important;

            background:
                rgba(4, 22, 61, 0.95) !important;

            box-shadow:
                0 0 0 3px
                rgba(125, 85, 255, 0.16) !important;
        }


        .custom-delete-password::placeholder {

            color:
                rgba(210, 225, 255, 0.48);
        }


        /* =====================================================
           ERROR
        ===================================================== */

        .custom-delete-error {

            margin-top:
                8px;

            color:
                #ff9da9 !important;

            font-size:
                13px;
        }


        /* =====================================================
           BUTTON AREA
        ===================================================== */

        .custom-delete-actions {

            display:
                flex;

            align-items:
                center;

            justify-content:
                flex-end;

            gap:
                12px;

            margin-top:
                26px;
        }


        /* =====================================================
           CANCEL
        ===================================================== */

        .custom-cancel-button {

            min-width:
                100px;

            height:
                44px;

            padding:
                0 18px;

            border:
                1px solid
                rgba(160, 185, 230, 0.35);

            border-radius:
                10px;

            background:
                rgba(255, 255, 255, 0.06);

            color:
                #dceaff;

            font-size:
                12px;

            font-weight:
                700;

            cursor:
                pointer;

            transition:
                all 0.2s ease;
        }


        .custom-cancel-button:hover {

            background:
                rgba(255, 255, 255, 0.12);

            border-color:
                rgba(180, 200, 240, 0.50);
        }


        /* =====================================================
           CONFIRM DELETE
        ===================================================== */

        .custom-confirm-button {

            min-width:
                155px;

            height:
                44px;

            padding:
                0 20px;

            border:
                none;

            border-radius:
                10px;

            background:
                linear-gradient(
                    135deg,
                    #704cff,
                    #c14cff
                );

            color:
                #ffffff;

            font-size:
                12px;

            font-weight:
                800;

            letter-spacing:
                0.4px;

            cursor:
                pointer;

            box-shadow:
                0 8px 20px
                rgba(110, 65, 255, 0.30);

            transition:
                all 0.2s ease;
        }


        .custom-confirm-button:hover {

            transform:
                translateY(-1px);

            background:
                linear-gradient(
                    135deg,
                    #805fff,
                    #ca61ff
                );

            box-shadow:
                0 12px 25px
                rgba(110, 65, 255, 0.42);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 600px) {

            .custom-delete-modal {

                padding:
                    15px;
            }


            .custom-delete-modal-box {

                padding:
                    23px;

                border-radius:
                    17px;
            }


            .custom-delete-modal-title {

                font-size:
                    19px;
            }


            .custom-delete-modal-description {

                font-size:
                    13px;
            }


            .custom-delete-actions {

                flex-direction:
                    column-reverse;

                align-items:
                    stretch;
            }


            .custom-cancel-button,
            .custom-confirm-button {

                width:
                    100%;
            }

        }

    </style>


    <!-- =====================================================
         DELETE ACCOUNT CARD
    ===================================================== -->

    <header>

        <h2>
            {{ __('Delete Account') }}
        </h2>


        <p>
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

    </header>


    <!-- =====================================================
         OPEN MODAL BUTTON
    ===================================================== -->

    <button
        type="button"
        class="delete-main-button"
        x-data
        x-on:click="$dispatch('open-delete-modal')"
    >
        {{ __('Delete Account') }}
    </button>


    <!-- =====================================================
         CUSTOM DELETE MODAL
    ===================================================== -->

    <div
        x-data="{ showDeleteModal: false }"

        x-on:open-delete-modal.window="showDeleteModal = true"

        x-on:keydown.escape.window="showDeleteModal = false"

        x-show="showDeleteModal"

        x-cloak

        class="custom-delete-modal"
    >

        <!-- =================================================
             MODAL BOX
        ================================================== -->

        <div
            class="custom-delete-modal-box"

            x-on:click.stop
        >


            <!-- =================================================
                 FORM DELETE
            ================================================== -->

            <form
                method="POST"
                action="{{ route('profile.destroy') }}"
            >

                @csrf

                @method('delete')


                <!-- =============================================
                     TITLE
                ============================================== -->

                <h2 class="custom-delete-modal-title">

                    {{ __('Are you sure you want to delete your account?') }}

                </h2>


                <!-- =============================================
                     DESCRIPTION
                ============================================== -->

                <p class="custom-delete-modal-description">

                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

                </p>


                <!-- =============================================
                     PASSWORD
                ============================================== -->

                <input

                    id="delete-password"

                    name="password"

                    type="password"

                    class="custom-delete-password"

                    placeholder="{{ __('Password') }}"

                    autocomplete="current-password"

                    required

                    autofocus
                >


                @if ($errors->userDeletion->get('password'))

                    <div class="custom-delete-error">

                        {{ $errors->userDeletion->get('password')[0] }}

                    </div>

                @endif


                <!-- =============================================
                     ACTION BUTTON
                ============================================== -->

                <div class="custom-delete-actions">


                    <button

                        type="button"

                        class="custom-cancel-button"

                        x-on:click="showDeleteModal = false"
                    >

                        {{ __('Cancel') }}

                    </button>


                    <button

                        type="submit"

                        class="custom-confirm-button"
                    >

                        {{ __('Delete Account') }}

                    </button>


                </div>

            </form>

        </div>

    </div>

</section>