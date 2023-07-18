<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;
use App\Models\Paket;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function TransaksiView()
    {
        $data = Transaksi::all();
        return view('transaksi.index', compact('data'));
    }

    public function TransaksiEdit($id)
    {
        $data = Transaksi::find($id);
        $coachs = Coach::all();
        $pakets = Paket::all();
        return view('transaksi.edit', compact('data', 'coachs', 'pakets'));
    }

    public function TransaksiUpdate(Request $request, $id)
    {
        $data = Transaksi::find($id);
        $data->status = $request->status;
        $data->coach_id = $request->coach_id;
        $data->paket_id = $request->paket_id;
        $data->jadwal_mulai = $request->jadwal_mulai;
        $data->jadwal_selesai = $request->jadwal_selesai;

        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $destinationPath = public_path('bukti_transfer');

            // Buat nama file yang unik
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Pindahkan gambar yang diupload ke direktori tujuan
            $image->move($destinationPath, $filename);

            // Hapus gambar lama jika ada
            if (!empty($data->bukti)) {
                $oldImagePath = public_path($data->bukti);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Simpan path gambar yang baru ke dalam model Transaksi
            $data->bukti = 'bukti_transfer/' . $filename;
        }

        $data->save();

        return redirect('/transaksi');
    }

    public function TransaksiDelete($id)
    {
        $deleteData = Transaksi::find($id);

        // Hapus gambar jika ada sebelum menghapus data
        if (!empty($deleteData->bukti)) {
            $imagePath = public_path($deleteData->bukti);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $deleteData->delete();

        return redirect('/transaksi');
    }

    public function Invoice($id)
    {
        $data = Transaksi::find($id);
        return view('transaksi.invoice', compact('data'));
    }
}
