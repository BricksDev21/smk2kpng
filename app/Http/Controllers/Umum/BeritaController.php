<?php

namespace App\Http\Controllers\Umum;
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
        return view('umum.news', [
            'berita' => $berita,
            'tag' => $tag,
            'kategori' => $kategori
        ]);
    }
}
