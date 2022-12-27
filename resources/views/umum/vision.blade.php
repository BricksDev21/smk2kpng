@extends('layouts.umum')
<!-- GREETING -->
@section('umum')
        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 lg:mx-0 font-light mb-2">Profil Sekolah</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 lg:mx-0 font-bold px-5 py-1 bg-sky-500/50">Visi Misi Sekolah</span>
        </div>
        <div class="container m-auto mx-auto flex flex-col -translate-y-40 -mb-40">
            
            <!-- VIDEO -->
            <section class="relative mb-4 md:mb-24 w-full flex flex-col self-center" id="video">

                <!-- video-card -->
                <article class="mb-12 h-auto rounded-3xl shadow-2xl overflow-hidden">
                    <iframe width="100%" height="600px" src="https://youtube.com/embed/1JNmz17gnMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </article>
            </section>
            <section class="h-fit w-full relative flex flex-col self-center gap-10 md:gap-40">

                <!-- VISION -->
                <article class="flex flex-row items-center">

                    <!-- vision-title -->
                    <div class="mr-8 md:mr-20 relative">
                        <span class="text-3xl md:text-8xl font-medium text-sky-500">Visi</span>
                        <div class="h-5 w-14 md:h-16 md:w-48 -z-10 absolute bottom-0 bg-gray-300 dark:bg-gray-700"></div>
                    </div>
                    
                    <!-- vision-quotes -->
                    <div class="relative w-fit">
                        <div class="absolute top-3 left-5 md:top-0 md:left-0 -translate-x-10 -translate-y-10 text-3xl md:text-8xl text-sky-500">
                            “
                        </div>
                        <div class="font-medium text-xs md:text-2xl text-black dark:text-white md:pr-16 md:pl-5">
                            NTT bangkit mewujudkan masyarakat sejahtera dalam bingkai Negara Kesatuan Republik Indonesia.
                        </div>
                        <div class="absolute bottom-10 md:bottom-0 right-14 translate-y-20 translate-x-10 text-3xl md:text-8xl text-sky-500">
                            “
                        </div>
                    </div>
                </article>

                <!-- MISSION -->
                <article class="flex flex-row">
                    
                    <!-- mission-title -->
                    <div class="mr-20 relative">
                        <span class="text-3xl md:text-8xl font-medium text-sky-500">Misi</span>
                        <div class="h-5 w-14 md:h-16 md:w-48 -z-10 absolute -translate-y-4 md:translate-y-0 top-8 bg-gray-300 dark:bg-gray-700"></div>
                    </div>
                    
                    <!-- mission-quotes -->
                    <div class="relative w-fit -translate-x-16 md:translate-x-0">
                        <ul class="flex flex-col items-baseline gap-6 translate-y-2 md:translate-y-12">
                            <li class="flex flex-row gap-6">
                                <div class="h-6 w-6 md:h-8 md:w-8 flex flex-shrink-0 items-center justify-center rounded-full bg-sky-500 text-xs md:text-xl font-extrabold text-white dark:text-black">
                                    1
                                </div>
                                <span class="text-xs md:text-xl font-medium text-black dark:text-white">Mewujudkan masyarakat sejahtera, mandiri & Adil.</span>
                            </li>
                            <li class="flex flex-row gap-6">
                                <div class="h-6 w-6 md:h-8 md:w-8 flex flex-shrink-0 items-center justify-center rounded-full bg-sky-500 text-xs md:text-xl font-extrabold text-white dark:text-black">
                                    2
                                </div>
                                <span class="text-xs md:text-xl font-medium text-black dark:text-white">Membangun NTT sebagai salah satu gerbang dan pusat pengembangan pariwisata nasional (ring of beauty).</span>
                            </li>
                            <li class="flex flex-row gap-6">
                                <div class="h-6 w-6 md:h-8 md:w-8 flex flex-shrink-0 items-center justify-center rounded-full bg-sky-500 text-xs md:text-xl font-extrabold text-white dark:text-black">
                                    3
                                </div>
                                <span class="text-xs md:text-xl font-medium text-black dark:text-white">Meningkatkan ketersediaan dan kualitas infrastruktur dan mempercepat pembangunan.</span>
                            </li>
                            <li class="flex flex-row gap-6">
                                <div class="h-6 w-6 md:h-8 md:w-8 flex flex-shrink-0 items-center justify-center rounded-full bg-sky-500 text-xs md:text-xl font-extrabold text-white dark:text-black">
                                    4
                                </div>
                                <span class="text-xs md:text-xl font-medium text-black dark:text-white">Meningkatkan kualitas sumber daya manusia.</span>
                            </li>
                            <li class="flex flex-row gap-6">
                                <div class="h-6 w-6 md:h-8 md:w-8 flex flex-shrink-0 items-center justify-center rounded-full bg-sky-500 text-xs md:text-xl font-extrabold text-white dark:text-black">
                                    5
                                </div>
                                <span class="text-xs md:text-xl font-medium text-black dark:text-white">Mewujudkan reformasi birokrasi pemerintahan untuk meningkatkan kualitas pelayanan publik.</span>
                            </li>
                        </ul>
                    </div>
                </article>

                <!-- CONTROLLER -->
                <section class=" h-fit md:h-44 w-full">
                    <div class="flex-col">
                        <div class="flex items-start justify-center gap-6">

                            <!-- controller-left -->
                            <div class="flex flex-row-reverse md:flex-col">
                                <div class="w-fit flex justify-center">
                                    <button class="group">
                                        <a href="#">
                                            <div class="px-3 md:px-12 py-3 flex rounded-full md:text-xl font-medium text-gray-300 border-2 border-gray-300 bg-transparent md:group-hover:pl-8 active:ring-4 focus:ring-sky-300 transition-all">
                                                <i class="bi bi-arrow-left fa-xl mr-0 md:mr-2 md:group-hover:mr-6 transition-all"></i>
                                                <span class="hidden md:flex">Sebelumnya</span>
                                            </div>
                                        </a>
                                    </button>
                                </div>
                                
                                <!-- controller-right-text -->
                                <div class="relative">
                                    <div class="w-24 md:w-full absolute top-2 md:top-5 pr-2 md:pl-0 right-1 md:right-3 text-right text-sm md:text-4xl font-medium text-gray-500">
                                        Visi & Misi Sekolah
                                    </div>
                                </div>
                            </div>

                            <!-- controller-right -->
                            <div class="flex flex-row md:flex-col">
                                <div class="w-fit flex justify-center">
                                    <button class="group">
                                        <a href="#">
                                            <div class="px-3 md:px-12 py-3 flex rounded-full md:text-xl font-medium text-white border-2 border-sky-500 bg-sky-500 md:group-hover:pr-8 active:ring-4 focus:ring-sky-300 transition-all">
                                                <span class="hidden md:flex">Selanjutnya</span>
                                                <i class="bi bi-arrow-right fa-xl ml-0 md:ml-2 md:group-hover:ml-6 transition-all"></i>
                                            </div>
                                        </a>
                                    </button>
                                </div>

                                <!-- controller-right-text -->
                                <div class="relative">
                                    <div class="w-24 md:w-full absolute top-2 md:top-5 pl-3 md:pl-0 md:left-3 text-left text-sm md:text-4xl font-medium text-gray-500">
                                        Visi & Misi Sekolah
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- controller-line -->
                        <div class="hidden md:block relative">                            
                            <div class="h-24 w-fit absolute top-4 left-1/2 border-l-2 ">
                            </div>
                        </div>
                    </div>
                </section> 
            </section>
        </div>
        @endsection