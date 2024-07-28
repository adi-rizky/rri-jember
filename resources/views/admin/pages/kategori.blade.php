@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori Iklan</h1>
</div>
<section>
    <div class="card p-4">
        <form action="/nama-kategori" method="POST">
            @csrf
            <div class="col-md-12 mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" aria-describedby="emailHelp">
            </div>
            <div class="col-md-12 mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" aria-describedby="emailHelp"></textarea>
            </div>
            <div class="col-md-12 tombol">
                <button class="btn btn-primary" type="submit">tambahkan</a>
            </div>
        </form>
    </div>
</section>
<section>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Actiom</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kategori as $kat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kat->nama_kategori }}</td>
                    <td>{{ $kat->deskripsi }}</td>
                    <td>
                    <div class="d-flex align-items-center">
                        <form action="{{ route('kategori.destroy', $kat->id) }}" method="POST" class="me-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Anda yakin ingin menghapus paket ini?')" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                        <a href="{{ route('kategori.edit', $kat->id) }}" class="btn btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Tidak ada data.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection