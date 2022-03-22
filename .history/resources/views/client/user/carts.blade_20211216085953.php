@extends('client.layout.default')

@section('content')

  <div class="gird banner">
      <div class="banner__warp">
          <div class="banner__product-img"></div>
          <div class="slide-banner__text slide-banner__text2">
              <h2 class="slide-banner__title-1">Welcome to</h2>
              <h2 class="slide-banner__title-2">TP & SHOPPET</h2>
              <p class="slide-banner__description banner-detail">Pets</p>
          </div>
      </div>
  </div>

  <!--LINK-->
  <div class="grid wide">
      <div class="row">
          <div class="cart__link">
              <a class="product-cart__link-Shop" href="index.html">Trang chủ</a>
              <i class="fas fa-chevron-right"></i>
              <a class="product-cart__link-cart" href="product_cart.html">Giỏ hàng</a>
          </div>
      </div>
  </div>
  <!--May tinh-->
  <form action="" method="post">
    <div class="product-cart">
        <div class="grid wide show_cart">
            <!--Title-->
            <div class="product-cart__category">
                <div class="row">
                    <div class="col l-4">
                        <div class="product-cart__category-product">Sản phẩm</div>
                    </div>
                    <div class="col l-2">
                        <div class="product-cart__category--pay">Đơn giá</div>
                    </div>
                    <div class="col l-2">
                        <div class="product-cart__category--pay">Số lượng</div>
                    </div>
                    <div class="col l-2">
                        <div class="product-cart__category--pay">Tổng tiền</div>
                    </div>
                    <div class="col l-2">
                        <div class="product-cart__category--pay">Thao tác</div>
                    </div>
                </div>
            </div>

            <!--Danh muc san pham-->
            @php 
              $total = 0;
            @endphp

            @foreach($products as $product)

              @php 
                $price=$product->price_sale != 0 ? $product->price_sale : $product->price;
                $priceEnd=$price*$carts[$product->id];
                $total+=$priceEnd;
              @endphp
              <div class="product-cart__list">
                <div class="row">
                  <div class="col l-4">
                    <div class="product-cart__list--description">
                      <div class="product-cart__list-product">
                        <img
                          src="{{$product->thumbnail}}"
                          alt=""
                          class="product-cart__list--img"
                        />
                        <div class="product-cart__list--name">
                          {{$product->name}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col l-2">
                    <div class="product-cart__list--price">
                      <div class="product-cart__list--price-old">
                        <sup>đ</sup>{{$product->price}}
                      </div>
                      <div class="product-cart__list--price-new">
                        <sup>đ</sup>{{$product->price_sale}}
                      </div>
                    </div>
                  </div>
                  <div class="col l-2">
                    <div class="product-cart__list--count">
                      <div class="product-cart__list--amount">
                        <input
                          class="btn-minus--amount"
                          type="button"
                          onclick="minus()"
                          value="-"
                        />
                        <input id="amount" class="input--amount" type="text" value="{{$carts[$product->id]}}" />
                        <input
                          class="btn-plus--amount"  
                          type="button"
                          onclick="plus()"
                          value="+"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col l-2">
                    <div class="product-cart__list--money"><sup>đ</sup>{{$priceEnd}}</div>
                  </div>
                  <div class="col l-2">
                    <div class="product-cart__list--delete">
                      <i class="product-cart__list--garbage fas fa-trash"></i>
                      <button class="product-cart__list--nofity">Xoá</button>
                    </div>
                  </div>
                </div> 
              </div>
            @endforeach
            <div class="product-cart__total">
                <div class="row">
                    <div class="col l-12">
                        <div class="product-cart__total--pay">
                            @csrf
                            <input type="submit" class="product-cart__buy clickCart" value="Cập nhật giỏ hàng" formaction="/update-cart">
                            <div class="product-cart__total--price">
                                <div class="product-cart__total--text">Tổng thanh toán : {{$total}}</div>
                                <div class="product-cart__total--money">
                                    <!-- <sup>đ</sup>0 -->
                                </div>
                            </div>
                            <button type="submit" class="product-cart__buy clickCart">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </form>
@endsection