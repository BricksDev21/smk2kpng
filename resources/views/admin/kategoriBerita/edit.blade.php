@extends('layouts.app',[
	'title' => 'Input Galeri'
])

@section('content')
        <label>Edit kategori</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.updateKategori', $kategori->kategori_id) }}">
            @csrf
            @method('PUT')
                <label>NAMA KATEGORI</label>
                <input type="text" class="form-control @error('kategori_name') is-invalid @enderror" name="kategori_name" value="{{ old('kategori_name', $kategori->kategori_name) }}"><br>
                @error('kategori_name')
                    {{ $message }}
                @enderror
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
        @endsection