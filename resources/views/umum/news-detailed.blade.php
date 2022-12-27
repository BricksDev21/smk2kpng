@extends('layouts.umum')
<!-- GREETING -->
@section('umum')

        <!-- TITLE -->
        <div class="h-screen relative flex flex-col items-center justify-end bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ Storage::url('public/berita/gambar/').$berita->gambar }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <div class="my-10 flex items-end gap-5">
                
                <div class="container flex flex-col gap-6">
                    <div class="flex gap-3">
                        <div class="py-1 px-4 border-2 border-sky-500 rounded-full">
                            <span class="text-base font-bold text-white">KJIJ</span>
                        </div>
                        <div class="py-1 px-4 border-2 border-sky-500 rounded-full">
                            <span class="text-base font-bold text-white">TAV</span>
                        </div>
                    </div>
                    <h1 class="text-4xl font-bold text-white">{!! $berita->nama !!}</h1>
                    <h2 class="text-base font-semibold text-white">
                        <span class="font-medium">{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, d F Y') }}</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container my-20 mx-auto flex flex-col gap-12">

            <!-- NEWS -->
            <p class="text-justify indent-14 dark:text-white">{!! $berita->narasi !!}</p>

            <!-- REACTION -->
            <article class="flex flex-col items-center gap-3">

                <!-- reaction-title -->
                <span class="font-medium text-gray-500">Berikan reaksimu!</span>
                
                <!-- reaction-emoji -->
                <div class="flex gap-3">
                    <div class="flex flex-col items-center gap-2">
                        <button class="h-12 w-12 flex justify-center items-center rounded-full bg-gray-300 group transition-all">
                            <span class="text-xl group-hover:text-3xl transition-all">🔥</span>
                        </button>
                        <span class="font-semibold text-gray-500">69</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <button class="h-12 w-12 flex justify-center items-center rounded-full bg-gray-300 group transition-all">
                            <span class="text-xl group-hover:text-3xl transition-all">😱</span>
                        </button>
                        <span class="font-semibold text-gray-500">69</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <button class="h-12 w-12 flex justify-center items-center rounded-full bg-gray-300 group transition-all">
                            <span class="text-xl group-hover:text-3xl transition-all">🤩</span>
                        </button>
                        <span class="font-semibold text-gray-500">69</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <button class="h-12 w-12 flex justify-center items-center rounded-full bg-gray-300 group transition-all">
                            <span class="text-xl group-hover:text-3xl transition-all">😂</span>
                        </button>
                        <span class="font-semibold text-gray-500">69</span>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <button class="h-12 w-12 flex justify-center items-center rounded-full bg-gray-300 group transition-all">
                            <span class="text-xl group-hover:text-3xl transition-all">😍</span>
                        </button>
                        <span class="font-semibold text-gray-500">69</span>
                    </div>
                </div>
            </article>

            <!-- COMMENT -->
            <div class="mb-5 flex flex-col gap-5">

                <!-- comment-title -->
                <div class="flex items-center gap-2">
                    <h3 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Komentar
                    </h3>
                    <span class="font-semibold text-sky-500">7</span>
                </div>

                <!-- comment-mine -->
                <section class="flex flex-row justify-start gap-6">
                    <div class="h-9 w-9 rounded-full overflow-hidden flex-shrink-0">
                        <img src="https://picsum.photos/50" alt="profile" class="h-full w-full object-cover">
                    </div>
                    <div class="w-full relative flex flex-col gap-4">
                        <input type="text" id="input" class="p-4 w-full text-gray-900 bg-gray-200 rounded-lg border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400" placeholder="Tulis komentar di sini">
                        <div class="flex gap-4">
                            <input type="text" class="px-4 w-full text-gray-900 bg-gray-200 rounded-lg border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400" placeholder="Tulis nama anda">
                            <button class="py-2 px-4 rounded-lg bg-sky-500 flex items-center gap-2 text-white hover:bg-sky-600">
                                <i class="bi bi-send fa-lg"></i>
                                <span class="text-xs font-bold">Kirim</span>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- comment-other -->
                <section class="flex flex-row justify-start gap-6">
                    <div class="h-9 w-9 rounded-full overflow-hidden flex-shrink-0">
                        <img src="https://picsum.photos/50" alt="profile" class="h-full w-full object-cover">
                    </div>
                    <div class="w-full flex flex-col gap-3">
                        <div class="w-full flex flex-col gap-3">
                            <div class="flex items-center gap-2 text-xs">
                                <span class="font-semibold text-gray-500">Siti Kusmini</span>
                                <span class="h-1 w-1 rounded-full bg-gray-500"></span>
                                <time class=" text-gray-400">2 jam</time>
                            </div>
                            <p class="dark:text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, illo.</p>
                            <div class="flex items-center gap-9">
                                <button class="flex flex-row-reverse justify-end items-center gap-2">
                                    <span class="text-xs dark:text-white peer">18</span>
                                    <i class="bi bi-heart peer active:hidden peer-active:hidden"></i>
                                    <i class="bi bi-heart-fill text-red-500 dark:text-red-400 hidden peer peer-active:block"></i>
                                </button>
                                <button class="flex flex-row-reverse justify-end items-center gap-2">
                                    <span class="text-xs dark:text-white peer">7</span>
                                    <i class="bi bi-chat-right-dots peer active:hidden peer-active:hidden"></i>
                                    <i class="bi bi-chat-right-dots-fill text-gray-500 dark:text-gray-500 hidden peer peer-active:block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-col gap-5">

                            <!-- comment-other-replied -->
                            <section class="flex flex-row justify-start gap-6">
                                <div class="h-9 w-9 rounded-full overflow-hidden flex-shrink-0">
                                    <img src="https://picsum.photos/50" alt="profile" class="h-full w-full object-cover">
                                </div>
                                <div class="w-full flex flex-col gap-4">
                                    <div class="w-full flex flex-col gap-3">
                                        <div class="flex items-center gap-2 text-xs">
                                            <span class="font-semibold text-gray-500">Siti Kusmini</span>
                                            <span class="h-1 w-1 rounded-full bg-gray-500"></span>
                                            <time class=" text-gray-400">2 jam</time>
                                        </div>
                                        <p class="dark:text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, illo.</p>
                                        <div class="flex items-center gap-9">
                                            <button class="flex flex-row-reverse justify-end items-center gap-2">
                                                <span class="text-xs dark:text-white peer">18</span>
                                                <i class="bi bi-heart peer active:hidden peer-active:hidden"></i>
                                                <i class="bi bi-heart-fill text-red-500 dark:text-red-400 hidden peer peer-active:block"></i>
                                            </button>
                                            <button class="flex flex-row-reverse justify-end items-center gap-2">
                                                <span class="text-xs dark:text-white peer">7</span>
                                                <i class="bi bi-chat-right-dots peer active:hidden peer-active:hidden"></i>
                                                <i class="bi bi-chat-right-dots-fill text-gray-500 dark:text-gray-500 hidden peer peer-active:block"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </section>
            </div>

            <!-- SHARE -->
            <div class="flex justify-center gap-5 text-gray-500 transition-colors">
                <a href="" class="hover:text-blue-500 transition-colors">
                    <i class="bi bi-facebook fa-2xl"></i>
                </a>
                <a href="" class="hover:text-green-500 transition-colors">
                    <i class="bi bi-whatsapp fa-2xl"></i>
                </a>
                <a href="" class="hover:text-sky-500 transition-colors">
                    <i class="bi bi-link fa-2xl"></i>
                </a>
            </div>
        </div>
        @endsection
    