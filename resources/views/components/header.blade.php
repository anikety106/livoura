<header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">

    <div class="bg-gray-50 text-black dark:bg-black dark:text-white/50 ">
        <div class="relative flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full px-6">

                <!-- Navigation -->
                <nav
                    class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
                    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">

                        <!-- Logo -->
                        <a href="https://flowbite.com/" class="flex items-center space-x-3">
                            <img src="{{ asset('images/Livoura-logo.png') }}" class="h-10" alt="TR Logo">
                            <span class="text-2xl font-semibold dark:text-white hidden sm:inline">Livoura</span>

                        </a>

                        <!-- Right Section (Login, Sign Up, Menu) -->
                        {{-- <div class="flex items-center space-x-3 order-2">
                            <a href="{{ route('login') }}"
                                class="bg-blue-700 hover:bg-blue-800 text-white font-medium rounded-lg text-sm px-4 py-2 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Log in
                            </a>
                            <a href="{{ route('register') }}"
                                class="bg-blue-700 hover:bg-blue-800 text-white font-medium rounded-lg text-sm px-4 py-2 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Sign in
                            </a>
                            <button data-collapse-toggle="navbar-sticky"
                                class="md:hidden p-2 w-10 h-10 text-gray-500 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                                </svg>
                            </button>
                        </div> --}}


                        <!-- Navigation Links -->
                        <div class="md:flex md:items-center md:space-x-8" id="navbar-sticky">
                            <ul class="flex space-x-4 md:space-x-8 text-sm font-medium">
                                <li>
                                    <a href="{{ route('home') }}"
                                        class="{{ request()->routeIs('home') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-500' }}">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('categories.index') }}"
                                        class="{{ request()->routeIs('categories.index') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-500' }}">
                                        Category
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}"
                                        class="{{ request()->routeIs('about') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-500' }}">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}"
                                        class="{{ request()->routeIs('blog') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-500' }}">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}"
                                        class="{{ request()->routeIs('contact') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-500' }}">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
