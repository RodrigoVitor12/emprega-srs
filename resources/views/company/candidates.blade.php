<x-app-layout>
    @section('title', 'Meus Candidatos - EmpregaFacil')

    @section('content')
        <div class="p-6">
            <table class="min-w-full bg-white rounded-lg shadow">
    
                <thead>
                    <tr class="bg-[#1447E8] text-left">
                        <th class="p-3 text-white">Nome do Candidato</th>
                        <th class="p-3 text-white">Whatsapp</th>
                        <th class="p-3 text-white">E-mail</th>
                        <th class="p-3 text-white">Vaga candidatada</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-3">Joao</td>
                        <td class="p-3">
                            <a href="#" class="text-blue-900 underline">35 997401598</a></td>
                        <td class="p-3">joao@gmail.com</td>
                        <td class="p-3">Auxiliar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
</x-app-layout>
