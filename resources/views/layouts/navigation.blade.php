<nav class="deep-navbar">
    <div class="nav-container">

        {{-- LOGO --}}
        <a href="{{ route('dashboard') }}" class="nav-brand">
            <div class="brand-icon">
                ✦
            </div>

            <div class="brand-text">
                <div class="brand-title">PERPUSTAKAAN</div>
                <div class="brand-subtitle">SMK NEGERI 2 SURAKARTA</div>
            </div>
        </a>


        {{-- MENU TENGAH --}}
        <div class="nav-menu">

            <a href="{{ route('dashboard') }}"
               class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                Dashboard
            </a>

            <a href="{{ route('buku.index') }}"
               class="nav-link {{ request()->routeIs('buku.*') ? 'active' : '' }}">
                Data Buku
            </a>

            <a href="{{ route('anggota.index') }}"
               class="nav-link {{ request()->routeIs('anggota.*') ? 'active' : '' }}">
                Data Anggota
            </a>

            <a href="{{ route('peminjaman.index') }}"
               class="nav-link {{ request()->routeIs('peminjaman.*') ? 'active' : '' }}">
                Peminjaman
            </a>

        </div>


        {{-- BAGIAN USER --}}
        <div class="nav-user">

            {{-- PROFIL --}}
            <a href="{{ route('profile.edit') }}" class="profile-link">
                <span class="profile-small-icon">♟</span>
                <span>Profil</span>
            </a>

            <div class="user-divider"></div>


            {{-- USER DROPDOWN --}}
            <div class="user-dropdown">

                <button type="button"
                        class="user-button"
                        onclick="toggleUserMenu()">

                    <div class="profile-icon">
                        ♟
                    </div>

                    <div class="user-info">
                        <div class="user-name">
                            {{ Auth::user()->name ?? 'Bernadin' }}
                        </div>

                        <div class="user-email">
                            {{ Auth::user()->email ?? 'adminittut@gmail.com' }}
                        </div>
                    </div>

                    <span class="dropdown-arrow">⌄</span>

                </button>


                {{-- DROPDOWN MENU --}}
                <div class="user-menu" id="userMenu">

                    <a href="{{ route('profile.edit') }}"
                       class="user-menu-item active-menu">

                        <span class="menu-icon purple">♟</span>
                        <span>Profil</span>

                    </a>



                    <div class="menu-divider"></div>


                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit"
                                class="user-menu-item logout-menu">

                            <span class="menu-icon red">⇥</span>
                            <span>Logout</span>

                        </button>
                    </form>

                </div>

            </div>


            {{-- LOGOUT UTAMA --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="logout-button">
                    Logout
                </button>
            </form>

        </div>

    </div>
</nav>


<style>

* {
    box-sizing: border-box;
}


/* ================================
   NAVBAR
================================ */

.deep-navbar {
    width: 100%;
    height: 92px;

    background:
        linear-gradient(
            90deg,
            rgba(7, 30, 75, 0.97),
            rgba(25, 28, 92, 0.96),
            rgba(55, 17, 100, 0.97)
        );

    border-bottom: 1px solid rgba(120, 160, 255, 0.22);

    box-shadow:
        0 5px 25px rgba(0, 0, 0, 0.25);

    position: relative;
    z-index: 1000;
}


/* ================================
   CONTAINER
================================ */

.nav-container {
    width: 100%;
    height: 100%;

    padding: 0 48px 0 78px;

    display: flex;
    align-items: center;
    justify-content: space-between;
}


/* ================================
   BRAND
================================ */

.nav-brand {
    display: flex;
    align-items: center;
    gap: 17px;

    text-decoration: none;
    color: white;

    flex-shrink: 0;
}


.brand-icon {
    width: 54px;
    height: 54px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 14px;

    background:
        linear-gradient(
            135deg,
            #704cff,
            #c14cff
        );

    color: white;

    font-size: 30px;
    font-weight: bold;

    box-shadow:
        0 8px 25px rgba(115, 70, 255, 0.35);
}


.brand-text {
    line-height: 1;
}


.brand-title {
    font-size: 19px;
    font-weight: 800;

    letter-spacing: 1.4px;

    color: #ffffff;
}


.brand-subtitle {
    margin-top: 8px;

    font-size: 11px;
    font-weight: 500;

    letter-spacing: 0.8px;

    color: rgba(210, 220, 255, 0.75);
}


/* ================================
   MENU
================================ */

.nav-menu {
    display: flex;
    align-items: center;
    gap: 8px;

    margin-left: 55px;
    margin-right: auto;
}


.nav-link {
    height: 53px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 0 20px;

    border-radius: 13px;

    text-decoration: none;

    color: rgba(235, 240, 255, 0.88);

    font-size: 16px;
    font-weight: 600;

    transition: all 0.25s ease;
}


.nav-link:hover {
    color: white;

    background: rgba(120, 90, 255, 0.15);
}


.nav-link.active {
    color: white;

    background:
        linear-gradient(
            135deg,
            #7150ff,
            #bd54f5
        );

    box-shadow:
        0 8px 25px rgba(115, 70, 255, 0.35);
}


/* ================================
   USER AREA
================================ */

.nav-user {
    display: flex;
    align-items: center;

    gap: 18px;

    flex-shrink: 0;
}


/* PROFIL */

.profile-link {
    display: flex;
    align-items: center;
    gap: 10px;

    color: white;

    text-decoration: none;

    font-size: 15px;
    font-weight: 600;

    transition: 0.2s;
}


.profile-link:hover {
    color: #d7c8ff;
}


.profile-small-icon {
    font-size: 22px;
    color: white;
}


/* GARIS */

.user-divider {
    width: 1px;
    height: 38px;

    background: rgba(255,255,255,0.35);
}


/* ================================
   USER DROPDOWN BUTTON
================================ */

.user-dropdown {
    position: relative;
}


.user-button {
    border: none;
    background: transparent;

    display: flex;
    align-items: center;
    gap: 11px;

    padding: 0;

    color: white;

    cursor: pointer;
}


.profile-icon {
    width: 43px;
    height: 43px;

    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    background:
        linear-gradient(
            135deg,
            rgba(165, 105, 255, 0.45),
            rgba(80, 75, 180, 0.45)
        );

    border: 1px solid rgba(205, 185, 255, 0.35);

    color: #d99cff;

    font-size: 20px;
}


.user-info {
    min-width: 115px;
    text-align: left;
}


.user-name {
    font-size: 15px;
    font-weight: 700;

    color: white;

    line-height: 1.2;
}


.user-email {
    margin-top: 5px;

    font-size: 10px;

    color: rgba(220, 225, 255, 0.72);

    white-space: nowrap;
}


.dropdown-arrow {
    font-size: 22px;

    color: white;

    margin-left: 3px;

    transition: transform 0.2s ease;
}


/* ================================
   DROPDOWN
================================ */

.user-menu {
    position: absolute;

    top: 57px;
    right: -8px;

    width: 200px;

    padding: 10px;

    border-radius: 15px;

    background:
        linear-gradient(
            145deg,
            rgba(11, 35, 85, 0.98),
            rgba(18, 28, 75, 0.98)
        );

    border: 1px solid rgba(105, 170, 255, 0.4);

    box-shadow:
        0 20px 45px rgba(0, 0, 0, 0.4),
        0 0 25px rgba(75, 110, 255, 0.12);

    display: none;

    z-index: 9999;
}


.user-menu.show {
    display: block;
}


.user-menu-item {
    width: 100%;

    display: flex;
    align-items: center;

    gap: 14px;

    padding: 13px 12px;

    border-radius: 10px;

    color: white;

    background: transparent;

    border: none;

    text-decoration: none;

    font-size: 14px;

    cursor: pointer;

    text-align: left;

    transition: 0.2s;
}


.user-menu-item:hover,
.active-menu {
    background:
        rgba(60, 100, 190, 0.25);
}


.menu-icon {
    width: 24px;

    font-size: 20px;

    text-align: center;

    color: #dce5ff;
}


.menu-icon.purple {
    color: #b65cff;
}


.menu-icon.red {
    color: #ff6b7a;
}


.menu-divider {
    height: 1px;

    margin: 7px 5px;

    background: rgba(255,255,255,0.15);
}


.logout-menu {
    font-family: inherit;
}


/* ================================
   LOGOUT UTAMA
================================ */

.logout-button {
    height: 47px;

    padding: 0 20px;

    border-radius: 12px;

    border: 1px solid rgba(180, 150, 255, 0.4);

    background:
        rgba(130, 90, 200, 0.20);

    color: white;

    font-size: 15px;
    font-weight: 700;

    cursor: pointer;

    transition: all 0.2s ease;
}


.logout-button:hover {
    background:
        rgba(145, 100, 230, 0.38);

    border-color:
        rgba(200, 175, 255, 0.6);

    transform: translateY(-1px);
}


/* ================================
   RESPONSIVE
================================ */

@media (max-width: 1200px) {

    .nav-container {
        padding: 0 25px;
    }

    .nav-menu {
        margin-left: 25px;
    }

    .nav-link {
        padding: 0 13px;
        font-size: 14px;
    }

    .profile-link {
        display: none;
    }

}


@media (max-width: 900px) {

    .brand-text {
        display: none;
    }

    .nav-menu {
        gap: 3px;
        margin-left: 20px;
    }

    .nav-link {
        padding: 0 10px;
    }

    .user-info {
        display: none;
    }

}


</style>


<script>

function toggleUserMenu() {

    const menu = document.getElementById('userMenu');

    menu.classList.toggle('show');

}


/* Klik di luar dropdown → tutup */

document.addEventListener('click', function(event) {

    const dropdown = document.querySelector('.user-dropdown');

    const menu = document.getElementById('userMenu');

    if (
        dropdown &&
        menu &&
        !dropdown.contains(event.target)
    ) {
        menu.classList.remove('show');
    }

});

</script>