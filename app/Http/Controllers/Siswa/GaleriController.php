<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Galeri;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->with(['likes'])->get();
        $nama = auth()->user()->nama;
        $id = auth()->user()->id;
        $total = Like::all();
        $user = Like::where('user_id', 'like', $id)->get();
        return view('siswa.galeri', [
            'nama' => $nama,
            'id_s' => $id,
            'galeri' => $galeri,
            'user' => $user,
            'total' => $total
        ]);
    }
}
