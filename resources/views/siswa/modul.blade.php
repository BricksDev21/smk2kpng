@extends('layouts.siswa')
<!-- GREETING -->
@section('siswa')

        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 lg:mx-0 font-light mb-2">Akademik</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 lg:mx-0 font-bold px-5 py-1 bg-sky-500/50">Pusat Modul</span>
        </div>

        <!-- MODUL -->
        <div class="container relative mx-auto flex gap-20 items-start justify-between -translate-y-36 -mb-36">

            <!-- modul-sidebar -->
            <div class="relative hidden xl:flex flex-col gap-5 items-start">
 
                <!-- modul-sidebar-title -->
                <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-800 dark:text-white font-medium md:font-semibold">
                    Kategori Modul
                </h1>

                <ul class="pl-4 flex flex-col gap-3 text-xl font-medium">
                            @foreach ($tag as $tags)
                                <span class="px-3 py-2 bg-sky-500 rounded-xl text-white font-medium">
                                    
                                </span>
                                <li class="active:font-bold hover:text-sky-500 dark:text-white dark:hover:text-sky-400 transition-colors">
                                {!! $tags->tag_name !!}
                                </li>
                            @endforeach
                      
                </ul>
            </div>

            <!-- modul-main -->
            <div class="m-auto w-full xl:m-0 relative flex gap-5 flex-col items-end justify-end">

                <!-- modul-card -->
                <section class="w-full max-w-screen-lg mb-7 grid grid-cols-1 lg:grid-cols-2 gap-6" id="modul">
                @forelse ($modul as $data)
                    <div class="h-fit w-auto p-6 bg-white rounded-3xl shadow-2xl flex flex-col gap-6 group hover:translate-y-2 hover:shadow-xl transition-all dark:bg-gray-800">
                        <div class="h-96 w-full relative flex self-center flex-shrink-0 rounded-2xl overflow-hidden">
                            <img src="{{ Storage::url('public/modul/gambar/').$data->gambar }}" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                            <div class="absolute w-full p-3 flex justify-between">
                            @foreach (explode(',', $data->keyword) as $taging)
                            @foreach ($tag as $tags)
                                @if($tags->tag_id == $taging) 
                                <span class="px-3 py-2 bg-sky-500 rounded-xl text-white font-medium">
                                    {!! $tags->tag_name !!}
                                </span>
                                @endif
                            @endforeach
                            @endforeach
                                
                                <button class="px-3 rounded-xl bg-sky-500 hover:bg-sky-600 border-none focus:ring-4 focus:outline-none focus:ring-sky-300">
                                    <i class="bi bi-arrow-up-right text-white"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h1 class="text-2xl font-semibold text-black dark:text-white">{!! $data->nama !!}</h1>
                            <p class="text-sm font-light text-black dark:text-white">{!! $data->deskripsi !!}</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="{{ Storage::url('public/modul/dokumen/').$data->dokumen }}"><button class="px-6 py-3 bg-sky-500 rounded-full flex items-center gap-3 text-white shadow-xl hover:translate-y-1 hover:shadow-none transition-all">
                                <i class="bi bi-download"></i>
                                <span class="text-sm font-bold">Download</span>
                            </button></a>
                        </div>
                    </div>
                    @empty      
                    <div>
                        Data modul belum Tersedia.
                    </div>
                @endforelse
                </section>
            </div>            
        </div>

        @endsection
    