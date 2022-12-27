<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Galeri;
use App\Models\Agenda;
use App\Models\Dashboard;
use App\Models\Pengumuman;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Dashboard $count)
    {
        $count->visitsCounter()->increment();

        $nama = auth()->user()->nama;
        $agenda = Agenda::latest()->paginate(4);
        $pengumuman = Pengumuman::latest()->paginate(10);
        $kategori = KategoriBerita::all();
        $galeri = Galeri::latest()->take(3)->get();
        $berita = Berita::latest()->take(3)->get();
        return view('siswa/dashboard', [
            'nama' => $nama,
            'agenda' => $agenda,
            'berita' => $berita,
            'galeri' => $galeri,
            'pengumuman' =>$pengumuman,
            'kategori' => $kategori
        ]);
    }
}