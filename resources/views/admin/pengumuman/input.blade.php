@extends('layouts.app',[
	'title' => 'Input Pengumuman'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
        <label>Input Pengumuman</label>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.insertPengumuman') }}">
            @csrf
                <label>JUDUL PENGUMUMAN</label><br>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}""><br>
                @error('nama')
                    {{ $message }}
                @enderror
            

            <label for="narasi">Pengumuman</label>
            <textarea required="" name="narasi" id="narasi" class="text-dark form-control summernote"></textarea>
            <br><br>
            
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

            <label>Kategori</label>
                        <select required="" class="form-control" name="kategori_id">
                        <option selected="" disabled="">- PILIH KATEGORI -</option><br>
                        @foreach($kategories as $data)
                            <option value="{{ $data->kategori_id }}">{{ $data->kategori_name }}</option>
                        @endforeach
                        </select>

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

