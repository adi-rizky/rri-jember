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
                    <a class="nav-link" href="#!">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">Tentang Kami</a>
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
                <button type="button" class="btn btn-primary ms-3">Login</button>
                <button type="button" class="btn btn-primary ms-3">Register</button>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->