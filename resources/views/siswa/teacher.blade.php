@extends('layouts.siswa')
<!-- GREETING -->
@section('siswa')
        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 lg:mx-0 font-light mb-2">Profil Sekolah</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 lg:mx-0 font-bold px-5 py-1 bg-sky-500/50">Tenaga Pendidik</span>
        </div>
        <div class="container m-auto mx-auto flex flex-col -translate-y-40 -mb-40">
            
            <!-- MASTER -->
            <section class="mb-24 w-full flex flex-col self-center" id="news">
                <div class="mb-5 flex items-center justify-between">
                    <!-- master-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-white font-medium md:font-semibold">
                        <span class="font-bold">Guru & Pengajar</span> 
                    </h1>
                </div>

                <!-- master-card -->
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-7">
                @forelse ($guru as $data)
                    <div class="h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                        <div class="h-2/3 relative overflow-hidden">
                            <img src="{{ Storage::url('public/guru/').$data->gambar }}" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                        </div>
                        <div class="flex flex-col m-6 gap-3">
                            <span class="text-2xl font-medium dark:text-white">
                            {!! $data->nama !!}
                            </span>
                            <span class="font-medium text-sky-500">
                            {{ $data->status['status_name'] }}
                            </span>
                        </div>
                    </div>
                    @empty
                <div>
                    Data Guru belum Tersedia.
                </div>
                @endforelse
                </div>
            </section>
        </div>
        @endsection