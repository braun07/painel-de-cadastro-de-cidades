<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Editar o contato de $contact->name") }}
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
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('contacts.update', $contact) }}">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Nome') }}
                                    <input id="name" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="name" value="{{ $contact->name }}" required autocomplete="name" autofocus>
                                </label>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Telefone') }}
                                    <input id="phone" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="phone" value="{{ $contact->cityHall->phone }}" required autocomplete="phone" autofocus>
                                </label>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="term" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Fim do mandato') }}
                                    <input id="term" type="date" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="term" value="{{ $contact->term }}" required autocomplete="term" autofocus>
                                </label>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="contact_type_id" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Tipo de contato') }}
                                    <select id="contact_type_id" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="contact_type_id" required autocomplete="contact_type_id" autofocus>
                                        @foreach ($contactTypes as $contactType)
                                            <option value="{{ $contactType->id }}" {{ $contactType->id == $contact->contact_type_id ? 'selected' : '' }}>{{ $contactType->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="city_id" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Cidade') }}
                                    <select id="city_id" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="city_id" required autocomplete="city_id" autofocus>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}" {{ $city->id == $contact->city_id ? 'selected' : '' }}>{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="col-span-6 ">
                                <label for="city_hall_id" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Câmara Municipal') }}
                                    <select id="city_hall_id" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="city_hall_id" required autocomplete="city_hall_id" autofocus>
                                        @foreach ($cityHalls as $cityHall)
                                            <option value="{{ $cityHall->id }}" {{ $cityHall->id == $contact->city_hall_id ? 'selected' : '' }}>{{ $cityHall->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="text-right mt-6">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-black-100 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                                {{ __('Atualizar') }}
                            </button>
                            <button href="{{ route('contacts.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-600 hover:bg-black-500 focus:outline-none focus:border-black-100 focus:shadow-outline-black active:bg-black-700 transition duration-150 ease-in-out">
                                    {{ __('Voltar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
