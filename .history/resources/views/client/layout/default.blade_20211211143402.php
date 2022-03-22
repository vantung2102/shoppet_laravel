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
        <header class="header">
            <div class="header-container grid wide" id="header">
                <div class="header__nav row">
                <div class="col l-0 m-3 c-2">
                    <div class="mobile-header__bar">
                        <input type="checkbox" hidden="" id="mobile-nav-appear" class="click-header__bar-icon">
                        <label for="mobile-nav-appear" class="header__bar-icon"></label>
                        
                        <input type="checkbox" hidden="" id="mobile-nav-appear" class="click-header__bar-icon">
                        <label for="mobile-nav-appear" class="mobile-header__list">
                            <li class="mobile-header__item">
                                <label for="subnav-appear">
                                    Trang chủ
                                </label>
                            </li>
                            <li class="mobile-header__item">
                                <label for="subnav-appear2">
                                    Cửa hàng
                                    <i class="fas fa-chevron-right mobile-header__item-icon-right"></i>
                                </label>
                                
                                <input type="checkbox" hidden="" id="subnav-appear2" class="click-subnav">
                                <ul class="mobile-header__item-list">
                                    <li class="mobile-header__item-item">
                                        <a href="#">Thú cưng</a>
                                    </li>
                                    <li class="mobile-header__item-item">
                                        <a href="#">Đồ ăn</a>
                                    </li>
                                    <li class="mobile-header__item-item">
                                    <a href="#">Phụ kiện</a>
                                    </li>
                                    <li class="mobile-header__item-item">
                                    <a href="#">Dịch vụ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mobile-header__item">
                                <label for="subnav-appear3">
                                    Trang
                                    <i class="fas fa-chevron-right mobile-header__item-icon-right"></i>
                                </label>
                                
                                <input type="checkbox" hidden="" id="subnav-appear3" class="click-subnav2">
                                <ul class="mobile-header__item-list">
                                    <li class="mobile-header__item-item">
                                        <a href="#">Trang cửa hàng</a>
                                    </li>
                                    <li class="mobile-header__item-item">
                                        <a href="#">Danh sách của hàng</a>
                                    </li>
                                    <li class="mobile-header__item-item">
                                        <a href="#">Danh sách mơ ước</a>
                                    </li>
                                    <li class="mobile-header__item-item">
                                        <a href="#">Tài khoản của tôi</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mobile-header__item">
                                <label for="subnav-appear4">
                                    BLOG
                                    <i class="fas fa-chevron-right mobile-header__item-icon-right"></i>
                                </label>
                                
                                <input type="checkbox" hidden="" id="subnav-appear4" class="click-subnav3">
                                <ul class="mobile-header__item-list">
                                    <li class="mobile-header__item-item">
                                        <a href="#">Trang Blog</a>
                                    </li>
                                    <li class="mobile-header__item-item">
                                        <a href="#">Chi tiết Blog</a>
                                    </li>                         
                                </ul>
                            </li>
                            <li class="mobile-header__item">
                            <label for="subnav-appear4">
                                Về chúng tôi
                            </label>
                            </li>
                            <li class="mobile-header__item">
                            <label for="subnav-appear4">
                                Liên hệ chúng tôi
                            </label>
                            </li>
                        </label>
                    </div>
                </div>

                <div class="col l-2 m-6 c-7">
                    <div class="header__nav-logo">
                    <a href="">
                        <img  src="{{asset('client/images/icon/logo-v2.png')}}" alt="" />
                    </a>
                    </div>
                </div>

                <div class="col l-8 m-0 c-0">
                    <nav class="header__nav-menu">
                    <ul class="header__nav-menu__list">
                        <li class="header__nav-menu-item">
                        <a href="" class="header__nav-menu--link">TRANG CHỦ</a>
                        </li>
                        <li class="header__nav-menu-item">
                        <a href="#" class="header__nav-menu--link">CỬA HÀNG</a>
                        <!-- shop none -->
                        <ul class="navbar__shop">
                            <li class="navbar__shop--item">
                            <a
                                href=""
                                class="navbar__shop--link deal-hot arrow-right"
                                >Thú cưng</a
                            >
                            <ul class="navbar__shop--pet">
                                <li class="navbar__shop--pet-item">
                                <a href="#" class="navbar__shop--pet-link deal-best"
                                    >Chó</a
                                >
                                </li>
                                <li class="navbar__shop--pet-item">
                                <a href="#" class="navbar__shop--pet-link">Mèo</a>
                                </li>
                                <li class="navbar__shop--pet-item">
                                <a href="#" class="navbar__shop--pet-link"
                                    >Chuột hamster</a
                                >
                                </li>
                            </ul>
                            </li>
                            <li class="navbar__shop--item">
                            <a href="" class="navbar__shop--link arrow-right"
                                >Đồ ăn</a
                            >
                            <ul class="navbar__shop--food">
                                <li class="navbar__shop--food-item">
                                <a
                                    href="#"
                                    class="navbar__shop--food-link arrow-right"
                                    >Đồ ăn cho chó</a
                                >
                                <ul class="navbar__shop-foodDog">
                                    <li class="navbar__shop-foodDog-item">
                                    <a
                                        href="#"
                                        class="navbar__shop-foodDog-link deal-hot"
                                        >Sữa</a
                                    >
                                    </li>
                                    <li class="navbar__shop-foodDog-item">
                                    <a href="#" class="navbar__shop-foodDog-link"
                                        >Royal Canin</a
                                    >
                                    </li>
                                    <li class="navbar__shop-foodDog-item">
                                    <a href="#" class="navbar__shop-foodDog-link"
                                        >Ganador</a
                                    >
                                    </li>
                                </ul>
                                </li>
                                <li class="navbar__shop--food-item">
                                <a
                                    href="#"
                                    class="
                                    navbar__shop--food-link
                                    deal-best
                                    arrow-right
                                    "
                                    >Đồ ăn cho mèo</a
                                >
                                <ul class="navbar__shop-foodCat">
                                    <li class="navbar__shop-foodCat-item">
                                    <a href="#" class="navbar__shop-foodCat-link"
                                        >Sữa</a
                                    >
                                    </li>
                                    <li class="navbar__shop-foodCat-item">
                                    <a
                                        href="#"
                                        class="navbar__shop-foodCat-link deal-new"
                                        >Hạt khô</a
                                    >
                                    </li>
                                    <li class="navbar__shop-foodCat-item">
                                    <a href="#" class="navbar__shop-foodCat-link"
                                        >Cá</a
                                    >
                                    </li>
                                </ul>
                                </li>
                                <li class="navbar__shop--food-item">
                                <a
                                    href="#"
                                    class="navbar__shop--food-link arrow-right"
                                    >Đồ ăn cho chuột hamster</a
                                >
                                <ul class="navbar__shop-foodMouse">
                                    <li class="navbar__shop-foodMouse-item">
                                    <a href="#" class="navbar__shop-foodMouse-link"
                                        >Sữa</a
                                    >
                                    </li>
                                    <li class="navbar__shop-foodMouse-item">
                                    <a href="#" class="navbar__shop-foodMouse-link"
                                        >Hạt khô</a
                                    >
                                    </li>
                                    <li class="navbar__shop-foodMouse-item">
                                    <a
                                        href="#"
                                        class="navbar__shop-foodMouse-link deal-hot"
                                        >Thịt</a
                                    >
                                    </li>
                                </ul>
                                </li>
                            </ul>
                            </li>
                            <li class="navbar__shop--item">
                            <a href="#" class="navbar__shop--link arrow-right"
                                >Phụ kiện</a
                            >
                            <ul class="navbar__shop--extra">
                                <li class="navbar__shop--extra-item">
                                <a
                                    href=""
                                    class="navbar__shop--extra-link deal-best"
                                    >Đồ chơi</a
                                >
                                </li>
                                <li class="navbar__shop--extra-item">
                                <a href="" class="navbar__shop--extra-link deal-hot"
                                    >Áo quần</a
                                >
                                </li>
                                <li class="navbar__shop--extra-item">
                                <a href="" class="navbar__shop--extra-link"
                                    >Vật Dụng</a
                                >
                                </li>
                            </ul>
                            </li>
                            <li class="navbar__shop--item">
                            <a
                                href="#"
                                class="navbar__shop--link deal-new arrow-right"
                                >Dịch vụ</a
                            >
                            <ul class="navbar__shop--service">
                                <li class="navbar__shop--service-item">
                                <a
                                    href="#"
                                    class="navbar__shop--service-link deal-new"
                                >
                                    Trông giữ</a
                                >
                                </li>
                                <li class="navbar__shop--service-item">
                                <a href="#" class="navbar__shop--service-link"
                                    >Chăm sóc</a
                                >
                                </li>
                                <li class="navbar__shop--service-item">
                                <a href="#" class="navbar__shop--service-link"
                                    >Thú y</a
                                >
                                </li>
                                <li class="navbar__shop--service-item">
                                <a href="#" class="navbar__shop--service-link"
                                    >Phối giống</a
                                >
                                </li>
                            </ul>
                            </li>
                        </ul>
                        </li>
                        <li class="header__nav-menu-item">
                        <a href="" class="header__nav-menu--link">TRANG</a>
                        <ul class="navbar__page">
                            <li class="navbar__page--item">
                            <a href="#" class="navbar__page--link">Trang của hàng</a>
                            </li>
                            <li class="navbar__page--item">
                            <a href="#" class="navbar__page--link">Danh sách cửa hàng</a>
                            </li>
                            <li class="navbar__page--item">
                            <a href="#" class="navbar__page--link">Danh sách mơ ước</a>
                            </li>
                            <li class="navbar__page--item">
                            <a href="#" class="navbar__page--link">Tài khoản của tôi</a>
                            </li>
                        </ul>
                        </li>
                        <li class="header__nav-menu-item">
                        <a href="" class="header__nav-menu--link">BLOG</a>
                        <ul class="navbar__blog">
                            <li class="navbar__blog--item">
                            <a href="#" class="navbar__blog--link">Blog page</a>
                            </li>
                            <li class="navbar__blog--item">
                            <a href="#" class="navbar__blog--link">Blog details</a>
                            </li>
                        </ul>
                        </li>
                        <li class="header__nav-menu-item">
                        <a href="" class="header__nav-menu--link">ABOUT</a>
                        </li>
                        <li class="header__nav-menu-item">
                        <a href="" class="header__nav-menu--link">LIÊN HỆ</a>
                        </li>
                    </ul>
                    </nav>
                </div>

                <div class="col l-2 m-3 c-3">
                    <div class="header__nav-warp">
                    <div class="header__nav-warp-search">
                        <a href="#" class="header__nav-warp-link">
                        <i class="header__nav-warp-icon fas fa-search"></i>
                        </a>
                        <div class="header__nav-warp-search-form">
                        <form action="# " method="post">
                            <input
                            type="text"
                            placeholder="Tìm mọi thứ ở đây ..."
                            class="header__nav-warp-search-form--input"
                            />
                            <button class="btn btn-nav-search" type="submit">
                            <i class="fas fa-search"></i>
                            </button>
                        </form>
                        </div>
                    </div>
                    <div class="header__nav-warp-login">

                        <?php if(!isset($_SESSION['id'])): ?>
                            <a href="" class="header__nav-warp-link" >
                            <i class="header__nav-warp-icon fas fa-sign-in-alt"></i>
                            </a>
                        <?php else: ?>
                            <a href="" class="header__nav-warp-link" >
                            <i class="header__nav-warp-icon far fa-user"></i>
                            </a>
                            <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item">
                                <a href="">Tài khoản của tôi</a>
                            </li>
                            <li class="header__navbar-user-item">
                                <a href="">Đăng xuất</a>
                            </li>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="header__nav-warp-cart">

                        <a href="" class="header__nav-warp-link">
                            <i class="header__nav-warp-icon fas fa-shopping-cart"></i>
                            <span class="header__cart-notice cart_quantity">0</span>
                        </a>

                        <!-- cart content -->
                        <!-- <div class="header__nav-warp-content">
                            <ul class="header__nav-warp--list-products">
                                <li class="header__nav-warp--item-products">
                                <div class="header__nav-warp--img-products">
                                    <a href="#"
                                    ><img src="./assets/img/BichconFrise.jpg" alt=""
                                    /></a>
                                </div>
                                <div class="header__nav-warp--info-products">
                                    <h4><a href="#">Chó phú quốc</a></h4>
                                    <h6 class="header__nav-warp--des-products">
                                    Phân loại: thú cưng
                                    </h6>
                                    <div class="header__nav-warp--price-products">
                                    <span class="header__nav-warp--priceMain-products"
                                        >2.000.000</span
                                    >
                                    <span>x</span>
                                    <span>2</span>
                                    </div>
                                </div>
                                <div class="header__nav-warp--delete-products">
                                    <i class="far fa-times-circle"></i>
                                </div>
                                </li>
                            </ul>
                            <div class="header__nav-warp--btn">
                                <a href="#">view cart</a>
                                <a href="#">checkout</a>
                            </div>
                        </div> -->
                    </div>
                    
                    </div>
                </div>

                </div>
            </div>
        </header>

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