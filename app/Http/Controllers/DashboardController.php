<?php

namespace App\Http\Controllers;
use App\Models\PaketIklan;
use App\Models\Kategori;
use App\Models\PengajuanIklan;

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
        $pengajuaniklan = PengajuanIklan::all();
        return view('admin.pages.pengajuan',compact('pengajuaniklan'));
    }
    public function detailPengajuan($id)
    {
        $pengajuaniklan = PengajuanIklan::findOrFail($id);
        return view('admin.pages.detailPengajuan',compact('pengajuaniklan'));
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
