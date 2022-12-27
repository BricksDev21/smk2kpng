@extends('layouts.siswa')
<!-- GREETING -->
@section('siswa')
        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 lg:mx-0 font-light mb-2">Pintasan</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 lg:mx-0 font-bold px-5 py-1 bg-sky-500/50">Jurusan</span>
        </div>
        <div class="container m-auto mx-auto flex flex-col -translate-y-40 -mb-40">
            
            <!-- MAJOR -->
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-7">

                <!-- major-card -->
                <div class="h-96 md:h-72 lg:h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-1/3 md:h-1/2 lg:h-1/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                        <div class="h-full w-full absolute top-0 bg-gradient-to-b from-transparent to-black/50">
                            <button class="absolute right-6 top-6 px-3 py-2 rounded-lg text-white bg-sky-500 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-300 hover:text-black dark:text-black dark:hover:text-white dark:focus:ring-sky-300">
                                <a href="{{ route('siswa.major_detailed') }}"><i class="bi bi-arrow-up-right"></i></a>
                            </button>
                        </div>
                    </div>
                    
                    <div class="m-6 flex flex-col gap-4 dark:text-white">
                        <span class="text-2xl font-semibold">
                            Kontruksi Gedung & Sanitasi Perairan
                        </span>
                        <span class="leading-7">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, natus?
                        </span>
                    </div>
                </div>
                <div class="h-96 md:h-72 lg:h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-1/3 md:h-1/2 lg:h-1/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                        <div class="h-full w-full absolute top-0 bg-gradient-to-b from-transparent to-black/50">
                            <button class="absolute right-6 top-6 px-3 py-2 rounded-lg text-white bg-sky-500 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-300 hover:text-black dark:text-black dark:hover:text-white dark:focus:ring-sky-300">
                            <a href="{{ route('siswa.major_detailed') }}"><i class="bi bi-arrow-up-right"></i></a>
                            </button>
                        </div>
                    </div>
                    
                    <div class="m-6 flex flex-col gap-4 dark:text-white">
                        <span class="text-2xl font-semibold">
                            Kontruksi Gedung & Sanitasi Perairan
                        </span>
                        <span class="leading-7">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, natus?
                        </span>
                    </div>
                </div>
                <div class="h-96 md:h-72 lg:h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-1/3 md:h-1/2 lg:h-1/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                        <div class="h-full w-full absolute top-0 bg-gradient-to-b from-transparent to-black/50">
                            <button class="absolute right-6 top-6 px-3 py-2 rounded-lg text-white bg-sky-500 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-300 hover:text-black dark:text-black dark:hover:text-white dark:focus:ring-sky-300">
                            <a href="{{ route('siswa.major_detailed') }}"><i class="bi bi-arrow-up-right"></i></a>
                            </button>
                        </div>
                    </div>
                    
                    <div class="m-6 flex flex-col gap-4 dark:text-white">
                        <span class="text-2xl font-semibold">
                            Kontruksi Gedung & Sanitasi Perairan
                        </span>
                        <span class="leading-7">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, natus?
                        </span>
                    </div>
                </div>
                <div class="h-96 md:h-72 lg:h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-1/3 md:h-1/2 lg:h-1/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                        <div class="h-full w-full absolute top-0 bg-gradient-to-b from-transparent to-black/50">
                            <button class="absolute right-6 top-6 px-3 py-2 rounded-lg text-white bg-sky-500 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-300 hover:text-black dark:text-black dark:hover:text-white dark:focus:ring-sky-300">
                            <a href="{{ route('siswa.major_detailed') }}"><i class="bi bi-arrow-up-right"></i></a>
                            </button>
                        </div>
                    </div>
                    
                    <div class="m-6 flex flex-col gap-4 dark:text-white">
                        <span class="text-2xl font-semibold">
                            Kontruksi Gedung & Sanitasi Perairan
                        </span>
                        <span class="leading-7">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, natus?
                        </span>
                    </div>
                </div>
                <div class="h-96 md:h-72 lg:h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-1/3 md:h-1/2 lg:h-1/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                        <div class="h-full w-full absolute top-0 bg-gradient-to-b from-transparent to-black/50">
                            <button class="absolute right-6 top-6 px-3 py-2 rounded-lg text-white bg-sky-500 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-300 hover:text-black dark:text-black dark:hover:text-white dark:focus:ring-sky-300">
                            <a href="{{ route('siswa.major_detailed') }}"><i class="bi bi-arrow-up-right"></i></a>
                            </button>
                        </div>
                    </div>
                    
                    <div class="m-6 flex flex-col gap-4 dark:text-white">
                        <span class="text-2xl font-semibold">
                            Kontruksi Gedung & Sanitasi Perairan
                        </span>
                        <span class="leading-7">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, natus?
                        </span>
                    </div>
                </div>
                <div class="h-96 md:h-72 lg:h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-1/3 md:h-1/2 lg:h-1/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                        <div class="h-full w-full absolute top-0 bg-gradient-to-b from-transparent to-black/50">
                            <button class="absolute right-6 top-6 px-3 py-2 rounded-lg text-white bg-sky-500 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-300 hover:text-black dark:text-black dark:hover:text-white dark:focus:ring-sky-300">
                            <a href="{{ route('siswa.major_detailed') }}"><i class="bi bi-arrow-up-right"></i></a>
                            </button>
                        </div>
                    </div>
                    
                    <div class="m-6 flex flex-col gap-4 dark:text-white">
                        <span class="text-2xl font-semibold">
                            Kontruksi Gedung & Sanitasi Perairan
                        </span>
                        <span class="leading-7">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, natus?
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    