@extends('rri.index_master');
<section>
    <div class="hero-overlay">
    </div>
    <!-- ======= Hero Section ======= -->
    <section id="hero1" class="d-flex align-items-center">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('pelanggan/assets/img/tentang-kami.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SELAMAT DATANG</h5>
                        <h4>Temukan Layanan yang<br>Tepat Untuk Anda</h4>
                        <p>Sekali di Udara Tetap di Udara</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Tentang Kami -->
    <section class="section-about bg-layanan" id="tentangkami">
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
    <section class="mt-4">
        <div class="container">
            <div class="text-center">
                <h1>Layanan Kami</h1>
                <p>Hanya dengan satu Klik saja bisa menjadi lebih mudah dan cepat, memastikan komunikasi yang efisien dan langsung
                    dengan costumer kami </p>
            </div>
            <div class="d-flex flex-wrap mt-3">
                @forelse($kategori as $kat)
                <div class="col-12 col-sm-6 col-md-4 mb-3">
                    <div class="card p-3 h-100">
                        <h3>{{$kat->nama_kategori}}</h3>
                        <p>{{$kat->deskripsi}}</p>
                        <!-- <p>Iklan radio dalam bentuk rekaman yang diputar di sela-sela acara, durasi 60 detik, disertai sound effect, suara talent voice over yang renyah, sehingga bisa menciptakan theater of mind bagi yang mendengarkan iklannya. Bertujuan untuk menciptakan awareness atau kesadaran terhadap sebuah informasi atau produk.</p> -->
                    </div>
                </div>
                @empty
                <p class="col-12">Tidak ada kategori iklan tersedia</p>
                @endforelse
            </div>
    </section>

    <!-- Paket Iklan -->
    <section class="bg-layanan mb-3">
        <div class="container">
            <div class="text-center">
                <h1>Paket Iklan</h1>
                <p>Tambahkan Deskripsi </p>
            </div>
            <div class="d-flex flex-wrap mt-3">
                @forelse($paketIklan as $paket)
                <div class="col-12 col-sm-6 col-md-4 mb-3">
                    <div class="card p-3 h-100">
                        <h3>{{$paket->nama_paket}}</h3>
                        <p>{{$paket->pemutaran}}</p>
                        <p>{{$paket->deskripsi}}</p>
                        <p>{{$paket->harga}}</p>
                        <!-- <p>Iklan radio dalam bentuk rekaman yang diputar di sela-sela acara, durasi 60 detik, disertai sound effect, suara talent voice over yang renyah, sehingga bisa menciptakan theater of mind bagi yang mendengarkan iklannya. Bertujuan untuk menciptakan awareness atau kesadaran terhadap sebuah informasi atau produk.</p> -->
                    </div>
                </div>
                @empty
                <p class="col-12">Tidak ada kategori iklan tersedia</p>
                @endforelse
            </div>

    </section>

    <!-- Pengajuan Iklan -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-2 text-center">
                    <h1>Pengajuan Iklan</h1>
                    <!-- <p class="mt-3">Form Pengajuan Iklan.</p> -->
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <div class="card col-md-8">
                    <form class="p-3 needs-validation" action="{{ route('pengajuaniklan.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        @auth
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        @endauth
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                <div class="invalid-feedback">
                                    Silakan masukkan nama lengkap.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="nama_usaha" class="form-label">Nama Usaha</label>
                                <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" required>
                                <div class="invalid-feedback">
                                    Silakan masukkan nama usaha.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                            <div class="invalid-feedback">
                                Silakan masukkan nomor telepon yang valid.
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="paketIklan" class="form-label">Paket Iklan</label>
                                <select class="form-select" id="paketIklan" name="paket_iklan" required>
                                    <option selected disabled value="">Pilih paket iklan...</option>
                                    @forelse ($paketIklan as $paket)
                                    <option value="{{ $paket->id }}" data-harga="{{ $paket->harga }}">{{ $paket->nama_paket }}</option>
                                    @empty
                                    <option>Tidak ada paket iklan tersedia</option>
                                    @endforelse
                                </select>
                                <div class="invalid-feedback">
                                    Silakan pilih paket iklan.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="harga" class="form-label">Harga Paket</label>
                                <input type="text" class="form-control" id="harga" name="harga" readonly>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="kategoriIklan" class="form-label">Kategori Iklan</label>
                                <select class="form-select" id="kategoriIklan" name="kategori_iklan" required>
                                    <option selected disabled value="">Pilih kategori iklan...</option>
                                    @forelse ($kategori as $kat)
                                    <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                                    @empty
                                    <option>Tidak ada kategori iklan tersedia</option>
                                    @endforelse
                                </select>
                                <div class="invalid-feedback">
                                    Silakan pilih kategori iklan.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="unggah_materi" class="form-label">Unggah Materi (wajib)</label>
                            <input type="file" class="form-control" id="unggah_materi" name="unggah_materi" required>
                            <div id="materiHelp" class="form-text">Anda dapat mengunggah file terkait dengan iklan.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nomorRekening" class="form-label">Nomor Rekening</label>
                            <div class="card" style="max-width: 350px; margin: 0 auto;">
                                <div class="card-body text-center p-2">
                                    <h4 class="text-primary fw-bold mb-1">08907908y8</h4>
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="copyToClipboard('08907908y8')">Copy</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                            <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required>
                            <div id="materiHelp" class="form-text">bukti pembayaran</div>
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan Tambahan</label>
                            <textarea class="form-control" id="catatan" name="catatan_tambahan" rows="3"></textarea>
                        </div>
                        <input type="hidden" name="status" value="belum di proses">
                        @auth
                        <button class="btn btn-primary" type="submit">Ajukan Iklan</button>
                        @else
                        <button class="btn btn-primary" type="submit">Register</button>
                        @endauth
                    </form>
                </div>
            </div>

        </div>
    </section>


    <!-- kontak kami -->
    <section id="contact" class="contact mt-4">
        <div class="container">
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
        <script>
            function copyToClipboard(text) {
                navigator.clipboard.writeText(text).then(function() {
                    alert('Nomor rekening berhasil disalin ke clipboard!');
                }, function(err) {
                    console.error('Could not copy text: ', err);
                });
            }

            document.addEventListener('DOMContentLoaded', function() {
                const paketIklanSelect = document.getElementById('paketIklan');
                const hargaPaketInput = document.getElementById('harga');

                paketIklanSelect.addEventListener('change', function() {
                    const selectedOption = paketIklanSelect.options[paketIklanSelect.selectedIndex];
                    const harga = selectedOption.getAttribute('data-harga');
                    hargaPaketInput.value = harga ? 'Rp ' + new Intl.NumberFormat('id-ID').format(harga) : '';
                });
            });
        </script>
    </section>
</section>