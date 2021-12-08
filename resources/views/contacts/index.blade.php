<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight uppercase pb-10">
            {{ __('Agenda de Contatos') }}
        </h2>
    </x-slot>
    <div class="section">
        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
            <div class="overflow-x-auto w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs text-white font-bold tracking-wide text-left text-black-500 uppercase bg-pink-700 border-b">
                            <th class="px-4 py-3">Nome</th>
                            <th class="px-4 py-3">Prefeitura</th>
                            <th class="px-4 py-3">Cidade</th>
                            <th class="px-4 py-3">Telefones</th>
                            <th class="px-4 py-3">Tipo</th>
                            <th class="px">Editar</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @foreach ($contacts as $contact)
                            <tr class="text-xs">
                                <td class="px-4 py-3">{{ $contact->name }}</td>
                                <td class="px-4 py-3">{{ $contact->cityHall->name }}</td>
                                <td class="px-4 py-3">{{ $contact->cityHall->city->name }}</td>
                                <td class="px-4 py-3">{{ $contact->cityHall->phone }}</td>
                                <td class="px-4 py-3">{{ $contact->contactType->name}}</td>
                                <td class="px-4 py-3">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="text-blue-500 underline">
                                        <i class="mdi mdi-svg:"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="30" height="25"
                                            viewBox="0 0 226 226"
                                            style=" fill:#000000;"><defs><linearGradient x1="113.00044" y1="23.83594" x2="113.00044" y2="212.75781" gradientUnits="userSpaceOnUse" id="color-1_HZIV2Gmt5urv_gr1"><stop offset="0" stop-color="#005bf8"></stop><stop offset="1" stop-color="#bf00ff"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g fill="url(#color-1_HZIV2Gmt5urv_gr1)"><path d="M198.24526,58.78737c-6.78911,-6.76774 -17.16545,-8.39078 -25.69691,-4.01945v-15.92417c-0.01387,-12.18335 -9.88696,-22.05645 -22.07031,-22.07031h-109.05162c-12.18335,0.01387 -22.05645,9.88696 -22.07031,22.07031v148.3125c0.01387,12.18335 9.88696,22.05645 22.07031,22.07031h109.05206c12.18335,-0.01387 22.05645,-9.88696 22.07031,-22.07031v-67.59077l27.63203,-27.63203c8.61879,-8.61896 8.61879,-22.59288 0,-31.21184zM101.00788,141.74438l16.07778,16.22654l-21.8836,5.80582zM125.60347,154.02518l-20.66311,-20.85291l59.64105,-59.47066l20.67414,20.67105zM163.72023,187.15625c-0.00827,7.31003 -5.93216,13.23392 -13.24219,13.24219h-109.05162c-7.31003,-0.00827 -13.23392,-5.93216 -13.24219,-13.24219v-148.3125c0.00827,-7.31003 5.93216,-13.23392 13.24219,-13.24219h109.05206c7.31003,0.00827 13.23392,5.93216 13.24219,13.24219v23.24666l-68.12973,67.93551c-0.5547,0.5529 -0.9522,1.24352 -1.15163,2.00089l-9.70696,36.838c-0.40047,1.51979 0.03738,3.13789 1.14958,4.24836c1.1122,1.11047 2.73098,1.5458 4.25014,1.14297l36.58905,-9.70741c0.75251,-0.19955 1.43886,-0.59458 1.98942,-1.14501l35.0097,-35.0097zM193.93713,85.69108l-2.43921,2.43965l-20.66532,-20.66532l2.45996,-2.45289c5.17857,-5.14456 13.54099,-5.13706 18.71033,0.01677l1.93468,1.93468c5.16312,5.17482 5.16293,13.55252 -0.00044,18.7271z"></path></g></g></svg></i>                                        </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

