<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currículo - {{$data->full_name}}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 flex justify-center py-10">
  <div class="flex flex-col gap-4">
    <div class="w-[210mm] bg-white p-10 shadow-2xl rounded-lg border border-gray-300">
 
     <!-- Cabeçalho -->
     <div class="border-b pb-6 mb-6">
       <h1 class="text-4xl font-bold text-gray-900">{{$data->full_name}}</h1>
       <p class="text-gray-600 mt-2">📧 {{ $data->email }}</p>
       <p class="text-gray-600">📱 {{ $data->phone }}</p>
       <p class="text-gray-600">📍 {{ $data->city }}</p>
     </div>
 
     <!-- Resumo -->
     <section class="mb-6">
       <h2 class="text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Resumo</h2>
       <p class="text-gray-800 leading-relaxed">
         {{ $data->summary }}
       </p>
     </section>
 
     <!-- Formação -->
     <section class="mb-6">
       <h2 class="text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Formação</h2>
       <div class="pl-2 border-l-4 border-blue-500">
         <p class="font-semibold text-gray-900">{{ $data->course_type }}</p>
         <p class="text-gray-700">{{ $data->institution }}</p>
         <p class="text-gray-500 text-sm">{{ $data->completion_status }}</p>
       </div>
     </section>
 
     <!-- Experiência -->
     <section class="mb-6">
       <h2 class="text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Experiência Profissional</h2>
 
       @if ($data->experience_1_position && $data->experience_1_company && $data->experience_1_period && $data->experience_1_activities)
         <div class="mb-4 pl-2 border-l-4 border-blue-500">
           <p class="font-semibold text-gray-900">{{$data->experience_1_position}} - {{$data->experience_1_company}}</p>
           <p class="text-gray-500 text-sm">{{$data->experience_1_period}}</p>
           <p class="text-gray-700">{{$data->experience_1_activities}}</p>
         </div>
       @endif
 
 
       @if ($data->experience_2_position && $data->experience_2_company && $data->experience_2_period && $data->experience_2_activities)
         <div class="mb-4 pl-2 border-l-4 border-blue-500">
           <p class="font-semibold text-gray-900">{{$data->experience_2_position}} - {{$data->experience_2_company}}</p>
           <p class="text-gray-500 text-sm">{{$data->experience_2_period}}</p>
           <p class="text-gray-700">{{$data->experience_2_activities}}</p>
         </div>
       @endif
     </section>
 
     <!-- Habilidades -->
     <section class="mb-6">
       <h2 class="text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Habilidades</h2>
       <p class="text-gray-800">{{$data->skills}}</p>
     </section>
 
     <!-- Idiomas -->
     @if ($data->languages)
       <section>
         <h2 class="text-xl font-semibold text-blue-700 uppercase tracking-wide mb-2">Idiomas</h2>
         <p class="text-gray-800">{{$data->languages}}</p>
       </section>
     @endif
 
   </div>
    <a href="{{ route('dashboard') }}" class="p-2 text-center font-bold bg-blue-600 text-white">Voltar</a>

  </div>

</body>
</html>
