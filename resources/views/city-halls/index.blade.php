<x-app-layout>
    <x-slot name="header" class="text-ss">
        {{ ('Prefeituras') }}
    </x-slot>
    <div class="section">
        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
            <div class="overflow-x-auto w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-lg font-semibold tracking-wide text-left text-white uppercase bg-pink-700 border-b">
                            <th class="px-4 py-3">Nomes</th>
                            <th class="px-4 py-3">Cidades</th>
                            <th class="px-4 py-3">Telefones</th>
                            <th class="px-4 py-3">Habitantes</th>
                            <th class="px"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @foreach ($cityHalls as $cityHall)
                            <tr class="text-black-700">
                                <td class="px-4 py-3 text-lg">
                                    {{  $cityHall->name }}
                                </td>
                                <td class="px-4 py-3 text-lg">
                                    {{ $cityHall->city->name }}
                                <td class="px-4 py-3 text-lg">
                                    {{  $cityHall->phone }}
                                </td>
                                <td class="px-4 py-3 text-lg">
                                    {{  $cityHall->population }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    <a href="{{ route('city-halls.edit', $cityHall) }}" class="text-blue-500 underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 172 172" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M137.39844,14.33333c-5.18687,0 -10.37375,1.97531 -14.33333,5.9349l-8.39844,8.39844l28.66667,28.66667l8.39844,-8.39844c7.912,-7.912 7.912,-20.7475 0,-28.66667c-3.95958,-3.95958 -9.14646,-5.9349 -14.33333,-5.9349zM103.91667,39.41667l-82.41667,82.41667v28.66667h28.66667l82.41667,-82.41667z"></path></g></g></svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <x-button>
            <a href="{{ route('city-halls.create', $cityHalls) }}">
                <strong>{{ __('Cadastrar')}}</strong>
            </a>
        </x-button>
</x-app-layout>