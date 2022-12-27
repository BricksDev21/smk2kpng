<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisionController extends Controller
{
    public function index()
    {
        $nama = auth()->user()->nama;
        return view('siswa.vision', [
            'nama' => $nama
        ]);
    }
}
