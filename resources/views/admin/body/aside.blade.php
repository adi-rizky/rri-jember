<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Admin RRI JEMBER</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('pengajuan') }}">
            <i class="fas fa-file"></i>
            <span>Pengajuan</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('paketIklan') }}">
            <i class="fas fa-clipboard"></i>
            <span>Paket Iklan</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kategori') }}">
            <i class="fas fa-briefcase"></i>
            <span>Kategori Iklan</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('riwayatpesanan') }}">
            <i class="fas fa-history"></i>
            <span>Riwayat Pesanan</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>User</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            </div>
    </li>
</ul>
<!-- End of Sidebar -->