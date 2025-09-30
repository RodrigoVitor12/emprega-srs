<x-app-layout>
    @section('title', 'Detalhes da vaga - EmpregaFacil')

    @section('content')
            {{-- Card da vaga --}}
            <div class="bg-white flex flex-col rounded-xl p-8">
                {{-- Título da Vaga --}}
                <h1 class="text-3xl font-bold text-[#155DFC] mb-2">{{ $vacancy->title }}</h1>

                {{-- Nome da empresa --}}
                <h3 class="text-xl text-gray-600 mb-4">{{ $vacancy->user->name ?? 'Empresa não informada' }}</h3>

                {{-- Informações principais --}}
                <div class="flex flex-wrap gap-3 mb-6 text-gray-700">
                    <span
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">{{ $vacancy->type }}</span>
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Salário:
                        {{ $vacancy->salary }}</span>
                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">Local:
                        {{ $vacancy->address }}</span>
                </div>

                {{-- Descrição completa --}}
                <div class="mb-6">
                    <h2 class="text-xl text-[#155DFC] font-bold mb-2">Descrição da Vaga</h2>
                    <p class="text-gray-600 leading-relaxed">{{ $vacancy->description }}</p>
                </div>

                {{-- Contato --}}
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-[#155DFC] mb-2">Contato</h2>
                    <p class="text-gray-600">Envie seu currículo para:
                        <a href="mailto:{{ $vacancy->email }}"
                            class="text-blue-500 underline hover:text-blue-700 transition">{{ $vacancy->email_contact }}</a>
                    </p>
                </div>

                <div class="">
                    {{-- Candidatar-se --}}
                    <a href="#" class="bg-[#155DFC] block text-center py-2 rounded-md text-white mt-3 hover:bg-blue-950 hover:text-blue-500">Candidatar</a>
                </div>
            </div>
    @endsection
</x-app-layout>
