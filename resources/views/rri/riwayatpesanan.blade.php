@extends('rri.index_master');
<div class="container mt-5 px-2 p-4">
    <h4>Riwayat Pesanan</h4>
    <div class="table-responsive pt-2">
        <table class="table table table-hover">
            <thead>
                <tr class="bg-light">
                    <th>Nama Lengkap</th>
                    <th>Nama Usaha</th>
                    <!-- <th>Nomor Telepon</th> -->
                    <th>Paket Iklan</th>
                    <!-- <th>Kategori Iklan</th> -->
                    <th>Harga</th>
                    <th>Status</th>
                    <!-- <th>Materi</th> -->
                    <th>Bukti Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengajuanIklans as $pengajuan)
                <tr>
                    <td>{{ $pengajuan->nama_lengkap }}</td>
                    <td>{{ $pengajuan->nama_usaha }}</td>
                    <!-- <td>{{ $pengajuan->nomor_telepon }}</td> -->
                    <!-- <td>{{ $pengajuan->paket_iklan }}</td> -->
                    <td>{{ $pengajuan->kategori_iklan }}</td>
                    <td>{{ $pengajuan->harga }}</td>
                    <td>{{ $pengajuan->status }}</td>
                    <!-- <td>
                    <img src="{{ asset('storage/' . $pengajuan->unggah_materi) }}" alt="Materi Unggahan" style="max-width: 200px;">
                </td> -->
                    <td>
                        <img src="{{ asset('storage/' . $pengajuan->bukti_pembayaran) }}" alt="Materi Unggahan" style="max-width: 200px;">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>