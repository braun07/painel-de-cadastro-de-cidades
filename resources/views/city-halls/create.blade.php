<x-app-layout>
  <x-slot name="header" class="text-lg">
    {{ ('Cadastro de Prefeitura') }}
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
                  <form action="{{ route('city-halls.store') }}" method="POST">
                      @csrf
                      <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6">
                            <label for="name" class="block text-lg font-medium leading-5 text-gray-700">
                                {{ ('Nome:') }}
                                <input id="name" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-yellow focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone" class="block text-lg font-medium leading-5 text-gray-700">
                                {{ ('Telefone:') }}
                                <input id="phone" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-yellow focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="population" class="block text-lg font-medium leading-5 text-gray-700">
                                {{ __('População:') }}
                            <input id="population" type="text" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-yellow focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="population" value="{{ old('population') }}" required autocomplete="population" autofocus>
                        </div>
                    </div>
                    <div class="col-span-6 mt-6">
                      <label for="city_id" class="block text-lg font-medium leading-5 text-gray-700">
                          {{ __('Cidade:') }}
                          <select id="city_id" class="mt-1 form-select block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-yellow-300 transition duration-150 ease-in-out sm:text-lg sm:leading-5" name="city_id" required>
                              <option value="city->name">Selecione uma Cidade</option>
                              @foreach ($cities as $city)
                                  <option value="{{ $city->id }}">{{ $city->name }}</option>
                              @endforeach
                          </select>
                    </div>
                  <div class="mt-6">
                    <x-button type="submit">
                      <strong>Concluir Cadastro</strong>
                    </x-button>
                  </div> 
                </div>
              </div>
</x-app-layout>