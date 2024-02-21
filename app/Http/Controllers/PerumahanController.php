<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Perumahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PerumahanController extends Controller
{
    public function index()
    {
        $perumahan = Perumahan::with('kecamatan')->get();
        $kecamatan = Kecamatan::all();
        return view('beranda', compact('perumahan', 'kecamatan'));
    }
}
