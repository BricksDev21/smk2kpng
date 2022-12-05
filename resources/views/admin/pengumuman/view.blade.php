@extends('layouts.app')

@section('content')
<br>
    <table>
        <tbody>
            <a href="{{ route('admin.inputPengumuman') }}" class="btn btn-md btn-success mb-3">TAMBAH PENGUMUMAN</a>
            @forelse ($pengumuman as $data)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y') }}</td>
                </tr>
                <tr>
                    <td>{!! $data->nama !!}</td>
                </tr>
    
                <tr>
                    <td>
                    @foreach($kategori as $kate)    
                    @if($kate->kategori_id == $data->kategori_id) 
                        {!! $kate->kategori_name !!}
                    @endif
                    @endforeach
                    </td>
                </tr>
                
                <tr>
                    <td>{!! \Illuminate\Support\Str::limit($data->narasi, 200) !!}</td>
                </tr>
                <tr>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.deletePengumuman', $data->pengumuman_id) }}" method="POST">
                        <a href="{{ route('admin.editPengumuman', $data->pengumuman_id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit">HAPUS</button>
                    <td>
                </form>
                </tr>
                @empty
                <div>
                    Data pengumuman belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table>  
    {{ $pengumuman->links() }}
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