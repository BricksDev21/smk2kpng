@extends('layouts.umum')
@section('umum')

        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 lg:mx-0 font-light mb-2">Selamat datang di</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 lg:mx-0 font-bold px-5 py-1 bg-sky-500/50">SMKN 2 KUPANG</span>
        </div>

        <div class="container relative mx-auto flex flex-col items-center -translate-y-40 -mb-40">
            
            <!-- NEWS -->
            <section class="mb-24 w-full flex flex-col self-center" id="news">
                <div class="mb-5 flex items-center justify-between">

                    <!-- news-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-white font-medium md:font-semibold">
                        Berita Terkini
                    </h1>
                </div>

                <!-- news-card -->
                <article class="h-full mb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-7">
                @forelse ($berita as $data)
                    <a class="h-96 group cursor-pointer">
                        <article class="relative h-96 group rounded-3xl shadow-2xl overflow-hidden dark:bg-gray-800 group-hover:translate-y-2 group-hover:shadow-xl transition">
                            <div class="h-1/2 overflow-hidden">
                                <img src="{{ Storage::url('public/berita/gambar/').$data->gambar }}" alt="berita" class="h-full w-full object-cover group-hover:scale-110 transition bg-black">
                            </div>
                            <time class="absolute top-36 m-6 px-5 py-2 text-sm text-white rounded-full bg-sky-500">
                                {{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y') }}
                            </time>
                            <div class="h-1/2 p-6 flex flex-col justify-around text-left text-black dark:text-white bg-white dark:bg-gray-800">
                                <h2 class="text-xl font-semibold ">{!! $data->nama !!}</h2>
                                <p class="mt-3 text-xs">{!! \Illuminate\Support\Str::limit($data->narasi, 80) !!}</p>
                            </div>
                        </article>
                    </a>
                    @empty
                        <div>
                            Data Blog belum Tersedia.
                        </div>
                    @endforelse
                </article>

                <!-- news-button -->
                <div class="w-full flex justify-center">
                    <button class="group">
                        <a href="{{ route('berita') }}">
                            <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                <span>Lihat berita lainnya</span>
                                <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                            </div>
                        </a>
                    </button>
                </div>
            </section>
                
            <!-- PROFILE -->
            <section class="mb-24 w-full flex flex-col self-center" id="profile">
                <div class="mb-5 flex items-center justify-between">

                    <!-- profile-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Profil Singkat Sekolah
                    </h1>

                    <!-- profile-more -->
                    <a href="#" class="hidden md:flex group items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-sky-500 transition-all">
                        <span class="text-xl font-light">Pelajari lebih lanjut</span>
                        <div class="flex justify-center h-7 w-7 border-2 border-gray-700 rounded-full dark:border-gray-400 group-hover:border-sky-500 transition-all">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>

                <!-- profile-card -->
                <article class="mb-12 h-auto rounded-3xl shadow-2xl overflow-hidden">
                    <iframe width="100%" height="600px" src="https://youtube.com/embed/1JNmz17gnMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </article>

                <!-- profile-button -->
                <div class="w-full flex md:hidden justify-center">
                    <button class="group">
                        <a href="#">
                            <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                <span>Pelajari Lebih Lanjut</span>
                                <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                            </div>
                        </a>
                    </button>
                </div>
            </section>

            <!-- AGENDA -->
            <section class="mb-24 w-full flex flex-col self-center" id="agenda">
                <div class="mb-5 flex justify-between">

                    <!-- agenda-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Agenda Sekolah
                    </h1>
                    
                    <!-- agenda-more -->
                    <a href="#" class="hidden md:flex group items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-sky-500 transition-all">
                        <span class="text-xl font-light">Lebih Banyak</span>
                        <div class="flex justify-center h-7 w-7 border-2 border-gray-700 rounded-full dark:border-gray-400 group-hover:border-sky-500 transition-all">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>

                <!-- agenda-card -->
                <article class="h-full mb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 md:gap-7">
                @forelse ($agenda as $data)
                    <article class="h-full p-9 relative flex md:flex-col justify-around gap-9 md:justify-between rounded-3xl shadow-2xl bg-white dark:bg-gray-800">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-col">
                                <span class="text-3xl font-bold text-sky-500">{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('d') }}</span>
                                <span class="text-black dark:text-white">{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('F') }}</span>
                            </div>
                        </div>
                        <div class="group absolute top-5 right-5 md:top-9 md:right-9 cursor-pointer transition-all">
                            <div class="p-2 rounded-full bg-sky-500 shadow-xl text-white group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                <i class="bi bi-bell fa-xl"></i>
                            </div>
                        </div>
                        <div class="mt-9 flex flex-col gap-5">
                            <span class="text-xl font-extrabold text-black dark:text-white">{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('H:i') }} - {{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('H:i') }}</span>
                            <span class="text-black dark:text-white">{!! $data->nama !!}</span>
                        </div>
                    </article>
                    @empty
                    <div>
                        Data pengumuman belum Tersedia.
                    </div>
                @endforelse
                </article>

                <!-- agenda-button -->
                <div class="w-full flex md:hidden justify-center">
                    <button class="group">
                        <a href="#">
                            <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                <span>Lebih Banyak</span>
                                <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                            </div>
                        </a>
                    </button>
                </div>
            </section>

            <!-- ANNOUNCEMENT -->
            <section class="mb-24 w-full flex flex-col self-center" id="announcement">
                <div class="mb-5 flex justify-between">

                    <!-- announcement-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Pengumuman
                    </h1>
                    
                    <!-- announcement-more -->
                    <a href="{{ route('pengumuman') }}" class="hidden md:flex group items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-sky-500 transition-all">
                        <span class="text-xl font-light">Lebih Banyak</span>
                        <div class="flex justify-center h-7 w-7 border-2 border-gray-700 rounded-full dark:border-gray-400 group-hover:border-sky-500 transition-all">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>

                <!-- announcement-card -->
                <article class="h-full mb-12 grid grid-cols-1 lg:grid-cols-2 gap-5 md:gap-7">
                @forelse ($pengumuman as $data)
                    <article class="h-full w-full p-9 text-black dark:text-white bg-white rounded-3xl shadow-2xl border-2 border-sky-500 dark:bg-gray-800">
                        <div class="flex items-center justify-between">
                            <div class="flex gap-6">

                            @foreach($kategori as $kate)    
                            @if($kate->kategori_id == $data->kategori_id) 
                                <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="h-2 w-2 bg-blue-500 rounded-full dark:bg-blue-400"></div>
                                    <span class="text-xs font-medium text-blue-500 uppercase dark:text-blue-400">{!! $kate->kategori_name !!}</span>
                                </div>
                                @endif
                                @endforeach

                            </div>
                            <span class="text-xs font-medium tracking-widest text-gray-500 dark:text-gray-400">{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, d F Y') }}</span>
                        </div>
                        <div class="my-6 flex flex-col">
                            <span class="text-lg font-bold">{!! $data->nama !!}</span>
                            <br>
                            <span class="text-sm">{!! \Illuminate\Support\Str::limit($data->narasi, 200) !!}</span>
                        </div>
                        <div class="w-full flex justify-end">
                            <button class="group hover:translate-y-1 transition">
                                    <div class="w-fit py-3 px-3 md:px-8 flex items-center gap-3 bg-sky-500 rounded-full shadow-xl group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                        <span class="hidden md:flex text-sm font-medium text-white">Lihat Pengumuman</span>
                                        <i class="text-white bi bi-box-arrow-up-right fa-lg md:fa-xs"></i>
                                    </div>
                            </button>
                        </div>
                    </article>
                    @empty
                    <div>
                        Data pengumuman belum Tersedia.
                    </div>
                @endforelse
                    <!-- announcement-button -->
                    <div class="w-full flex md:hidden justify-center">
                        <button class="group">
                            <a href="#">
                                <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                    <span>Lebih Banyak</span>
                                    <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                                </div>
                            </a>
                        </button>
                    </div>
                </article>
            </section>

            <section class="w-full mb-24 grid grid-cols-1 lg:grid-cols-2 gap-6">

                <!-- LOCATION -->
                <div class="mb-24 lg:mb-0 flex flex-col self-center" id="location">
                    
                    <!-- location-title -->
                    <div class="pl-3 mb-5 border-l-4 border-sky-500">
                        <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">Lokasi Sekolah</span>
                    </div>

                    <!-- location-card -->
                    <article class="h-96 rounded-3xl shadow-2xl overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d490.907060521753!2d123.58813562666583!3d-10.159794965114882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569c934a35b42f%3A0x4366c64780b085e2!2sSMK%20Negeri%202%20Kupang!5e0!3m2!1sid!2sid!4v1666948471107!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </article>
                </div>

                <!-- NEWEST -->
                <div class="flex flex-col self-center" id="newest">
                    
                    <!-- newest-title -->
                    <div class="pl-3 mb-5 border-l-4 border-sky-500">
                        <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">Postingan Terbaru</span>
                    </div>

                    <!-- newest-card -->
                    <div class="h-96 rounded-3xl shadow-2xl bg-gray-500 overflow-hidden">
                        <iframe class="h-full w-full" src="https://www.instagram.com/p/ClXe6bGphDB/embed" frameborder="0"></iframe>
                    </div>
                </div>
            </section>

            <!-- GALLERY -->
            <section class="w-full flex flex-col self-center" id="gallery">
                <div class="mb-5 flex justify-between">

                    <!-- gallery-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Galeri Foto
                    </h1>
                    
                    <!-- gallery-more -->
                    <a href="#" class="hidden md:flex group items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-sky-500 transition-all">
                        <span class="text-xl font-light">Lebih Banyak</span>
                        <div class="flex justify-center h-7 w-7 border-2 border-gray-700 rounded-full dark:border-gray-400 group-hover:border-sky-500 transition-all">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>

                <!-- gallery-card -->
                
                <article class="grid md:grid-cols-2 lg:grid-cols-3 gap-7 bg-cover">
                @forelse ($galeri as $data)
                <article class="group transition-all">
                        <button class="w-full h-96 md:h-52 relative rounded-3xl overflow-hidden shadow-2xl cursor-pointer group-hover:translate-y-2 transition-all group-hover:shadow-xl">
                            <img src="{{ Storage::url('public/galeri/').$data->gambar }}"  alt="galerry" class="h-full w-full absolute overflow-hidden -z-10 object-cover group-hover:scale-110 transition-all">
                            <div class="h-full w-full bg-gradient-to-b from-transparent to-black/50">
                                <div class="h-full p-6 flex flex-col gap-2 text-left justify-end font-medium text-white">
                                    <span class="text-xs">{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y') }}</span>
                                    <span class="lg:text-xl">{!! $data->nama !!}</span>
                                </div>
                            </div>
                        </button>
                    </article>
                    @empty
                <div>
                    Data Blog belum Tersedia.
                </div>
                @endforelse
                </article>
                

                <!-- galerry-button -->
                <div class="mt-8 w-full flex md:hidden justify-center">
                    <button class="group">
                        <a href="#">
                            <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                <span>Lebih Banyak</span>
                                <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                            </div>
                        </a>
                    </button>
                </div>
            </section>
        </div>
        @endsection