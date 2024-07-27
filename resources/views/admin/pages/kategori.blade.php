@extends('admin.index_master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori Iklan</h1>
</div>
<section>
    <div class="card p-4">
        <form>
            <div class="col-md-12 mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-12 tombol">
                <a class="btn btn-primary" href="">tambahkan</a>
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
                    <th scope="col">Actiom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>
                        <button type="button" class="btn btn-primary btn"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button type="button" class="btn btn-secondary btn"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection