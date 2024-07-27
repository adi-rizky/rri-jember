@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Pengajuan Iklan</h1>
</div>

<div class="detail-pengajuan d-flex justify-content-center align-items-center">
    <div class="card col-md-12 p-4">
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
    </div>
</div>
@endsection
