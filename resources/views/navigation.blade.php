<nav class="deep-navbar">

    <div class="nav-container">

        <!-- BRAND -->
        <a href="{{ route('buku.index') }}" class="nav-brand">

            <div class="brand-icon">
                ✦
            </div>

            <div>
                <div class="brand-title">
                    PERPUSTAKAAN
                </div>

                <div class="brand-subtitle">
                    SMK NEGERI 2 SURAKARTA
                </div>
            </div>

        </a>


        <!-- MENU -->
        <div class="nav-menu">

            <a
                href="{{ route('buku.index') }}"
                class="nav-link {{ request()->routeIs('buku.*') ? 'active' : '' }}"
            >
                Data Buku
            </a>

            <a
                href="{{ route('anggota.index') }}"
                class="nav-link {{ request()->routeIs('anggota.*') ? 'active' : '' }}"
            >
                Data Anggota
            </a>

            <a
                href="{{ route('peminjaman.index') }}"
                class="nav-link {{ request()->routeIs('peminjaman.*') ? 'active' : '' }}"
            >
                Peminjaman
            </a>

        </div>


        <!-- USER -->
        <div class="nav-user">

            <div class="user-info">

                <div class="user-name">
                    {{ Auth::user()->name ?? 'Bernadin' }}
                </div>

                @auth
                    <div class="user-email">
                        {{ Auth::user()->email }}
                    </div>
                @endauth

            </div>


            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >
                    Logout
                </button>

            </form>

        </div>

    </div>

</nav>