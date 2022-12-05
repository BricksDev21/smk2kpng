<?php

namespace App\Http\Controllers\Umum;

use App\Models\Galeri;
use App\Models\Dashboard;
use App\Models\Pengumuman;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Dashboard $count)
    {
        $count->visitsCounter()->increment();

        $pengumuman = Pengumuman::latest()->paginate(10);
        $kategori = KategoriBerita::all();
        $galeri = Galeri::latest()->take(3)->get();
        return view('umum/dashboard', [
            'galeri' => $galeri,
            'pengumuman' =>$pengumuman,
            'kategori' => $kategori
        ]);
    }
}
