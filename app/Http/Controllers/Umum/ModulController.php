<?php

namespace App\Http\Controllers\Umum;

use App\Models\Modul;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModulController extends Controller
{
    public function index()
    {
        $modul = Modul::latest()->paginate(10);
        $tag = Tag::all();
        return view('umum/modul', [
            'tag' => $tag,
            'modul' => $modul
        ]);
    }
}
