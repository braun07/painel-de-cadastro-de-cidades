<aside class="z-20 hidden w-60 overflow-y-auto bg-pink-700 md:block flex-shrink-0">
    <div class="py-4 text-gray-500">
        <a class="ml-6 mt-2" href="{{ route('dashboard') }}">
                        <x-application-logo class="" />
        </a>

        <ul class="mt-20">
            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-white">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></svg>
                    </x-slot>
                    {{ __('Controle do sistema') }}
                </x-nav-link>
            </li>
            
            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('cities.index') }}" :active="request()->routeIs('users.index')">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/></g><g><path d="M17,11V3H7v4H3v14h8v-4h2v4h8V11H17z M7,19H5v-2h2V19z M7,15H5v-2h2V15z M7,11H5V9h2V11z M11,15H9v-2h2V15z M11,11H9V9h2 V11z M11,7H9V5h2V7z M15,15h-2v-2h2V15z M15,11h-2V9h2V11z M15,7h-2V5h2V7z M19,19h-2v-2h2V19z M19,15h-2v-2h2V15z"/></g></svg>
                    </x-slot>
                    {{ __('Cidades') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('city-halls.index') }}" :active="request()->routeIs('users.index')" class="text-white">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 7h-4V5l-2-2h-4L8 5v2H4c-1.1 0-2 .9-2 2v5c0 .75.4 1.38 1 1.73V19c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2v-3.28c.59-.35 1-.99 1-1.72V9c0-1.1-.9-2-2-2zM10 5h4v2h-4V5zM4 9h16v5h-5v-3H9v3H4V9zm9 6h-2v-2h2v2zm6 4H5v-3h4v1h6v-1h4v3z"/></svg>
                        </x-slot>
                    {{ __('Prefeituras') }}
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
