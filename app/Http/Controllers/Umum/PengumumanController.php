<?php

namespace App\Http\Controllers\Umum;

use App\Models\Post;
use App\Models\Pengumuman;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{

    public function index()
    {
        $pengumuman = Pengumuman::latest()->get();
        $kategori = KategoriBerita::all();
        $tag = Tag::all();
        return view('umum.announcement', [
            'pengumuman' => $pengumuman,
            'tag' => $tag,
            'kategori' => $kategori
        ]);
    }
}
