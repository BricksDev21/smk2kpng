<?php
namespace App\Http\Controllers\Siswa;

use App\Models\Galeri;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like($item)
    {
        Like::create([
            'user_id' => auth()->user()->id,
            'item_id' => $item,
        ]);

        return redirect()->back();
    }

    public function unlike(Request $request, Galeri $item)
    {
        Like::where([
            'user_id' => Auth::id(),
            'item_id' => $item->galeri_id,
        ])->delete();

        return redirect()->back();
    }
}
?>