<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // ← Tambahkan baris ini

class BeasiswaController extends Controller
{
    public function index()
    {
        $beasiswas = Beasiswa::all();
        return view('beasiswa.index', compact('beasiswas'));
    }

    public function create()
    {
        return view('beasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        Beasiswa::create($request->all());

        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        return view('beasiswa.edit', compact('beasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->update($request->all());

        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->delete();

        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa berhasil dihapus.');
    }
}
