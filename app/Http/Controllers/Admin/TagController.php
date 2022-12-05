<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TagController extends Controller
{
    public function index()
    {
        $tag = Tag::all();
        return view('admin.tagBerita.view', compact('tag'));
    }

    public function create()
    {
        return view('admin.tagBerita.input');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tag_name'     => 'required'
        ]);

        $tag = Tag::create([
            'tag_name'       => $request->tag_name
        ]);

        if($tag){
            return redirect()->route('admin.tag')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.tag')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($tag_id)
    {
        $tag = Tag::findOrFail($tag_id);
        $tag->delete();

        if($tag){
            return redirect()->route('admin.tag')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.tag')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($tag_id)
    {
        $tag = Tag::findOrFail($tag_id);
        return view('admin.tagBerita.edit', ['tag' => $tag]);
    }

    public function update(Request $request, $tag_id)
    {
        $this->validate($request, [
            'tag_name'      => 'required'
        ]);

        $updater = Tag::findOrFail($tag_id);
        $updater->tag_name = $request->input('tag_name');
        $updater-> save();

        if($updater){
            return redirect()->route('admin.tag')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.tag')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
