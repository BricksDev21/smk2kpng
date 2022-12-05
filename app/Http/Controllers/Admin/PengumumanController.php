<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{

    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);
        $kategori = KategoriBerita::all();
        return view('admin.pengumuman.view', [
            'pengumuman' => $pengumuman,
            'kategori' => $kategori
        ]);
    }

    public function create()
    {
        $kategori = KategoriBerita::all();
        return view('admin.pengumuman.input', [
            'kategories' => $kategori,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'narasi'    => 'required',
            'dokumen'       => 'required',
            'gambar'       => 'required',
            'kategori_id'   => 'required'
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
        $image->storeAs('public/pengumuman/gambar/', $image->hashName());

        $dokumen = $request->file('dokumen');
        $dokumen->storeAs('public/pengumuman/dokumen/', $dokumen->hashName());

        $pengumuman = Pengumuman::create([
            'gambar'     => $image->hashName(),
            'dokumen'    => $dokumen->hashName(),
            'narasi' => $content,
            'nama'       => $request->nama,
            'kategori_id'  => $request->kategori_id,
        ]);

        if($pengumuman){
            return redirect()->route('admin.pengumuman')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.pengumuman')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($pengumuman_id)
    {
        $pengumuman = Pengumuman::findOrFail($pengumuman_id);
        Storage::disk('local')->delete('public/pengumuman/dokumen/'.$pengumuman->dokumen);
        Storage::disk('local')->delete('public/pengumuman/gambar/'.$pengumuman->gambar);
        $pengumuman->delete();

        if($pengumuman){
            return redirect()->route('admin.pengumuman')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.pengumuman')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($pengumuman_id)
    {
        $pengumuman = Pengumuman::findOrFail($pengumuman_id);
        $kategori = KategoriBerita::all();
        return view('admin.pengumuman.edit',[
            'pengumuman' => $pengumuman,
            'kategories' => $kategori
        ]);
    }

    public function update(Request $request, $pengumuman_id)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'narasi'    => 'required',
            'dokumen'       => 'required',
            'gambar'       => 'required',
            'kategori_id'   => 'required'
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

        $updater = Pengumuman::findOrFail($pengumuman_id);

        if($request->file('gambar') == "") 
        {
            Storage::disk('local')->delete('public/pengumuman/gambar/'.$updater->gambar);
            $image = $request->file('gambar');
            $image->storeAs('public/pengumuman/gambar/', $image->hashName());
            $updater->gambar = $image->hashName();
            $updater->dokumen = $dokumen->hashName();
            $updater->narasi = $content;
            $updater->kategori_id   = $request->input('kategori_id');
            $updater->nama   = $request->input('nama');
            $updater-> save();
        }else if($request->file('dokumen') == "") 
        {
            Storage::disk('local')->delete('public/pengumuman/dokumen/'.$updater->dokumen);
            $dokumen = $request->file('dokumen');
            $dokumen->storeAs('public/pengumuman/dokumen/', $dokumen->hashName());
            $updater->gambar = $image->hashName();
            $updater->dokumen = $dokumen->hashName();
            $updater->narasi = $content;
            $updater->kategori_id   = $request->input('kategori_id');
            $updater->nama   = $request->input('nama');
            $updater-> save();
        }else if($request->file('gambar' && 'dokumen') == "") 
        {
            Storage::disk('local')->delete('public/pengumuman/dokumen/'.$updater->dokumen);
            Storage::disk('local')->delete('public/pengumuman/gambar/'.$updater->gambar);
            $dokumen = $request->file('dokumen');
            $dokumen->storeAs('public/pengumuman/dokumen/', $dokumen->hashName());
            $image = $request->file('gambar');
            $image->storeAs('public/pengumuman/gambar/', $image->hashName());
            $updater->gambar = $image->hashName();
            $updater->dokumen = $dokumen->hashName();
            $updater->narasi = $content;
            $updater->kategori_id   = $request->input('kategori_id');
            $updater->nama   = $request->input('nama');
            $updater-> save();
        }else {
            Storage::disk('local')->delete('public/pengumuman/dokumen/'.$updater->dokumen);
            Storage::disk('local')->delete('public/pengumuman/gambar/'.$updater->gambar);
            $dokumen = $request->file('dokumen');
            $dokumen->storeAs('public/pengumuman/dokumen/', $dokumen->hashName());
            $image = $request->file('gambar');
            $image->storeAs('public/pengumuman/gambar/', $image->hashName());
            $updater->gambar = $image->hashName();
            $updater->dokumen = $dokumen->hashName();
            $updater->narasi = $content;
            $updater->kategori_id   = $request->input('kategori_id');
            $updater->nama   = $request->input('nama');
            $updater-> save();
        }

        if($updater){
            return redirect()->route('admin.pengumuman')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.pengumuman')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
