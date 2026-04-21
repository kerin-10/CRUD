<?php

namespace App\Http\Controllers;

use App\Models\penghuni;
use Illuminate\Http\Request;

class penghuniController extends Controller
{
    public function index()
    {
        $data = penghuni::all();
        return view('penghuni.index', compact('data'));
    }

    public function create()
    {
        return view('penghuni.create');
    }

    public function store(Request $request)
    {
        penghuni::create($request->all());
        return redirect('/penghuni');
    }

    public function edit($id)
    {
        $data = penghuni::find($id);
        return view('penghuni.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = penghuni::find($id);
        $data->update($request->all());
        return redirect('/penghuni');
    }

    public function destroy($id)
{
    $data = Penghuni::find($id);
    $data->delete();

    return redirect('/penghuni')->with('success', 'Data berhasil dihapus');
}
}