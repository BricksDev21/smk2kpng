@extends('layouts.app')

@section('content')
<br>
    <table>
        <tbody>
            <a href="{{ route('admin.inputAgenda') }}" class="btn btn-md btn-success mb-3">TAMBAH AGENDA</a>
            @forelse ($agenda as $data)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y') }} - {{ \Carbon\Carbon::parse($data->tanggal2)->translatedFormat('l, d F Y') }}</td>
                </tr>
                <tr>
                    <td>{!! $data->nama !!}</td>
                </tr>
                <tr>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.deleteAgenda', $data->agenda_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">HAPUS</button>
                    <td>
                </form>
                </tr>
                @empty
                <div>
                    Data Agenda belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table>  
    {{ $agenda->links() }}
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