<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;
use App\Models\Paket;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function JadwalCreate()
    {
        $coach = Coach::all();
        $paket = Paket::all();
        return view('jadwal.create', compact('coach', 'paket'));
    }

    public function JadwalStore(Request $request)
    {
        $validatedData = $request->validate([
            'coach_id' => 'required',
            'paket_id' => 'required',
            'pembayaran' => 'required',
        ]);

        $data = new Transaksi();
        $data->member_id = Auth::user()->id;
        $data->coach_id = $request->coach_id;
        $data->paket_id = $request->paket_id;

        $paket = Paket::find($request->paket_id);
        $data->jadwal_mulai = Carbon::now();
        $data->jadwal_selesai = Carbon::now()->addDays($paket->durasi);
        $data->status = 0;
        $data->pembayaran = $request->pembayaran;

        if ($request->pembayaran == 1 && $request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $destinationPath = public_path('bukti_transfer');

            // Buat nama file yang unik
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan gambar yang diupload ke direktori tujuan
            $image->move($destinationPath, $filename);

            // Simpan path gambar ke dalam model Transaksi
            $data->bukti = 'bukti_transfer/' . $filename;
        }

        $data->save();

        return redirect('transaksi/invoice/' . $data->id);
    }
    public function JadwalUpdate($id)
    {
        $data = Transaksi::findOrFail($id);
        $data->status = 1;
        $data->save();

        return redirect()->route('jadwal.view')->with('success', 'Jadwal berhasil diaktifkan.');
    }

    public function JadwalDetail()
    {
        $member = Auth::user();
        $data = Transaksi::where('member_id', $member->id)->get();
        return view('jadwal.detail', compact('data'));
    }

    public function JadwalRiwayat()
    {
        $member = Auth::user();
        $data = Transaksi::where('member_id', $member->id)->get();
        return view('jadwal.riwayat', compact('data'));
    }
    public function JadwalView()
    {
        $user = Auth::user();
        $hari_ini = Carbon::now();
        $data = Transaksi::where('member_id', $user->id)
            ->where('jadwal_selesai', '>=', $hari_ini)
            ->latest() // Retrieve the latest record
            ->get(); // Retrieve a single record

        return view('jadwal.view', compact('data'));
    }
}
