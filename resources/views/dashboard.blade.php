<x-app-layout>
    @section('title', 'Dashboard - EmpregaFacil')

    @section('content')
        @if (auth()->user()->role == 1)
            <x-dashboard-candidate :myCandidacies="$myCandidacies" />
        @endif

        @if (auth()->user()->role == 2)
            <x-dashboard-company :candidates="$candidates" :vacancies="$vacancies" />
        @endif
    @endsection
</x-app-layout>
