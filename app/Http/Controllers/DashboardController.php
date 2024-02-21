<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Perumahan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $perumahan = Perumahan::with('perusahaan')->get();
        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/dashboard', compact('perumahan'));
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }

    public function listDev()
    {
        $perusahaan = Perusahaan::all();
        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/list-dev', compact('perusahaan'));
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }

    public function form()
    {
        $kecamatan = Kecamatan::all();
        $perusahaan = Perusahaan::all();
        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/form', compact('kecamatan', 'perusahaan'));
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }

    public function formDev()
    {
        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/formdev');
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }

    public function addDev(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pers' => 'required',
            'alamat_pers' => 'required',
            'telp_pers' => 'required'
        ]);

        Perusahaan::create($validatedData);
        return redirect('/add-perum')->with('msg', 'Developer Berhasil Ditambahkan !');
    }

    public function updateDev(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_pers' => 'required',
            'alamat_pers' => 'required',
            'telp_pers' => 'required'
        ]);

        $perusahaan = Perusahaan::findOrFail($id);
        $perusahaan->update($validatedData);
        return redirect('/list-dev')->with('msg', 'Developer Berhasil Di Ubah !');
    }

    public function deletePerum($id)
    {
        Perumahan::destroy($id);
        return redirect('/dashboard-admin')->with('msg', 'Perumahan Berhasil Di Hapus');
    }

    public function deletePers($id)
    {
        Perusahaan::destroy($id);
        return redirect('/list-dev')->with('msg', 'Perusahaan Berhasil Di Hapus');
    }

    public function editPers($id)
    {
        $perusahaan = Perusahaan::where('id_pers', $id)->get();

        // dd($perusahaan);
        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/updatedev', compact('perusahaan'));
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }

    public function addPerum(Request $request)
    {


        // Validasi input
        $request->validate([
            'nama_perum' => 'required',
            'id_kec' => 'required',
            'alamat_perum' => 'required',
            'id_pers' => 'required',
            'latitude_perum' => 'required',
            'longitude_perum' => 'required',
            'gambar_perum' => 'required|image|file|max:20048',
            'gambar_perum2' => 'required|image|file|max:20048',
            'gambar_perum3' => 'required|image|file|max:20048',
            'gambar_perum4' => 'required|image|file|max:20048'
        ]);

        // Upload gambar ke server
        $gambarPerumPath = $request->file('gambar_perum')->store('image-perum');
        $gambarPerum2Path = $request->file('gambar_perum2')->store('image-perum');
        $gambarPerum3Path = $request->file('gambar_perum3')->store('image-perum');
        $gambarPerum4Path = $request->file('gambar_perum4')->store('image-perum');

        // Simpan data ke dalam tabel perum
        $perumahan = new Perumahan([
            'nama_perum' => $request->input('nama_perum'),
            'id_kec' => $request->input('id_kec'),
            'alamat_perum' => $request->input('alamat_perum'),
            'id_pers' => $request->input('id_pers'),
            'latitude_perum' => $request->input('latitude_perum'),
            'longitude_perum' => $request->input('longitude_perum'),
            'gambar_perum' => $gambarPerumPath,
            'gambar_perum2' => $gambarPerum2Path,
            'gambar_perum3' => $gambarPerum3Path,
            'gambar_perum4' => $gambarPerum4Path,
        ]);

        $perumahan->save();

        return redirect('/dashboard-admin')->with('msg', 'Perumahan berhasil ditambahkan!');
    }

    public function updatePerum(Request $request, $id)
    {
        $request->validate([
            'nama_perum' => 'required',
            'id_kec' => 'required',
            'alamat_perum' => 'required',
            'id_pers' => 'required',
            'latitude_perum' => 'required',
            'longitude_perum' => 'required',
            'gambar_perum' => 'image|file|max:20048',
            'gambar_perum2' => 'image|file|max:20048',
            'gambar_perum3' => 'image|file|max:20048',
            'gambar_perum4' => 'image|file|max:20048'
        ]);

        // Mengambil data perumahan berdasarkan $id
        $perumahan = Perumahan::findOrFail($id);

        // Hapus dan simpan gambar_perum jika ada perubahan
        if ($request->hasFile('gambar_perum')) {
            Storage::delete($perumahan->gambar_perum);
            $gambarPerumPath = $request->file('gambar_perum')->store('image-perum');
        } else {
            $gambarPerumPath = $perumahan->gambar_perum;
        }

        // Lakukan hal yang sama untuk gambar_perum2
        if ($request->hasFile('gambar_perum2')) {
            Storage::delete($perumahan->gambar_perum2);
            $gambarPerum2Path = $request->file('gambar_perum2')->store('image-perum');
        } else {
            $gambarPerum2Path = $perumahan->gambar_perum2;
        }

        // Lakukan hal yang sama untuk gambar_perum3
        if ($request->hasFile('gambar_perum3')) {
            Storage::delete($perumahan->gambar_perum3);
            $gambarPerum3Path = $request->file('gambar_perum3')->store('image-perum');
        } else {
            $gambarPerum3Path = $perumahan->gambar_perum3;
        }

        // Lakukan hal yang sama untuk gambar_perum4
        if ($request->hasFile('gambar_perum4')) {
            Storage::delete($perumahan->gambar_perum4);
            $gambarPerum4Path = $request->file('gambar_perum4')->store('image-perum');
        } else {
            $gambarPerum4Path = $perumahan->gambar_perum4;
        }

        // Update data pada model
        $perumahan->update([
            'nama_perum' => $request->input('nama_perum'),
            'id_kec' => $request->input('id_kec'),
            'alamat_perum' => $request->input('alamat_perum'),
            'id_pers' => $request->input('id_pers'),
            'latitude_perum' => $request->input('latitude_perum'),
            'longitude_perum' => $request->input('longitude_perum'),
            'gambar_perum' => $gambarPerumPath,
            'gambar_perum2' => $gambarPerum2Path,
            'gambar_perum3' => $gambarPerum3Path,
            'gambar_perum4' => $gambarPerum4Path,
        ]);

        return redirect('/dashboard-admin')->with('msg', 'Perumahan Berhasil Di Ubah !');
    }



    public function editPerum($id)
    {
        $perumahan = Perumahan::findOrFail($id);
        $kecamatan = Kecamatan::all();
        $perusahaan = Perusahaan::all();
        // dd($perusahaan);
        if (Auth::check()) {
            // Pengguna sudah login, jalankan tindakan yang sesuai
            return view('admin/updatePerum', compact('kecamatan', 'perusahaan', 'perumahan'));
        } else {
            // Pengguna belum login, mungkin arahkan ke halaman login
            return redirect('/login');
        }
    }
}
