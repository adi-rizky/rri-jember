<?php

namespace App\Http\Controllers;

use App\Models\PengajuanIklan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PengajuanIklanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_usaha' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'paket_iklan' => 'required|string',
            'kategori_iklan' => 'required|string',
            'harga' => 'required|string',
            'unggah_materi' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx',
            'bukti_pembayaran' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx',
            'catatan_tambahan' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|string|in:belum di proses,sedang di proses,sudah selesai',
        ]);
    
        $data = $request->all();
        
        // Set status default jika tidak ada status yang dikirim
        $data['status'] = $data['status'] ?? 'belum di proses';
    
        // $data['nama_lengkap'] = Auth::user()->name;

        if ($request->hasFile('unggah_materi')) {
            $data['unggah_materi'] = $request->file('unggah_materi')->store('materi', 'public');
        }

        if ($request->hasFile('bukti_pembayaran')) {
            $data['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('pembayaran', 'public');
        }

        PengajuanIklan::create($data);
        // dd($data);

        return redirect('/')->with('success', 'Pengajuan iklan berhasil dibuat.');
    }
    
    public function updateStatus(Request $request, $userid)
    {
        $request->validate([
            'status' => 'nullable|in:belum di proses,sedang di proses,sudah selesai'
        ]);

        $pengajuanIklan = PengajuanIklan::findOrFail($userid);
        $pengajuanIklan->status = $request->status;
        $pengajuanIklan->save();

        return redirect('/pengajuan')->with('success', 'Status berhasil diperbarui');
    }

    /**
     * Display the specified resource.
     */
    public function show(PengajuanIklan $pengajuanIklan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengajuanIklan $pengajuanIklan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengajuanIklan $pengajuanIklan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengajuanIklan = PengajuanIklan::findOrFail($id);
        
        // Menghapus file yang terkait jika ada
        if ($pengajuanIklan->unggah_materi) {
            Storage::disk('public')->delete($pengajuanIklan->unggah_materi);
        }
        if ($pengajuanIklan->bukti_pembayaran) {
            Storage::disk('public')->delete($pengajuanIklan->bukti_pembayaran);
        }

        // Menghapus data ik$pengajuanIklan
        $pengajuanIklan->delete();

        return redirect()->back()->with('success', 'Pengajuan iklan berhasil dihapus.');
    }

    public function riwayatPesanan()
    {
        // Mendapatkan ID pengguna yang sedang login
        $userId = Auth::id();

        // Mengambil data pengajuan iklan berdasarkan user_id
        $pengajuanIklans = PengajuanIklan::where('user_id', $userId)->get();

        return view('rri.riwayatpesanan', compact('pengajuanIklans'));
    }
}
