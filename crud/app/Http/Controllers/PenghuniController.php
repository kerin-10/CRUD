<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use App\Models\Kamar;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    public function index()
    {
        $data = Penghuni::with('kamar')->get();
        return view('penghuni.index', compact('data'));
    }

    public function create()
    {
        $kamars = Kamar::where('status', 'kosong')->get();
        return view('penghuni.create', compact('kamars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required|unique:penghunis,nik',
            'umur' => 'required|numeric',
            'kamar_id' => 'required',
            'no_hp' => 'required',
            'email' => 'nullable|email',
        ]);

        Penghuni::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'umur' => $request->umur,
            'kamar_id' => $request->kamar_id,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);

        Kamar::where('id', $request->kamar_id)->update([
            'status' => 'terisi'
        ]);

        return redirect('/penghuni')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Penghuni::findOrFail($id);
        $kamars = Kamar::all();
        return view('penghuni.edit', compact('data', 'kamars'));
    }

    public function update(Request $request, $id)
    {
        $data = Penghuni::findOrFail($id);

        $data->update([
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'umur' => $request->umur,
            'kamar_id' => $request->kamar_id,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);

        return redirect('/penghuni')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
{
    $penghuni = Penghuni::findOrFail($id);

    if ($penghuni->kamar_id) {
        Kamar::where('id', $penghuni->kamar_id)->update([
            'status' => 'kosong',
        ]);
    }

    $penghuni->delete();

    return redirect('/penghuni')->with('success', 'Data berhasil dihapus');
}
}