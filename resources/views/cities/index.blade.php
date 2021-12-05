<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight uppercase">
            {{ __('Cidades') }}
        </h2>
    </x-slot>
    <div class="section pt-10">
        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
                <div class="overflow-x-auto w-full">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase bg-pink-700">
                                <th class="px-4 py-3">Cidades</th>
                                <th class="px-4 py-3">Estados</th>
                                <th class="px-4 py-3">Prefeituras</th>
                                <th class="px"> editar</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            @foreach ($cities as $city)
                                <tr class="text-black-700">
                                    <td class="px-4 py-3">{{ $city->name }}</td>
                                    <td class="px-4 py-3">{{ $city->state }}</td>
                                    <td class="px-4 py-3">{{ $city->cityHalls->count()}}</td>
                                    <td class="px-4 py-3 flex items-center">
                                        <a href="{{ route('cities.edit', $city) }}" class="text-blue-500 underline">
                                            <i class="mdi mdi-svg:"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M16.81,8.94l-3.75-3.75L4,14.25V18h3.75L16.81,8.94z M6,16v-0.92l7.06-7.06l0.92,0.92L6.92,16H6z"/><path d="M19.71,6.04c0.39-0.39,0.39-1.02,0-1.41l-2.34-2.34C17.17,2.09,16.92,2,16.66,2c-0.25,0-0.51,0.1-0.7,0.29l-1.83,1.83 l3.75,3.75L19.71,6.04z"/><rect height="4" width="20" x="2" y="20"/></g></g></svg></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</x-app-layout>

