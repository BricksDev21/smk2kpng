@extends('layouts.umum')
<!-- GREETING -->
@section('umum')

        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 lg:mx-0 font-light mb-2">Akademik</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 lg:mx-0 font-bold px-5 py-1 bg-sky-500/50">Berita Terkini</span>
        </div>

        <!-- NEWS -->
        <div class="container relative mx-auto flex gap-20 items-start justify-between -translate-y-36 -mb-36">

            <!-- news-sidebar -->
            <div class="relative hidden xl:flex flex-col gap-5 items-start">

                <!-- news-search -->
                <div class="mb-10 mt-20">
                    <form class="flex items-center">   
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="bi bi-search dark:text-white"></i>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border-none border-gray-300 text-gray-900 text-sm rounded-full focus:ring-sky-500 focus:border-sky-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white" placeholder="Cari Berita" required="">
                        </div>
                        <button type="submit" class="py-2.5 px-3 ml-2 text-sm font-medium text-white bg-sky-500 hover:bg-sky-600 rounded-full border-none focus:ring-4 focus:outline-none focus:ring-sky-300">
                            <i class="bi bi-search"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>

                <!-- news-sidebar-title -->
                <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-800 dark:text-white font-medium md:font-semibold">
                    Kategori Berita
                </h1>

                <ul class="pl-4 flex flex-col gap-3 text-xl font-medium">
                    @foreach($kategori as $kate)    
                        <li class="active:font-bold hover:text-sky-500 dark:text-white dark:hover:text-sky-400 transition-colors">
                            {!! $kate->kategori_name !!}
                        </li>
                    @endforeach
                
                </ul>
            </div>

            <!-- news-main -->
            <div class="m-auto w-full xl:m-0 relative flex gap-5 flex-col items-end justify-end">
                
                <!-- news-category -->
                <ul class="w-full flex gap-5 pb-5 max-w-screen-lg overflow-x-auto">
                    <li>
                        <button class="py-2 px-4 text-base font-bold text-white border-2 hover:border-4 border-sky-500 rounded-full active:bg-sky-500">
                            <a href="">KJIJ</a>
                        </button>
                    </li>
                    <li>
                        <button class="py-2 px-4 text-base font-bold text-white border-2 hover:border-4 border-sky-500 rounded-full active:bg-sky-500">
                            <a href="">TAV</a>
                        </button>
                    </li>
                    <li>
                        <button class="py-2 px-4 text-base font-bold text-white border-2 hover:border-4 border-sky-500 rounded-full active:bg-sky-500">
                            <a href="">Geomatika</a>
                        </button>
                    </li>
                    <li>
                        <button class="py-2 px-4 text-base font-bold text-white border-2 hover:border-4 border-sky-500 rounded-full active:bg-sky-500">
                            <a href="">TITL</a>
                        </button>
                    </li>
                    <li>
                        <button class="py-2 px-4 text-base font-bold text-white border-2 hover:border-4 border-sky-500 rounded-full active:bg-sky-500">
                            <a href="">TKR</a>
                        </button>
                    </li>
                    <li>
                        <button class="py-2 px-4 text-base font-bold text-white border-2 hover:border-4 border-sky-500 rounded-full active:bg-sky-500">
                            <a href="">TBSM</a>
                        </button>
                    </li>
                    <li>
                        <button class="py-2 px-4 text-base font-bold text-white border-2 hover:border-4 border-sky-500 rounded-full active:bg-sky-500">
                            <a href="">Normatif&nbspAdaptif</a>
                        </button>
                    </li>
                </ul>

                <!-- news-card -->
                <section class="w-full max-w-screen-lg mb-7 flex flex-col gap-6" id="news">
                @forelse ($berita as $data)    
                <div class="h-fit w-fit p-6 flex flex-col md:flex-row gap-6 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl group hover:translate-y-2 hover:shadow-xl transition-all">
                        <div class="h-44 w-44 flex self-center md:self-stretch flex-shrink-0 rounded-2xl overflow-hidden">
                            <img src="{{ Storage::url('public/berita/gambar/').$data->gambar }}" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                        </div>
                        <div class="flex flex-col gap-6 justify-center item">
                            <h1 class="text-black font-semibold text-xl dark:text-white">
                            {!! $data->nama !!}
                            </h1>
                            <p class="text-black font-light text-sm dark:text-gray-300">
                            {!! \Illuminate\Support\Str::limit($data->narasi, 150) !!}
                            </p>
                            <time class="flex flex-col sm:block">
                                <span class="text-xs font-medium text-gray-500">{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, d F Y') }}</span>
                            </time>
                        </div>
                        <div class="flex flex-row-reverse md:flex-col items-center justify-between">
                        <a href="{{ route('berita_detail', $data->id) }}">    
                        <button class="py-1 px-2 rounded-lg bg-sky-500 hover:bg-sky-600 border-none focus:ring-4 focus:outline-none focus:ring-sky-300">
                                <i class="bi bi-arrow-up-right text-white"></i>
                            </button>
                        </a>
                        </div>
                    </div>
                    @empty
                <div>
                    Data Berita belum Tersedia.
                </div>
            @endforelse
                </section>

            </div>            
        </div>

        @endsection
    