<header class="header">
    <div class="header-container grid wide" id="header">
        <div class="header__nav row">
            <div class="col l-0 m-3 c-2">
                <div class="mobile-header__bar">
                    <input
                        type="checkbox"
                        hidden=""
                        id="mobile-nav-appear"
                        class="click-header__bar-icon"
                    />
                    <label
                        for="mobile-nav-appear"
                        class="header__bar-icon"
                    ></label>

                    <input
                        type="checkbox"
                        hidden=""
                        id="mobile-nav-appear"
                        class="click-header__bar-icon"
                    />
                    <label for="mobile-nav-appear" class="mobile-header__list">
                        <li class="mobile-header__item">
                            <label for="subnav-appear"> Trang chủ </label>
                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear2">
                                Cửa hàng
                                <i
                                    class="
                                        fas
                                        fa-chevron-right
                                        mobile-header__item-icon-right
                                    "
                                ></i>
                            </label>

                            <input
                                type="checkbox"
                                hidden=""
                                id="subnav-appear2"
                                class="click-subnav"
                            />
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
                                <i
                                    class="
                                        fas
                                        fa-chevron-right
                                        mobile-header__item-icon-right
                                    "
                                ></i>
                            </label>

                            <input
                                type="checkbox"
                                hidden=""
                                id="subnav-appear3"
                                class="click-subnav2"
                            />
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
                                <i
                                    class="
                                        fas
                                        fa-chevron-right
                                        mobile-header__item-icon-right
                                    "
                                ></i>
                            </label>

                            <input
                                type="checkbox"
                                hidden=""
                                id="subnav-appear4"
                                class="click-subnav3"
                            />
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
                            <label for="subnav-appear4"> Về chúng tôi </label>
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
                        <img
                            src="{{asset('client/images/icon/logo-v2.png')}}"
                            alt=""
                        />
                    </a>
                </div>
            </div>

            <div class="col l-8 m-0 c-0">
                <nav class="header__nav-menu">
                    <ul class="header__nav-menu__list">
                        {{-- {!!\App\Helpers\Helper::menus($menus)!!}  --}}

                        <li class="header__nav-menu-item">
                            <a href="" class="header__nav-menu--link"
                                >TRANG CHỦ</a
                            >
                        </li>

                        <li class="header__nav-menu-item">
                            <a href="#" class="header__nav-menu--link"
                                >CỬA HÀNG</a
                            >
                            <!-- shop none -->
                            <ul class="navbar__shop">
                                <li class="navbar__shop--item">
                                    <a
                                        href=""
                                        class="
                                            navbar__shop--link
                                            deal-hot
                                            arrow-right
                                        "
                                        >Thú cưng</a
                                    >
                                    <ul class="navbar__shop--pet">
                                        <li class="navbar__shop--pet-item">
                                            <a
                                                href="#"
                                                class="
                                                    navbar__shop--pet-link
                                                    deal-best
                                                "
                                                >Chó</a
                                            >
                                        </li>
                                        <li class="navbar__shop--pet-item">
                                            <a
                                                href="#"
                                                class="navbar__shop--pet-link"
                                                >Mèo</a
                                            >
                                        </li>
                                        <li class="navbar__shop--pet-item">
                                            <a
                                                href="#"
                                                class="navbar__shop--pet-link"
                                                >Chuột hamster</a
                                            >
                                        </li>
                                    </ul>
                                </li>

                                <li class="navbar__shop--item">
                                    <a
                                        href=""
                                        class="navbar__shop--link arrow-right"
                                        >Đồ ăn</a
                                    >
                                    <ul class="navbar__shop--food">
                                        <li class="navbar__shop--food-item">
                                            <a
                                                href="#"
                                                class="
                                                    navbar__shop--food-link
                                                    arrow-right
                                                "
                                                >Đồ ăn cho chó</a
                                            >
                                            <ul class="navbar__shop-foodDog">
                                                <li
                                                    class="
                                                        navbar__shop-foodDog-item
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            navbar__shop-foodDog-link
                                                            deal-hot
                                                        "
                                                        >Sữa</a
                                                    >
                                                </li>
                                                <li
                                                    class="
                                                        navbar__shop-foodDog-item
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            navbar__shop-foodDog-link
                                                        "
                                                        >Royal Canin</a
                                                    >
                                                </li>
                                                <li
                                                    class="
                                                        navbar__shop-foodDog-item
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            navbar__shop-foodDog-link
                                                        "
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
                                                <li
                                                    class="
                                                        navbar__shop-foodCat-item
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            navbar__shop-foodCat-link
                                                        "
                                                        >Sữa</a
                                                    >
                                                </li>
                                                <li
                                                    class="
                                                        navbar__shop-foodCat-item
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            navbar__shop-foodCat-link
                                                            deal-new
                                                        "
                                                        >Hạt khô</a
                                                    >
                                                </li>
                                                <li
                                                    class="
                                                        navbar__shop-foodCat-item
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            navbar__shop-foodCat-link
                                                        "
                                                        >Cá</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar__shop--food-item">
                                            <a
                                                href="#"
                                                class="
                                                    navbar__shop--food-link
                                                    arrow-right
                                                "
                                                >Đồ ăn cho chuột hamster</a
                                            >
                                            <ul class="navbar__shop-foodMouse">
                                                <li
                                                    class="
                                                        navbar__shop-foodMouse-item
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            navbar__shop-foodMouse-link
                                                        "
                                                        >Sữa</a
                                                    >
                                                </li>
                                                <li
                                                    class="
                                                        navbar__shop-foodMouse-item
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            navbar__shop-foodMouse-link
                                                        "
                                                        >Hạt khô</a
                                                    >
                                                </li>
                                                <li
                                                    class="
                                                        navbar__shop-foodMouse-item
                                                    "
                                                >
                                                    <a
                                                        href="#"
                                                        class="
                                                            navbar__shop-foodMouse-link
                                                            deal-hot
                                                        "
                                                        >Thịt</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="navbar__shop--item">
                                    <a
                                        href="#"
                                        class="navbar__shop--link arrow-right"
                                        >Phụ kiện</a
                                    >
                                    <ul class="navbar__shop--extra">
                                        <li class="navbar__shop--extra-item">
                                            <a
                                                href=""
                                                class="
                                                    navbar__shop--extra-link
                                                    deal-best
                                                "
                                                >Đồ chơi</a
                                            >
                                        </li>
                                        <li class="navbar__shop--extra-item">
                                            <a
                                                href=""
                                                class="
                                                    navbar__shop--extra-link
                                                    deal-hot
                                                "
                                                >Áo quần</a
                                            >
                                        </li>
                                        <li class="navbar__shop--extra-item">
                                            <a
                                                href=""
                                                class="navbar__shop--extra-link"
                                                >Vật Dụng</a
                                            >
                                        </li>
                                    </ul>
                                </li>

                                <li class="navbar__shop--item">
                                    <a
                                        href="#"
                                        class="
                                            navbar__shop--link
                                            deal-new
                                            arrow-right
                                        "
                                        >Dịch vụ</a
                                    >
                                    <ul class="navbar__shop--service">
                                        <li class="navbar__shop--service-item">
                                            <a
                                                href="#"
                                                class="
                                                    navbar__shop--service-link
                                                    deal-new
                                                "
                                            >
                                                Trông giữ</a
                                            >
                                        </li>
                                        <li class="navbar__shop--service-item">
                                            <a
                                                href="#"
                                                class="
                                                    navbar__shop--service-link
                                                "
                                                >Chăm sóc</a
                                            >
                                        </li>
                                        <li class="navbar__shop--service-item">
                                            <a
                                                href="#"
                                                class="
                                                    navbar__shop--service-link
                                                "
                                                >Thú y</a
                                            >
                                        </li>
                                        <li class="navbar__shop--service-item">
                                            <a
                                                href="#"
                                                class="
                                                    navbar__shop--service-link
                                                "
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
                                    <a href="#" class="navbar__page--link"
                                        >Trang của hàng</a
                                    >
                                </li>
                                <li class="navbar__page--item">
                                    <a href="#" class="navbar__page--link"
                                        >Danh sách cửa hàng</a
                                    >
                                </li>
                                <li class="navbar__page--item">
                                    <a href="#" class="navbar__page--link"
                                        >Danh sách mơ ước</a
                                    >
                                </li>
                                <li class="navbar__page--item">
                                    <a href="#" class="navbar__page--link"
                                        >Tài khoản của tôi</a
                                    >
                                </li>
                            </ul>
                        </li>

                        <li class="header__nav-menu-item">
                            <a href="" class="header__nav-menu--link">BLOG</a>
                            <ul class="navbar__blog">
                                <li class="navbar__blog--item">
                                    <a href="#" class="navbar__blog--link"
                                        >Blog page</a
                                    >
                                </li>
                                <li class="navbar__blog--item">
                                    <a href="#" class="navbar__blog--link"
                                        >Blog details</a
                                    >
                                </li>
                            </ul>
                        </li>

                        <li class="header__nav-menu-item">
                            <a href="" class="header__nav-menu--link">ABOUT</a>
                        </li>

                        <li class="header__nav-menu-item">
                            <a href="" class="header__nav-menu--link"
                                >LIÊN HỆ</a
                            >
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
                                <button
                                    class="btn btn-nav-search"
                                    type="submit"
                                >
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="header__nav-warp-login">
                        <?php if(!isset($_SESSION['id'])): ?>
                        <a href="" class="header__nav-warp-link">
                            <i
                                class="header__nav-warp-icon fas fa-sign-in-alt"
                            ></i>
                        </a>
                        <?php else: ?>
                        <a href="" class="header__nav-warp-link">
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
                            <i
                                class="
                                    header__nav-warp-icon
                                    fas
                                    fa-shopping-cart
                                "
                            ></i>
                            <span class="header__cart-notice cart_quantity"
                                >0</span
                            >
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
