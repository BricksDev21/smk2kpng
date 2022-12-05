<?php

namespace App\Http\Controllers\Umum;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleriController extends Controller
{
    public function index(Galeri $count)
    {
        $count->visitsCounter()->increment();
        $galeri = Galeri::latest()->paginate(12);
        return view('umum.galeri', compact('galeri'));
    }
}
