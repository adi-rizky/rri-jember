@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengajuan Iklan</h1>
</div>

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
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>
                    <a href="{{ route('detailPengajuan') }}" class="btn btn-warning"><i
                            class="fa-solid fa-circle-info"></i></a>
                    <a type="button" class="btn btn-primary btn"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a type="button" class="btn btn-secondary btn"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
