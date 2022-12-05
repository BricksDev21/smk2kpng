@extends('layouts.app',[
	'title' => 'Input Tag'
])

@section('content')
        <label>Input Tag</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.insertTag') }}">
            @csrf
                <label>NAMA TAG</label>
                <input type="text" class="form-control @error('tag_name') is-invalid @enderror" name="tag_name" value="{{ old('tag_name') }}"><br>
                @error('tag_name')
                    {{ $message }}
                @enderror
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </form>
        @endsection