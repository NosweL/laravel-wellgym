<?php

namespace App\Http\Controllers;

use App\Models\BeliSuplemen;
use App\Models\Suplemen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BeliSuplemenController extends Controller
{
    public function index()
    {
        $beliSuplemen = BeliSuplemen::with('user', 'suplemen')->get();
        return view('belisuplemen.index', compact('beliSuplemen'));
    }

    public function create()
    {
        $users = User::all();
        $suplemen = Suplemen::all();
        return view('belisuplemen.create', compact('users', 'suplemen'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'suplemen_id' => 'required',
            'tanggal_pembelian' => 'required',
            'jumlah_pembelian' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $suplemen = Suplemen::findOrFail($request->suplemen_id);

        if ($suplemen->stock < $request->jumlah_pembelian) {
            return redirect()->back()->withErrors(['Jumlah pembelian melebihi stok yang tersedia.'])->withInput();
        }

        $beliSuplemen = BeliSuplemen::create($request->all());

        // Mengurangi stok suplemen berdasarkan jumlah pembelian
        $suplemen->stock -= $request->jumlah_pembelian;
        $suplemen->save();

        return redirect()->route('belisuplemen.index')->with('success', 'Pembelian suplemen berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $beliSuplemen = BeliSuplemen::findOrFail($id);
        $users = User::all();
        $suplemen = Suplemen::all();
        return view('belisuplemen.edit', compact('beliSuplemen', 'users', 'suplemen'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'suplemen_id' => 'required',
            'tanggal_pembelian' => 'required',
            'jumlah_pembelian' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $beliSuplemen = BeliSuplemen::findOrFail($id);

        $suplemenSebelumnya = Suplemen::findOrFail($beliSuplemen->suplemen_id);
        $suplemenSebelumnya->stock += $beliSuplemen->jumlah_pembelian;
        $suplemenSebelumnya->save();

        $suplemenBaru = Suplemen::findOrFail($request->suplemen_id);

        if ($suplemenBaru->stock < $request->jumlah_pembelian) {
            return redirect()->back()->withErrors(['Jumlah pembelian melebihi stok yang tersedia.'])->withInput();
        }

        $suplemenBaru->stock -= $request->jumlah_pembelian;
        $suplemenBaru->save();

        $beliSuplemen->update($request->all());

        return redirect()->route('belisuplemen.index')->with('success', 'Pembelian suplemen berhasil diperbarui.');
    }

    public function delete($id)
    {
        $beliSuplemen = BeliSuplemen::findOrFail($id);

        $beliSuplemen->delete();

        return redirect()->route('belisuplemen.index')->with('success', 'Pembelian suplemen berhasil dihapus.');
    }
}
