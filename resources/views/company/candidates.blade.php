<x-app-layout>
    @section('title', 'Meus Candidatos - EmpregaFacil')

    @section('content')
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg shadow divide-y divide-gray-200">
                    <thead class="bg-[#1447E8]">
                        <tr>
                            <th class="p-3 text-left text-white">Nome do Candidato</th>
                            <th class="p-3 text-left text-white">Whatsapp</th>
                            <th class="p-3 text-left text-white">E-mail</th>
                            <th class="p-3 text-left text-white">Vaga Candidatada</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($candidates as $candidate)
                            <tr class="hover:bg-gray-100">
                                <td class="p-3 whitespace-nowrap">{{ $candidate->user->name }}</td>
                                <td class="p-3 whitespace-nowrap">
                                    @php
                                        $phone = preg_replace('/\D/', '', $candidate->user->phone); // remove tudo que não é número
                                    @endphp
                                    <a href="https://wa.me/{{ $phone }}" target="_blank" class="text-blue-900 underline">
                                        {{ $candidate->user->phone }}
                                    </a>
                                </td>
                                <td class="p-3 whitespace-nowrap">{{ $candidate->user->email }}</td>
                                <td class="p-3 whitespace-nowrap">{{ $candidate->vacancy->title }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @endsection
</x-app-layout>
