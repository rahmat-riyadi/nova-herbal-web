@if ($paginator->hasPages())


    <ul class="pagination-comp" >


        @if ($paginator->onFirstPage())
            <li class="pagination-item " aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="pagination-link icon" aria-hidden="true">
                    <img src="{{ asset('assets/icons/double-left.svg') }}" alt="">
                </span>
            </li>
            <li class="pagination-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="pagination-link icon" aria-hidden="true">
                    <img src="{{ asset('assets/icons/left.svg') }}" alt="">
                </span>
            </li>
        @else
            <li class="pagination-item ">
                <a class="pagination-link icon" href="{{ $paginator->url(1) }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <img src="{{ asset('assets/icons/double-left.svg') }}" alt="">
                </a>
            </li>
            <li class="pagination-item">
                <a class="pagination-link icon" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <img src="{{ asset('assets/icons/left.svg') }}" alt="">
                </a>
            </li>
        @endif

        @foreach ($elements as $element)

            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagination-item disabled" aria-disabled="true"><span class="pagination-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination-item " aria-current="page"><span class="pagination-link active">{{ $page }}</span></li>
                    @else
                        <li class="pagination-item"><a class="pagination-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="pagination-item">
                <a class="pagination-link icon" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <img src="{{ asset('assets/icons/right.svg') }}" alt="">
                </a>
            </li>
            <li class="pagination-item">
                <a class="pagination-link icon" href="{{ $paginator->url(ceil($paginator->total()/$paginator->perPage())) }}" rel="next" aria-label="@lang('pagination.next')">
                    <img src="{{ asset('assets/icons/double-right.svg') }}" alt="">
                </a>
            </li>
        @else
            <li class="pagination-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="pagination-link" aria-hidden="true"><img src="{{ asset('assets/icons/right.svg') }}" alt=""></span>
            </li>
            <li class="pagination-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="pagination-link" aria-hidden="true"><img src="{{ asset('assets/icons/double-right.svg') }}" alt=""></span>
            </li>
        @endif

    </ul>

@endif
