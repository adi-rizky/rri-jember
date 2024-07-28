@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori Iklan</h1>
</div>
<section>
    <div class="card p-4">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="col-md-12 mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required>
            </div>
            <div class="col-md-12 mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required>{{ old('deskripsi', $kategori->deskripsi) }}</textarea>
            </div>
            <div class="col-md-12 tombol">
                <button class="btn btn-primary" type="submit">Tambahkan</button>
            </div>
        </form>
    </div>
</section>
@endsection
