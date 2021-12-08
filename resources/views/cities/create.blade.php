<x-app-layout>
    <x-slot name="header" class="text-lg">
        <h2 class="font-bold text-xl text-gray-800 leading-tight pl-40 uppercase">
            {{ ('Cadastro de Cidade') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('cities.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Nome') }}
                                    <input id="name" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-span-6">
                                <label for="state" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Estado') }}
                                    <input type="state" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="state" value="{{ old('state') }}" required autocomplete="state_id" autofocus>
                                </div>
                            </div>
                            <div class="text-center mt-6">
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-pink-700 hover:bg-pink-700 focus:outline-none focus:border-black-100 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
