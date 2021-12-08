<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight pl-40 uppercase">
            {{ __("Criar Contatos ") }}
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
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Nome') }}
                                    <input id="name" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="name" autocomplete="name" autofocus>
                                </label>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="term" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('data') }}
                                    <input id="term" type="date" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="term" autocomplete="term" autofocus>
                                </label>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="contact_type_id" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Tipo de contato') }}
                                    <select id="contact_type_id" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="contact_type_id" autocomplete="contact_type_id" autofocus>
                                        <option value="contact_type_id->name">Selecione</option>
                                            @foreach ($contactTypes as $contactType)
                                                <option value="{{ $contactType->id }}">{{ $contactType->name }}</option>
                                            @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="col-span-6">
                                <label for="city_hall_id" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Cidade') }}
                                        <select id="city_hall_id" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="city_hall_id" autocomplete="city_hall_id" autofocus>
                                            <option value="city_hall_id->name">Selecione uma cidade</option>
                                                @foreach ($cityHalls as $cityHall)
                                                    <option value="{{ $cityHall->id }}">{{ $cityHall->name }}</option>
                                                @endforeach
                                        </select>
                                </label>
                            </div>
                        </div>
                        <div class="text-center mt-6">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-pink-700 hover:bg-pink-700 focus:outline-none focus:border-black-100 focus:shadow-outline-blue active:bg-pink-700 transition duration-150 ease-in-out">
                                {{ __('Cadastrar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
