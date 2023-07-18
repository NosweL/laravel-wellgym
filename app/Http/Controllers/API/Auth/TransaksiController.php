<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    //
    public function TransaksiView(Request $request)
    {
        $transaksi = Transaksi::with('member', 'coach', 'paket')->get();
        return response()->json($transaksi, 200);
    }

    public function TransaksiAdd(Request $request)
    {
        $validateData = $request->validate([
            'id_member'         => 'required',
            'tanggal_mulai'     => 'required',
            'tanggal_selesai'   => 'required',
        ]);

        $Transaksi = new Transaksi([
            'id_member'         => $request->id_member,
            'tanggal_mulai'     => $request->tanggal_mulai,
            'tanggal_selesai'   => $request->tanggal_selesai,
        ]);

        $Transaksi->save();

        return response()->json($Transaksi, 201);
    }
    public function TransaksiUpdate(Request $request, $id)
    {
        $Transaksi = Transaksi::find($id);
        $Transaksi->tanggal_mulai    = $request->input('tanggal_mulai');
        $Transaksi->tanggal_selesai  = $request->input('tanggal_selesai');

        $Transaksi->save();

        return response()->json($Transaksi, 201);
    }
    public function TransaksiDelete(Request $request, $id)
    {
        $Transaksi = Transaksi::find($id);
        $Transaksi->delete();

        return response()->json($Transaksi, 201);
    }

}
