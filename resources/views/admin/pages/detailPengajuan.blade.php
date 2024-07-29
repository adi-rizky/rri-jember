@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Pengajuan Iklan</h1>
</div>

<div class="detail-pengajuan d-flex justify-content-center align-items-center">
    <div class="card col-md-12 p-4">
            <div class="mb-3">
                <label for="namaIklan" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaIklan" required value="{{ old('nama_lengkap', $pengajuaniklan->nama_lengkap) }}" disabled>
                <div class="invalid-feedback">
                    Silakan masukkan nama lengkap.
                </div>
            </div>
            <div class="mb-3">
                <label for="namaUsaha" class="form-label">Nama Usaha</label>
                <input type="text" class="form-control" id="namaUsaha" value="{{ old('nama_usaha', $pengajuaniklan->nama_usaha) }}" disabled>
                <div class="invalid-feedback">
                    Silakan masukkan nama usaha.
                </div>
            </div>
            <div class="mb-3">
                <label for="noTelp" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="noTelp" value="{{ old('nomor_telepon', $pengajuaniklan->nomor_telepon) }}" disabled>
                <div class="invalid-feedback">
                    Silakan masukkan nomor telepon yang valid.
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="paketIklan" class="form-label">Paket Iklan</label>
                    <select class="form-select" id="paketIklan" disabled>
                    <option >{{ $pengajuaniklan->paket_iklan }}</option>
                    </select>
                    <div class="invalid-feedback">
                        Silakan pilih paket iklan.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="kategoriIklan" class="form-label">Kategori Iklan</label>
                    <select class="form-select" id="kategoriIklan" required disabled>
                    <option >{{ $pengajuaniklan->kategori_iklan }}</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="unggahMateri" class="form-label">Unggah Materi (opsional)</label>
                <img src="{{ asset('storage/' . $pengajuaniklan->unggah_materi) }}" alt="Materi Unggahan" style="max-width: 200px;">
            </div>
            <div class="col-md-6">
                <label for="unggahMateri" class="form-label">Bukti Pembayaran</label>
                <img src="{{ asset('storage/' . $pengajuaniklan->bukti_pembayaran) }}" alt="Materi Unggahan" style="max-width: 200px;">
            </div>
            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan Tambahan</label>
                <textarea class="form-control" id="catatan" rows="3" disabled>{{$pengajuaniklan->catatan_tambahan}}</textarea>
            </div>
            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan Tambahan</label>
                {{ $pengajuaniklan->status }}
                    <form action="{{ route('pengajuan.updateStatus', $pengajuaniklan->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option value="belum di proses" {{ $pengajuaniklan->status == 'belum di proses' ? 'selected' : '' }}>Belum di Proses</option>
                            <option value="sedang di proses" {{ $pengajuaniklan->status == 'sedang di proses' ? 'selected' : '' }}>Sedang di Proses</option>
                            <option value="sudah selesai" {{ $pengajuaniklan->status == 'sudah selesai' ? 'selected' : '' }}>Sudah Selesai</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-2">Update Status</button>
                    </form>
            </div>
    </div>
</div>
@endsection
