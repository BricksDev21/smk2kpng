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
            'gambar'        => 'required',
            'penulis'       => 'required'
        ]);

        $content = $request->narasi;
       $dom = new \DomDocument();
       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
       $imageFile = $dom->getElementsByTagName('img');
 
       foreach($imageFile as $item => $image){
           $data = $image->getAttribute('src');
           list($type, $data) = explode(';', $data);
           list(, $data)      = explode(',', $data);
           $imgeData = base64_decode($data);
           $image_name= "/img/pengumuman/" . time().$item.'.png';
           $path = public_path() . $image_name;
           file_put_contents($path, $imgeData);
           
           $image->removeAttribute('src');
           $image->setAttribute('src', $image_name);
        }
 
       $content = $dom->saveHTML();

        $image = $request->file('gambar');
        $image->storeAs('public/berita/gambar/', $image->hashName());

        $berita = Berita::create([
            'gambar'     => $image->hashName(),
            'nama'         => $request->nama,
            'narasi'       => $content,
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

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        Storage::disk('local')->delete('public/berita/gambar/'.$berita->gambar);
        $berita->delete();

        if($berita){
            return redirect()->route('admin.berita')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.berita')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $kategori = KategoriBerita::all();
        $tag = Tag::all();
        return view('admin.berita.edit', [
            'berita' => $berita,
            'tag' => $tag,
            'kategories' => $kategori
        ]);
    }

    public function update(Request $request, $id)
    {

        $updater = Berita::findOrFail($id);

        $content = $request->input('narasi');
       $dom = new \DomDocument();
       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
       $imageFile = $dom->getElementsByTagName('img');
 
       foreach($imageFile as $item => $image){
           $data = $image->getAttribute('src');
           list($type, $data) = explode(';', $data);
           list(, $data)      = explode(',', $data);
           $imgeData = base64_decode($data);
           $image_name= "/img/pengumuman/" . time().$item.'.png';
           $path = public_path() . $image_name;
           file_put_contents($path, $imgeData);
           
           $image->removeAttribute('src');
           $image->setAttribute('src', $image_name);
        }
 
       $content = $dom->saveHTML();

            if($request->file('gambar') == "") {
                $updater->nama   = $request->input('nama');
            $updater->narasi   = $content;
            $updater->keyword   = implode(',',($request->input('tags')));
            $updater->kategori_id   = $request->input('kategori_id');
            $updater->author   = $request->input('penulis');
            $updater-> save();
            } else {
                Storage::disk('local')->delete('public/berita/gambar/'.$updater->gambar);
            $image = $request->file('gambar');
            $image->storeAs('public/berita/gambar/', $image->hashName());
            $updater->gambar   = $image->hashName();
            $updater->nama   = $request->input('nama');
            $updater->narasi   = $content;
            $updater->keyword   = implode(',',($request->input('tags')));
            $updater->kategori_id   = $request->input('kategori_id');
            $updater->author   = $request->input('penulis');
            $updater-> save();
            }
        

        if($updater){
            return redirect()->route('admin.berita')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.berita')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
 