<header class="z-40 fixed w-screen py-3 flex shadow-md bg-gray-800 opacity-75 ">
    <nav class="container mx-auto w-full flex justify-between items-center h-full px-6 text-gray-600 dark:text-gray-300 backdrop-blur-lg">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8">
            <div id="logo" class="pl-4 flex items-center z-40">
                <a href="/" class="flex items-center ">
                    <img src="/images/Youcode.png" alt="logo" class="w-30 h-8">
                    {{-- <div class="hidden md:flex ml-2 flex-col leading-7 ">
                        <span class="self-center tracking-widest sm:text-l md:text-l lg:text-l font-salsa font-semibold whitespace-nowrap text-white">CareerYOUCODE</span>
                        <span class="self-center sm:text-sss md:text-sss lg:text-sss font-poppinm whitespace-nowrap text-white">Unleashing Futures, One Swipe at a Time!</span>
                    </div>  --}}
                </a>
            </div>
        </div>
        <div id="right-side" class="flex items-center border-gray-200 dark:border-gray-600">
            <ul class="flex items-center flex-shrink-0 space-x-6">
                {{-- Profile Menu --}}
                @auth
                <li class="relative z-50">
                    <button id="drop-btn"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                {{-- Menu --}}
                <ul id="dropdown" class="hidden absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">            
                    <li>
                        <x-responsive-nav-link :href="route('dashboard')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            
                            <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </li>
                </ul>
                </li>
                @else
                    <!-- Display something else if the user is not authenticated -->
                        <div id="navigation" class="hidden md:flex gap-3">
                            <a href="login"
                                class="text-white bg-transparent focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-3 py-1 text-center border border-white-900 hover:text-black dark:hover:bg-gray-500">L O G I N</a>
                            <a href="register"
                                class="text-white bg-transparent focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-3 py-1 text-center border border-white-900 hover:text-black dark:hover:bg-gray-500">GET STARTED</a>
                        </div>
                @endauth
                                <!-- Theme toggler -->
                <li class="flex">
                    <div id="theme-toggler">
                        <button aria-label="theme-toggle" id="theme-toggle" type="button" class="text-white dark:text-gray-400 hover:bg-blue-500 dark:hover:bg-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
        
        
        

    </nav>
</header>
                               
</header>
