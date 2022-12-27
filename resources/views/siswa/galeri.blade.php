@extends('layouts.siswa')
<!-- GREETING -->
@section('siswa')
    <main>

        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 md:mx-0 font-light mb-2">Profil Sekolah</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 md:mx-0 font-bold px-5 py-1 bg-sky-500/50">Galeri Foto</span>
        </div>

        <!-- CONTENT -->
        <div class="container m-auto relative mx-auto flex flex-col items-center gap-16">
            <!-- GALLERY -->
            <article class="mt-10 w-full gap-6 grid grid-cols-1 lg:grid-cols-2">
            @forelse ($galeri as $data)
                <div class="h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group transition-all">
                    <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="{{ Storage::url('public/galeri/').$data->gambar }}" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                    </div>
                    <div class="px-6 flex justify-between items-end text-black dark:text-white">
                        <button class="flex flex-col text-left justify-end font-medium" type="button" data-modal-toggle="expandedGallery">
                            <div class="flex gap-2 items-center">
                                <div class="h-3 w-3 bg-red-500 rounded-full shadow-xl dark:bg-red-400"></div>
                                <span class="font-medium">
                                    <em>{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y') }}</em>
                                </span>
                            </div>
                            <span class="text-2xl font-semibold">{!! $data->nama !!}</span>
                            </button>
      
                        <button class="flex flex-col-reverse justify-end items-center gap-1">
                            <span class="text-xs font-semibold peer ">{!! $total->where('item_id', $data->galeri_id)->count() !!}</span>
                            @if (Auth::check())
                            @forelse ($user as $datas)
                            
                            @if ($datas->item_id == $data->galeri_id)
                            <form action="{{ route('siswa.items.like', $data->galeri_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="bi bi-heart-fill fa-xl text-red-500 peer"></i></button>
                                    </form>@break
                                    @else
                                    @if ($loop->last)
                                    <form action="{{ route('siswa.items.like', $data->galeri_id) }}" method="POST">
                            @csrf
                            <button type="submit"><i class="bi bi-heart fa-xl peer "></i></button>
                            </form>

                            @endif
                            @endif
                            @empty
                            <form action="{{ route('siswa.items.like', $data->galeri_id) }}" method="POST">
                            @csrf
                            <button type="submit">Like</button>
                            </form>
                            @endforelse                  
                            @endif
                            
                        </button>
                            
                        
                    </div>
                </div>
            @empty
                <div>
                    Data Blog belum Tersedia.
                </div>
            @endforelse
            </article>
        </div>
    </main>
    @endsection

