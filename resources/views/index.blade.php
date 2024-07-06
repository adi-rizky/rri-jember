@extends('index_master')
<!-- hero section -->
<section class="hero" id="home">
    <main class="content">
        <h1>Sekali di Udara Tetap di <span>Udara</span></h1>
        <p>Selamat Datang di Layanan Iklan Radio Republik Indonesia Jember</p>
        <a href="#" class="cta">Pasang Iklan Sekarang</a>
    </main>

</section>
<!-- hero secton end -->

<!-- about section start -->
<section id="about" class="about">
    <h2><span>Tentang </span>Kami</h2>

    <div class="row">
        <div class="about-img">
            <img src="/pelanggan/assets/img/tentang-kami.jpeg" alt="Tentang Kami">
        </div>
        <div class="content">
            <h3>Apa itu Iklan Radio?</h3>
            <p>Iklan radio merupakan jenis iklan dari media elektronik dengan menggunakan perangkat radio. Karena bentuknya berupa audio, jadi iklan di radio hanya bisa didengarkan, karena bentuknya hanya berupa audio (suara).</p>
            <p>LPP RRI Jember adalah stasiun radio milik pemerintah Indonesia yang
                berlokasi di Jalan Letjen. Panjaitan No. 61 Jember. Sebagai Lembaga Penyiaran
                Publik yang independen, netral dan tidak komersial yang berfungsi memberikan
                pelayanan siaran informasi, pendidikan, hiburan yang sehat, kontrol sosial, serta
                menjaga citra positif bangsa di dunia internasional dengan slogan "Sekali di
                Udara, Tetap di Udara".</p>
        </div>
    </div>
</section>
<!-- about section end -->

<!-- menu section start -->
<section id="menu" class="menu">
    <h2><span>Menu </span>Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <div class="row">
        <div class="menu-card">
            <img src="/pelanggan/assets/img/menu/menu1.jpg" alt="radio" class="menu-card-img">
            <h3 class="menu-card-title">- Ad-Libs -</h3>
            <p class="menu-card-content">iklan yang disampaikan lansung oleh penyiar disela acara dengan durasi maksimal 1 menit</p>
        </div>
        <div class="menu-card">
            <img src="/pelanggan/assets/img/menu/menu1.jpg" alt="radio" class="menu-card-img">
            <h3 class="menu-card-title">- TalkShow -</h3>
            <p class="menu-card-content">Penyampaian iklan berupa siaran dialog yang membahas tentang sebuah topik yang lagi hangat di tengah masyarakat dengan menghadirkan narasumber yang berkompenten menerima respon dari pendengar melalui whatsapp atau telpon, iklan ini berdurasi 45 menit.</p>
        </div>
        <div class="menu-card">
            <img src="/pelanggan/assets/img/menu/menu1.jpg" alt="radio" class="menu-card-img">
            <h3 class="menu-card-title">- Spot -</h3>
            <p class="menu-card-content">Iklan radio dalam bentuk rekaman yang diputar di sela sela acara, durasi 60 detik, disertai sound effect, suara talent voice over yang renyah, sehingga bisa menciptakan theater of mind bagi yang mendengarkan iklannya. Bertujuan untuk menciptakan awareness atau kesadaran terhadap sebuah informasi atau produk.</p>
        </div>
    </div>
</section>
<!-- menu section end -->

<!-- contact section start -->
<section id="contact" class="contact">
    <h2><span>Kontak </span>Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.2327925289646!2d113.70647907421323!3d-8.17928808199165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd694291ba19ca9%3A0xe325a4bf905166c0!2sLPP%20RRI%20Jember!5e0!3m2!1sid!2sid!4v1720000409367!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <form action="">
            <div class="input-group">
                <i data-feather="user"></i>
                <input type="text" placeholder="nama">
            </div>
            <div class="input-group">
                <i data-feather="mail"></i>
                <input type="text" placeholder="email">
            </div>
            <div class="input-group">
                <i data-feather="phone"></i>
                <input type="text" placeholder="no hp">
            </div>
            <button type="submit" class="btn">kirim pesan </button>
        </form>
    </div>
</section>
<!-- contact section end -->
@section('content')