<main class="flex-1 p-8">

    <!-- Header -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-6">
        <h2 class="text-3xl font-semibold text-[#1447E8]">
            Olá, {{ auth()->user()->name }}! Bem-vindo ao painel da empresa
        </h2>

        <!-- Botão para publicar nova vaga -->
        <a href="{{route('company.create-job') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-700 transition">
            + Publicar Nova Vaga
        </a>
    </div>
    <!-- Dashboard Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-2 text-[#1447E8]">Vagas Publicadas</h3>
            <p class="text-3xl font-bold text-blue-600">{{$vacancies->count()}}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-2 text-[#1447E8]">Candidatos Recebidos</h3>
            <p class="text-3xl font-bold text-green-600">{{ $candidates->count() }}</p>
        </div>

    </div>

    <!-- Vagas Publicadas -->
    <section class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-[#1447E8]">Vagas Publicadas</h2>

            <!-- Botão extra para ver candidatos -->
            <a href="#"
                class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-200 transition">
                Ver Todos Candidatos
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-[#1447E8] text-left">
                        <th class="p-3 text-white">Título da Vaga</th>
                        <th class="p-3 text-white">Candidatos</th>
                        <th class="p-3 text-white">Status</th>
                        <th class="p-3 text-white">Data de Publicação</th>
                        <th class="p-3 text-white">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vacancies as $vacancy)
                        <tr class="border-b">
                            <td class="p-3">{{ $vacancy->title }}</td>
                            <td class="p-3">{{$vacancy->applies_count}}</td>
                            <td class="p-3">
                                <span class="px-2 py-1 rounded-full bg-green-200 text-green-800">Aberta</span>
                            </td>
                            <td class="p-3">{{ $vacancy->created_at->format('d/m/Y') }}</td>
                            <td class="p-3 flex gap-2">
                                <a href="#" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
                                    Ver Candidatos
                                </a>
                                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                    Encerrar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</main>
