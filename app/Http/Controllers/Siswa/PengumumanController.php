<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Pengumuman;
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
        $nama = auth()->user()->nama;
        $tag = Tag::all();
        return view('siswa.announcement', [
            'nama' => $nama,
            'pengumuman' => $pengumuman,
            'tag' => $tag,
            'kategori' => $kategori
        ]);
    }
}
