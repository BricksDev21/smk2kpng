<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo.webp') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins'],
                    },
                    container: {
                        padding: {
                            DEFAULT: '2rem',
                            sm: '2rem',
                            lg: '4rem',
                            xl: '6rem',
                            '2xl': '8rem',
                            center: true
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        #mode:checked ~ label div.toggle {
            @apply translate-x-4 transition
        }
    </style>
    <title>SMKN 2 Kupang</title>
</head>
<body class="font-poppins dark:bg-gray-900 cursor-default">
    <header>
        
        <!-- NAVBAR -->
        <nav class="w-screen z-10 fixed">

            <!-- navbar-top -->
            <nav class="h-9 hidden md:flex text-white dark:text-black bg-sky-500">
                <div class="container m-auto flex justify-between gap-5">
                    <ul class="flex items-center">
                        <li class="relative flex flex-col items-center justify-center">
                            <div class="peer">
                                <input id="mode" type="checkbox" class="hidden transition"/>
                                <label for="mode">
                                    <div class="w-10 p-1 flex items-center bg-white dark:bg-gray-800 rounded-full cursor-pointer">
                                        <div class="toggle h-4 w-4 relative flex items-center justify-center bg-sky-500 rounded-full transition">
                                            <i class="bi bi-brightness-high fa-xs block dark:hidden dark:text-gray-800 transition"></i>
                                            <i class="bi bi-moon-fill fa-xs hidden dark:block dark:text-gray-800 transition"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="p-2 z-10 hidden absolute top-9 text-xs font-light text-black align-middle bg-white rounded-md shadow-lg peer-hover:block dark:peer-hover:hidden transition">Mode&nbspcerah</div>
                            <div class="p-2 z-10 hidden absolute top-9 text-xs font-light text-white align-middle bg-gray-800 rounded-md shadow-lg peer-hover:hidden dark:peer-hover:block transition">Mode&nbspgelap</div>
                        </li>
                    </ul>
                    <ul class="flex items-center text-xs">
                        <a href="{{ route('login') }}">Login</a>
                    </ul>
                </div>
            </nav>

            <!-- navbar-bottom -->
            <nav class="py-4 bg-black/30 rounded-b-3xl backdrop-blur-lg dark:bg-white/30">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <a href="#" class="h-full flex items-center gap-3 md:gap-6">
                        <div class="h-auto w-8 md:w-12 overflow-hidden bg-contain">
                            <img src="{{ asset('/img/logo.webp') }}" alt="logo">
                        </div>
                        <span class="lg:text-2xl font-bold text-white dark:text-gray-900">SMK N 2 KUPANG</span>
                    </a>
                    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex justify-center items-center ml-3 text-white rounded-lg md:hidden hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-sky-300 dark:text-gray-900 dark:hover:text-white dark:focus:ring-sky-300" aria-controls="navbar-solid-bg" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="bi bi-list fa-2xl"></i>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                        <ul class="flex flex-col mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent md:dark:bg-transparent ">
                            <li>
                                <a href="{{ route('dashboard') }}" class="flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 dark:hover:bg-gray-200 md:dark:hover:text-sky-500 md:dark:hover:bg-transparent text-base" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('major') }}" class="flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 dark:hover:bg-gray-200 md:dark:hover:text-sky-500 md:dark:hover:bg-transparent text-base" aria-current="page">Jurusan</a>
                            </li>
                            <li>
                                <button id="drop-profile" data-dropdown-toggle="profile-dropped" type="button" class="transition group flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 md:dark:hover:text-sky-500 dark:hover:bg-gray-200 md:dark:hover:bg-transparent text-base">
                                    <span for="drop-profile">Profil Sekolah</span>
                                    <i class="bi bi-chevron-down ml-1 -rotate-90 group-focus:rotate-0 transition"></i>
                                </button>
                                <div id="profile-dropped" class="hidden w-full md:w-44 z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-900">
                                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="drop-profile">
                                        <li>
                                            <a href="{{ route('greeting') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Sambutan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('galeri') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Galeri</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('vision') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Visi & Misi</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('teacher') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Tenaga Pendidik</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('facility') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Fasilitas</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <button id="drop-academic" data-dropdown-toggle="academic-dropped" type="button" class="transition group flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 md:dark:hover:text-sky-500 dark:hover:bg-gray-200 md:dark:hover:bg-transparent text-base">
                                    <span for="drop-academic">Akademik</span>
                                    <i class="bi bi-chevron-down ml-1 -rotate-90 group-focus:rotate-0 transition"></i>
                                </button>
                                <div id="academic-dropped" class="hidden w-full md:w-44 z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-900">
                                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="drop-profile">
                                        <li>
                                            <a href="{{ route('modul') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Modul</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <!-- responsive-switch -->
                            <ul class="w-full flex justify-end md:hidden">
                                <li class="relative flex flex-col items-center justify-center">
                                    <div class="peer">
                                        <input id="mode" type="checkbox" class="hidden transition"/>
                                        <label for="mode">
                                            <div class="p-1 flex items-center bg-white dark:bg-gray-800 rounded-full cursor-pointer">
                                                <div class="toggle h-4 w-4 relative flex items-center justify-center bg-sky-500 rounded-full transition">
                                                    <i class="bi bi-brightness-high fa-xs block dark:hidden dark:text-gray-800 transition"></i>
                                                    <i class="bi bi-moon-fill fa-xs hidden dark:block dark:text-gray-800 transition"></i>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </nav>
        </nav>
    </header>

    @yield('umum')        

    <footer>

        <!-- CONTACT -->
        <section  class="mt-20 py-8 lg:py-16 bg-gray-300 rounded-t-3xl dark:bg-gray-700">
            <div class="container flex flex-col justify-between m-auto">
                
                <!-- contact-description -->
                <ul class="flex flex-col lg:flex-row justify-center text-gray-600 gap-10 lg:gap-20 dark:text-gray-300">
                    <li>

                        <!-- contact-description-logo -->
                        <ul class="flex flex-col lg:flex-row gap-5 lg:gap-12">
                            <li class="h-10 w-10 lg:h-32 lg:w-32 overflow-hidden bg-contain">
                                <img src="{{ asset('/img/logo.webp') }}" alt="logo">
                            </li>

                            <!-- contact-description-about -->
                            <li>
                                <ul class="flex flex-col gap-3 lg:gap-4">
                                    <li class="lg:text-2xl font-bold">SMKN 2 KUPANG</li>
                                    <li>
                                        <a href="#" class="flex gap-3">
                                            <i class="bi bi-geo-alt"></i>
                                            <span class="text-sm lg:text-base">Jalan Jend. A. Yani No. 48 Kupang</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-3">
                                            <i class="bi bi-envelope"></i>
                                            <span class="text-sm lg:text-base">admin@smkn2kupang.sch.id</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-3">
                                            <i class="bi bi-telephone"></i>
                                            <span class="text-sm lg:text-base">(0380) 833239</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <!-- contact-description-profile -->
                        <ul class="flex flex-col gap-3 lg:gap-4">
                            <li class="lg:text-xl font-semibold">Profil Sekolah</li>
                            <li>
                                <a href="#" class="text-sm lg:text-base">Sambutan Kepala Sekolah</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm lg:text-base">Tenaga Pendidik</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm lg:text-base">Visi & Misi</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm lg:text-base">Tracking Alumni</a>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <!-- contact-description-link -->
                        <ul class="flex flex-col gap-3 lg:gap-4">
                            <li class="lg:text-xl font-semibold">Link Berguna</li>
                            <li>
                                <a href="#" class="hover:font-medium">Dashboard Sekolah</a>
                            </li>
                            <li>
                                <a href="#" class="hover:font-medium">Bursa Kerja SMKa (BUKA)</a>
                            </li>
                            <li>
                                <a href="#" class="hover:font-medium">E-Learning</a>
                            </li>
                            <li>
                                <a href="#" class="hover:font-medium">Login Admin</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- contact-copyright -->
                <div class="mt-12 flex flex-col lg:items-center gap-2 lg:gap-4 text-gray-400 dark:text-gray-400">
                    <i class="bi bi-globe2"></i>
                    <span class="text-sm font-semibold">Hak Cipta @ SMKN 2 Kupang 2022</span>
                </div>
            </div>
        </section>
    </footer>
    <script>

        // DARK MODE
        const checkbox = document.querySelector('#mode');
        const html = document.querySelector('html');

        checkbox.addEventListener('click', function() {
            checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');
        });
    </script>
</body>
</html>