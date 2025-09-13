<?php

namespace App\Http\Controllers;
use App\Models\pengaduan;
use App\Models\balasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dataController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->level == 'user') {
            // Tampilkan hanya pengaduan milik user yang login
            $pengaduan = Pengaduan::with('balasan')
                ->where('ID_USER', Auth::id())
                ->get();
        }else{
            // Tampilkan semua pengaduan (misalnya petugas bisa lihat semua)
            $pengaduan = Pengaduan::with('balasan')->get();
        }
        return view('data', compact('pengaduan'));
    }
    public function hapus( String $id)
    {
        $pengaduan = pengaduan::find($id);
        $pengaduan->delete();
        return redirect()->back()->with("success", 'data berhasil dihapus');
    }
    public function balasan(Request $request, String $id )
    {
        $request->validate([
            'status' => 'required|not_in:""',
            'keterangan' => 'required',
           
        ],
        [
            'status.not_in' => 'Kategori ikan tidak boleh kosong.',
            'keterangan.required' => 'Balasan tidak boleh kosong.',

        ]);
        $pengaduan = pengaduan::where('ID_PENGADUAN', $id)->first();
        $pengaduan->STATUS = $request->status;
        $pengaduan->save();

        $balasan = new balasan();
        $balasan->ID_PENGADUAN = $id;
        $balasan->KETERANGAN = $request->keterangan;
        $balasan->save();
        return redirect()->back()->with('success','balasan sudah terkirim');
    }
}
