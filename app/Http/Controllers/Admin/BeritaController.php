<?php

namespace App\Http\Controllers\Admin;

use App\Models\Berita;
use App\Models\Tag;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->paginate(10);
        $tag = Tag::all();
        $kategori = KategoriBerita::all();
        return view('admin.berita.view', [
            'berita' => $berita,
            'tag' => $tag,
            'kategori' => $kategori
        ]);
    }

    public function create()
    {
        $kategori = KategoriBerita::all();
        $tag = Tag::all();
        return view('admin.berita.input', [
            'kategories' => $kategori,
            'tags' => $tag
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'          => 'required',
            'narasi'        => 'required',
            'tags'          => 'required',
            'kategori_id'   => 'required',
            'penulis'       => 'required'
        ]);

        $berita = Berita::create([
            'nama'         => $request->nama,
            'narasi'       => json_encode($request->narasi),
            'keyword'      => implode(',',$request->tags),
            'kategori_id'  => $request->kategori_id,
            'author'       => $request->penulis
        ]);

        if($berita){
            return redirect()->route('admin.berita')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.berita')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($berita_id)
    {
        $berita = Berita::findOrFail($berita_id);
        $berita->delete();

        if($berita){
            return redirect()->route('admin.berita')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.berita')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($berita_id)
    {
        $berita = Berita::findOrFail($berita_id);
        $kategori = KategoriBerita::all();
        $tag = Tag::all();
        return view('admin.berita.edit', [
            'berita' => $berita,
            'tag' => $tag,
            'kategories' => $kategori
        ]);
    }

    public function update(Request $request, $berita_id)
    {
        $this->validate($request, [
            'nama'          => 'required',
            'narasi'        => 'required',
            'tags'          => 'required',
            'kategori_id'   => 'required',
            'penulis'       => 'required'
        ]);

        $updater = Berita::findOrFail($berita_id);

            $updater->nama   = $request->input('nama');
            $updater->narasi   = json_encode($request->input('narasi'));
            $updater->keyword   = implode(',',($request->input('tags')));
            $updater->kategori_id   = $request->input('kategori_id');
            $updater->author   = $request->input('penulis');
            $updater-> save();
        

        if($updater){
            return redirect()->route('admin.berita')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.berita')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
