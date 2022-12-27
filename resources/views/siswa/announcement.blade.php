@extends('layouts.siswa')
@section('siswa')

        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 lg:mx-0 font-light mb-2">Akademik</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 lg:mx-0 font-bold px-5 py-1 bg-sky-500/50">Pengumuman</span>
        </div>

        <!-- ANNOUNCEMENT -->
        <div class="container relative mx-auto flex items-start justify-between -translate-y-12 -mb-12">

            <!-- anouncement-sidebar -->
            <div class="relative hidden xl:flex flex-col gap-5 items-start">
                <div class="mb-5 flex">

                    <!-- announcement-sidebar-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-white font-medium md:font-semibold">
                        Pengumuman
                    </h1>
                </div>

                <ul class="pl-4 flex flex-col gap-3 text-xl font-medium">
                    @foreach($kategori as $kate) 
                        <li class="active:font-bold hover:text-sky-500 dark:text-white dark:hover:text-sky-400 transition-colors">
                            {!! $kate->kategori_name !!}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- announcement-card -->
            <div class="m-auto xl:m-0 relative flex flex-col items-end">
                <section class="w-full flex flex-col self-center" id="announcement">
                @forelse ($pengumuman as $data)
                    <article class="h-full max-w-screen-md mb-12 grid grid-cols-1 gap-5 md:gap-7">
                        <article class="h-full w-full p-9 text-black dark:text-white bg-white rounded-3xl shadow-2xl border-2 border-sky-500 dark:bg-gray-800">
                            <div class="flex items-center justify-between">
                                <div class="flex gap-6">
                                    
                            @foreach (explode(',', $data->keyword) as $taging)
                            @foreach ($tag as $tags)
                                @if($tags->tag_id == $taging) 
                                    <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                        <div class="h-2 w-2 bg-red-500 rounded-full dark:bg-red-400"></div>
                                        <span class="text-xs font-medium text-red-500 uppercase dark:text-red-400">{!! $tags->tag_name !!}</span>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                                </div>
                                <span class="text-xs font-medium tracking-widest text-gray-500 dark:text-gray-400">{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, d F Y') }}</span>
                            </div>
                            <div class="my-6 flex flex-col">
                                <span class="text-lg font-bold">{!! $data->nama !!}</span>
                                <br>
                                <span class="text-sm">{!! \Illuminate\Support\Str::limit($data->narasi, 150) !!}</span>
                            </div>
                            <div class="w-full flex justify-end">
                                <button class="group hover:translate-y-1 transition">
                                        <div class="w-fit py-3 px-3 md:px-8 flex items-center gap-3 bg-sky-500 rounded-full shadow-xl group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                            <span class="hidden md:flex text-sm font-medium text-white"><a href="{{ route('siswa.pengumuman_detail', $data->pengumuman_id) }}">Lihat Pengumuman</a></span>
                                            <i class="text-white bi bi-box-arrow-up-right fa-lg md:fa-xs"></i>
                                        </div>
                                </button>
                            </div>
                        </article>
                    </article>
                    @empty
                    <div>
                        Data pengumuman belum Tersedia.
                    </div>
                @endforelse
                </section>
            </div>            
        </div>
        @endsection