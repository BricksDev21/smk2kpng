<?php

namespace App\Http\Controllers\Siswa;
use App\Models\Post;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Pengumuman_detailController extends Controller
{

    public function index($pengumuman_id)
    {
        $pengumuman = Pengumuman::findOrFail($pengumuman_id);
        $kategori = KategoriBerita::all();
        $nama = auth()->user()->nama;
        return view('siswa.announcement-detailed', [
            'nama' => $nama,
            'pengumuman' => $pengumuman,
            'kategori' => $kategori
        ]);
    }
}
