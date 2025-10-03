<x-app-layout>
    @section('title', 'Meu Perfil - EmpregaFacil')

    @section('content')
        <div class="max-w-4xl mx-auto p-6">

            <div class="bg-white shadow rounded-2xl p-6">
                <div class="flex flex-col md:flex-row gap-4 items-center space-x-6">

                    <div class="relative">

                        <div id="avatar"
                            class="w-24 h-24 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white text-2xl font-bold">
                            CV
                        </div>

                        <label for="foto-upload"
                            class="absolute bottom-0 right-0 bg-white p-1 rounded-full border border-gray-300 cursor-pointer hover:bg-gray-100 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 002.828 2.828L18 9.828M7 7h.01" />
                            </svg>
                        </label>
                        <input type="file" id="foto-upload" class="hidden" onchange="previewAvatar(event)">
                    </div>


                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
                        <p class="text-gray-600">{{ $user->phone }}</p>
                        <p class="text-gray-600">{{ $user->email }}</p>
                        <p class="text-sm text-gray-500">📍 {{ $user->address ?? 'Local não informado' }}</p>
                    </div>

                    <div class="ml-auto space-x-2">
                        @if ($user->role != 2 && $user->id == auth()->user()->id)
                            <a
                                href="{{ route('create.resume') }}"
                                class="px-4 py-2 bg-green-600 text-white rounded-xl shadow hover:bg-green-700 transition">
                                Criar Currículo
                            </a>
                    </div>
                    @endif
                    @if ($user->id != auth()->user()->id && $user->role != 2)
                        @if ($user->role != 2)
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-xl shadow hover:bg-blue-700 transition">
                                Ver Currículo
                            </button>
                        @endif
                    @endif
                </div>
            </div>


            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-white shadow rounded-2xl p-6 col-span-1 md:col-span-2">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Sobre Mim</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Sou apaixonado por tecnologia e atualmente estou estudando para me especializar em desenvolvimento
                        fullstack. Já tenho experiência em HTML, CSS, JavaScript e Laravel.
                    </p>
                </div>


                <div class="bg-white shadow rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Habilidades</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">JavaScript</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">TailwindCSS</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">SQL</span>
                    </div>
                </div>


                <div class="bg-white shadow rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Experiência</h3>
                    <ul class="space-y-4">
                        <li>
                            <p class="font-semibold text-gray-700">Estagiário de Desenvolvimento - Empresa X</p>
                            <p class="text-sm text-gray-500">Jan 2024 - Atual</p>
                            <p class="text-gray-600 text-sm">Atuação no desenvolvimento de aplicações web internas usando
                                Laravel e MySQL.</p>
                        </li>
                        <li>
                            <p class="font-semibold text-gray-700">Freelancer Frontend</p>
                            <p class="text-sm text-gray-500">2023</p>
                            <p class="text-gray-600 text-sm">Criação de landing pages responsivas usando TailwindCSS e
                                JavaScript.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @if ($user->id == auth()->user()->id)
            
        <div class="bg-white shadow rounded-2xl p-6 mt-4">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Profile') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white dark:bg-blue-600 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <livewire:profile.update-profile-information-form />
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-blue-600 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <livewire:profile.update-password-form />
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-blue-600 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <livewire:profile.delete-user-form />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <script>
            function previewAvatar(event) {
                const avatar = document.getElementById('avatar');
                const reader = new FileReader();
                reader.onload = function() {
                    avatar.style.backgroundImage = `url(${reader.result})`;
                    avatar.textContent = '';
                    avatar.style.backgroundSize = 'cover';
                    avatar.style.backgroundPosition = 'center';
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>




    @endsection
</x-app-layout>
