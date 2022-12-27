@extends('layouts.umum')
<!-- GREETING -->
@section('umum')
<div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ asset('/img/gbr.jpg') }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 md:mx-0 font-light mb-2">Profil Sekolah</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 md:mx-0 font-bold px-5 py-1 bg-sky-500/50">Sambutan Kepala Sekolah</span>
        </div>
        <div class="container m-auto">
            <div class="container m-auto relative mx-auto flex flex-col items-center -translate-y-48 md:-translate-y-20">
                
                <!-- CHIEF -->
                <div class="flex flex-col lg:flex-row lg:items-center gap-6">

                    <!-- chief-photo -->
                    <div class="h-96 w-80 rounded-3xl overflow-hidden border-2 border-white shadow-2xl">
                        <img src="https://picsum.photos/1080/1080" alt="profle-chief" class="h-full w-full object-cover">
                    </div>

                    <div>

                        <!-- chief-info -->
                        <div class="flex flex-col gap-3 lg:gap-8">
                            <span class="text-3xl lg:text-5xl font-semibold text-sky-500 leading-normal">
                                Willem Agustinus Kana, S.Pd., M.T.
                            </span>
                            <div class="mb-5 flex items-center">
                                <h1 class="pl-2 lg:pl-3 border-l-4 text-base lg:text-xl border-sky-500 text-black font-medium lg:font-semibold dark:text-white">
                                    Kepala Sekolah SMKN 2 Kupang
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ARTICLE -->
                <article class="my-20 relative">

                    <!-- article-content -->
                    <div class="text-justify text-base dark:text-white">
                        <p class="indent-14 mb-5">Pisau berada di tangan orang yang baik, pisau menjadi baik. Ketika pisau berada ditangan orang yang jahat, pisau menjadi jahat. Di tangan penodong, pisau dipakai untuk menyakiti, menodong dan tindakan berbahaya lainnya. Tapi di tangan dokter bedah, pisau digunakan untuk menolong dan menyembuhkan.</p>
                        <p class="indent-14 mb-5">Demikian juga internet ibarat Dua Sisi Mata Pisau, Ada yang Baik dan Juga Buruk. Internet bersifat netral, tergantung cara kita memanfaatkannya.</p>
                        <p class="indent-14 mb-5">SMK Negeri 2 Kupang-NTT memanfaatkannya sebagai sarana pelayanan di bidang informasi dan komunikasi pendidikan, dengan alamat: http://www.smkn2kupang.sch.id. Website ini didesain dan dikembangkan oleh Unit Pembantu ICT Center (Pusat Sumber Belajar Berbasis IT) SMK Negeri 2 Kupang “Dokter Bedah”, yang telah memberikan apa yang terbaik yang mereka miliki dari pengetahuan dan kemampuan mereka.</p>
                        <p class="indent-14 mb-5">Seperti halnya sebuah buku Majalah yang adalah Sarana informasi dan komunikasi, demikian pula halnya dengan website ini. Yang membedakannya adalah media dari Majalah adalah kertas, sedangkan media Website ini adalah alat elektronik.</p>
                        <p class="indent-14 mb-5">Komunikasi memiliki peranan penting dalam interakasi manusia. Komunikasi tidak hanya menolong manusia dalam memenuhi kebutuhan hidupnya tetapi juga berpengaruh dalam pembentukan budaya manusia.</p>
                        <p class="indent-14 mb-5">Dalam perkembangannya, manusia kemudian menciptakan berbagai media komunikasi yang semakin mempermudah proses komunikasi tersebut. Dalam perkembangan media komunikasi ini, ICT Center SMK Negeri 2 Kupang ikut serta membudidayakan media tersebut dalam praktek pelayanannya. Secara khusus media elektronik yang sangat berkembang saat ini, sekolah membudidayakannya untuk memfasilitasi pertumbuhan komunitas pembelajar.</p>
                        <p class="indent-14 mb-5">Namun, tidak dapat dipungkiri bahwa setiap bentuk media komunikasi khususnya elektronik, memiliki dampak positif dan negatif. Sekolah sebagai pengelola komunitas pembelajar perlu mengantisipasi pengaruh perkembangan media ini agar tidak menjadi batu sandungan bagi pertumbuhan pendidikan anak bangsa. Karena sangat disayangkan dengan tujuan yang baik tetapi justru dapat menghancurkan esensi perkembangan pendidikan itu sendiri.</p>
                        <p class="indent-14 mb-5">Peradaban manusia sangat tergantung dengan perkembangan media komunikasi yang dipakai. Manusia berusaha menemukan media komunikasi yang bertujuan untuk mengatasi banyak permasalahan dalam hidupnya. Bersamaan dengan kapitalisasi dan modernisasi yang berkembang, peran media semakin kompleks dan vulgar. Media tidak lagi 'hanya" wadah penyampaian informasi untuk berbagai kebiasaan. Kekuatan media ini terbukti mengambil bagian yang strategis dalam Perkembangan Komunitas Pembelajar.</p>
                        <p class="indent-14 mb-5">Media massa sebagai sarana untuk melakukan sharing, diskusi maupun dialog secara personal. Membuat program-program siaran pendidikan, kebudayaan dan penghiburan yang berlandaskan pada pembinaan karakter. Sebagai sarana informasi cepat dan praktis sehingga dengan mudah sekolah mengetahui dan terpanggil untuk menjadi bagian dari solusi pendidikan. Sebagai sarana untuk memberikan pendidikan sosial politik, sosial ekonomi, sosial budaya, IPTEK. Memberikan pemahaman dalam konteks masyarakat majemuk. Media massa sebagai sarana memberikan pengajaran moral, spiritual, melalui TV, Radio, HP, Internet, media cetak, majalah sekolah, dll.</p>
                        <p class="indent-14 mb-5">Media massa sebagai sarana untuk sosialiasi progam pendidikan dalam bidang Teknologi. Membuka peluang-peluang bagi peserta didik untuk mengekspresikan kemampuannya dengan berkompetisi.</p>
                        <p class="indent-14 mb-5">Semoga website SMK Negeri 2 Kota Kupang ini bermanfaat untuk membangun dan menunjang Perkembangan Pendidikan serta pertumbuhan IPTEK SMK Negeri 2 Kupang NTT. Kiranya Tuhan Yang Maha Kuasa, memberkati pelayanan kita untuk anak bangsa khususnya di Provinsi NTT tercinta.</p>
                    </div>

                    <!-- article-quotes -->
                    <div class="absolute top-0 left-0 -translate-x-10 -translate-y-10 text-7xl text-sky-500">
                        “
                    </div>
                    <div class="absolute bottom-0 right-0 translate-y-20 translate-x-10 text-7xl text-sky-500">
                        “
                    </div>
                </article>

                <!-- CONTROLLER -->
                <section class=" h-fit lg:h-44 w-full">
                    <div class="flex-col">
                        <div class="flex items-start justify-center gap-6">

                            <!-- controller-left -->
                            <!-- <div class="flex flex-row-reverse lg:flex-col">
                                <div class="w-fit flex justify-center">
                                    <button class="group">
                                        <a href="#">
                                            <div class="px-3 lg:px-12 py-3 flex rounded-full lg:text-xl font-medium text-gray-300 border-2 border-gray-300 bg-transparent lg:group-hover:pl-8 active:ring-4 focus:ring-sky-300 transition-all">
                                                <i class="bi bi-arrow-left fa-xl mr-0 lg:mr-2 lg:group-hover:mr-6 transition-all"></i>
                                                <span class="hidden lg:flex">Sebelumnya</span>
                                            </div>
                                        </a>
                                    </button>
                                </div> -->
                                
                                <!-- controller-right-text -->
                                <!-- <div class="relative">
                                    <div class="w-24 lg:w-full absolute top-2 lg:top-5 pr-2 lg:pl-0 right-1 lg:right-3 text-right text-sm lg:text-4xl font-medium text-gray-500">
                                        Visi & Misi Sekolah
                                    </div>
                                </div>
                            </div> -->

                            <!-- controller-right -->
                            <div class="flex flex-row lg:flex-col">
                                <div class="w-fit flex justify-center">
                                    <button class="group">
                                        <a href="#">
                                            <div class="px-3 lg:px-12 py-3 flex rounded-full lg:text-xl font-medium text-white border-2 border-sky-500 bg-sky-500 lg:group-hover:pr-8 active:ring-4 focus:ring-sky-300 transition-all">
                                                <span class="hidden lg:flex">Selanjutnya</span>
                                                <i class="bi bi-arrow-right fa-xl ml-0 lg:ml-2 lg:group-hover:ml-6 transition-all"></i>
                                            </div>
                                        </a>
                                    </button>
                                </div>

                                <!-- controller-right-text -->
                                <div class="relative">
                                    <div class="w-24 lg:w-full absolute top-2 lg:top-5 pl-3 lg:pl-0 lg:left-3 text-left text-sm lg:text-4xl font-medium text-gray-500">
                                        Visi & Misi Sekolah
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- controller-line -->
                        <div class="hidden lg:block relative">                            
                            <div class="h-24 w-fit absolute top-4 left-1/2 border-l-2 ">
                            </div>
                        </div>
                    </div>
                </section> 
            </div>
        </div>
        @endsection