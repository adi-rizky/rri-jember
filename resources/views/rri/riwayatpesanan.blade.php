<div class="container">
        <h1>Riwayat Pesanan</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Nama Usaha</th>
                    <th>Nomor Telepon</th>
                    <th>Paket Iklan</th>
                    <th>Kategori Iklan</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Materi</th>
                    <th>Bukti Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengajuanIklans as $pengajuan)
                    <tr>
                        <td>{{ $pengajuan->nama_lengkap }}</td>
                        <td>{{ $pengajuan->nama_usaha }}</td>
                        <td>{{ $pengajuan->nomor_telepon }}</td>
                        <td>{{ $pengajuan->paket_iklan }}</td>
                        <td>{{ $pengajuan->kategori_iklan }}</td>
                        <td>{{ $pengajuan->harga }}</td>
                        <td>{{ $pengajuan->status }}</td>
                        <td>
                        <img src="{{ asset('storage/' . $pengajuan->unggah_materi) }}" alt="Materi Unggahan" style="max-width: 200px;">
                        </td>
                        <td>
                        <img src="{{ asset('storage/' . $pengajuan->bukti_pembayaran) }}" alt="Materi Unggahan" style="max-width: 200px;">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>