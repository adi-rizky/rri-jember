<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
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
    public function store(Request $request, Kategori $kategori)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);

        // Buat entri baru dalam database
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->input('nama_kategori');
        $kategori->deskripsi = $request->input('deskripsi');
        $kategori->save();
        return redirect()->route('kategori');

        // Kembalikan respons
        return response()->json([
            'message' => 'Kategori berhasil disimpan.',
            'data' => $kategori
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.pages.editkategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);
    
        // Update the entry in the database
        $kategori->update([
            'nama_kategori' => $request->input('nama_kategori'),
            'deskripsi' => $request->input('deskripsi'),
        ]);
    
        // Redirect with success message
        return redirect()->route('kategori')->with('success', 'Kategori iklan berhasil diperbarui.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
         // Hapus entri dari database
         $kategori->delete();

         // Redirect ke halaman paket iklan dengan pesan sukses
         return redirect()->route('kategori')->with('success', 'Paket iklan berhasil dihapus.');
    }
}
