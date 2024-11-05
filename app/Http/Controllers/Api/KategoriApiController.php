<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kategoris = Kategori::all();

        return response()->json([
            'success' => true,
            'message' => 'categories fetched successfully',
            'data' => [
                'kategoris' => $kategoris,
            ]
        ], 200);

    }

    public function store(){

        $kategori = new Kategori();

        $kategori->name = 'Kesehatan';
        $kategori->description = 'ini kategori berita kesehatan';
        $kategori->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil ditambah',
            'data' => [
                'kategoris' => $kategori,
            ]
        ], 200);
        
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
        $kategori = Kategori::find($id);
        if($kategori){

            $kategori->delete();
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus',
                'data' => [
                    'kategoris' => $kategori,
                ]
            ], 200);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan',
            'data' => [
                'kategoris' => $kategori,
            ]
        ], 404);
        
    }
}
