@if ($paginator->hasPages())
    <div class="iq-card">
        <div class="iq-card-body p-0">
            <div class="iq-edit-list">
                <ul class="iq-edit-profile d-flex nav nav-pills">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="col-md p-0">
                            <a class="nav-link" aria-disabled="true">
                                <--
                            </a>
                        </li>
                    @else
                        <li class="col-md p-0">
                            <a class="nav-link" href="{{ $paginator->previousPageUrl() }}">
                                <--
                            </a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="col-md p-0">
                                        <a class="nav-link" aria-disabled="true">
                                            {{ $page }}
                                        </a>
                                    </li>
                                @else
                                    <li class="col-md p-0">
                                        <a class="nav-link" href="{{ $url }}">
                                            {{ $page }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="col-md p-0">
                            <a class="nav-link" href="{{ $paginator->nextPageUrl() }}">
                                -->
                            </a>
                        </li>
                    @else
                        <li class="col-md p-0">
                            <a class="nav-link" aria-disabled="true">
                                -->
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
@endif
