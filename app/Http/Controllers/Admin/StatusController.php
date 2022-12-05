<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::all();
        return view('admin.status.view', compact('status'));
    }

    public function create()
    {
        return view('admin.status.input');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'status_name'     => 'required'
        ]);

        $status = Status::create([
            'status_name'       => $request->status_name
        ]);

        if($status){
            return redirect()->route('admin.status')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.status')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($status_id)
    {
        $status = Status::findOrFail($status_id);
        $status->delete();

        if($status){
            return redirect()->route('admin.status')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('admin.status')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit($status_id)
    {
        $status = Status::findOrFail($status_id);
        return view('admin.status.edit', ['status' => $status]);
    }

    public function update(Request $request, $status_id)
    {
        $this->validate($request, [
            'status_name'      => 'required'
        ]);

        $updater = Status::findOrFail($status_id);
        $updater->status_name   = $request->input('status_name');
        $updater-> save();

        if($updater){
            return redirect()->route('admin.status')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.status')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
