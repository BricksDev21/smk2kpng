<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MajorController extends Controller
{
    public function index()
    {
        $nama = auth()->user()->nama;
        return view('siswa.major', [
            'nama' => $nama
        ]);
    }
}
