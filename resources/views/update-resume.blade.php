<x-app-layout>
    @section('title', 'Criar Curriculo')

    @section('content')
        <div class="p-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @if (!$data)
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    <p>Você precisa criar um curriculo para poder editar</p>
                </div>
            @else
                <div
                    class="max-w-3xl mx-auto bg-white p-8 shadow-lg rounded-xl space-y-6 bg-gradient-to-r from-blue-500  to-blue-700">
                    <h1 class="text-2xl font-bold mb-4 text-center text-white">Atualizar Currículo</h1>

                    <form action="{{ route('update.resume', $data->id) }}" method="POST">
                        @csrf
                        <div>
                            <h2 class="text-lg text-white font-semibold mb-2">Dados Pessoais</h2>
                                <input value="{{$data->full_name}}" required type="text" name="full_name" placeholder="Nome Completo" class="border p-2 rounded w-full mb-2">
                                <input value="{{$data->email}}" required type="email" name="email" placeholder="E-mail" class="border p-2 rounded w-full mb-2">
                                <input value="{{$data->phone}}" required type="text" id="phone" name="phone" placeholder="Telefone / WhatsApp"
                                    class="border p-2 rounded w-full mb-2">
                                <input value="{{$data->city}}" required type="text" name="city" placeholder="Cidade / Estado"
                                    class="border p-2 rounded w-full mb-2">
                        </div>

                        <div>
                            <h2 class="text-lg font-semibold mb-2 text-white">Resumo / Objetivo</h2>
                            <textarea required name="summary" rows="3" class="border p-2 rounded w-full"
                                placeholder="Escreva um resumo sobre você e seus objetivos profissionais">{{ $data->summary }}</textarea>
                        </div>

                        <div>
                            <h2 class="text-lg font-semibold mb-2 text-white">Formação</h2>

                            <select name="course_type" class="border p-2 rounded w-full mb-2" required>
                                <option value="">Selecione o tipo de curso</option>
                                <option value="Ensino Medio" {{ $data->course_type == 'Ensino Medio' ? 'selected' : '' }}>Ensino Médio</option>
                                <option value="Curso Tecnico" {{ $data->course_type == 'Curso Tecnico' ? 'selected' : '' }}>Curso Técnico</option>
                                <option value="Graduação" {{ $data->course_type == 'Graduação' ? 'selected' : '' }}>Faculdade / Graduação</option>
                            </select>


                            <input value="{{$data->institution}}" type="text" name="institution" placeholder="Instituição - nome do curso"
                                class="border p-2 rounded w-full mb-2" required>

                            <select name="completion_status" class="border p-2 rounded w-full mb-2" required>
                                <option value="">Selecione o status</option>
                                <option value="Em andamento" {{ ($data->completion_status ?? '') == 'Em andamento' ? 'selected' : '' }}>Em andamento</option>
                                <option value="Concluido" {{ ($data->completion_status ?? '') == 'Concluido' ? 'selected' : '' }}>Concluído</option>
                                <option value="Não Concluido" {{ ($data->completion_status ?? '') == 'Não Concluido' ? 'selected' : '' }}>Não Concluído</option>
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
                                <input value="{{$data->experience_1_position}}" type="text" name="experience_1_position" placeholder="Cargo / Função"
                                    class="border p-2 rounded w-full mb-2">
                                <input value="{{$data->experience_1_company}}" type="text" name="experience_1_company" placeholder="Empresa"
                                    class="border p-2 rounded w-full mb-2">
                                <input type="text" value="{{$data->experience_1_period}}" name="experience_1_period" placeholder="Período (ex: Fevereiro 2025 - Outubro 2025)"
                                    class="border p-2 rounded w-full mb-2">
                                <textarea name="experience_1_activities" placeholder="Principais atividades" class="border p-2 rounded w-full mb-2">
                                    {{$data->experience_1_activities}}
                                </textarea>
                            </div>

                            <div class="p-4 mb-4">
                                <span class="text-white">Experiência 1</span>
                                <input value="{{$data->experience_2_position}}" type="text" name="experience_2_position" placeholder="Cargo / Função"
                                    class="border p-2 rounded w-full mb-2">
                                <input value="{{$data->experience_2_company}}" type="text" name="experience_2_company" placeholder="Empresa"
                                    class="border p-2 rounded w-full mb-2">
                                <input type="text" value="{{$data->experience_2_period}}" name="experience_2_period" placeholder="Período (ex: 2022 - Atual)"
                                    class="border p-2 rounded w-full mb-2">
                                <textarea name="experience_2_activities" placeholder="Principais atividades" class="border p-2 rounded w-full mb-2">
                                    {{$data->experience_2_activities}}
                                </textarea>
                            </div>
                        </div>

                        <div>
                            <h2 class="text-lg font-semibold mb-2 text-white">Habilidades (separe por virgulas)</h2>
                            <input value="{{$data->skills}}" type="text" name="skills" placeholder="Ex: Comunicação, Organização, Excel basico..."
                                class="border p-2 rounded w-full mb-2">
                        </div>

                        <div>
                            <h2 class="text-lg font-semibold mb-2 text-white">Idiomas (opcional)</h2>
                            <input value="{{$data->languages}}" type="text" name="languages" placeholder="Ex: Inglês - Básico"
                                class="border p-2 rounded w-full mb-2">
                        </div>

                        <div class="text-center">
                            <x-primary-button class="mt-4">
                                {{ __('Atualizar') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            @endif
        </div>
    @endsection
</x-app-layout>

<script src="https://unpkg.com/imask"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        IMask(phoneInput, {
            mask: [
                { mask: '(00) 00000-0000' }, // celular
                { mask: '(00) 0000-0000' }   // fixo
            ]
        });
    }
});
</script>
