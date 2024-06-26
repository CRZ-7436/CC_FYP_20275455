<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white">
    <div class="min-h-screen bg-white">
        @include('layouts.navigation')

        <!-- Static Test Content -->
        <!--<div>Static Test Content</div>-->

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-orange-500 text-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 bg-white">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white text-center text-gray-500 py-4 shadow">
            @yield('footer')
        </footer>
    </div>
</body>
</html>
