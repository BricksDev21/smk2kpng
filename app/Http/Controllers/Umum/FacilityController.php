<?php

namespace App\Http\Controllers\Umum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    public function index()
    {
        return view('umum.facility');
    }
}
