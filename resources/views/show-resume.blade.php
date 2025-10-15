<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currículo - {{ $data->full_name }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 min-h-screen flex flex-col items-center justify-center py-8 px-4">

  <div class="w-full max-w-4xl bg-white p-6 sm:p-10 shadow-2xl rounded-lg border border-gray-300">
    
    <!-- Cabeçalho -->
    <header class="border-b pb-6 mb-6 text-center sm:text-left">
      <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 break-words">{{ $data->full_name }}</h1>
      <div class="mt-2 space-y-1 text-gray-600">
        <p>📧 {{ $data->email }}</p>
        <p>📱 {{ $data->phone }}</p>
        <p>📍 {{ $data->city }}</p>
      </div>
    </header>

    <!-- Resumo -->
    <section class="mb-6">
      <h2 class="text-lg sm:text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Resumo</h2>
      <p class="text-gray-800 leading-relaxed whitespace-pre-line">
        {{ $data->summary }}
      </p>
    </section>

    <!-- Formação -->
    <section class="mb-6">
      <h2 class="text-lg sm:text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Formação</h2>
      <div class="pl-2 border-l-4 border-blue-500">
        <p class="font-semibold text-gray-900">{{ $data->course_type }}</p>
        <p class="text-gray-700">{{ $data->institution }}</p>
        <p class="text-gray-500 text-sm">{{ $data->completion_status }}</p>
      </div>
    </section>

    <!-- Experiência -->
    <section class="mb-6">
      <h2 class="text-lg sm:text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Experiência Profissional</h2>

      @foreach (range(1, 2) as $i)
        @php
          $position = "experience_{$i}_position";
          $company = "experience_{$i}_company";
          $period = "experience_{$i}_period";
          $activities = "experience_{$i}_activities";
        @endphp

        @if ($data->$position && $data->$company && $data->$period && $data->$activities)
          <div class="mb-4 pl-2 border-l-4 border-blue-500">
            <p class="font-semibold text-gray-900">{{ $data->$position }} - {{ $data->$company }}</p>
            <p class="text-gray-500 text-sm">{{ $data->$period }}</p>
            <p class="text-gray-700 whitespace-pre-line">{{ $data->$activities }}</p>
          </div>
        @endif
      @endforeach
    </section>

    <!-- Habilidades -->
    <section class="mb-6">
      <h2 class="text-lg sm:text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Habilidades</h2>
      <p class="text-gray-800 whitespace-pre-line">{{ $data->skills }}</p>
    </section>

    <!-- Idiomas -->
    @if ($data->languages)
      <section>
        <h2 class="text-lg sm:text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Idiomas</h2>
        <p class="text-gray-800">{{ $data->languages }}</p>
      </section>
    @endif
  </div>
  
  <div class="mt-6">
    <a href="{{ route('dashboard') }}" class="flex p-2 text-center font-bold bg-blue-600 text-white">Voltar</a> 
  </div>


</body>
</html>
