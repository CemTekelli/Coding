@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
     

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a aria-disabled="true">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            @if ($page > 9)
                                <a class="active" aria-current="page">{{ $page }}.</a>
                            @else
                                <a class="active" aria-current="page">0{{ $page }}.</a>
                            @endif
                        @else
                            @if ($page > 9)
                                <a class="page-link" href="{{ $url }}">{{ $page }}.</a>
                            @else
                                <a class="page-link" href="{{ $url }}">0{{ $page }}.</a>
                            @endif
                        @endif
                    @endforeach
                @endif
            @endforeach

  
        </ul>
    </nav>
@endif