@extends('layouts.app')

@section('title', 'Entrar como - EmpregaFacil')

@section('content')
    <div class="py-8">
        <h2 class="font-bold mt-4 text-3xl text-[#155DFC] text-center ">Login</h2>
        <div class="flex flex-col md:flex-row gap-12 justify-center items-center text-center my-8 flex-wrap">
                <a href="{{ route('login-candidate') }}" class="bg-white p-4 rounded-md shadow-2xl hover:shadow-xl w-56 min-h-[160px] flex flex-col justify-center">
                    <p class="text-[#155DFC]"><ion-icon name="person-outline" size="large"></ion-icon></p>
                    <p class="text-lg font-bold text-gray-700">Sou Candidato</p>
                </a>
                <a href="{{ route('login-company') }}" class="bg-white p-4 rounded-md shadow-2xl hover:shadow-xl w-56 min-h-[160px] flex flex-col justify-center">
                    <p class="text-[#155DFC]"><ion-icon name="business-outline" size="large"></ion-icon></p>
                    <p class="text-lg font-bold text-gray-700">Sou Recrutador</p>
                </a>
            </div>
    </div>
@endsection