<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/animated.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://picsum.photos/50">
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
<body class="font-poppins cursor-default">

    <!-- LOGIN -->
    <section class="h-full gradient-form bg-white dark:bg-gray-900 md:h-screen">
        <div class="container m-auto py-12 px-6 h-full">
          <div class="flex justify-center items-center flex-wrap h-full gap-6 text-gray-800">
            <div class="xl:w-10/12">
              <div class="block bg-white dark:bg-gray-800 shadow-2xl rounded-3xl overflow-hidden">
                <div class="lg:flex lg:flex-row-reverse lg:flex-wrap gap-0">

                  <!-- login-form -->
                  <div class="lg:w-6/12 px-4 md:px-0">
                    <div class="md:p-12 md:mx-6">
                      <form method="POST" action="{{ route('login') }}">
                      @csrf
                        <div class="mb-6">
                          <p class="mb-6 text-2xl font-bold text-sky-500">Masuk sebagai Guru</p>
                          <div class="mb-6">
                            <label for="job" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">NIS</label>
                            <input id="nis" type="number" class="form-control @error('nis') is-invalid @enderror p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400" name="nis" required  autofocus>
        @error('nis')
            <span>
            <strong>{{ $message }}</strong>
            </span>
        @enderror
                          </div>
                          <div>
                            <label for="job" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Kata Sandi</label>
                           
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400" name="password" required autocomplete="current-password">
        @error('password')
            <span>
            <strong>{{ $message }}</strong>
            </span>
        @enderror
                          </div>
                        </div>
                        <div class="flex flex-col items-center text-center pt-1 mb-12 pb-1">
                          <button type="submit" class="inline-block bg-sky-500 px-6 py-4 text-white font-bold text-sm leading-tight rounded-full shadow-xl hover:translate-y-1 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3" type="button">
                            Sign In
                          </button>

                          <!-- dark-mode-switch -->
                          <ul class="mt-6 flex items-center">
                            <li class="relative flex flex-col items-center justify-center">
                                <div class="peer">
                                    <input id="mode" type="checkbox" class="hidden transition"/>
                                    <label for="mode">
                                        <div class="w-10 p-1 flex items-center bg-gray-800 dark:bg-white rounded-full cursor-pointer">
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
                        </div>
                      </form>
                    </div>
                  </div>

                  <!-- login-description -->
                  <div class="relative lg:w-6/12 flex flex-col justify-ar items-center lg:rounded-r-3xl rounded-b-3xl lg:rounded-bl-none bg-gradient-to-b from-sky-400 to-sky-500">
                      <ul class="circles"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
                    <div class="text-white px-4 py-6 md:p-12 md:mx-6 self-start">
                      <div class="h-full flex items-center gap-3 md:gap-6">
                        <div class="h-auto w-8 md:w-12 overflow-hidden bg-contain">
                            <img src="https://picsum.photos/50" alt="logo">
                        </div>
                        <span class="lg:text-2xl font-bold">SMK N 2 KUPANG</span>
                      </div>
                    </div>
                    <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                      <h1 class="md:text-2xl lg:text-4xl font-bold">Selamat Datang</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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