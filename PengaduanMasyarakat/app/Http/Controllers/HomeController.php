<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    if(auth()->user()->level == 'admin'){
            return redirect('/akun');
    }elseif(auth()->user()->level == 'petugas'){
        return redirect('/riwayat');
    }elseif(auth()->user()->level == 'user'){
        return redirect('/dashboard');
    }else{
        return redirect('/login');
    }
}
}
