<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Coach;
use App\Models\Latihan;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaian = Penilaian::all();
        return view('penilaian.index', compact('penilaian'));
    }

    public function create()
    {
        $coaches = Coach::all();
        $latihans = Latihan::all();
        return view('penilaian.create', compact('coaches', 'latihans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'latihan_id' => 'required',
            'coach_id' => 'required',
            'nilai' => 'required',
        ]);

        $penilaian = new Penilaian;
        $penilaian->latihan_id = $request->input('latihan_id');
        $penilaian->coach_id = $request->input('coach_id');
        $penilaian->nilai = $request->input('nilai');
        $penilaian->save();

        return redirect('/penilaian')->with('success', 'Penilaian berhasil disimpan.');
    }

    public function edit($id)
    {
        $penilaian = Penilaian::find($id);
        $coaches = Coach::all();
        $latihans = Latihan::all();
        return view('penilaian.edit', compact('penilaian', 'coaches', 'latihans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'latihan_id' => 'required',
            'coach_id' => 'required',
            'nilai' => 'required',
        ]);

        $penilaian = Penilaian::find($id);
        $penilaian->latihan_id = $request->input('latihan_id');
        $penilaian->coach_id = $request->input('coach_id');
        $penilaian->nilai = $request->input('nilai');
        $penilaian->save();

        return redirect('/penilaian')->with('success', 'Penilaian berhasil diperbarui.');
    }

    public function delete($id)
    {
        $penilaian = Penilaian::find($id);
        $penilaian->delete();

        return redirect('/penilaian')->with('success', 'Penilaian berhasil dihapus.');
    }
}
