<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function kategori()
    {
        return view('admin.pages.kategori');
    }
    public function pengajuan()
    {
        return view('admin.pages.pengajuan');
    }
    public function detailPengajuan()
    {
        return view('admin.pages.detailPengajuan');
    }
    public function paketIklan()
    {
        return view('admin.pages.paketIklan');
    }
    public function dashboard()
    {
        return view('admin.index');
    }
}
