<?php

namespace App\Http\Controllers\Admin;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = KategoriBerita::all();
        return view('admin.kategoriBerita.view', compact('kategori'));
    }

    public function create()
    {
        return view('admin.kategoriBerita.input');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori_name'     => 'required'
        ]);

        $kategori = KategoriBerita::create([
            'kategori_name'       => $request->kategori_name
        ]);

        if($kategori){
            return redirect()->route('admin.kategori')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.kategori')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($kategori_id)
    {
        $kategori = KategoriBerita::findOrFail($kategori_id);
        $kategori->delete();

        if($kategori){
            return redirect()->route('admin.kategori')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.kategori')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($kategori_id)
    {
        $kategori = KategoriBerita::findOrFail($kategori_id);
        return view('admin.kategoriBerita.edit', ['kategori' => $kategori]);
    }

    public function update(Request $request, $kategori_id)
    {
        $this->validate($request, [
            'kategori_name'      => 'required'
        ]);

        $updater = KategoriBerita::findOrFail($kategori_id);
        $updater->kategori_name = $request->input('kategori_name');
        $updater-> save();

        if($updater){
            return redirect()->route('admin.kategori')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.kategori')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
