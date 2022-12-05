@extends('layouts.app',[
	'title' => 'Edit Berita'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')

        <label>Edit Berita</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.updateBerita', $berita->berita_id) }}"> 
        @csrf
        @method('PUT')

        <label>Judul Berita</label><br>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $berita->nama) }}"><br>
        @error('nama')
            {{ $message }}
        @enderror
        
                <label for="narasi">Narasi Berita</label>
            <textarea required="" name="narasi" id="narasi" class="text-dark form-control summernote">{{ $berita->narasi }}</textarea>
            <br><br>

              <label>Tag Berita</label><br>
              <select class="select2-multiple form-control" name="tags[]" multiple="multiple">
                        @foreach (explode(',', $berita->keyword) as $taging)
                            @foreach ($tag as $tags)
                                @if($tags->tag_id == $taging) 
                                <option value="{{ $tags->tag_id }}" {{ ( $tags->tag_id == $berita->kategori_id) ? 'selected' : '' }}> {{ $tags->tag_name }} </option>   
                                @endif
                            @endforeach
                        @endforeach               
              </select>

            <br>
              <br>
            <label>Kategori</label>
                        <select required="" class="form-control" name="kategori_id">
                        <option selected="" disabled="">- PILIH KATEGORI -</option><br>
                        @foreach($kategories as $data)
                            <option value="{{ $data->kategori_id }}" {{ ( $data->kategori_id == $berita->kategori_id) ? 'selected' : '' }}> {{ $data->kategori_name }} </option>
                        @endforeach
                        </select>
                        <br>
                        <label>Penulis</label>

                <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{ old('penulis', $berita->author) }}"><br>
                @error('penulis')
                    {{ $message }}
                @enderror

            <button type="submit" class="btn btn-primary">UPDATE</button>
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