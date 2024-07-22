@extends('rri.index_master');
<section>
    <div class="hero-overlay">
    </div>
</section>

<!-- Tentang Kami -->
<section class="section-about mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="/pelanggan/assets/img/about.jpg" class="img-fluid" alt="Tentang Kami">
            </div>
            <div class="col-md-7 p-3">
                <h1>Tentang Kami</h1>
                <p>
                    LPP RRI Jember adalah stasiun radio milik pemerintah Indonesia yang
                    berlokasi di Jalan Letjen. Panjaitan No. 61 Jember. Sebagai Lembaga
                    Penyiaran Publik yang independen, netral dan tidak komersial yang
                    berfungsi memberikan pelayanan siaran informasi, pendidikan, hiburan
                    yang sehat, kontrol sosial, serta menjaga citra positif bangsa di dunia
                    internasional dengan slogan "Sekali di Udara, Tetap di Udara </p>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Kami -->
<section class="bg-layanan">
    <div class="container">
        <h1 class="text-center mb-5">Layanan Kami</h1> <!-- mb-5 untuk memberi margin-bottom -->
        <div class="row">
            <div class="col-md-4 mb-4"> <!-- mb-4 untuk memberi margin-bottom -->
                <h3>Spot</h3>
                <p>Iklan radio dalam bentuk rekaman yang diputar di sela-sela acara, durasi 60 detik, disertai sound effect, suara talent voice over yang renyah, sehingga bisa menciptakan theater of mind bagi yang mendengarkan iklannya. Bertujuan untuk menciptakan awareness atau kesadaran terhadap sebuah informasi atau produk.</p>
            </div>
            <div class="col-md-4 mb-4"> <!-- mb-4 untuk memberi margin-bottom -->
                <h3>Adlib</h3>
                <p>Iklan yang disampaikan langsung oleh penyiar di sela-sela acara dengan durasi maksimal 1 menit.</p>
            </div>
            <div class="col-md-4 mb-4"> <!-- mb-4 untuk memberi margin-bottom -->
                <h3>TalkShow</h3>
                <p>Penyampaian iklan berupa siaran dialog yang membahas tentang sebuah topik yang lagi hangat di tengah masyarakat dengan menghadirkan narasumber yang kompeten. Menerima respon dari pendengar melalui WhatsApp atau telepon. Iklan ini berdurasi 45 menit.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pengajuan Iklan -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 text-center">
                <h1>Pengajuan Iklan</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="card col-md-6 ">
                <form class="p-3 needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="namaIklan" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaIklan" required>
                        <div class="invalid-feedback">
                            Silakan masukkan nama lengkap.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="namaUsaha" class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control" id="namaUsaha" required>
                        <div class="invalid-feedback">
                            Silakan masukkan nama usaha.
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="jamTayang" class="form-label">Jam Tayang Iklan</label>
                            <input type="time" class="form-control" id="jamTayang" required>
                            <div class="invalid-feedback">
                                Silakan pilih jam tayang iklan.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tanggalTayang" class="form-label">Tanggal Tayang Iklan</label>
                            <input type="date" class="form-control" id="tanggalTayang" required>
                            <div class="invalid-feedback">
                                Silakan pilih tanggal tayang iklan.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="noTelp" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="noTelp" required>
                        <div class="invalid-feedback">
                            Silakan masukkan nomor telepon yang valid.
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="paketIklan" class="form-label">Paket Iklan</label>
                            <select class="form-select" id="paketIklan" required>
                                <option selected disabled value="">Pilih paket iklan...</option>
                                <option>Paket 1</option>
                                <option>Paket 2</option>
                                <option>Paket 3</option>
                            </select>
                            <div class="invalid-feedback">
                                Silakan pilih paket iklan.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="kategoriIklan" class="form-label">Kategori Iklan</label>
                            <select class="form-select" id="kategoriIklan" required>
                                <option selected disabled value="">Pilih kategori iklan...</option>
                                <option>Kategori 1</option>
                                <option>Kategori 2</option>
                                <option>Kategori 3</option>
                            </select>
                            <div class="invalid-feedback">
                                Silakan pilih kategori iklan.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="unggahMateri" class="form-label">Unggah Materi (opsional)</label>
                        <input type="file" class="form-control" id="unggahMateri">
                        <div id="materiHelp" class="form-text">Anda dapat mengunggah file terkait dengan iklan.</div>
                    </div>
                    <div class="mb-3">
                        <label for="catatan" class="form-label">Catatan Tambahan</label>
                        <textarea class="form-control" id="catatan" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="agreeCheck" required>
                            <label class="form-check-label" for="agreeCheck">
                                Setuju dengan syarat dan ketentuan
                            </label>
                            <div class="invalid-feedback">
                                Anda harus menyetujui sebelum mengirimkan.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Ajukan Iklan</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- kontak kami -->
<section id="contact" class="contact">
    <div class="container">
        <div class="col-md-12 p-3 text-center">
            <h1>Kontak Kami</h1>
            <p>Jika Anda memiliki pertanyaan atau saran tentang Kebijakan Privasi kami, jangan ragu untuk menghubungi kami.</p>
        </div>
        <div class="d-flex col-md-12 bg-cta">
            <div class="col-md-8">
                <h3>Kirim Pesan Menggunakan WhatsApp</h3>
                <p>Hanya dengan satu Klik saja bisa menjadi lebih mudah dan cepat, memastikan komunikasi yang efisien dan langsung
                    dengan costumer kami </p>
            </div>
            <div class="col-md-4 align-items-center d-flex justify-content-center">
                <a href="https://api.whatsapp.com/send?phone=6281234567890&text=Halo,%20saya%20tertarik%20dengan%20produk%20anda." target="_blank" class="btn btn-success">
                    <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- footerr -->
<section id="subfooter" class="subfooter footer-bg">
    <div class="subfooter-logo">
        <img src="https://www.rri.co.id/assets/v2/img/logo-rricoid-text.png" alt="Logo RRI">
    </div>
    <div class="subfooter-text">
        <div class="subfooter-text-links">
            <div class="subfooter-text-links-group">
                <h5>Lembaga Penyiaran Publik Radio Repuplik Indonesia Jember</h5>
                <ul>
                    <li>Media radio berita online terpercaya | LPP RRI Jember</li>
                    <li>📍 Jalan Letjen DI Panjaitan No.61, Gumuk Kerang, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur.</li>
                    <li>📞 +6221 350 0584, +6221 351 1086</li>
                    <li>📩 Pemberitaan: beritarrijember@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="subfooter-text-links">
            <div class="subfooter-text-links-group">
                <h3>Ketentuan</h3>
                <ul>
                    <li><a href="">Kebijakan Privasi</a></li>
                    <li><a href="">Pedoman Media Siber</a></li>
                    <li><a href="">Tentang Kami</a></li>
                    <li><a href="https://maps.app.goo.gl/q7rGhdSMnp1Pfs9H9">Peta Situs</a></li>
                </ul>
            </div>
            <div class="subfooter-text-links-group">
                <h3>Link Terkait</h3>
                <ul>
                    <li><a href="https://play.rri.co.id">RRI Digital</a></li>
                    <li><a href="https://www.rri.co.id/stream/video">RRI NET Streaming</a></li>
                    <li><a href="https://www.rri.co.id/stream/radio">RRI Radio Streaming</a></li>
                    <li><a href="https://audiolibrary.rri.co.id/">Audio Library</a></li>
                    <li><a href="https://ppid.rri.co.id/">PPID LPP RRI</a></li>
                    <li><a href="https://jdih.rri.go.id/">JDIH LPP RRI</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>