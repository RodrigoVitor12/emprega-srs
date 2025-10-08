<nav class="bg-[#155DFC] shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="text-2xl font-bold text-white">
                        <img src="/images/logo.png" alt="maonavaga">
                </a>
            </div>

            <!-- Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('home') }}" class="text-white hover:text-gray-300">Home</a>
                <a href="{{ route('vacancies.show') }}" class="text-white hover:text-gray-300">Vagas</a>
                <a href="{{ route('aboutUs') }}" class="text-white hover:text-gray-300">Sobre</a>
                <a href="{{ route('login') }}"
                    class="text-gray-900 hover:text-gray-800 bg-white hover:bg-gray-300 p-2 rounded-md"><ion-icon
                        name="person-outline"></ion-icon> Entrar</a>
                <a href="{{ route('registerAsWho') }}"
                    class="text-gray-200 hover:text-white bg-blue-800 hover:bg-blue-500 p-2 rounded-md"><ion-icon
                        name="log-in-outline"></ion-icon> Cadastrar </a>
            </div>

            <!-- Hamburger Menu Mobile -->
            <div class="flex items-center md:hidden">
                <button id="menu-btn" class="text-gray-700 bg-white p-2 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="hidden md:hidden px-4">
        <a href="{{ route('home') }}" class="block px-4  mt-4 text-white hover:text-gray-300">Home</a>
        <a href="{{ route('vacancies.show') }}" class="block px-4  mt-4 text-white hover:text-gray-300">Vagas</a>
        <a href="{{ route('aboutUs') }}" class="block px-4  mt-4 text-white hover:text-gray-300">Sobre Nós</a>
        <a href="{{ route('login') }}"
            class="block px-4  mt-4 text-gray-900 hover:text-gray-800 bg-white hover:bg-gray-300 p-2 rounded-md w-32"><ion-icon
                name="person-outline"></ion-icon> Entrar</a>
        <a href={{ route('registerAsWho') }}
            class="block mt-4 text-gray-200 hover:text-white bg-blue-800 hover:bg-blue-500 p-2 rounded-md w-32"><ion-icon
                name="log-in-outline"></ion-icon> Cadastrar </a>
    </div>
</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
