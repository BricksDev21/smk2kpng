<?php

namespace App\Http\Controllers\Admin;

use App\Models\Visits;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        Visits::whereDate( 'created_at', '<=', now()->subDays(7))->delete();

        $visits = Visits::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(expired_at) as day_name"))
                    ->whereYear('expired_at', date('Y'))
                    ->groupBy(DB::raw("Day(expired_at)"))
                    ->pluck('count', 'day_name');
 
        $posts = Visits::whereDate('expired_at', Carbon::today())->count();
        $labels = $visits->keys();
        $data = $visits->values();
        
        return view('admin.home', [
            'labe' => $labels, 
            'dat' => $data,
            'visit' => $posts
        ]);
    }
}


