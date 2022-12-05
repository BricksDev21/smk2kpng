@extends('layouts.app',[
	'title' => 'Edit Modul'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
        <label>Input Modul</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.updateModul') }}">
        @csrf
        @method('PUT')
                <label>JUDUL MODUL</label><br>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $modul->nama) }}"><br>
                @error('nama')
                    {{ $message }}
                @enderror
                <label>PENULIS</label><br>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{ old('penulis', $modul->penulis) }}"><br>
                @error('penulis')
                    {{ $message }}
                @enderror
                <label>DESKRIPSI</label><br>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi', $modul->deskripsi) }}"><br>
                @error('deskripsi')
                    {{ $message }}
                @enderror

              <label>Tag Modul</label><br>
              <select class="select2-multiple form-control" name="tags[]" multiple="multiple">
                        @foreach (explode(',', $modul->keyword) as $taging)
                            @foreach ($tag as $tags)
                                @if($tags->tag_id == $taging) 
                                <option value="{{ $tags->tag_id }}" {{ ( $tags->tag_id == $modul->kategori_id) ? 'selected' : '' }}> {{ $tags->tag_name }} </option>   
                                @endif
                            @endforeach
                        @endforeach               
              </select>

            
              <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Dokumen</label>
                        <input type="file" name="dokumen" class="dropify form-control" data-height="190" data-allowed-file-extensions="pdf docx xslx txt"  data-default-file="{{ Storage::url('public/modul/dokumen/').$modul->dokumen }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif"  data-default-file="{{ Storage::url('public/modul/gambar/').$modul->gambar }}">
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