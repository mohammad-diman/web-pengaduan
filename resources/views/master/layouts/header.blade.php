<header class="w-full bg-yellow-400">
    <nav class="z-20 top-0 left-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="/image/LOGO_KOTA_GORONTALO.png" class="md:h-12 sm:h-11 h-8 mr-2" alt="Inspektorat Gorontalo">
                <div class="sm:flex flex flex-col">
                    <span class="md:text-xl sm:text-base text-sm font-bold whitespace-nowrap text-white">INSPEKTORAT</span>
                    <span class="self-center md:text-2xl sm:text-xl text-base -mt-2 font-bold whitespace-nowrap text-white">KOTA
                        GORONTALO</span>
                </div>
            </a>
            @auth
                <div class="sm:flex sm:items-center sm:ml-6">

                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-white bg-transparent font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">{{ auth()->user()->name }}<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/dashboard"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            @else
                <div class="flex md:order-2">
                    <a href="/login"
                        class="text-white outline-1 outline hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">Log
                        in</a>
                    {{-- <a href="/register"
                    class="text-white outline-1 outline hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-3">Sign up</a> --}}
                    {{--  --}}
                </div>
            @endauth
            {{-- <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 lg:-ml-44 font-medium rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white md:p-0">Home</a>
                    </li>
                    <li>
                        <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Company
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white md:p-0">Wisata Desa</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white md:p-0">Kuliner</a>
                    </li>

                </ul>
            </div>
        </div> --}}
            {{-- <div id="mega-menu-full-dropdown"
            class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600 hidden">
            <div
                class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Online Stores</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                that you're already using.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Segmentation</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                that you're already using.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Marketing CRM</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                that you're already using.</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Online Stores</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                that you're already using.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Segmentation</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                that you're already using.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="font-semibold">Marketing CRM</div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                that you're already using.</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> --}}
    </nav>

</header>
