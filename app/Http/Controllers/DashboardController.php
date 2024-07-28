<?php

namespace App\Http\Controllers;
use App\Models\PaketIklan;
use App\Models\Kategori;

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
        $kategori = kategori::all();
        return view('admin.pages.kategori',compact('kategori'));
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
        $paketIklan = PaketIklan::all();
        return view('admin.pages.paketIklan',compact('paketIklan'));
    }
    public function dashboard()
    {
        return view('admin.index');
    }
    public function awal()
    {
        $kategori = kategori::all();
        $paketIklan = paketIklan::all();
        return view('rri.index',compact('kategori','paketIklan'));
    }
    public function riwayat()
    {
        return view('admin.pages.riwayatpesanan');
    }
}
