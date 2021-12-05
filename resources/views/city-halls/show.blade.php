<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("$cityHalls->name") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('city-halls.index') }}" class="text-indigo-600 hover:text-indigo-900">
                        <h3 class="text-lg font-medium text-gray-900">
                            {{ __('Voltar') }}
                        </h3>
                    </a>

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('city-halls.update', $cityHalls) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Nome') }}
                                    <input id="name" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="name" value="{{ $cityHall->name }}" required autofocus>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Telefone') }}
                                    <input id="phone" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="phone" value="{{ $cityHall->phone }}" required autofocus>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                    <label for="population" class="block text-sm font-medium leading-5 text-gray-700">
                                        {{ __('População') }}
                                        <input id="population" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="population" value="{{ $cityHall->population }}" required autofocus>
                            </div>
                            <div class="col-span-6">
                                <label for="city_id" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Cidade') }}
                                    <input id="name" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="city_id" value="{{ $cityHall->city->name }}" required autofocus>
                            </div>
                            </div>
                            <div class="text-right mt-6">
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-black-100 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                                {{ __('Atualizar') }}

                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
