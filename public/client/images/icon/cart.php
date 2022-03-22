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

        <!-- <div class="product-cart__list">
      <div class="row">
        <div class="col l-4">
          <div class="product-cart__list--description">
            <div class="product-cart__list-product">
              <img
                src="./assets/img/Phocsoc.jpg"
                alt=""
                class="product-cart__list--img"
              />
              <div class="product-cart__list--name">
                Chó Phốc Sóc Pomeranian Black tan, vàng
              </div>
            </div>
          </div>
        </div>
        <div class="col l-2">
          <div class="product-cart__list--price">
            <div class="product-cart__list--price-old">
              <sup>đ</sup>2.000.000
            </div>
            <div class="product-cart__list--price-new">
              <sup>đ</sup>1.500.000
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
              <input id="amount" class="input--amount" type="text" value="1" />
              <input
                class="btn-plus--amount"  
                type="button"
                onclick="plus()"
                value="+"
              />
            </div>
            <div class="product-cart__list--ready">Còn 6 sản phẩm</div>
          </div>
        </div>
        <div class="col l-2">
          <div class="product-cart__list--money"><sup>đ</sup>1.500.000</div>
        </div>
        <div class="col l-2">
          <div class="product-cart__list--delete">
            <i class="product-cart__list--garbage fas fa-trash"></i>
            <button class="product-cart__list--nofity">Xoá</button>
          </div>
        </div>
      </div>
    </div> -->
        <div class="get-product-list"></div>

        <div class="product-cart__total">
            <div class="row">
                <div class="col l-12">
                    <div class="product-cart__total--pay">
                        <div class="product-cart__total--price">
                            <div class="product-cart__total--text">Tổng thanh toán :</div>
                            <div class="product-cart__total--money">
                                <!-- <sup>đ</sup>0 -->
                            </div>
                        </div>
                        <button type="submit" class="product-cart__buy clickCart">Mua hàng</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--Tablet and mobile-->
<div class="product-cart-mobile">
    <div class="grid wide">
        <div class="row">
            <div class="header-taskbar m-12 c-12">Sản phẩm</div>
        </div>
  <!-- 
    <div class="product-cart-mobile-item">
      <div class="row">
        <div class="product-cart-mobile_description m-11 c-11">
          <div class="product-cart-mobile__image">
            <img src="./assets/img/Phocsoc.jpg" alt="" class="product-cart-mobile__img" />
          </div>
          <div class="product-cart-mobile__specific">
            <div class="product-cart-mobile__name">
              Chó Phốc Sóc Pomeranian Black tan, vàng
            </div>
            <div class="product-cart-mobile__price">
              <div class="product-cart-mobile__price--old">
                <sup>đ</sup>2.500.000
              </div>
              <div class="product-cart-mobile__price--new">
                <sup>đ</sup>1.500.000
              </div>
            </div>
            <div class="product-cart-mobile__ready">Còn 6 sản phẩm</div>
            <div class="product-cart-mobile__amount">
              <input class="btn-minus--amount__mobile" type="button" onclick="minus_mobile()" value="-" />
              <input id="amount_mobile" class="input--amount__mobile" type="text" value="1" />
              <input class="btn-plus--amount__mobile" type="button" onclick="plus_mobile()" value="+" />
            </div>
          </div>
        </div>
        <div class="product-cart-mobile__delete m-1 c-1">
          <i class="product-cart__mobile--garbage fas fa-trash"></i>
        </div>
      </div>
    </div>
  -->
        <div class="get-product-list-mobile"></div>
        <div class="row">
            <div class="product-cart-mobile__pay m-12 c-12">
                <div class="product-cart__mobile-total">
                    <div class="product-cart__mobile-total--money">
                        <div class="product-cart__mobile-textpay">Tổng thanh toán</div>
                        <div class="product-cart__mobile-money"></div>
                    </div>
                    <button class="product-cart__mobile__buy">Mua hàng</button>
                </div>
            </div>
        </div>
    </div>
</div>