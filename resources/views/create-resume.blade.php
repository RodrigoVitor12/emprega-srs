<x-app-layout>
    @section('title', 'Criar Curriculo')

    @section('content')
        <div class="p-8">
            <div
                class="max-w-3xl mx-auto bg-white p-8 shadow-lg rounded-xl space-y-6 bg-gradient-to-r from-blue-500  to-blue-700">
                <h1 class="text-2xl font-bold mb-4 text-center text-white">Criar Currículo</h1>

                <form action="" method="POST">
                    @csrf
                    <div>
                        <h2 class="text-lg text-white font-semibold mb-2">Dados Pessoais</h2>
                            <input type="text" name="full_name" placeholder="Nome Completo" class="border p-2 rounded w-full mb-2">
                            <input type="email" name="email" placeholder="E-mail" class="border p-2 rounded w-full mb-2">
                            <input type="text" name="phone" placeholder="Telefone / WhatsApp"
                                class="border p-2 rounded w-full mb-2">
                            <input type="text" name="city" placeholder="Cidade / Estado"
                                class="border p-2 rounded w-full mb-2">
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold mb-2 text-white">Resumo / Objetivo</h2>
                        <textarea name="summary" rows="3" class="border p-2 rounded w-full"
                            placeholder="Escreva um resumo sobre você e seus objetivos profissionais"></textarea>
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold mb-2 text-white">Formação</h2>

                        <select name="course_type" class="border p-2 rounded w-full mb-2">
                            <option value="">Selecione o tipo de curso</option>
                            <option value="high_school">Ensino Médio</option>
                            <option value="technical">Curso Técnico</option>
                            <option value="college">Faculdade / Graduação</option>
                        </select>

                        <input type="text" name="institution" placeholder="Instituição"
                            class="border p-2 rounded w-full mb-2">

                        <select name="completion_status" class="border p-2 rounded w-full mb-2">
                            <option value="">Selecione o status</option>
                            <option value="in_progress">Em andamento</option>
                            <option value="completed">Concluído</option>
                            <option value="not_completed">Não Concluido</option>
                        </select>
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold mb-2 text-white">Experiência Profissional</h2>
                        <label class="flex items-center gap-2 mb-4">
                            <input type="checkbox" name="no_experience" value="1" class="h-4 w-4">
                            <span class="text-white">Sem experiência (se não tiver experiência deixa os campos em brancos)</span>
                        </label>

                        <div class="p-4 mb-4">
                            <span class="text-white">Experiência 1</span>
                            <input type="text" name="experience_1_position" placeholder="Cargo / Função"
                                class="border p-2 rounded w-full mb-2">
                            <input type="text" name="experience_1_company" placeholder="Empresa"
                                class="border p-2 rounded w-full mb-2">
                            <input type="text" name="experience_1_period" placeholder="Período (ex: 2022 - Atual)"
                                class="border p-2 rounded w-full mb-2">
                            <textarea name="experience_1_activities" placeholder="Principais atividades" class="border p-2 rounded w-full mb-2"></textarea>
                        </div>

                        <div class="p-4 mb-4">
                            <span class="text-white">Experiência 2</span>
                            <input type="text" name="experience_2_position" placeholder="Cargo / Função (opcional)"
                                class="border p-2 rounded w-full mb-2">
                            <input type="text" name="experience_2_company" placeholder="Empresa (opcional)"
                                class="border p-2 rounded w-full mb-2">
                            <input type="text" name="experience_2_period" placeholder="Período (opcional)"
                                class="border p-2 rounded w-full mb-2">
                            <textarea name="experience_2_activities" placeholder="Principais atividades (opcional)"
                                class="border p-2 rounded w-full mb-2"></textarea>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold mb-2 text-white">Habilidades (separe por virgulas)</h2>
                        <input type="text" name="skills" placeholder="Ex: Comunicação, Organização, Excel basico..."
                            class="border p-2 rounded w-full mb-2">
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold mb-2 text-white">Idiomas (opcional)</h2>
                        <input type="text" name="languages" placeholder="Ex: Inglês - Básico"
                            class="border p-2 rounded w-full mb-2">
                    </div>

                    <div class="text-center">
                        <x-primary-button class="mt-4">
                            {{ __('Salvar') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
        </div>
    @endsection
</x-app-layout>
