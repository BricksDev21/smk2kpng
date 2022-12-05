@extends('layouts.app',[
	'title' => 'Input Galeri'
])

@section('content')
        <label>Input Status</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.insertStatus') }}">
            @csrf
                <label>NAMA STATUS</label>
                <input type="text" class="form-control @error('status_name') is-invalid @enderror" name="status_name" value="{{ old('status_name') }}"><br>
                @error('status_name')
                    {{ $message }}
                @enderror
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </form>
        @endsection