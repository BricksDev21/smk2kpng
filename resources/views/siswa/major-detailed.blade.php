@extends('layouts.siswa')
<!-- GREETING -->
@section('siswa')

        <!-- GREETING -->
        <div class="h-screen flex items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <div class="flex flex-col lg:flex-row container justify-between">

                <!-- greeting-card -->
                <div class="h-auto max-w-xl flex flex-col">
                    <div class="mt-14 p-9 flex flex-col gap-8 rounded-2xl bg-white/20 dark:bg-black/20 backdrop-blur-lg shadow-2xl">
                        <h1 class="text-2xl md:text-4xl font-bold text-white">Berkontribusi untuk Membangun Negeri Tanah Air</h1>
                        <p class="text-sm font-medium text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos porro impedit nisi eius animi fuga dolor dolore iure natus? Velit!</p>
                        <button class="py-2 px-9 w-fit bg-sky-500 rounded-xl text-sm font-semibold text-white hover:bg-sky-600">
                            Pelajari
                        </button>
                    </div>
                    <div class="p-6 flex items-center gap-3">
                        <a href="" class="h-3 w-3 bg-white/50 dark:bg-black/50 rounded-full active:bg-white"></a>
                        <a href="" class="h-3 w-3 bg-white/50 dark:bg-black/50 rounded-full active:bg-white"></a>
                        <a href="" class="h-3 w-3 bg-white/50 dark:bg-black/50 rounded-full active:bg-white"></a>
                        <a href="" class="h-3 w-3 bg-white/50 dark:bg-black/50 rounded-full active:bg-white"></a>
                        <a href="" class="h-3 w-3 bg-white/50 dark:bg-black/50 rounded-full active:bg-white"></a>
                        <a href="" class="h-4 w-4 bg-white dark:bg-gray-900 rounded-full cursor-pointer flex items-center justify-center">
                            <i class="bi bi-arrow-right-short text-gray-900 dark:text-white"></i>
                        </a>
                    </div>
                </div>

                <!-- greeting-name -->
                <div class="mt-16 flex flex-col flex-shrink-0 justify-end items-end text-right">
                    <h1 class="w-fit px-3 bg-sky-500 text-xl md:text-3xl font-semibold text-white">Muniroh, S.Pd, M.Pd.</h1>
                    <span class="w-fit px-2 bg-white dark:bg-gray-800 text-sm font-semibold text-sky-500">Kepala Jurusan</span>
                </div>
            </div>
        </div>
            
        <!-- DESCRIPTION -->
        <div class="bg-sky-500 mb-20">
            <div class="container m-auto py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-24">
                <div class="flex items-start gap-6 text-white">
                    <i class="bi bi-book fa-xl translate-y-1"></i>
                    <div>
                        <h1 class="text-2xl font-bold">Kurikulum</h1>
                        <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, molestiae.</p>
                    </div>
                </div>
                <div class="flex items-start gap-6 text-white">
                    <i class="bi bi-bag-check fa-xl translate-y-1"></i>
                    <div>
                        <h1 class="text-2xl font-bold">Karier</h1>
                        <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, molestiae.</p>
                    </div>
                </div>
                <div class="flex items-start gap-6 text-white">
                    <i class="bi bi-trophy fa-xl translate-y-1"></i>
                    <div>
                        <h1 class="text-2xl font-bold">Prestasi</h1>
                        <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, molestiae.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- NEWS -->
        <div class="container m-auto mb-20 flex flex-col items-center gap-8">

        <!-- CURRICULUM -->
        <div class="container m-auto flex flex-col items-center gap-8">
    
            <!-- curriculum-title -->
            <div class="flex flex-col items-center gap-8">
                <h1 class="text-4xl font-bold text-sky-800 dark:text-sky-200 text-center">Sertifikasi</h1>
                <div class="h-2 w-24 bg-sky-200 dark:bg-sky-800"></div>
            </div>

            <!-- curriculum-card -->
            <article class="h-full w-full mb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-7">

                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl overflow-hidden dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover transition">
                        </div>
                        <span class="text-black dark:text-white font-bold">Lorem Ipsum</span>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl overflow-hidden dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover transition">
                        </div>
                        <span class="text-black dark:text-white font-bold">Lorem Ipsum</span>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl overflow-hidden dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover transition">
                        </div>
                        <span class="text-black dark:text-white font-bold">Lorem Ipsum</span>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl overflow-hidden dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover transition">
                        </div>
                        <span class="text-black dark:text-white font-bold">Lorem Ipsum</span>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl overflow-hidden dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover transition">
                        </div>
                        <span class="text-black dark:text-white font-bold">Lorem Ipsum</span>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl overflow-hidden dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover transition">
                        </div>
                        <span class="text-black dark:text-white font-bold">Lorem Ipsum</span>
                    </article>
                </a>
            </article>
        </div>

        <!-- CARRIER -->
        <div class="container m-auto mb-20 flex flex-col items-center gap-8">

            <!-- carrier-title -->
            <div class="flex flex-col items-center gap-8">
                <h1 class="text-4xl font-bold text-sky-800 dark:text-sky-200 text-center">Karier</h1>
                <div class="h-2 w-24 bg-sky-200 dark:bg-sky-800"></div>
            </div>

            <!-- carrier-card -->
            <article class="h-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-7">
                <a class="h-fit w-auto cursor-pointer">
                    <article class="relative h-fit p-8 group rounded-3xl shadow-2xl flex flex-col items-center gap-6 dark:bg-gray-800">
                        <div class="h-36 w-36 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover transition">
                        </div>
                        <h1 class="text-center text-2xl font-bold text-black dark:text-white">
                            Programmer
                        </h1>
                        <p class="text-center text-sm text-gray-700 dark:text-gray-200">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ex a sunt mollitia beatae aperiam accusamus autem accusantium iste distinctio?
                        </p>
                        <button class="py-4 w-full rounded-full shadow-xl bg-sky-500 hover:translate-y-1 hover:shadow-lg transition text-white font-semibold">
                            Pelajari Lebih Lanjut
                        </button>
                    </article>
                </a>
                <a class="h-fit w-auto cursor-pointer">
                    <article class="relative h-fit p-8 group rounded-3xl shadow-2xl flex flex-col items-center gap-6 dark:bg-gray-800">
                        <div class="h-36 w-36 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover transition">
                        </div>
                        <h1 class="text-center text-2xl font-bold text-black dark:text-white">
                            Programmer
                        </h1>
                        <p class="text-center text-sm text-gray-700 dark:text-gray-200">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ex a sunt mollitia beatae aperiam accusamus autem accusantium iste distinctio?
                        </p>
                        <button class="py-4 w-full rounded-full shadow-xl bg-sky-500 hover:translate-y-1 hover:shadow-lg transition text-white font-semibold">
                            Pelajari Lebih Lanjut
                        </button>
                    </article>
                </a>
                <a class="h-fit w-auto cursor-pointer">
                    <article class="relative h-fit p-8 group rounded-3xl shadow-2xl flex flex-col items-center gap-6 dark:bg-gray-800">
                        <div class="h-36 w-36 rounded-full overflow-hidden">
                            <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover transition">
                        </div>
                        <h1 class="text-center text-2xl font-bold text-black dark:text-white">
                            Programmer
                        </h1>
                        <p class="text-center text-sm text-gray-700 dark:text-gray-200">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ex a sunt mollitia beatae aperiam accusamus autem accusantium iste distinctio?
                        </p>
                        <button class="py-4 w-full rounded-full shadow-xl bg-sky-500 hover:translate-y-1 hover:shadow-lg transition text-white font-semibold">
                            Pelajari Lebih Lanjut
                        </button>
                    </article>
                </a>
            </article>
        </div>

        <!-- CURRICULUM -->
        <div class="mb-10 container m-auto flex flex-col items-center gap-8">

            <!-- curriculum-title -->
            <div class="flex flex-col items-center gap-8">
                <h1 class="text-4xl font-bold text-sky-800 dark:text-sky-200 text-center">Skill KGSP</h1>
                <div class="h-2 w-24 bg-sky-200 dark:bg-sky-800"></div>
            </div>

            <!-- curriculum-card -->
            <article class="h-full w-full mb-12 grid grid-cols-1 lg:grid-cols-2 gap-5 md:gap-7">
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full flex flex-shrink-0 items-center justify-center bg-yellow-500">
                            <i class="bi bi-patch-check fa-2xl"></i>
                        </div>
                        <div>
                            <h2 class="text-black dark:text-white font-bold">Volunteer Pengabdian Masyarakat</h2>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                <em>Kabupaten Karanganyar, Jawa Tengah</em>
                            </span>
                        </div>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full flex flex-shrink-0 items-center justify-center bg-yellow-500">
                            <i class="bi bi-patch-check fa-2xl"></i>
                        </div>
                        <div>
                            <h2 class="text-black dark:text-white font-bold">Volunteer Pengabdian Masyarakat</h2>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                <em>Kabupaten Karanganyar, Jawa Tengah</em>
                            </span>
                        </div>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full flex flex-shrink-0 items-center justify-center bg-yellow-500">
                            <i class="bi bi-patch-check fa-2xl"></i>
                        </div>
                        <div>
                            <h2 class="text-black dark:text-white font-bold">Volunteer Pengabdian Masyarakat</h2>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                <em>Kabupaten Karanganyar, Jawa Tengah</em>
                            </span>
                        </div>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full flex flex-shrink-0 items-center justify-center bg-yellow-500">
                            <i class="bi bi-patch-check fa-2xl"></i>
                        </div>
                        <div>
                            <h2 class="text-black dark:text-white font-bold">Volunteer Pengabdian Masyarakat</h2>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                <em>Kabupaten Karanganyar, Jawa Tengah</em>
                            </span>
                        </div>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full flex flex-shrink-0 items-center justify-center bg-yellow-500">
                            <i class="bi bi-patch-check fa-2xl"></i>
                        </div>
                        <div>
                            <h2 class="text-black dark:text-white font-bold">Volunteer Pengabdian Masyarakat</h2>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                <em>Kabupaten Karanganyar, Jawa Tengah</em>
                            </span>
                        </div>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full flex flex-shrink-0 items-center justify-center bg-yellow-500">
                            <i class="bi bi-patch-check fa-2xl"></i>
                        </div>
                        <div>
                            <h2 class="text-black dark:text-white font-bold">Volunteer Pengabdian Masyarakat</h2>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                <em>Kabupaten Karanganyar, Jawa Tengah</em>
                            </span>
                        </div>
                    </article>
                </a>
                <a href="">
                    <article class="p-6 relative h-fit rounded-3xl flex items-center gap-6 shadow-2xl dark:bg-gray-800 hover:translate-y-2 hover:shadow-xl transition">
                        <div class="h-12 w-12 rounded-full flex flex-shrink-0 items-center justify-center bg-yellow-500">
                            <i class="bi bi-patch-check fa-2xl"></i>
                        </div>
                        <div>
                            <h2 class="text-black dark:text-white font-bold">Volunteer Pengabdian Masyarakat</h2>
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                <em>Kabupaten Karanganyar, Jawa Tengah</em>
                            </span>
                        </div>
                    </article>
                </a>
            </article>
        </div>

        <!-- STATISTIC -->
        <div class="container m-auto">
            <div class="h-fit w-full p-6 flex flex-col items-center gap-8 bg-sky-300 rounded-3xl">
                <h1 class="font-semibold">KGSP dalam statistik</h1>
                <div class="flex flex-col md:flex-row w-full justify-around gap-6">
                    <div class="w-full flex flex-col items-center gap-0 md:gap-4">
                        <span class="text-3xl md:text-6xl font-semibold">2345</span>
                        <p class="md:text-2xl">Tenaga Pendidik</p>
                    </div>
                    <div class="w-full flex flex-col items-center gap-0 md:gap-4">
                        <span class="text-3xl md:text-6xl font-semibold">2345</span>
                        <p class="md:text-2xl">Siswa</p>
                    </div>
                    <div class="w-full flex flex-col items-center gap-0 md:gap-4">
                        <span class="text-3xl md:text-6xl font-semibold">2345</span>
                        <p class="md:text-2xl">Rombel</p>
                    </div>
                </div>
                <time class="text-xs">Update 27 Agustus 2024</time>
            </div>
        </div>
        @endsection
    