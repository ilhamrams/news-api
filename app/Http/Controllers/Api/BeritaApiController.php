<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return response()->json(['status' => false, 'message' => 'Unauthenticated.'], 401);
        }
        $beritas = Berita::with('kategori')->latest()->get();

        $kategoris = Kategori::all();

        return response()->json([
            'success' => true,
            'message' => 'Books and categories fetched successfully',
            'data' => [
                'beritas' => $beritas,
                // 'kategoris' => $kategoris,
            ]
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari Flutter
        $request->validate([
            'id_kategori' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Validasi agar gambar adalah file gambar
            'judul' => 'required|string|max:255',
            'artikel' => 'required|string',
        ]);

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('gambar')) {
            // Simpan file gambar di storage/gambar dan dapatkan path-nya
            $imagePath = $request->file('gambar')->store('gambar', 'public');
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gambar tidak ditemukan',
            ], 400);
        }

        // Buat instance model Berita menggunakan data yang diterima
        $berita = Berita::create([
            'id_kategori' => $request->input('id_kategori'),
            'gambar' => $imagePath, // Simpan path gambar di database
            'judul' => $request->input('judul'),
            'artikel' => $request->input('artikel'),
        ]);

        // Berikan response JSON jika berhasil
        return response()->json([
            'success' => true,
            'message' => 'Berita created successfully',
            'data' => $berita,
        ], 201);
    }
    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
