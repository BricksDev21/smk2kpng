<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Major_detailed extends Controller
{
    public function index()
    {
        $nama = auth()->user()->nama;
        return view('siswa.major-detailed', [
            'nama' => $nama
        ]);
    }
}
