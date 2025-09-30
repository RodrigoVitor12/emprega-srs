@extends('layouts.app')

@section('title', 'Entrar como - EmpregaFacil')

@section('content')
    <div class="py-12">
        <h2 class="font-bold mt-4 text-3xl text-[#155DFC] text-center ">Criar Contra</h2>
        <div class="flex flex-col md:flex-row gap-12 justify-center items-center text-center my-8 flex-wrap">
                <a href="{{ route('register-candidate') }}" class="bg-white p-6 rounded-md shadow-2xl hover:shadow-xl  flex flex-col justify-center">
                    <p class="text-lg font-bold text-gray-700">Sou Candidato</p>
                    <p class="text-gray-500">Cadastre-se para encontrar oportunidades e montar seu currículo online.</p>
                </a>
                <a href="{{ route('register-company') }}" class="bg-white p-6 rounded-md shadow-2xl hover:shadow-xl flex flex-col justify-between">
                    <p class="text-lg font-bold text-gray-700">Sou Recrutador</p>
                    <p class="text-gray-500">Cadastre sua empresa, crie perfil e publique vagas</p>
                </a>
            </div>
    </div>
@endsection