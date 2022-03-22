@extends('client.layout.default')

@section('content')
    <!-- banner detail -->
<div class="gird banner">
    <div class="banner__warp">
      <div class="banner__product-img"></div>
      <div class="slide-banner__text slide-banner__text2">
        <h2 class="slide-banner__title-1">Welcome to</h2>
        <h2 class="slide-banner__title-2">TP & SHOPPET</h2>
        <p class="slide-banner__description banner-detail">Products</p>
      </div>
    </div>
  </div>
  
  <div class="products__container">
    <div class="grid wide">
      <!--Header sort-->
      <div class="home-filter">
        <span class="home-filter__label">Sắp xếp theo</span>
        <button class="home-filter__btn">Liên quan</button>
        <button class="home-filter__btn btn--primary">Mới nhất</button>
        <button class="home-filter__btn">Bán chạy</button>
  
        <div class="select-input">
          <span class="select-input__label">Giá</span>
          <i class="fas fa-angle-down"></i>
  
          <!--List option-->
          <ul class="select-input__list">
            <li class="select-input-item">
              <a href="{{request()->fullUrlWithQuery(['price'=>'asc'])}}" class="select-input__link">Giá : Thấp đến cao</a>
            </li>
            <li class="select-input-item">
              <a href="{{request()->fullUrlWithQuery(['price'=>'desc'])}}" class="select-input__link">Giá : Cao đến thấp</a>
            </li>
          </ul>
        </div>
      </div>
  
      <!--Product-->
      <div class="grid wide">
        <div id="loadMore">
          
          @include('client.user.list')
       
        </div>
  
        <div class="product__pagination row">
          <div class="col l-12 m-12 c-12" style="text-align:center">
            {!!$products->links('client.user.pagination')!!}
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection