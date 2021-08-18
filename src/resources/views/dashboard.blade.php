<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Audit database</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50 h-screen">
    <div id="app">
        <div class="bg-white shadow-md">
            <header class="container mx-auto max-w-6xl flex flex-wrap items-center p-6 justify-between">
                <div class="flex items-center text-sec hover:text-pri cursor-pointer transition">
                    <!-- <svg class="fill-current h-8 w-8 mr-2 text-pink-600" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                    </svg> -->
                    <h4 class="font-semibold text-lg font-title text-pink-700">Audit Database</h4>
                </div>
                <div class="md:hidden block">
                    <button id="menu-open" class="px-3 py-1 rounded bg-sec text-white hover:bg-purple-900 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <button id="menu-close" class="hidden px-3 py-1 rounded bg-sec text-white hover:bg-purple-900 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                <nav id="menu-items" class="hidden md:flex md:items-center font-title w-full md:w-auto">
                    <ul class="text-sm  text-gray-500 ">
                        <li class="my-3 md:my-0 block md:inline-block items-center mr-4">
                            <a href="#" class="hover:text-pink-600 transition">Users</a>
                        </li>
                        <li class="mb-3 md:mb-0 block md:inline-block items-center mr-4">
                            <a href="#" class="hover:text-pink-600 transition text-pink-600">Files</a>
                        </li>
                        <li class="mb-3 md:mb-0 block md:inline-block items-center mr-4">
                            <a href="#" class=" hover:text-pink-600 transition">Departments</a>
                        </li>
                        <li class="mb-3 md:mb-0 block md:inline-block items-center mr-4">
                            <a href="#" class=" hover:text-pink-600 transition">Sub Departments</a>
                        </li>
                        <li class="mb-3 md:mb-0 block md:inline-block items-center mr-4">
                            <a href="#" class="hover:text-pink-600 transition">Staffs</a>
                        </li>
                        <li class="mb-3 md:mb-0 block md:inline-block items-center mr-4">
                        <a  href="{{ route('logout') }}"  class="hover:text-pink-600 transition" 
                        onclick="event.preventDefault();
                        localStorage.removeItem('accessToken');
                        document.getElementById('logout-form').submit();">
                            <span>logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                            <!-- <a href="{{}}" class="hover:text-pink-600 transition">Logout</a> -->
                        </li>
                    </ul>
                </nav>
            </header>
        </div>
        <main class="py-4 h-screen container mx-auto w-4/5">
            @yield('content')
        </main>
        <footer class="my-14">
            <div class="text-center">
                <p class="text-gray-400 text-sm font-normal">Central Tibetan Administration - Audit Department</p>
                <p class="text-gray-400 text-xs py-2">Powered by - TCRC</p>
                <p class="text-gray-500 text-xs py-2">
                    Copyright -
                    <?php
                    echo date('Y');
                    ?>
                    Terms  - Policies
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
