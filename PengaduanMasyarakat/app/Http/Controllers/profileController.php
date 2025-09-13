<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class profileController extends Controller
{
    //
    public function index()
    {
        $user = users::findOrFail(Auth::id());
        return view('profile' ,compact('user'));
    }
    public function edit(Request $request, String $id)
    {
        $users = users::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->alamat = $request->alamat;
        $users->noHp = '+62'. $request->noHp;
        if ($request->filled('old_password')) {
            if (Hash::check($request->old_password, $users->password)) {
                $users->update([
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()
                    ->withErrors(['old_password' => __('Tolong Periksa Password')])
                    ->withInput();
            }
        }
        if (request()->hasFile('foto')) {
            // cara kedua
            // $fileName = $request->file('foto')->store('photo_users');
            // $path = $users->foto;
            // if ($path != null) {
            //     Storage::delete($path);
            // }
            // $pathPhoto = $request->file('foto')->store('photo_users');
            // $users->foto = $pathPhoto;

            // cara pertama
            $path = 'photo_user/' . $users->foto;
            if ($path != null) {
                Storage::delete($path);
            }
            $photo = $request->file('foto');
            $extension = $photo->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;

            $request->foto->move(storage_path('app/public/photo_user'), $fileName);
            $users->foto = $fileName;
        }
        $users->save();
        return redirect()->back()->with('success', 'Data Profile sudah diperbarui');
    }
}
