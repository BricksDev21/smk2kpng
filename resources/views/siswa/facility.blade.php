
@extends('layouts.siswa')
<!-- GREETING -->
@section('siswa')
        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 md:mx-0 font-light mb-2">Profil Sekolah</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 md:mx-0 font-bold px-5 py-1 bg-sky-500/50">Fasilitas</span>
        </div>

        <!-- GALLERY -->
        <div class="container m-auto relative mx-auto flex flex-col items-center gap-16 -translate-y-52 -mb-52">

            <!-- galery-head -->
            <article class="group transition-all w-full">
                <div class="w-full h-96 relative rounded-3xl overflow-hidden shadow-2xl group-hover:translate-y-2 transition-all group-hover:shadow-xl">
                    <img src="{{ asset('/img/front.jpg') }}" alt="galerry" class="h-full w-full absolute overflow-hidden -z-10 object-cover group-hover:scale-110 transition-all">
                    <div class="h-full bg-gradient-to-b from-transparent to-black/50">
                        <div class="h-full p-6 flex justify-between items-end text-white">
                            <button class="flex flex-col text-left justify-end font-medium">
                                <span class="text-2xl font-semibold">Gedung SMKN 2 Kupang</span>
                            </button>
                        </div>
                    </div>
                </div>
            </article>

            <!-- gallery-grid -->
            <article class="w-full gap-6 grid grid-cols-1 lg:grid-cols-2">
                <div class="h-80 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                    </div>
                    <div class="px-6 flex justify-center text-black dark:text-white">
                        <button class="flex flex-col text-center font-medium">
                            <span class="text-xl">Ruang Kelas</span>
                        </button>
                    </div>
                </div>
                <div class="h-80 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                    </div>
                    <div class="px-6 flex justify-center text-black dark:text-white">
                        <button class="flex flex-col text-center font-medium">
                            <span class="text-xl">Ruang Kelas</span>
                        </button>
                    </div>
                </div>
                <div class="h-80 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                    </div>
                    <div class="px-6 flex justify-center text-black dark:text-white">
                        <button class="flex flex-col text-center font-medium">
                            <span class="text-xl">Ruang Kelas</span>
                        </button>
                    </div>
                </div>
                <div class="h-80 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                    </div>
                    <div class="px-6 flex justify-center text-black dark:text-white">
                        <button class="flex flex-col text-center font-medium">
                            <span class="text-xl">Ruang Kelas</span>
                        </button>
                    </div>
                </div>
                <div class="h-80 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                    </div>
                    <div class="px-6 flex justify-center text-black dark:text-white">
                        <button class="flex flex-col text-center font-medium">
                            <span class="text-xl">Ruang Kelas</span>
                        </button>
                    </div>
                </div>
                <div class="h-80 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
                    <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                        <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
                    </div>
                    <div class="px-6 flex justify-center text-black dark:text-white">
                        <button class="flex flex-col text-center font-medium">
                            <span class="text-xl">Ruang Kelas</span>
                        </button>
                    </div>
                </div>
            </article>  
        </div>
@endsection