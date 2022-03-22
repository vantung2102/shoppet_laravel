<div class="row">
    @foreach ($products as $product)
                <div class="col l-3 m-6 c-12">
                <div class="category-products-item">
                    <div
                    class="category-products-item__img"
                    style="
                        background-image: url({{$product->thumbnail}});
                    "
                    ></div>
                    <h4 class="category-products-item__name">
                    {{$product->name}}
                    </h4>
                    <div class="category-products-item__price">
                    <span class="category-products-item__price-old">{{$product->price}}</span>
                    <span class="category-products-item__price-new">{!!\App\Helpers\Helper::price_sale($product->price_sale)!!}</span>
                    </div>
                    <div class="category-products-item__action">
                    <div class="product-evaluate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="/san-pham/{{$product->id}}-{{Str::slug($product->name,'-')}}.html" class="category-products-item__detail">Chi tiết</a>
                    </div>
        
                    <div class="product-favourite">
                    <i class="fas fa-check"></i>
                    <span>HOT NEW</span>
                    </div>
                    <div class="product-sale-off">
                    <span class="product-percent">10%</span>
                    <span class="product-label">Giảm</span>
                    </div>
                </div>
                </div>
    @endforeach
</div>