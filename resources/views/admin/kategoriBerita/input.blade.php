@extends('layouts.app',[
	'title' => 'Input Kategori'
])

@section('content')
        <label>Input Kategori</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.insertKategori') }}">
            @csrf
                <label>NAMA KATEGORI</label>
                <input type="text" class="form-control @error('kategori_name') is-invalid @enderror" name="kategori_name" value="{{ old('kategori_name') }}"><br>
                @error('kategori_name')
                    {{ $message }}
                @enderror
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </form>
        @endsection