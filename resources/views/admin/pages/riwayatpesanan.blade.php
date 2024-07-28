@extends('admin.index_master')
@section('content')





    <h1>Detail Pengajuan Iklan</h1>

    <p><strong>Nama Lengkap:</strong> {{ $pengajuanIklan->nama_lengkap }}</p>
    <p><strong>Nama Usaha:</strong> {{ $pengajuanIklan->nama_usaha }}</p>

    <!-- Tampilkan detail lain sesuai kebutuhan -->

    <a href="{{ route('pengajuan_iklan.edit', $pengajuanIklan) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('pengajuan_iklan.destroy', $pengajuanIklan) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('pengajuan_iklan.index') }}" class="btn btn-secondary">Kembali</a>




@endsection