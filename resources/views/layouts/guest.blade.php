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
<body class="font-sans antialiased text-gray-900 bg-white">
    <div class="flex items-center justify-center min-h-screen bg-orange-50">
        <div class="w-full max-w-md px-6 py-4 bg-white border border-orange-500 shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/Lambda.png') }}" alt="Logo" class="h-12 w-auto">
            </div>
            {{ $slot }}
        </div>
    </div>
</body>
</html>
