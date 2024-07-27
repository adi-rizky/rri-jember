@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Paket Iklan</h1>
</div>
<div class="form-paket p-4">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Paket</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <textarea class="form-control" aria-label="With textarea"></textarea>
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
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                <button type="button" class="btn btn-primary btn"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-secondary btn"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
