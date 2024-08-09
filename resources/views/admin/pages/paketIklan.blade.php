@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Paket Iklan</h1>
</div>
<div class="form-paket p-4">
    <form action="/paket-iklan" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama Paket</label>
            <input type="text" class="form-control" id="nama_paket" name="nama_paket" required>
        </div>
        <div class="mb-3">
            <label for="pemutaran" class="form-label">Pemutaran</label>
            <input type="text" class="form-control" id="pemutaran" name="pemutaran" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="paket-iklan mt-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Paket</th>
                <th scope="col">Pemutaran</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($paketIklan as $paket)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $paket->nama_paket }}</td>
                <td>{{ $paket->pemutaran }}</td>
                <td>{{ $paket->deskripsi }}</td>
                <td>{{ $paket->harga }}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <form action="{{ route('paket-iklan.destroy', $paket->id) }}" method="POST" class="me-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Anda yakin ingin menghapus paket ini?')" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                        <!-- <button type="button" class="btn btn-primary">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button> -->
                        <a href="{{ route('paket-iklan.edit', $paket->id) }}" class="btn btn-primary">
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

@endsection