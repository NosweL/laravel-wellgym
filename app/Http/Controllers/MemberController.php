<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jadwal;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view("member.index", compact('users'));
    }

    public function destroy($id)
    {
        $deleteData= User::find($id);
        $deleteData->delete();

        return redirect()->route('member.index');
    }

    public function dashboard()
    {
        $user = Auth::user();

        return view("member.dashboard", compact('user'));
    }
}
