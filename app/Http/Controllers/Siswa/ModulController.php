<?php

namespace App\Http\Controllers\Siswa;

use App\MOdels\Modul;
use App\MOdels\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModulController extends Controller
{
    public function index()
    {
        $modul = Modul::latest()->paginate(10);
        $tag = Tag::all();
        $nama = auth()->user()->nama;
        return view('siswa.modul', [
            'nama' => $nama,
            'tag' => $tag,
            'modul' => $modul
        ]);
    }
}
