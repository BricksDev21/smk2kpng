<?php

namespace App\Http\Controllers\Umum;

use App\Models\Guru;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
        $guru = Guru::with(['status'])->get();
        return view('umum.teacher', compact('guru'));
    }
}

