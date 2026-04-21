<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();

        return view('penghuni.kamar', compact('kamars'));
    }

    public function create()
    {
        return view('penghuni.kamar_create');
    }

            public function store(Request $request)
        {
            $request->validate([
                'nomor_kamar' => 'required|unique:kamar,nomor_kamar',
                'kategori' => 'required',
                'harga_sewa' => 'required|numeric',
                'status' => 'required',
            ]);

            \App\Models\Kamar::create([
                'nomor_kamar' => $request->nomor_kamar,
                'kategori' => $request->kategori,
                'harga_sewa' => $request->harga_sewa,
                'fasilitas' => $request->fasilitas,
                'status' => $request->status,
            ]);

            return redirect()->route('kamar.index')
                ->with('success', 'Data kamar berhasil ditambahkan');
        }
        public function edit($id)
        {
            $kamar = Kamar::findOrFail($id);
            return view('penghuni.kamar_edit', compact('kamar'));
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'nomor_kamar' => 'required',
                'kategori' => 'required',
                'harga_sewa' => 'required|numeric',
                'status' => 'required',
            ]);

            $kamar = Kamar::findOrFail($id);

            $kamar->update([
                'nomor_kamar' => $request->nomor_kamar,
                'kategori' => $request->kategori,
                'harga_sewa' => $request->harga_sewa,
                'fasilitas' => $request->fasilitas,
                'status' => $request->status,
            ]);

    return redirect()->route('kamar.index')->with('success', 'Data kamar berhasil diupdate');
}
}