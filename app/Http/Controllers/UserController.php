<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/list-user', compact('user'));
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }

    public function addUser()
    {


        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/form-user');
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }

    public function createUser(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'fullname' => 'required'
        ]);

        $defaultPassword = bcrypt('12345678');
        $validatedData['password'] = $defaultPassword;

        User::create($validatedData);
        return redirect('/list-user')->with('msg', 'User Berhasil Ditambahkan !');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);

        // dd($perusahaan);
        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/edit-user', compact('user'));
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }

    public function updateUser(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'fullname' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->update($validatedData);
        return redirect('/list-user')->with('msg', 'User Berhasil Di Ubah !');
    }

    public function resetPass($id)
    {
        $user = User::findOrFail($id);

        $defaultPassword = '12345678';

        $user->update([
            'password' => Hash::make($defaultPassword)
        ]);

        return back()->with('msg', 'Reset Password Berhasil !');
    }
    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect('/list-user')->with('msg', 'User berhasil dihapus');
    }
}
