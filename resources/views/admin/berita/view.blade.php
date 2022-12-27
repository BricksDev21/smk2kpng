@extends('layouts.app')

@section('content')
<br>
    <table>
        <tbody>
            <a href="{{ route('admin.inputBerita') }}" class="btn btn-md btn-success mb-3">TAMBAH BERITA</a>
            @forelse ($berita as $data)
                <tr>
                    <td>{!! $data->nama !!}</td>
                </tr>
                <tr>
                    <td>{!! $data->author !!}</td>
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
                    <td>
                        @foreach (explode(',', $data->keyword) as $taging)
                            @foreach ($tag as $tags)
                                @if($tags->tag_id == $taging) 
                                    {!! $tags->tag_name !!}
                                @endif
                            @endforeach
                        @endforeach
                    </td>   
                </tr>
                
                <tr>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.deleteBerita', $data->id) }}" method="POST">
                       
                        @csrf
                        @method('DELETE')
                        <button type="submit">HAPUS</button>
                    <td>
                </form>
                </tr>
                @empty
                <div>
                    Data Berita belum Tersedia.
                </div>
            @endforelse
            </tr>
        </tbody>
    </table>  
    {{ $berita->links() }}
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