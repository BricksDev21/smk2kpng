<?php

namespace App\Http\Controllers\Siswa;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        $tag = Tag::all();
        $kategori = KategoriBerita::all();
        $nama = auth()->user()->nama;
        return view('siswa.news', [
            'nama' => $nama,
            'berita' => $berita,
            'tag' => $tag,
            'kategori' => $kategori
        ]);
    }
}
