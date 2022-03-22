<div class="product__pagination row">
    <div class="col l-12 m-12 c-12">
      <ul class="product__pagination-list center">
        <li class="product__pagination-item">
          <a href="#" class="product__pagination-link">
            <i class="fas fa-angle-left"></i>
          </a>
        </li>
          <li class="product__pagination-item pagination-item-active">
            <a href="<?= base_url("product/product&page=$i") ?>" class="product__pagination-link"><?= $i ?></a>
          </li>
        <li class="product__pagination-item">
          <a href="#" class="product__pagination-link">
            <i class="fas fa-angle-double-right"></i>
          </a>
        </li>
      </ul>
    </div>
</div>

@if ($paginator->hasPages())
<div class="product__pagination row">
    <div class="col l-12 m-12 c-12">
      <ul class="product__pagination-list center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
                
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
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
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </div>
</div>
@endif
