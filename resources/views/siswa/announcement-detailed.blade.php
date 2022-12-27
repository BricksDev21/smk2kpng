@extends('layouts.siswa')
@section('siswa')


        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ Storage::url('public/galeri/').$pengumuman->gambar }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <div class="h-full mb-20 container m-auto flex flex-col justify-end gap-6">
                <div class="w-fit px-8 py-2 rounded-full bg-sky-500 font-bold text-white">
                    Pengumuman
                </div>
                <h1 class="text-4xl font-bold text-white">L{!! $pengumuman->nama !!}</h1>
                    <span class="font-medium text-white">{{ \Carbon\Carbon::parse($pengumuman->created_at)->translatedFormat('l, d F Y') }}</span>
                </time>
                <div class="flex gap-6">
                    @foreach($kategori as $kate)    
                    @if($kate->kategori_id == $pengumuman->kategori_id) 
                        <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class="h-2 w-2 bg-red-500 rounded-full dark:bg-red-400"></div>
                        <span class="text-xs font-medium text-red-500 uppercase dark:text-red-400">{!! $kate->kategori_name !!}</span>
                    </div>
                    @endif
                    @endforeach
                    
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="mt-20 container relative mx-auto flex flex-col">

            <!-- content-content -->
            <p class="mt-6 indent-14 text-justify leading-relaxed text-black dark:text-white">{!! $pengumuman->narasi !!}</p>
        </div>

        <!-- FILE -->
        <div class="mt-10 container relative mx-auto flex flex-col gap-6">

            <!-- file-title -->
            <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                File Unduhan
            </h1>

            <!-- file-card -->
            <div class="flex flex-col gap-6">
                <a href="{{ Storage::url('public/pengumuman/gambar/').$pengumuman->gambar }}">
                <button class="h-fit w-full p-6 flex items-center gap-6 rounded-3xl shadow-2xl bg-sky-500 hover:translate-y-1 hover:shadow-xl transition">
                    <i class="bi bi-download fa-2xl text-white"></i>
                    <div class="flex flex-col items-start">
                        <h2 class="font-bold text-white">Download Poster</h2>
                    </div>
                </button>
                </a>
                <a href="{{ Storage::url('public/pengumuman/dokumen/').$pengumuman->dokumen }}">
                <button class="h-fit w-full p-6 flex items-center gap-6 rounded-3xl shadow-2xl bg-sky-500 hover:translate-y-1 hover:shadow-xl transition">
                    <i class="bi bi-download fa-2xl text-white"></i>
                    <div class="flex flex-col items-start">
                        <h2 class="font-bold text-white">Download File</h2>
                    </div>
                </button>
                </a>
            </div>
        </div>
        @endsection