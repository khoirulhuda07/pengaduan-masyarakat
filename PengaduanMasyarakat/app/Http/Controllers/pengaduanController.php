<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengaduan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class pengaduanController extends Controller
{
    //
    public function index()
    {
        return view('pengaduan');
    }
    public function tambah(Request $request)
    {
        request()->validate(
            [
                'jenis' => 'required',
                'old_password' => 'nullable | string',
                'password' => 'nullable | required_with:old_password |string | confirmed | min:8',
                'foto' => 'nullable | image | mimes:jpg,jpeg,png,pdf | max:2048',
            ],
            [
                'jenis.required' => 'Jenis pengaduan harus dipilih',
                'foto.max' => 'Maksimal 2 MB',
                'foto.image' => 'File ekstensi harus jpg, jpeg, gif, png, svg',
            ]
        );
        $pengaduan = new pengaduan;
        $pengaduan->ID_USER = Auth::id();
        $pengaduan->NAMA = $request->nama;
        $pengaduan->jenis = $request->jenis;
        $pengaduan->LOKASI = $request->lokasi;
        $pengaduan->PENGADUAN = $request->pengaduan;
        if (request()->hasFile('pendukung')) {
            // cara kedua
            // $fileName = $request->file('foto')->store('photo_users');
            // $path = $users->foto;
            // if ($path != null) {
            //     Storage::delete($path);
            // }
            // $pathPhoto = $request->file('foto')->store('photo_users');
            // $users->foto = $pathPhoto;

            // cara pertama
            $path = '/' . $pengaduan->DOKUMEN;
            if ($path != null) {
                Storage::delete($path);
            }
            $photo = $request->file('pendukung');
            $extension = $photo->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;

            $request->pendukung->move(storage_path('app/public/'), $fileName);
            $pengaduan->DOKUMEN = $fileName;
        }
        $pengaduan->save();
        return redirect()->back()->with('success','surat pengaduan terkirim');
    }

   
}
