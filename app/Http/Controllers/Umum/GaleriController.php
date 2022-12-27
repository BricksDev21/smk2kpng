<?php

namespace App\Http\Controllers\Umum;

use App\Models\Galeri;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->paginate(12);
        $total = Like::all();
        return view('umum.galeri', [
            'galeri' => $galeri,
            'total' => $total
        ]);
    }
}
