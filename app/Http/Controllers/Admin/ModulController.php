<?php

namespace App\Http\Controllers\Admin;

use App\Models\Modul;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ModulController extends Controller
{
    public function index()
    {
        $modul = Modul::latest()->paginate(10);
        $tag = Tag::all();
        return view('admin.modul.view', [
            'modul' => $modul,
            'tag' => $tag
        ]);
    }

    public function create()
    {
        $moduls = Modul::all();
        $tag = Tag::all();
        return view('admin.modul.input', [
            'modul' => $moduls,
            'tags' => $tag
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'          => 'required',
            'narasi'        => 'required',
            'tags'          => 'required',
            'dokumen'       => 'required',
            'penulis'       => 'required',
            'gambar'        => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/modul/gambar/', $image->hashName());

        $dokumen = $request->file('dokumen');
        $dokumen->storeAs('public/modul/dokumen/', $dokumen->hashName());

        $modul = Modul::create([
            'gambar'     => $image->hashName(),
            'dokumen'    => $dokumen->hashName(),
            'deskripsi'  => $request->narasi,
            'nama'       => $request->nama,
            'penulis'    => $request->penulis,
            'keyword'    => $request->tags
        ]);

        if($modul){
            return redirect()->route('admin.modul')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.modul')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($modul_id)
    {
        $modul = Modul::findOrFail($modul_id);
        Storage::disk('local')->delete('public/modul/dokumen/'.$modul->dokumen);
        Storage::disk('local')->delete('public/modul/gambar/'.$modul->gambar);
        $modul->delete();

        if($modul){
            return redirect()->route('admin.modul')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.modul')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($modul_id)
    {
        $modul = Modul::findOrFail($modul_id);
        return view('admin.modul.edit', ['modul' => $modul]);
    }

    public function update(Request $request, $modul_id)
    {
        $this->validate($request, [
            'nama'          => 'required',
            'narasi'        => 'required',
            'tags'          => 'required',
            'dokumen'       => 'required',
            'penulis'       => 'required',
            'gambar'        => 'required'
        ]);

        $updater = Modul::findOrFail($modul_id);

        
        Storage::disk('local')->delete('public/modul/gambar/'.$updater->gambar);
        $image = $request->file('gambar');
        $image->storeAs('public/modul/gambar/', $image->hashName());
        storage::disk('local')->delete('public/modul/dokumen/'.$updater->dokumen);
        $dokumen = $request->file('dokumen');
        $dokumen->storeAs('public/modul/dokumen/', $dokumen->hashName());

            $updater->gambar = $image->hashName();
            $updater->dokumen = $dokumen->hashName();
            $updater->deskripsi = $request->input('narasi');
            $updater->keyword = $request->input('tags');
            $updater->penulis = $request->input('penulis');
            $updater->nama   = $request->input('nama');
            $updater-> save();

        if($updater){
            return redirect()->route('admin.modul')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.modul')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
