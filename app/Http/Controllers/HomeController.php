<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function dashboard()
    {
        if (Auth::user()->type == 0) { // MEMBER
            return redirect('member');
        } else { // ADMIN
            return view('dashboard');
        }
    }
}
