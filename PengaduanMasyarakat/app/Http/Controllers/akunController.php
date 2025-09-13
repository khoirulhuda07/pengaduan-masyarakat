<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\pengaduan;
use App\Models\balasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class akunController extends Controller
{
    //
    public function index()
    {
        $user = users::where('level', '!=', 'admin')->get();
        return view('akun',compact('user'));
    }
    public function edit(Request $request, String $id)
    {
        $user = users::find($id);
        if ($request->filled('level')) {
            $user->level = $request->level;
        }
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->back()->with('success', 'Akun berhasil diubah');
    }
    public function hapus(String $id)
    {
        $user = users::find($id);
        $pengaduanList = Pengaduan::where('ID_USER', $id)->get();

    foreach ($pengaduanList as $pengaduan) {
        // Hapus semua balasan dari setiap pengaduan
        balasan::where('ID_PENGADUAN', $pengaduan->ID_PENGADUAN)->delete();
    }

    // Hapus semua pengaduan milik user
    Pengaduan::where('ID_USER', $id)->delete();

    // Hapus user-nya
    $user->delete();
        return redirect()->back()->with('success', 'Akun berhasil dihapus');
    }
}
