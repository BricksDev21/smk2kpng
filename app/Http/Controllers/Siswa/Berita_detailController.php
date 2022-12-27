<?php

namespace App\Http\Controllers\Siswa;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Berita_detailController extends Controller
{

    public function index($id)
    {
        $post=\App\Models\berita::find($id);
        $tag = Tag::all();
        $kategori = KategoriBerita::all();
        $nama = auth()->user()->nama;
        return view('siswa.news-detailed', [
            'nama' => $nama,
            'post'=>$post,
            'tag' => $tag,
            'kategori' => $kategori
        ]);
    }

    function save_comment(Request $request){
        $data=new \App\Models\Comment;
        $data->berita_id=$request->post;
        $data->comment_text=$request->comment;
        $data->save();
        return response()->json([
            'bool'=>true
        ]);
    }
}
