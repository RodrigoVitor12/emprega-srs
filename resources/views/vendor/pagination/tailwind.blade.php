@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center space-x-2 mt-6">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-2 text-gray-400 bg-gray-100 rounded-md cursor-not-allowed">
                Anterior
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition">
                Anterior
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-3 py-2 text-gray-400">...</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-2 bg-blue-700 text-white rounded-md font-semibold">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}" class="px-3 py-2 bg-blue-100 text-blue-700 rounded-md hover:bg-blue-200 transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition">
                Próxima
            </a>
        @else
            <span class="px-3 py-2 text-gray-400 bg-gray-100 rounded-md cursor-not-allowed">
                Próxima
            </span>
        @endif
    </nav>
@endif
