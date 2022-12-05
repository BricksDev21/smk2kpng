@extends('layouts.app',[
	'title' => 'Input Modul'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
        <label>Input Modul</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.insertModul') }}">
            @csrf
                <label>JUDUL MODUL</label><br>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}""><br>
                @error('nama')
                    {{ $message }}
                @enderror
                <label>PENULIS</label><br>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{ old('penulis') }}"><br>
                @error('penulis')
                    {{ $message }}
                @enderror
                <label>DESKRIPSI</label><br>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}"><br>
                @error('deskripsi')
                    {{ $message }}
                @enderror

                <label>Tag Berita</label><br>
              <select class="select2-multiple form-control" name="tags[]" multiple="multiple">
              @foreach($tags as $tag)
                        <option value="{{ $tag->tag_id }}" {{ in_array($tag->tag_id, old('tags', [])) ? 'selected' : '' }}>{{ $tag->tag_name }}</option>
              @endforeach           
              </select>

            
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Dokumen</label>
                        <input type="file" name="dokumen" class="dropify form-control" data-height="190" data-allowed-file-extensions="pdf docx xslx txt" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                    </div>
                </div>
            </div>

 

                <button type="submit" class="btn btn-primary">UPLOAD</button>
        </form>
        

@stop

@push('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       
       <script>
         $(document).ready(function() {
             $('.select2-multiple').select2({
                 placeholder: "Select",
                 allowClear: true
             });
 
         });
 
     </script>
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script type="text/javascript">
    $(".summernote").summernote({
        height:500,
        callbacks: {
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

