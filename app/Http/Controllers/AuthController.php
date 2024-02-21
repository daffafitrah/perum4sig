<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // $credentials['is_active'] = 1;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user(); // Mendapatkan data pengguna Users


            $request->session()->put('username', $user->username);
            $request->session()->put('fullname', $user->fullname);
            // Periksa jika email-nya null

            return redirect()->intended('/dashboard-admin');
        }
        return back()->with('msg', 'Username atau Password Salah !');
    }
    public function logout()
    {
        Auth::logout(); // Mengakhiri sesi pengguna
        return redirect('/login');
    }

    public function formchangePass()
    {
        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/change-pass');
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:5|confirmed',
        ], [
            'new_password.confirmed' => 'Password baru yang diinputkan tidak cocok !'
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);

            return redirect('/update-password')->with('msg', 'Password Telah Diubah !');
        } else {
            return redirect()->back()->with('error', 'Password Lama Salah !');
        }
    }
}
