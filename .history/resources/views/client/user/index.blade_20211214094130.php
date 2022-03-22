@extends('client.layout.default')

@section('content')

<!-- banner slider-->
  {{-- @foreach($slider as $slider) --}}
  
  <div class="gird slider">
    <div class="gird">
      <div class="slide-warp">
        <div class="slide-banner">
          <div class="slide-banner__img"></div>
          <div class="slide-banner__text">
            <h2 class="slide-banner__title-1">Chào Mừng Đến Với</h2>
            <h2 class="slide-banner__title-2">TP & SHOPPET</h2>
            <p class="slide-banner__description">Chúng tôi nuôi thú cưng vì niềm vui.</p>
          </div>
        </div>

        <div class="next-warp__btn hidden-mobile">
          <div class="slide-banner__next slide-banner__next-left center">
            <i class="fas fa-chevron-left"></i>
          </div>
          <div class="slide-banner__next slide-banner__next-right center">
            <i class="fas fa-chevron-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- @endforeach --}}

<!-- product  -->
<div class="products">
    <div class="product grid wide">
      <div class="product__title">
        <h4>PHỔ BIẾN NHẤT</h4>
        <h2>SẢN PHẨM MỚI</h2>
      </div>
  
      <div class="row product__menu-pet">
        <div class="col l-2 m-2 c-12">
          <div class="product__icon-pet">
            <img
              class="product__img-pet"
              src="{{asset('client/images/icon/corgi.png')}}"
              alt="icon"
            />
            <h3>Thú cưng</h3>
          </div>
        </div>
        <div class="col l-10 m-10 c-12">
          <div class="product__popular">
            <div class="row sm-gutter">
              @foreach($products as $product) 
                <div class="product-item col l-3 m-4 c-12">
                  <div class="product-wrapper">
                    <div class="product-img">
                      <a href="">
                      <div
                          class="product-img-container"
                          style="
                            background-image: url({{$product->thumbnail}});
                          "
                        ></div>
                      </a>
                      <div class="product-action">
                        <a href="">
                          <i class="product-icon fas fa-plus"></i>
                        </a>
                        <a title="Add To Cart" href="#">
                          <i class="product-icon fas fa-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
  
                    <div class="product-content">
                      <h4>
                        <a href="">{{$product->name}}</a>
                      </h4>
                      <div class="product-evaluate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <div class="product-price">
                        <span class="new">
                          {{$product->price_sale}}
                        </span>
                        <span class="old" style="color:var(--primary-color)">
                          {{$product->price}}
                        </span>
                      </div>
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
          </div>
        </div>
        <a
          href=""
          class="product__select-pet hidden-mobile"
        >
          <h4>xem thêm</h4>
          <i class="product__select-icon fas fa-angle-double-right"></i>
        </a>
      </div>
  
      {{-- <div class="row product__menu-noPet">
        <div class="col l-2 m-2 c-12">
          <div class="product__icon-noPet">
            <img
              class="product__img-pet"
              src=""
              alt="icon"
            />
            <h3>Mục khác</h3>
          </div>
        </div>
        <div class="col l-10 m-10">
          <div class="product__popular">
            <div class="row sm-gutter">
            
                <div class="product-item col l-3 m-4 c-12">
                  <div class="product-wrapper">
                    <div class="product-img">
                      <a href="">
                      <div
                          class="product-img-container"
                          style="
                            background-image: url();
                          "
                        ></div>
                      </a>
                      <div class="product-action">
                        <a href="">
                          <i class="product-icon fas fa-plus"></i>
                        </a>
                        <a title="Add To Cart" href="#">
                          <i class="product-icon fas fa-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
  
                    <div class="product-content">
                      <h4>
                        <a href="">dv</a>
                      </h4>
                      <div class="product-evaluate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <div class="product-price">
                        <span class="new">dv </span>
                        <span class="old">sdfv</span>
                      </div>
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
              
            </div>
          </div>
        </div>
        <a
          href=""
          class="product__select-noPet hidden-mobile"
        >
          <h4>xem thêm</h4>
          <i class="product__select-icon fas fa-angle-double-right"></i>
        </a>
      </div> --}}
    </div>
  </div>
  
  <!-- review -->
  <div class="review">
    <div class="grid">
      <div class="review__container">
        <div class="review__img"></div>
        <div class="review__text center">
          <h2 style="text-transform: uppercase;">đánh giá hàng đầu</h2>
          <p>
            Nuôi thú cưng là một trong những sở thích được yêu thích nhất hiện
            nay, đặc biệt là những quốc gia châu âu. Tuy nhiên không phổ biến ở
            Việt Nam, vì vậy hay lang tỏa tình yêu động vật đến moị người
          </p>
        </div>
        <div class="row review__users">
          <div class="col l-4 m-6 c-12">
            <div class="user-info">
              <div class="user-info__avatar">
                <img
                  src="{{asset('client/images/icon/user1.jpg')}}"
                  alt="hinh"
                />
              </div>
              <div class="user-info__content">
                <h4 class="user-info__content-name">Tô thị thanh tâm</h4>
                <p class="user-info__content-comment">
                  tôi rất yêu thích loài chó, tôi rất yêu thích loài chó tôi rất
                  yêu thích loài chó
                </p>
                <div class="product-rate">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h5 class="user-info__content-city">Hà tỉnh</h5>
              </div>
            </div>
          </div>
  
          <div class="col l-4 m-6 c-12">
            <div class="user-info">
              <div class="user-info__avatar">
                <img
                  src="{{asset('client/images/icon/user2.jpg')}}"
                  alt="hinh"
                />
              </div>
              <div class="user-info__content">
                <h4 class="user-info__content-name">Nguyễn Viết Phú</h4>
                <p class="user-info__content-comment">
                  nuôi mèo là sở thích của tôi, cám ơn shop rất nhiều, shop tuyệt vời lắm
                </p>
                <div class="product-rate">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h5 class="user-info__content-city">Hà tỉnh</h5>
              </div>
            </div>
          </div>
  
          <div class="col l-4 m-6 c-12">
            <div class="user-info">
              <div class="user-info__avatar">
                <img
                  src="{{asset('client/images/icon/user3.jpg')}}"
                  alt="hinh"
                />
              </div>
              <div class="user-info__content">
                <h4 class="user-info__content-name">Lê Văn Tùng</h4>
                <p class="user-info__content-comment">
                Shop giao hàng nhanh, mới đặt hôm 11/11, 13/11 đã nhận được. Mấy thứ này cún nhà mình rất thích, sẽ quay lại mua lần nữa
                </p>
                <div class="product-rate">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h5 class="user-info__content-city">Bà Rịa Vũng Tàu</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="review__page hidden-table-mobile">
          <button type="button" class="page__btn"></button>
          <button type="button" class="page__btn page-active"></button>
          <button type="button" class="page__btn"></button>
        </div>
      </div>
    </div>
</div>
  

@endsection

