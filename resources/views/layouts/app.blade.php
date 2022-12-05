<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? '' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   @stack('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <br><br>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-md btn-success mb-3">Dashboard</a><br>
    <a href="{{ route('admin.galeri') }}" class="btn btn-md btn-success mb-3">Galeri</a><br>
    <a href="{{ route('admin.guru') }}" class="btn btn-md btn-success mb-3">Tenaga Pendidik</a><br>
    <a href="{{ route('admin.status') }}" class="btn btn-md btn-success mb-3">Status Guru</a><br>
    <a href="{{ route('admin.kategori') }}" class="btn btn-md btn-success mb-3">Kategori Berita</a><br>
    <a href="{{ route('admin.tag') }}" class="btn btn-md btn-success mb-3">Tag</a><br>
    <a href="{{ route('admin.berita') }}" class="btn btn-md btn-success mb-3">Berita</a><br>
    <a href="{{ route('admin.pengumuman') }}" class="btn btn-md btn-success mb-3">Pengumuman</a><br>
    <a href="{{ route('admin.modul') }}" class="btn btn-md btn-success mb-3">Modul</a><br>
    <main class="py-4">
        @yield('content')
    </main>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/js/adminlte.js"></script>
@stack('js')
</body>
</html>
