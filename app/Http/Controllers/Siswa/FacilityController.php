<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    public function index()
    {
        $nama = auth()->user()->nama;
        return view('siswa.facility', [
            'nama' => $nama
        ]);
    }
}
