<x-app-layout>
    <x-slot name="header" class="text-lg">
        <h2 class="font-bold text-xl text-gray-800 leading-tight pl-40 uppercase">
            {{ ('Cadastro de Eventos') }}
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

                    <form action="{{ route('activities.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="time" class="block text-sm font-medium leading-5 text-gray-700">
                                        {{ __('Hora do evento') }}
                                        <input id="time" type="datetime-local" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="time" required autocomplete="time" autofocus>
                                    </label>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="status" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Status') }}
                                    <select id="status" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="status" required autocomplete="status" autofocus>
                                        <option value="1">{{ __('Pendente') }}</option>
                                        <option value="2">{{ __('Concluído') }}</option>
                                    </select>
                            </div>
                            <div class="col-span-6">
                                <label for="description" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Descrição') }}
                                    <textarea id="description" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="description" required autocomplete="description" autofocus></textarea>
                                </label>
                            </div>
                            <div class="col-span-6">
                                <label for="pendencies" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Pendências') }}
                                    <textarea id="pendencies" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="pendencies" required autocomplete="pendencies" autofocus></textarea>
                                </label>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="receptivity_id" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Receptividade') }}
                                    <select id="receptivity_id" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="receptivity_id" required autocomplete="receptivity_id" autofocus>
                                        @foreach($receptivities as $receptivity)
                                            <option value="{{ $receptivity->id }}">{{ $receptivity->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="activity_type_id" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Tipo de contato') }}
                                    <select id="activity_type_id" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="activity_type_id" required autocomplete="activity_type_id" autofocus>
                                        @foreach($activityTypes as $activityType)
                                            <option value="{{ $activityType->id }}">{{ $activityType->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="col-span-6 ">
                                <label for="contact_id" class="block text-sm font-medium leading-5 text-gray-700">
                                    {{ __('Contato') }}
                                    <select id="contact_id" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="contact_id" required autocomplete="contact_id" autofocus>
                                        @foreach($contacts as $contact)
                                            <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="text-right mt-6">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-black-100 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                                {{ __('Cadastrar') }}
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
