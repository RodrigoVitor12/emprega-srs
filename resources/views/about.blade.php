@extends('layouts.app')

@section('title', 'Sobre Nós - MeuSite')

@section('content')
    <section class="bg-gradient-to-r from-blue-500  to-blue-700 py-12 px-4">
        <p class="text-white bg-black/10 w-16 mx-auto text-center py-2 rounded-lg"><ion-icon name="search-outline" size="large"></ion-icon></p>
        <h1 class="text-3xl font-bold text-center text-white mt-6">Sobre o EmpregaFácil</h1>
        <p class="text-xl mt-6 text-white md:w-[50%] mx-auto">Em uma cidade onde oportunidades são raras, nossa missão é transformar Santa Rita do Sapucaí em um polo de inovação. Conectamos talentos a empresas, criamos oportunidades reais e mostramos que, juntos, podemos construir um futuro mais brilhante e inspirador para todos. </p>
        
    </section>
    <section class="px-4">
        {{-- Missao --}}
        <article class="py-12 flex flex-col md:flex-row items-center">
            <div>
                <small class="bg-[#155DFC] p-2 rounded-xl text-white text-xs">Nossa Missão</small>
                <h2 class="font-bold mt-4 text-2xl text-[#155DFC]">Transformar Santa Rita do Sapucaí em um polo de inovação profissional</h2>
                <div class="mt-4 md:w-[50%] text-gray-600 text-xl">
                    <p>
                        Acreditamos que todo talento da nossa cidade merece ter acesso a oportunidades que realmente façam a diferença em sua carreira e no crescimento da comunidade. Por isso, criamos uma plataforma pioneira, que vai além de simplesmente listar vagas.
                    </p>
                    <br>
                    <p>
                        Conectamos candidatos a empresas locais de forma transparente e eficiente, oferecendo informações sobre cultura organizacional, oportunidades de desenvolvimento e benefícios, para que cada decisão profissional contribua para o fortalecimento da cidade e para o futuro de quem nela vive.
                    </p>
                </div>
            </div>

            <div class="w-full">
                <p class="text-8xl text-center">🎯</p>
            </div>
        </article>
        {{-- Numeros --}}
        <article >
            <h2 class="font-bold mt-4 text-3xl text-center text-[#155DFC]">Nossos Números</h2>
            <div class="flex flex-col md:flex-row gap-12 justify-center items-center text-center my-8">
                <div class="bg-white p-4 rounded-md shadow-2xl w-48 h-32">
                    <p class="text-3xl text-[#155DFC] font-bold">10</p>
                    <p class="text-gray-500">Candidatos Cadastrados</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-xl w-48 h-32">
                    <p class="text-3xl text-[#155DFC] font-bold">4</p>
                    <p class="text-gray-500">Empresas parceiras</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-xl w-48 h-32">
                    <p class="text-3xl text-[#155DFC] font-bold">10</p>
                    <p class="text-gray-500">Vagas Publicadas</p>
                </div>
            </div>
        </article>
        {{-- Valores --}}
        <br> <br>
        <article>
            <div class="flex flex-col items-center">
                <small class="bg-[#155DFC] p-2 rounded-xl text-white text-xs">Nossos Valores</small> 
                <h2 class="font-bold mt-4 text-3xl text-[#155DFC] ">O que nos move todos os dias</h2>
            </div>

            <div class="flex flex-col md:flex-row gap-12 justify-center items-center text-center my-8 flex-wrap">
                <div class="bg-white p-4 rounded-md shadow-2xl w-56 min-h-[160px] flex flex-col justify-between">
                    <p class="text-lg text-[#155DFC] font-bold">Pioneirismo Local</p>
                    <p class="text-gray-500">A primeira plataforma da cidade conectando talentos e empresas.</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-2xl w-56 min-h-[160px] flex flex-col justify-between">
                    <p class="text-lg text-[#155DFC] font-bold">Impacto na Comunidade</p>
                    <p class="text-gray-500">O trabalho transforma vidas e fortalece nossa cidade.</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-2xl w-56 min-h-[160px] flex flex-col justify-between">
                    <p class="text-lg text-[#155DFC] font-bold">Inovação</p>
                    <p class="text-gray-500">Usamos tecnologia para tornar o mercado de trabalho mais ágil.</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-2xl w-56 min-h-[160px] flex flex-col justify-between">
                    <p class="text-lg text-[#155DFC] font-bold">Transparência</p>
                    <p class="text-gray-500">Informações claras sobre empresas e oportunidades.</p>
                </div>
            </div>

        </article>
        {{-- Equipe --}}
        <article class="py-6">
            <div class="flex flex-col items-center">
                <small class="bg-[#155DFC] p-2 rounded-xl text-white text-xs">Nossa Equipe</small> 
                <h2 class="font-bold mt-4 text-3xl text-[#155DFC] ">Conheça quem está por trás do EmpregaFácil</h2>
            </div>

            <div class="flex flex-col md:flex-row gap-12 justify-center items-center text-center my-8 flex-wrap">
                <div class="bg-white p-4 rounded-md shadow-2xl w-56 min-h-[220px] flex flex-col justify-between">
                    <div class="flex justify-center">
                        <img src="/images/profile-rodrigo.jpg" alt="Foto do Rodrigo" class="w-32 h-32 object-cover rounded-full">
                    </div>
                    <p class="text-lg font-bold">Rodrigo Vitor</p>
                    <p class="font-bold text-sm text-blue-500">CEO, Fundador & Desenvolvedor FullStack</p>
                    <p class="text-gray-500 text-sm">Responsável pela plataforma que conecta pessoas e empresas, inovando o mercado local</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-2xl w-56 min-h-[220px] flex flex-col justify-between it">
                    <div class="flex justify-center">
                        <img src="/images/profile-joao.jpg" alt="Foto do Rodrigo" class="w-32 h-32 object-cover rounded-full ">
                    </div>
                    <p class="text-lg font-bold">João Pedro</p>
                    <p class="font-bold text-sm text-blue-500">Head de Marketing & Redes Sociais</p>
                    <p class="text-gray-500 text-sm">Gerencia as redes sociais e impulsiona a visibilidade da plataforma, fortalecendo a comunidade local.</p>
                </div>
            </div>

        </article>
    </section>
    
@endsection