<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Guru;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
        $guru = Guru::with(['status'])->get();
        $nama = auth()->user()->nama;
        return view('siswa.teacher', [
            'nama' => $nama,
            'guru' => $guru
        ]);
    }
}

