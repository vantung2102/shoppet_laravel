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

<body>
    <div class="app">
        <!-- header -->
        @include('client.layout.header')

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
        <footer class="footer">
            <div class="footer-top">
                <div class="grid wide">
                <div class="row">
                    <div class="col l-3 m-6 c-12">
                    <div class="footer-top-widget">
                        <div class="footer-top-widget__logo">
                        <a href="">
                            <img src="{{asset('client/images/icon/logo-v2.png')}}" alt="" />
                        </a>
                        </div>
                        <p class="footer-top-widget__info">
                        Giao hàng miễn phí tại TP.HCM, Hà Nội, Đà Nẵng Áp dụng cho
                        đơn hàng từ 500.000đ trở lên
                        </p>
                        <div class="footer-top-widget__social">
                        <ul class="footer-top-widget__social-list">
                            <li class="footer-top-widget__social-item">
                            <a href="mailto:TP&Shoppet@gmail.com" class="footer-top-widget__social-link">
                                <i
                                class="
                                    fas
                                    fa-envelope
                                    footer-top-widget__social-icon
                                "
                                ></i>
                                <span>TP&Shoppet@gmail.com</span>
                            </a>
                            </li>
                            <li class="footer-top-widget__social-item">
                            <a href="tel:0984235062" class="footer-top-widget__social-link">
                                <i
                                class="fas fa-phone footer-top-widget__social-icon"
                                ></i>
                                <span> 0984235062 </span>
                            </a>
                            </li>
                            <li class="footer-top-widget__social-item">
                            <a href="#" class="footer-top-widget__social-link">
                                <i
                                class="
                                    fas
                                    fa-map-marked-alt
                                    footer-top-widget__social-icon
                                "
                                ></i>
                                <span> 886/50 XVNT, P.25, Q. Bình Thạnh, TPHCM </span>
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col l-3 m-6 c-12">
                    <div class="footer-top-useful">
                        <h2 class="footer-widget-top-title">LIÊN KẾT HỮU ÍCH</h2>
                        <ul class="footer-widget-top-content-list">
                        <li class="footer-widget-top-content-item">
                            <a href="#" class="footer-widget-top-content-link"
                            >Trợ giúp & Liên hệ với chúng tôi
                            </a>
                        </li>
                        <li class="footer-widget-top-content-item">
                            <a href="#" class="footer-widget-top-content-link">
                            Trả hàng & hoàn lại tiền
                            </a>
                        </li>
                        <li class="footer-widget-top-content-item">
                            <a href="#" class="footer-widget-top-content-link">
                            Cửa hàng trực tuyến
                            </a>
                        </li>
                        <li class="footer-widget-top-content-item">
                            <a href="#" class="footer-widget-top-content-link">
                            Điều khoản và điều kiện
                            </a>
                        </li>
                        </ul>
                    </div>
                    </div>
                    <div class="col l-3 m-6 c-12">
                    <div class="footer-top-help">
                        <h2 class="footer-widget-top-title">NGƯỜI DÙNG</h2>
                        <ul class="footer-widget-top-content-list">
                        <li class="footer-widget-top-content-item">
                            <a href="#" class="footer-widget-top-content-link"
                            >Câu hỏi thường gặp
                            </a>
                        </li>
                        <li class="footer-widget-top-content-item">
                            <a href="#" class="footer-widget-top-content-link">
                            Các gói định giá
                            </a>
                        </li>
                        <li class="footer-widget-top-content-item">
                            <a href="#" class="footer-widget-top-content-link">
                            Theo dõi đơn hàng
                            </a>
                        </li>
                        <li class="footer-widget-top-content-item">
                            <a href="#" class="footer-widget-top-content-link">
                            Lợi nhuận
                            </a>
                        </li>
                        </ul>
                    </div>
                    </div>
                    <div class="col l-3 m-6 c-12">
                    <div class="footer-top-sub">
                        <h2 class="footer-widget-top-title">ĐĂNG KÍ </h2>
                        <p>
                        Đăng ký để nhận thêm nhiều khuyến mãi và hổ trợ
                        từ cửa hàng
                        </p>
                        <div class="footer__input-boxs">
                        <form action="#" method="post">
                            <div class="footer__input-box">
                            <i class="fas fa-user"></i>
                            <input
                                type="text"
                                class="footer__input"
                                placeholder="Họ và tên"
                            />
                            </div>
                            <div class="footer__input-box">
                            <i class="fas fa-envelope"></i>
                            <input
                                type="text"
                                class="footer__input"
                                placeholder="Email"
                            />
                            </div>
                            <button type="submit" class="button footer__button">
                            Đăng ký
                            </button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Bản quyền © <a href="#">TP&SHOPPET.</a> Tất cả các quyền.</p>
                <p>Được thiết kế bởi nhóm 10</p>
            </div>
        </footer>

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
    

</body>
</html>