<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koperasi;

class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Request $request)
    {
        $search = $request->input('search');
    
         $koperasi = Koperasi::when($search, function ($query) use ($search) {
        $query->where('nama', 'like', '%' . $search . '%');
        // Tambahkan kondisi pencarian lain jika diperlukan
        })->get();

        return view('koperasi.index', compact('koperasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('koperasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        Koperasi::create($request->all());

        return redirect()->route('koperasi.index')
                        ->with('success', 'Koperasi created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Koperasi $koperasi)
    {
        return view('koperasi.show', compact('koperasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Koperasi $koperasi)
    {
        return view('koperasi.edit', compact('koperasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Koperasi  $koperasi)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
        ]);

        $koperasi->update($request->all());

        return redirect()->route('koperasi.index')
                        ->with('success', 'Koperasi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $koperasi = Koperasi::find($id);
        $koperasi->delete();

        return redirect()->route('koperasi.index')
                        ->with('success', 'Berhasil Dihapus!');
    }
}
