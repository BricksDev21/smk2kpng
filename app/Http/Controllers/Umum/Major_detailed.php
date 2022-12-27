<?php

namespace App\Http\Controllers\Umum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Major_detailed extends Controller
{
    public function index()
    {
        return view('umum.major-detailed');
    }
}
