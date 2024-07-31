@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengajuan Iklan</h1>
</div>
<form action="{{ route('pengajuan') }}" method="GET">
    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date" value="{{ request()->input('start_date') }}">

    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date" value="{{ request()->input('end_date') }}">

    <button type="submit">Filter</button>
    <a href="{{ route('pengajuan') }}" class="btn btn-secondary">Reset</a>
</form>
<form action="{{ route('export.pengajuan') }}" method="GET">
    <input type="hidden" name="start_date" value="{{ request('start_date') }}">
    <input type="hidden" name="end_date" value="{{ request('end_date') }}">
    <button type="submit" class="btn btn-primary">Export to Excel</button>
</form>
{{-- <a href="{{ route('export.pengajuan', ['start_date' => $startDate, 'end_date' => $endDate]) }}" class="btn btn-primary">Export to Excel</a> --}}


<div class="pengajuan-iklan mt-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Paket Iklan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengajuaniklan as $pengajuan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$pengajuan->nama_lengkap}}</td>
                <td>{{$pengajuan->nomor_telepon}}</td>
                <td>{{$pengajuan->paket_iklan}}</td>
                <td>
                    <a href="{{ route('detailPengajuan',$pengajuan->id) }}" class="btn btn-warning"><i class="fa-solid fa-circle-info"></i></a>
                    <form action="{{ route('pengajuan.destroy', $pengajuan->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengajuan ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
                @empty
            <tr>
                <td colspan="5">Tidak ada data pengajuan iklan.</td>
            </tr>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection