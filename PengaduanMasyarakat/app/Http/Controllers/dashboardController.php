<?php

namespace App\Http\Controllers;
use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class dashboardController extends Controller
{
    //
    public function index()
    {
        $id = Auth::id();
        $total = pengaduan::where('ID_USER',$id)->count();
        $ditolak = pengaduan::where('ID_USER', $id)
                                ->where('STATUS', 'ditolak')
                                ->count();
        $disetujui = pengaduan::where('ID_USER', $id)
                                ->where('STATUS', 'disetujui')
                                ->count();
        return view('dashboard', compact('total','ditolak','disetujui'));
    }
}
