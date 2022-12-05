<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Foto</title>
</head>
<body>
    <table>
        <tbody>
            @forelse ($galeri as $data)
                <tr>
                    <td class="text-center">
                    <img src="{{ Storage::url('public/galeri/').$data->gambar }}" class="rounded" style="width: 150px">
                    </td>
                </tr>
                <tr>
                    <td>{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y') }}</td>
                </tr>
                <tr>
                    <td>{!! $data->nama !!}</td>
                </tr>
                <tr>
                </form>
                </tr>
                @empty
                <div>
                    Data Blog belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table>  
    {{ $galeri->links() }}
</body>
</html>