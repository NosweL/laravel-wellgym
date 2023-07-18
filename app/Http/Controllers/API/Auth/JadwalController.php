<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class JadwalController extends Controller
{
    public function JadwalView($id)
    {
        $member = User::find($id);
        $hari_ini = Carbon::now();
        $data = Transaksi::where('member_id', $member->id )->where('jadwal_selesai', '>=', $hari_ini)->first();

        return response()->json($data, 200);
    }

    public function JadwalRiwayat($id)
    {
        $member = User::find($id);
        $data = Transaksi::with('member', 'coach', 'paket')->where('member_id', $member->id )->get();
        return response()->json($data, 200);
    }

    public function JadwalAdd(Request $request)
    {
        $validateData = $request->validate([
            'id_member'         => 'required',
            'tanggal_mulai'     => 'required',
            'tanggal_selesai'   => 'required',
        ]);

        $Jadwal = new Jadwal([
            'id_member'         => $request->id_member,
            'tanggal_mulai'     => $request->tanggal_mulai,
            'tanggal_selesai'   => $request->tanggal_selesai,
        ]);

        $Jadwal->save();

        return response()->json($Jadwal, 201);
    }
    public function JadwalUpdate(Request $request, $id)
    {
        $Jadwal = Jadwal::find($id);
        $Jadwal->tanggal_mulai    = $request->input('tanggal_mulai');
        $Jadwal->tanggal_selesai  = $request->input('tanggal_selesai');

        $Jadwal->save();

        return response()->json($Jadwal, 201);
    }
    public function JadwalDelete(Request $request, $id)
    {
        $Jadwal = Jadwal::find($id);
        $Jadwal->delete();

        return response()->json($Jadwal, 201);
    }

}
