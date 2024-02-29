<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('kriteria.index', ['kriteria' => $kriteria]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            // Tambahkan validasi untuk kolom lain sesuai kebutuhan
        ]);

        Kriteria::create($validatedData);

        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kriteria = Kriteria::find($id);

         return view('kriteria.show', compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $kriteria = Kriteria::find($id);
    return view('kriteria.edit', compact('kriteria'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            // tambahkan validasi untuk kolom lain sesuai kebutuhan
        ]);
        $kriteria = Kriteria::find($id);
        $kriteria->update($validatedData);

        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    // MASIH JADI PR < KENAPA $KRITERIA DIGANTI DENGAN $ID MASIH SAMA" BERFUNGSI >

    public function destroy($kriteria)
    {
        $kriteria = Kriteria::find($kriteria);
        $kriteria->delete();

        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil dihapus.');
    
    }
}
