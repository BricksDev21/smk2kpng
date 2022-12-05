@extends('layouts.app')

@section('content')
<br>
    <table>
        <tbody>
            <a href="{{ route('admin.inputGaleri') }}" class="btn btn-md btn-success mb-3">TAMBAH GALERI</a>
            @forelse ($galeri as $data)
                <tr>
                    <td class="text-center">
                    <img src="{{ Storage::url('public/galeri/').$data->gambar }}" class="rounded" style="width: 150px">
                    </td>
                </tr>
                <tr>
                    <td>{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y') }}</td>
                </tr>
                <tr>
                    <td>{!! $data->nama !!}</td>
                </tr>
                <tr>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.deleteGaleri', $data->galeri_id) }}" method="POST">
                        <a href="{{ route('admin.editGaleri', $data->galeri_id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit">HAPUS</button>
                    <td>
                </form>
                </tr>
                @empty
                <div>
                    Data Galeri belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table>  
    {{ $galeri->links() }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if(session()->has('success'))
            toastr.success('{{ session('success') }}'); 
        @elseif(session()->has('error'))
            toastr.error('{{ session('error') }}'); 
        @endif
    </script>
@endsection