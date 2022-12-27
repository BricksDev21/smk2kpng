<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::latest()->paginate(10);
        return view('admin.agenda.view', compact('agenda'));
    }

    public function create()
    {
        return view('admin.agenda.input');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal'    => 'required',
            'tanggal2'    => 'required',
            'nama'       => 'required'
        ]);

        $agenda = Agenda::create([
            'tanggal'    => $request->tanggal,
            'tanggal2'   => $request->tanggal2,
            'nama'       => $request->nama
        ]);

        if($agenda){
            return redirect()->route('admin.agenda')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.agenda')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($agenda_id)
    {
        $agenda = Agenda::findOrFail($agenda_id);
        $agenda->delete();

        if($agenda){
            return redirect()->route('admin.agenda')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.agenda')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($agenda_id)
    {
        $agenda = Agenda::findOrFail($agenda_id);
        return view('admin.agenda.edit', ['agenda' => $agenda]);
    }

    public function update(Request $request, $agenda_id)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg',
            'tanggal'   => 'required',
            'nama'      => 'required'
        ]);

        $updater = Agenda::findOrFail($agenda_id);

        if($request->file('gambar') == "") {
            $updater->tanggal = $request->input('tanggal');
            $updater->nama   = $request->input('nama');
            $updater-> save();
        } else {
            Storage::disk('local')->delete('public/agenda/'.$updater->gambar);
            $image = $request->file('gambar');
            $image->storeAs('public/agenda', $image->hashName());
            $updater->gambar = $image->hashName();
            $updater->tanggal = $request->input('tanggal');
            $updater->nama   = $request->input('nama');
            $updater-> save();
    
        }

        if($updater){
            return redirect()->route('admin.agenda')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.agenda')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
