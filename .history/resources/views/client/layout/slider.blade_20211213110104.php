@section('head')

<link rel="stylesheet" href="{{asset('client/css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('client/css/main_slider.css')}}" />
<link rel="stylesheet" href="{{asset('client/css/click.css')}}" />
<link rel="stylesheet" href="{{asset('client/css/util.css')}}" />

@endsection
<!-- banner slider-->
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

<section class="section-slide">
    <div class="wrap-slick1 rs1-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url(images/slide-03.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-202 cl2 respon2">
                                Men Collection 2018
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                New arrivals
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(images/slide-02.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                            <span class="ltext-202 cl2 respon2">
                                Men New-Season
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                Jackets & Coats
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url(images/slide-04.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                            <span class="ltext-202 cl2 respon2">
                                Women Collection 2018
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                NEW SEASON
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>