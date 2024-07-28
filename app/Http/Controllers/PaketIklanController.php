<?php

namespace App\Http\Controllers;

use App\Models\PaketIklan;
use Illuminate\Http\Request;

class PaketIklanController extends Controller
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
        // Validasi input
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'pemutaran' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|string',
        ]);

        // Buat entri baru dalam database
        $paketIklan = new PaketIklan();
        $paketIklan->nama_paket = $request->input('nama_paket');
        $paketIklan->pemutaran = $request->input('pemutaran');
        $paketIklan->deskripsi = $request->input('deskripsi');
        $paketIklan->harga = $request->input('harga');
        $paketIklan->save();
        return redirect()->route('paketIklan');

        // Kembalikan respons
        return response()->json([
            'message' => 'Paket iklan berhasil disimpan.',
            'data' => $paketIklan
        ], 201);
        
    }
    

    /**
     * Display the specified resource.
     */
    public function show(PaketIklan $paketIklan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $paket = PaketIklan::findOrFail($id);
        return view('admin.pages.editpaket', compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaketIklan $paketIklan)
    {
        // Validasi input
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'pemutaran' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|string',
        ]);

        // Perbarui entri dalam database
        $paketIklan->update($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('paketIklan')->with('success', 'Paket iklan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaketIklan $paketIklan)
    {
        // Hapus entri dari database
        $paketIklan->delete();

        // Redirect ke halaman paket iklan dengan pesan sukses
        return redirect()->route('paketIklan')->with('success', 'Paket iklan berhasil dihapus.');
    }
}
