<nav x-data="{ open: false }" class="bg-white border-b border-orange-500">
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
                    @guest
                    <x-nav-link :href="url('/')" :active="request()->is('/')" class="text-gray-900 hover:text-orange-600">
                        {{ __('Home') }}
                    </x-nav-link>
                    @endguest
                    <x-nav-link :href="url('/about')" :active="request()->is('about')" class="text-gray-900 hover:text-orange-600">
                        {{ __('About Us') }}
                    </x-nav-link>
                    @auth
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-900 hover:text-orange-600">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" class="text-gray-900 hover:text-orange-600">
                        {{ __('Profile') }}
                    </x-nav-link>
                    @endauth
                    @guest
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')" class="text-gray-900 hover:text-orange-600">
                        {{ __('Login') }}
                    </x-nav-link>
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')" class="text-gray-900 hover:text-orange-600">
                        {{ __('Register') }}
                    </x-nav-link>
                    @endguest
                </div>

                <!-- Settings Dropdown -->
                @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-900 bg-white hover:bg-orange-100 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                          this.closest('form').submit();" class="text-orange-600 hover:bg-orange-100">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endauth

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-orange-600 focus:text-orange-600 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        @auth
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                {{ __('Profile') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-4 pb-1 border-t border-gray-200">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                  this.closest('form').submit();" class="text-orange-600 hover:bg-orange-100">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form
        </div>
        @endauth
        @guest
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="url('/')" :active="request()->is('/')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="url('/about')" :active="request()->is('about')">
                {{ __('About Us') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')">
                {{ __('Register') }}
            </x-responsive-nav-link>
        </div>
        @endguest
    </div>

</nav>

