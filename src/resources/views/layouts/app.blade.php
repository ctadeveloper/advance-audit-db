<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Audit Database Portal</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50 h-screen">
    <div id=>
        <main class="py-4">
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
    </div>
    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>
