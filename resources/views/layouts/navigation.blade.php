<nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/Lambda.png') }}" alt="Logo" class="block h-9 w-auto">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ url('/') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:border-orange-500 hover:text-orange-600 focus:outline-none focus:text-orange-600 focus:border-orange-700 transition duration-150 ease-in-out">Home</a>

                    <a href="{{ url('/about') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:border-orange-500 hover:text-orange-600 focus:outline-none focus:text-orange-600 focus:border-orange-700 transition duration-150 ease-in-out">About Us</a>
                </div>
            </div>

            @if (Route::has('login'))
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @auth
                        <!-- Authenticated User Dropdown Here -->
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-orange-600">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 hover:text-orange-600">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-orange-500 hover:bg-orange-100 focus:outline-none focus:bg-orange-100 focus:text-orange-500 transition duration-150 ease-in-out">
                    <!-- SVG for hamburger icon -->
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-orange-50 focus:outline-none focus:text-orange-800 focus:bg-orange-100 focus:border-orange-700 transition duration-150 ease-in-out">Home</a>

            <a href="{{ url('/about') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-orange-50 focus:outline-none focus:text-orange-800 focus:bg-orange-100 focus:border-orange-700 transition duration-150 ease-in-out">About Us</a>
        </div>
    </div>
</nav>

