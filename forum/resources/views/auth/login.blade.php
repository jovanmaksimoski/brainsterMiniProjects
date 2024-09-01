<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Left Side Of Navbar -->
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="text-3xl hover:no-underline hover:text-black">
                        {{ __('Laravel') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Right Side Of Navbar -->
            @if (Route::has('login'))
            <div class="hidden sm:flex sm:items-center sm:mr-6">
                @auth
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->username }}</div>
                                <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @else
                <a href="{{ route('login') }}" class="text-black hover:text-gray-500">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-black hover:text-gray-500">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>

    <!-- Hamburger -->
    <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                @auth
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->username }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @endauth
            </div>

            <div class="mt-3 space-y-1">
                @auth
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                @else
                <x-responsive-nav-link :href="route('login')">
                    {{ __('Log in') }}
                </x-responsive-nav-link>
                @if (Route::has('register'))
                <x-responsive-nav-link :href="route('register')">
                    {{ __('Register') }}
                </x-responsive-nav-link>
                @endif
                @endauth
            </div>
        </div>
    </div>
</nav>






    <div class="container-fluid  px-5 offset-4  text-center  pt-1">
    @if (request('error'))
    <div class="bg-red-100 w-50 border border-red-600 text-red-700 px-4 py-3 rounded relative " role="alert">
        <span class="block sm:inline ">{{ request('error') }}</span>
    </div>
    @endif
</div>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <!-- Tailwind CSS Error Alert -->
    <div class="max-w-lg mx-auto">

        <div class="bg-gray-100 border-b border-gray-300 w-full mb-5">
            <h2 class="text-left py-4 mx-5">Login</h2>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Existing login form -->
            <div class="flex items-center space-x-2 pb-3">
                <x-input-label for="username" :value="__('Username')" class="w-1/4" />

                <x-text-input id="username" class="block mt-1 w-3/4" type="text" name="username"
                    :value="old('username')" required autofocus />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="flex items-center space-x-2">
                <x-input-label for="password" :value="__('Password')" class="w-1/4" />

                <x-text-input id="password" class="block mt-1 w-3/4" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 ml-5">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ms-3 mr-4">
                    {{ __('Log in') }}
                </x-primary-button>
                @if (Route::has('password.request'))
                <a class="underline text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

            </div>
        </form>
    </div>
</x-guest-layout>
