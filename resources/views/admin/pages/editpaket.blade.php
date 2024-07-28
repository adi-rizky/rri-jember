@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Paket Iklan</h1>
</div>
<div class="form-paket p-4">
    <form action="{{ route('paket-iklan.update', $paket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama Paket</label>
            <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="{{ old('nama_paket', $paket->nama_paket) }}" required>
        </div>
        <div class="mb-3">
            <label for="pemutaran" class="form-label">Pemutaran</label>
            <input type="number" class="form-control" id="pemutaran" name="pemutaran" value="{{ old('pemutaran', $paket->pemutaran) }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi', $paket->deskripsi) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $paket->harga) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection