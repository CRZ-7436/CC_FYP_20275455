<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Welcome to My Website')</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">

    <div class="flex-grow">
        <!-- Navigation Bar (if any) -->
        <nav class="bg-blue-900 text-white py-4">
            <div class="container mx-auto px-4">
                <a href="/" class="font-bold">Home</a>
                <a href="{{ route('about.show') }}" class="ml-4">About</a>
                <a href="{{ route('signup.show') }}" class="ml-4">Register</a>
                <!-- Add more navigation links here -->
            </div>
        </nav>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6 mt-auto">
        <div class="container mx-auto px-4 text-center">
            &copy; {{ date('Y') }} My Website. All rights reserved.
            <!-- Add more footer details here -->
        </div>
    </footer>

</body>
</html>