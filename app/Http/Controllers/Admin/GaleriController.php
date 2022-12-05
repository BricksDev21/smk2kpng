<?php

namespace App\Http\Controllers\Admin;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->paginate(2);
        return view('admin.galeri.view', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.input');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'     => 'required',
            'tanggal'    => 'required',
            'nama'       => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/galeri', $image->hashName());

        $galeri = Galeri::create([
            'gambar'     => $image->hashName(),
            'tanggal'    => $request->tanggal,
            'nama'       => $request->nama
        ]);

        if($galeri){
            return redirect()->route('admin.galeri')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.galeri')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($galeri_id)
    {
        $galeri = Galeri::findOrFail($galeri_id);
        Storage::disk('local')->delete('public/galeri/'.$galeri->gambar);
        $galeri->delete();

        if($galeri){
            return redirect()->route('admin.galeri')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.galeri')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($galeri_id)
    {
        $galeri = Galeri::findOrFail($galeri_id);
        return view('admin.galeri.edit', ['galeri' => $galeri]);
    }

    public function update(Request $request, $galeri_id)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg',
            'tanggal'   => 'required',
            'nama'      => 'required'
        ]);

        $updater = Galeri::findOrFail($galeri_id);

        if($request->file('gambar') == "") {
            $updater->tanggal = $request->input('tanggal');
            $updater->nama   = $request->input('nama');
            $updater-> save();
        } else {
            Storage::disk('local')->delete('public/galeri/'.$updater->gambar);
            $image = $request->file('gambar');
            $image->storeAs('public/galeri', $image->hashName());
            $updater->gambar = $image->hashName();
            $updater->tanggal = $request->input('tanggal');
            $updater->nama   = $request->input('nama');
            $updater-> save();
    
        }

        if($updater){
            return redirect()->route('admin.galeri')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.galeri')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
