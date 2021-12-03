<aside class="z-20 hidden w-60 overflow-y-auto bg-pink-700 md:block flex-shrink-0">
    <div class="py-4 text-gray-500">
        <a class="ml-6 mt-2" href="{{ route('dashboard') }}">
                        <x-application-logo class="" />
        </a>

        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M86,9.83625l-79.12,43.16125v108.6825h158.24v-108.6825zM127.28,123.84h-82.56v-6.88h82.56zM127.28,103.2h-82.56v-6.88h82.56zM127.28,82.56h-82.56v-6.88h82.56z"></path></g></g></svg>
                    </x-slot>
                    {{ __('Dashboard') }}
                </x-nav-link>
            </li>
            
            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('cities.index') }}" :active="request()->routeIs('users.index')">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M45.86667,80.26667v-11.46667h11.46667v11.46667h11.46667v-11.46667h11.46667v-11.46667h-11.46667v-11.46667h11.46667v-11.46667h-40.13333c-3.1648,0 -5.73333,2.56853 -5.73333,5.73333v40.13333zM45.86667,45.86667h11.46667v11.46667h-11.46667zM143.33333,22.93333h-45.86667c-3.1648,0 -5.73333,2.56853 -5.73333,5.73333v120.4h57.33333v-120.4c0,-3.1648 -2.56853,-5.73333 -5.73333,-5.73333zM137.6,45.86667h-11.46667v-11.46667h11.46667zM114.66667,45.86667h-11.46667v-11.46667h11.46667zM137.6,68.8h-11.46667v-11.46667h11.46667zM114.66667,68.8h-11.46667v-11.46667h11.46667zM137.6,91.73333h-11.46667v-11.46667h11.46667zM114.66667,91.73333h-11.46667v-11.46667h11.46667zM137.6,114.66667h-11.46667v-11.46667h11.46667zM114.66667,114.66667h-11.46667v-11.46667h11.46667zM137.6,137.6h-11.46667v-11.46667h11.46667zM114.66667,137.6h-11.46667v-11.46667h11.46667zM74.53333,91.73333h-45.86667c-3.1648,0 -5.73333,2.56853 -5.73333,5.73333v51.6h57.33333v-51.6c0,-3.1648 -2.56853,-5.73333 -5.73333,-5.73333zM45.86667,137.6h-11.46667v-11.46667h11.46667zM45.86667,114.66667h-11.46667v-11.46667h11.46667zM68.8,137.6h-11.46667v-11.46667h11.46667zM68.8,114.66667h-11.46667v-11.46667h11.46667z"></path></g></g></svg>
                    </x-slot>
                    {{ __('Cidades') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('city-halls.index') }}" :active="request()->routeIs('users.index')">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M86,13.4375l-50.98376,29.64124l7.98376,5.375v88.60876h13.4375v-64.5h10.75v64.5h13.4375v-64.5h10.75v64.5h13.4375v-64.5h10.75v64.5h13.4375v-88.60876l7.98376,-5.375zM86,34.9375c4.45319,0 8.0625,3.60931 8.0625,8.0625c0,4.45319 -3.60931,8.0625 -8.0625,8.0625c-4.45319,0 -8.0625,-3.60931 -8.0625,-8.0625c0,-4.45319 3.60931,-8.0625 8.0625,-8.0625zM37.625,53.75l-37.625,5.375v10.75h5.375v67.1875h32.25v-67.1875v-10.75zM134.375,53.75v5.375v10.75v67.1875h32.25v-67.1875h5.375v-10.75zM16.125,72.5625h10.75v10.75h-10.75zM145.125,72.5625h10.75v10.75h-10.75zM16.125,94.0625h10.75v10.75h-10.75zM145.125,94.0625h10.75v10.75h-10.75zM16.125,115.5625h10.75v10.75h-10.75zM145.125,115.5625h10.75v10.75h-10.75z"></path></g></g></svg>
                    </x-slot>
                    {{ __('Prefeituras') }}
                </x-nav-link>
            </li>


            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M30.96,13.76c-9.4944,0 -17.2,7.7056 -17.2,17.2v3.44h144.48v-3.44c0,-9.4944 -7.7056,-17.2 -17.2,-17.2zM13.76,41.28v110.08c0,1.892 1.548,3.44 3.44,3.44h53.62906l12.72531,12.76563c0.688,0.6536 1.55123,0.99437 2.44563,0.99437c0.8944,0 1.75763,-0.34077 2.44563,-0.99437l12.72531,-12.76563h53.62906c1.892,0 3.44,-1.548 3.44,-3.44v-110.08zM80.66531,55.04h10.62906c0.9632,0 1.58563,0.58373 1.58563,1.47813v10.80375c0,0.8944 -0.62243,1.47813 -1.58563,1.47813h-10.62906c-0.9288,0 -1.54531,-0.58373 -1.54531,-1.47813v-10.80375c0,-0.8944 0.61651,-1.47813 1.54531,-1.47813zM80.77281,79.12h10.45437c0.9976,0 1.65281,0.51895 1.65281,1.31015v55.85969c0,0.7912 -0.65521,1.31015 -1.65281,1.31015h-10.45437c-0.9976,0 -1.65281,-0.51895 -1.65281,-1.31015v-55.85969c0,-0.7912 0.65521,-1.31015 1.65281,-1.31015z"></path></g></g></svg>
                    </x-slot>
                    {{ __('Saiba Mais') }}
                </x-nav-link>
            </li>

            {{-- <li class="relative px-6 py-3">
                <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        @click="toggleMultiLevelMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="ml-4">Two-level menu</span>
                </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isMultiLevelMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="#">Child menu</a>
                        </li>
                    </ul>
                </template>
            </li> --}}
        </ul>
    </div>
</aside>
