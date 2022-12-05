<?php

namespace App\Http\Controllers\Admin;

use App\Models\Guru;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::with(['status'])->get();
        return view('admin.guru.view', compact('guru'));
    }

    public function create()
    {
        $status = Status::all();
        return view('admin.guru.input', compact('status'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,png,jpg',
            'status_id'  => 'required',
            'nama'       => 'required'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/guru', $image->hashName());

        $guru = Guru::create([
            'gambar'     => $image->hashName(),
            'status_id'  => $request->status_id,
            'nama'       => $request->nama
        ]);

        if($guru){
            return redirect()->route('admin.guru')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.guru')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($guru_id)
    {
        $guru = Guru::findOrFail($guru_id);
        Storage::disk('local')->delete('public/guru/'.$guru->gambar);
        $guru->delete();

        if($guru){
            return redirect()->route('admin.guru')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.guru')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($guru_id)
    {
        $guruu = Guru::findOrFail($guru_id);
        $status = Status::all();
        return view('admin.guru.edit', [
            'guru' => $guruu,
            'status' => $status
        ]);
    }

    public function update(Request $request, $guru_id)
    {
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,png,jpg',
            'status_id'  => 'required',
            'nama'       => 'required'
        ]);

        $updater = Guru::findOrFail($guru_id);

        if($request->file('gambar') == "") {
            $updater->status_id = $request->input('status_id');
            $updater->nama   = $request->input('nama');
            $updater-> save();
        } else {
            Storage::disk('local')->delete('public/guru/'.$updater->gambar);
            $image = $request->file('gambar');
            $image->storeAs('public/guru', $image->hashName());
            $updater->gambar = $image->hashName();
            $updater->status_id = $request->input('status_id');
            $updater->nama   = $request->input('nama');
            $updater-> save();
    
        }

        if($updater){
            return redirect()->route('admin.guru')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.guru')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
