@extends('layouts.app',[
	'title' => 'Input Agenda'
])

@section('content')

        <label>Input Agenda</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.insertAgenda') }}">
            @csrf
            <label>Mulai</label><br>
                <input type="datetime-local" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}"><br>
                @error('tanggal')
                    {{ $message }}
                @enderror
                
                <label>Selesai</label><br>
                <input type="datetime-local" class="form-control @error('tanggal2') is-invalid @enderror" name="tanggal2" value="{{ old('tanggal2') }}"><br>
                @error('tanggal2')
                    {{ $message }}
                @enderror

                <label>NAMA</label><br>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}""><br>
                @error('nama')
                    {{ $message }}
                @enderror
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </form>
        @endsection
