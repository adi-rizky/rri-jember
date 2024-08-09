<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-scroll fixed-top shadow-0 border-bottom border-dark">
    <div class="container">
        <a class="navbar-brand" href="#!"><i class="fab fa-mdb fa-4x"></i></a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{ route('tentangkami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">Layanan Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Pengajuan Iklan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">Kontak Kami</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('riwayat.pesanan') }}">Riwayat Pesanan</a>
                </li>
                @endauth

                @auth
                <div class="d-flex align-items-center ms-auto">
                    <a class="nav-link me-3" href="{{ route('edituser') }}" id="userDropdown" role="button">
                        <span class="d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <button type="button" class="btn btn-primary btn-sm" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </button>
                </div>
                @else
                <a href="/login" class="btn btn-primary btn-sm ms-3" role="button">Login</a>
                <a href="/register" class="btn btn-primary btn-sm ms-3" role="button">Register</a>
                @endauth

            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->