{{-- <div class="product__pagination row">
    <div class="col l-12 m-12 c-12">
      <ul class="product__pagination-list center">
        <li class="product__pagination-item">
          <a href="#" class="product__pagination-link">
            <i class="fas fa-angle-left"></i>
          </a>
        </li>
          <li class="product__pagination-item pagination-item-active">
            <a href="" class="product__pagination-link">1</a>
          </li>
        <li class="product__pagination-item">
          <a href="#" class="product__pagination-link">
            <i class="fas fa-angle-double-right"></i>
          </a>
        </li>
      </ul>
    </div>
</div> --}}

@if ($paginator->hasPages())
    <div class="product__pagination row">
        <div class="col l-12 m-12 c-12">
            <ul class="product__pagination-list center">
                {{-- Previous Page Link --}}
                @if (!$paginator->onFirstPage())
                    <li class="product__pagination-item">
                        <a href="{{ $paginator->previousPageUrl() }}" class="product__pagination-link">
                          <i class="fas fa-angle-left"></i>
                        </a>
                      </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="product__pagination-item pagination-item-active" aria-current="page">
                                    
                                    <a href="" class="product__pagination-link">{{ $page }}</a>
                                </li>
                            @else
                                <li class=" product__pagination-item">
                                    
                                    <a href="{{ $url }}" class="product__pagination-link">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="product__pagination-item">
                        <a href="{{ $paginator->nextPageUrl() }}" class="product__pagination-link">
                          <i class="fas fa-angle-double-right"></i>
                        </a>
                      </li>
                @endif
            </ul>
        </div>
    </div>
@endif



