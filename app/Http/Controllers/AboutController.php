<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index($id_perum)
    {
        $perumahan = About::findOrFail($id_perum);

        return view('detail', compact('perumahan'));
    }
}
