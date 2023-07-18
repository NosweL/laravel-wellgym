<?php

namespace App\Http\Controllers;

use App\Models\Suplemen;
use Illuminate\Http\Request;

class SuplemenController extends Controller
{
    public function view()
    {
        $suplemens = Suplemen::all();
        return view('suplemen.view_suplemen', compact('suplemens'));
    }

    public function create()
    {
        return view('suplemen.add_suplemen');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stock' => 'required',
        ]);

        $suplemen = new Suplemen();
        $suplemen->nama = $request->nama;
        $suplemen->harga = $request->harga;
        $suplemen->stock = $request->stock;
        $suplemen->save();

        return redirect()->route('suplemen.view')->with('success', 'Suplemen berhasil ditambahkan');
    }

    public function edit($id)
    {
        $suplemen = Suplemen::find($id);
        return view('suplemen.edit_suplemen', compact('suplemen'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stock' => 'required',
        ]);

        $suplemen = Suplemen::find($id);
        $suplemen->nama = $request->nama;
        $suplemen->harga = $request->harga;
        $suplemen->stock = $request->stock;
        $suplemen->save();

        return redirect()->route('suplemen.view')->with('success', 'Suplemen berhasil diperbarui');
    }

    public function delete($id)
    {
        $suplemen = Suplemen::find($id);
        $suplemen->delete();

        return redirect()->route('suplemen.view')->with('success', 'Suplemen berhasil dihapus');
    }
}
