@extends('layouts.app',[
	'title' => 'Edit Galeri'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')

        <label>Input Galeri</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.updateGaleri', $galeri->galeri_id) }}"> 
        @csrf
        @method('PUT')
        <label>TANGGAL</label><br>
        <input type="datetime-local" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{$galeri->tanggal}}"><br>
        @error('tanggal')
            {{ $message }}
        @enderror
        <label>NAMA</label><br>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $galeri->nama) }}"><br>
        @error('nama')
            {{ $message }}
        @enderror
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="gambar" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif"  data-default-file="{{ Storage::url('public/galeri/').$galeri->gambar }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>

@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script type="text/javascript">
    $(".summernote").summernote({
        height:500,
        callbacks: {
        // callback for pasting text only (no formatting)
            onPaste: function (e) {
              var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
              e.preventDefault();
              bufferText = bufferText.replace(/\r?\n/g, '<br>');
              document.execCommand('insertHtml', false, bufferText);
            }
        }
    })

    $(".summernote").on("summernote.enter", function(we, e) {
        $(this).summernote("pasteHTML", "<br><br>");
        e.preventDefault();
    });

    $('.dropify').dropify({
        messages: {
            default: 'Drag atau Drop untuk memilih gambar',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });

    $('.title').keyup(function(){
        var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
        $('.slug').val(title);
    });
</script>
@endpush