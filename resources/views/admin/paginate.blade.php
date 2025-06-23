@if ($paginator->hasPages())
    <ul class="pagination pagination-sm m-0 float-right">
        @if ($paginator->onFirstPage())
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">&laquo;</a></li>
        @endif

        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item"><a class="page-link" href="#">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" aria-disabled="true" href="{{ $paginator->nextPageUrl() }}">&raquo;</a></li>
        @else
            <li class="page-item"><a class="page-link" aria-disabled="true" href="#">&raquo;</a></li>
        @endif
    </ul>
@endif