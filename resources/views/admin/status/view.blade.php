@extends('layouts.app')

@section('content')
<br>
    <table>
        <tbody>
            <a href="{{ route('admin.inputStatus') }}" class="btn btn-md btn-success mb-3">TAMBAH STATUS</a>
            @forelse ($status as $data)
                <tr>
                    <td style="border: 1px solid;">{!! $data->status_name !!}</td>
                </tr>
                <tr>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.deleteStatus', $data->status_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">HAPUS</button>
                    <td>
                </form>
                </tr>
                @empty
                <div>
                    Data status belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table>  
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