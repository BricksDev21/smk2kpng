

       


        <!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
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
                        <li>{!! $nama !!}</li>
                        <li>&nbsp;&nbsp;</li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                        </form>
                    </ul>
                </div>3xl
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
                                <a href="{{ route('siswa.dashboard') }}" class="flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 dark:hover:bg-gray-200 md:dark:hover:text-sky-500 md:dark:hover:bg-transparent text-base" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('siswa.major') }}" class="flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 dark:hover:bg-gray-200 md:dark:hover:text-sky-500 md:dark:hover:bg-transparent text-base" aria-current="page">Jurusan</a>
                            </li>
                            <li>
                                <button id="drop-profile" data-dropdown-toggle="profile-dropped" type="button" class="transition group flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 md:dark:hover:text-sky-500 dark:hover:bg-gray-200 md:dark:hover:bg-transparent text-base">
                                    <span for="drop-profile">Profil Sekolah</span>
                                    <i class="bi bi-chevron-down ml-1 -rotate-90 group-focus:rotate-0 transition"></i>
                                </button>
                                <div id="profile-dropped" class="hidden w-full md:w-44 z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-900">
                                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="drop-profile">
                                        <li>
                                            <a href="{{ route('siswa.greeting') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Sambutan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('siswa.galeri') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Galeri</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('siswa.vision') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Visi & Misi</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('siswa.teacher') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Tenaga Pendidik</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('siswa.facility') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Fasilitas</a>
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
                                            <a href="{{ route('siswa.modul') }}" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Modul</a>
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
    <main>

    <!-- TITLE -->
    <div class="h-screen relative flex flex-col items-center justify-end bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="{{ Storage::url('public/berita/gambar/').$post->gambar }}" alt="cover" class="h-full w-full object-cover -z-20 absolute">
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
                    <h1 class="text-4xl font-bold text-white">{!! $post->nama !!}</h1>
                    <h2 class="text-base font-semibold text-white">
                        <span class="font-medium">{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('l, d F Y') }}</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container my-20 mx-auto flex flex-col gap-12">

            <!-- NEWS -->
            <p class="text-justify indent-14 dark:text-white">{!! $post->narasi !!}</p>

            <!-- REACTION -->
            <article class="flex flex-col items-center gap-3">

                <!-- reaction-title -->
                <span class="font-medium text-gray-500">Berikan reaksimu!</span>
                
                <!-- reaction-emoji -->
                
            </article>

            <!-- COMMENT -->
            <div class="mb-5 flex flex-col gap-5">

                <!-- comment-title -->
                <div class="flex items-center gap-2">
                    <h3 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Komentar
                    </h3>
                </div>

                {{-- Post Comments --}}
        <div class="card mt-4">
        <h5 class="card-header">Comments 
            </h5>
            <div class="card-body">
                {{-- Add Comment --}}
                <div class="add-comment mb-3">
                    @csrf
                    <textarea class="form-control comment" placeholder="Enter Comment"></textarea>
                    <button data-post="{{ $post->id }}" class="btn btn-dark btn-sm mt-2 save-comment">Submit</button>
                </div>
                <hr/>
                {{-- List Start --}}
                <div class="comments"> 
                    @if(count($post->comments)>0)
                        @foreach($post->comments as $comment)
                            <blockquote class="blockquote">
                              <small class="mb-0">{{ $comment->comment_text }}</small>
                            </blockquote>
                            <hr/>
                        @endforeach
                    @else
                    <p class="no-comments">No Comments Yet</p>
                    @endif
                </div>
            </div>
        </div>
        {{-- ## End Post Comments --}}
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

</main>
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
                            <li class="lg:text-xl font-semibold">Link erguna</li>
                            <li>
                                <a href="#">Dashboard Sekolah</a>
                            </li>
                            <li>
                                <a href="#">Bursa Kerja SMKa (BUKA)</a>
                            </li>
                            <li>
                                <a href="#">E-Learning</a>
                            </li>
                            <li>
                                <a href="#">Login Admin</a>
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
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
// Save Comment
$(".save-comment").on('click',function(){
    var _comment=$(".comment").val();
    var _post=$(this).data('post');
    var vm=$(this);
    // Run Ajax
    $.ajax({
        url:"{{ url('save-comment') }}",
        type:"post",
        dataType:'json',
        data:{
            comment:_comment,
            post:_post,
            _token:"{{ csrf_token() }}"
        },
        beforeSend:function(){
            vm.text('Saving...').addClass('disabled');
        },
        success:function(res){
            var _html='<blockquote class="blockquote animate__animated animate__bounce">\
            <small class="mb-0">'+_comment+'</small>\
            </blockquote><hr/>';
            if(res.bool==true){
                $(".comments").prepend(_html);
                $(".comment").val('');
                $(".comment-count").text($('blockquote').length);
                $(".no-comments").hide();
            }
            vm.text('Save').removeClass('disabled');
        }   
    });
});
</script>
<script>
    $(document).on('click','#saveLikeDislike',function(){
    var _post=$(this).data('post');
    var _type=$(this).data('type');
    var vm=$(this);
    // Run Ajax
    $.ajax({
        url:"{{ url('save-likedislike') }}",
        type:"post",
        dataType:'json',
        data:{
            post:_post,
            type:_type,
            _token:"{{ csrf_token() }}"
        },
        beforeSend:function(){
            vm.addClass('disabled');
        },
        success:function(res){
            if(res.bool==true){
                vm.removeClass('disabled').addClass('active');
                vm.removeAttr('id');
                var _prevCount=$("."+_type+"+count").text();
                _prevCount++;
                $("."+_type+"+count").text(_prevCount);
            }
        }   
    });
});
</script>
</body>
</html>