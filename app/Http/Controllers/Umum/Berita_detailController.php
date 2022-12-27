<?php

namespace App\Http\Controllers\Umum;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Berita_detailController extends Controller
{

    public function index($id)
    {
        $berita = Berita::findOrFail($id);
        $tag = Tag::all();
        $kategori = KategoriBerita::all();
        return view('umum.news-detailed', [
            'berita' => $berita,
            'tag' => $tag,
            'kategori' => $kategori
        ]);
    }
}
