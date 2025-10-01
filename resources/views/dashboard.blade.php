<x-app-layout>
    @section('title', 'Dashboard - EmpregaFacil')

    @section('content')
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        @if (auth()->user()->role == 1)
            <x-dashboard-candidate :myCandidacies="$myCandidacies" />
        @endif

        @if (auth()->user()->role == 2)
            <x-dashboard-company :candidates="$candidates" :vacancies="$vacancies" />
        @endif
    @endsection
</x-app-layout>
