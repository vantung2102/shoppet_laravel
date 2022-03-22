<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TP&SHOPPET</title>
    <link rel="icon" href="{{asset('client/images/icon/icon.png')}}">

    <!-- all css -->
    @include('client.layout.head')
    @section('head')

<link rel="stylesheet" href="{{asset('client/css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('client/css/main_slider.css')}}" />
<link rel="stylesheet" href="{{asset('client/css/click.css')}}" />
<link rel="stylesheet" href="{{asset('client/css/util.css')}}" />

@endsection

<body>
    <div class="app">
        <!-- header -->
        @include('client.layout.header')

        <!-- banner slider-->
        @include('client.layout.slider')

        @yield('content')
        
        
        <!-- about us -->
        <div class="service grid wide">
            <div class="service-top">
                <h2>Về chúng tôi</h2>
            </div>

            <div class="row">
                <div class="col l-3 m-6 c-6">
                    <div class="service-item">
                    <img src="{{asset('client/images/icon/shop.png')}}" class="service-item__img" />
                    <div class="service-item__content">
                        <h3 class="service-item__title">Cửa hàng</h3>
                        <p class="service-item__description">
                        Uy tính chất lượng, được sự tinh cậy, có kinh nghiệm lâu năm
                        trong nghành
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col l-3 m-6 c-6">
                    <div class="service-item">
                    <img
                        src="{{asset('client/images/icon/24-hours.png')}}"
                        class="service-item__img"
                    />
                    <div class="service-item__content">
                        <h3 class="service-item__title">Đường giấy nóng</h3>
                        <p class="service-item__description">Hổ trợ khách hàng 24/24</p>
                    </div>
                    </div>
                </div>

                <div class="col l-3 m-6 c-6">
                    <div class="service-item">
                    <img
                        src="{{asset('client/images/icon/delivery-truck.png')}}"
                        class="service-item__img"
                    />
                    <div class="service-item__content">
                        <h3 class="service-item__title">Miễn phí ship</h3>
                        <p class="service-item__description">
                        Giao hàng miễn phí cho tất cả các đơn đặt hàng trên 5tr
                        </p>
                    </div>
                    </div>
                </div>

                <div class="col l-3 m-6 c-6">
                    <div class="service-item">
                    <img
                        src="{{asset('client/images/icon/location.png')}}"
                        class="service-item__img"
                    />
                    <div class="service-item__content">
                        <h3 class="service-item__title">Vị trí</h3>
                        <p class="service-item__description">
                        Có mặt tại các thành phố lớn
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        @include('client.layout.footer')

        <!-- nav icon -->
        <div class="icon__footer">
            <div class="icon__footer-left">
                <div class="icon__footer-social">
                <div class="icon__footer-social--list hidden-mobile">
                    <li class="icon__footer-social--item">
                    <a href="#" class="icon__footer-social-link">
                        <i class="icon-footer fab fa-facebook"></i>
                    </a>
                    </li>
                    <li class="icon__footer-social--item">
                    <a href="#" class="icon__footer-social-link">
                        <i class="icon-footer fab fa-facebook-messenger"></i>
                    </a>
                    </li>
                    <li class="icon__footer-social--item">
                    <a href="#" class="icon__footer-social-link">
                        <i class="icon-footer fab fa-instagram"></i>
                    </a>
                    </li>
                    <li class="icon__footer-social--item">
                    <a href="#" class="icon__footer-social-link">
                        <i class="icon-footer fas fa-phone"></i>
                    </a>
                    </li>
                    <li class="icon__footer-social--item">
                    <a href="#" class="icon__footer-social-link">
                        <i class="icon-footer fab fa-twitter"></i>
                    </a>
                    </li>
                </div>
                </div>
            </div>
            <div class="icon__footer-right ">
                <div class="icon__footer-active">
                <a class="icon__footer-action">
                    <img class="icon__footer-action--img" src="{{ asset('client/images/icon/zalo-icon-2.png')}}" alt="hinh" >
                </a>
                <div class="icon__footer-fix"></div>
                </div>
                <a href="#top" class="icon__footer-top">
                <i class="icon-top fas fa-arrow-up"></i>
                </a>
            </div>
        </div>
    </div>
    
    @include('client.layout.foot')
</body>
</html>