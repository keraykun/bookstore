<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->

    <link rel="stylesheet"  href="{{ asset('css/indexfile.css') }}"/>
    <link rel="stylesheet"  href="{{ asset('css/bookfile.css') }}"/>
    <link rel="stylesheet"  href="{{ asset('css/lightslider.css') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"  href="{{ asset('css/rating.css') }}"/>
    <link rel="stylesheet"  href="{{ asset('css/colors.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body class="h-creen antialiased leading-none font-sans ">
    <div id="app" class="">
       <div class="flex justify-start ">
        <aside class=" h-screen " aria-label="Sidebar">
            <div class="overflow-y-auto scrollbar scrollbar-thumb-orange-400 scrollbar-track-orange-300  py-3 px-2 w-64 bg-yellow-50 border border-orange-300 rounded dark:bg-gray-800 h-screen">
                <ul id="categoriesUL" class="space-y-2 flex flex-col gap-y-3 cursor-pointer">
                    <li id="authorsFameList">
                        <p class="mb-3 flex justify-between"><span  class="span-list">Authors Fame </span><i class="text-orange-700 fa fa-circle-plus fame-ico-author"></i></p>
                        <ul id="authorsFame" class="border-l-4 hidden border-orange-200 pt-2 pb-2 pl-1 overflow-y-scroll scrollbar scrollbar-thumb-orange-400 scrollbar-track-orange-300 w-45 h-96 gap-y-3 flex-col text-start">
                            <li>
                                <a href="#" class="hover:underline hover:text-orange-500"><p>Joshua Alvaresasdsa Bautista</p></a>
                                <small class="text-orange-700">Followers : 345,343</small>
                            </li>
                            <li>
                                <a href="#" class="hover:underline hover:text-orange-500"><p>Georgio Washington lo</p></a>
                                <small class="text-orange-700">Followers : 244,343</small>
                            </li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                            <li>Joshua Alvares</li>
                             <li>Joshua Alvares</li>
                        </ul>
                    </li>
                    <li id="categoryList">
                        <p class="mb-3 flex justify-between"><span class="span-list">Genres Books</span> <i class="text-orange-700 fa fa-circle-plus department-icon"></i></p>
                        <ul id="department" class="mb-3 border-l-4 hidden border-orange-200 flex pt-2 pl-1 gap-y-3 flex-col text-start">
                            @foreach ($genres as $genre)
                            <li  class="ml-2 hover:text-red-500 hover:underline"><a href="{{ route('genre.genre',['book'=>$genre->id,'name'=>$genre->name]) }}"><span>{{ $genre->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><p class="mb-3 flex justify-between"><span  class="span-list">New Arrivals Books</span> <i class="text-blue-600 fa fa-check-circle" aria-hidden="true"></i></p></li>
                    <li><p class="mb-3 flex justify-between"><span  class="span-list">Best Sells Books</span> <i class="text-yellow-300 fa fa-trophy" aria-hidden="true"></i></p></li>
                    <li><p class="mb-3 flex justify-between"><span  class="span-list">Most Rating Books</span> <i class="text-yellow-400 fa fa-star" aria-hidden="true"></i></p></li>
                    <li><p class="mb-3 flex justify-between"><span  class="span-list">Sales Books</span> <i class="fa fa-tag text-red-500" aria-hidden="true"></i></p></li>
                    <li><p class="mb-3 flex justify-between"><span  class="span-list">Our Services</span> <i class="fa fa-envelope text-green-600" aria-hidden="true"></i></p></li>

                </ul>
            </div>
            </aside>
            <div class="w-32 bg-yellow-50 self-start h-screen w-screen overflow-y-scroll">
                <header class="bg-orange-400 py-2 sticky top-0" style="z-index: 999;">
                    <div class="container mx-auto flex justify-between items-center px-6">
                        <div>
                            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                                BookStore
                            </a>
                        </div>
                        <div class="w-50">
                            <form>
                                <div class="flex">
                                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Your Email</label>
                                    <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-orange-300 rounded-l-lg hover:bg-orange-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All Genre <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                                    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                                        <li>
                                            <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                                        </li>
                                        <li>
                                            <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                                        </li>
                                        <li>
                                            <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                                        </li>
                                        <li>
                                            <button type="button" class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-red-300 focus:ring-blue-500 focus:border-red-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="Search Book Author, Book Genre, Book Title..." required>
                                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-orange-700 rounded-r-lg border border-blue-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <nav class="space-x-4 text-white text-sm sm:text-base">
                            @guest
                                <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <span>{{ Auth::user()->name }}</span>

                                <a href="{{ route('logout') }}"
                                    class="no-underline hover:underline"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            @endguest
                        </nav>
                    </div>
                </header>
            @yield('section-body')
            </div>
       </div>
    </div>
</body>
<script>
    $('#authorsFameList').click(function(target){

        if($('.fame-ico-author').hasClass('fa-circle-plus')){
            $('.fame-ico-author').removeClass('fa-circle-plus')
            .addClass('fa-circle-minus')
            .parent().css('color','salmon')

            $('#authorsFame').slideDown().css('display','flex')
        }else{
            $('.fame-ico-author').removeClass('fa-circle-minus')
            .addClass('fa-circle-plus')
            .parent().css('color','black')

            $('#authorsFame').slideUp()
        }
    })
    $('#categoryList').click(function(target){
        if($('.department-icon').hasClass('fa-circle-plus')){
            $('.department-icon').removeClass('fa-circle-plus')
            .addClass('fa-circle-minus')
            .parent().css('color','salmon')
            $('#department').slideDown().css('display','flex')
        }else{
            $('.department-icon').removeClass('fa-circle-minus')
            .addClass('fa-circle-plus')
            .parent().css('color','black')
            $('#department').slideUp()
        }
    })
</script>
<script src="{{ asset('js/lightslider.js') }}"></script>

<script>
    $(document).ready(function() {
        $("#content-slider").lightSlider({
            loop:true,
            auto:true,
            speed:900,
            autoWidth: true,
            keyPress:true
        });
 });
 </script>
 <script src="{{ asset('js/rating.js') }}"></script>
</html>
