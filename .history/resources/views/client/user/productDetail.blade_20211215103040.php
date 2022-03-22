@extends('client.layout.default')

@section('content')

<!-- banner detail -->
<div class="gird banner">
    <div class="banner__warp">
      <div class="banner__product-img"></div>
      <div class="slide-banner__text slide-banner__text2">
        <h2 class="slide-banner__title-1">Welcome to</h2>
        <h2 class="slide-banner__title-2">TP & SHOPPET</h2>
        <p class="slide-banner__description banner-detail">Product Detail</p>
      </div>
    </div>
  </div>
  
  <div class="detail-product" id="detail-product">
    <div class="grid wide">
      <div class="detail-product__link">
        <a class="detail-product__link-Shop" href="index.html">Trang chủ</a>
        <i class="fas fa-chevron-right"></i>
        <a class="detail-product__link-Products" href="Products.html">Thú cưng</a>
      </div>
      <div class="detail-product__information">
        <div class="row">
          <!--Image and share -->
          
  
            <div class="col l-5 m-5 c-12">
              <div class="product-detail__illustration">
                <div class="product-detail__illustration-img">
                  <img
                    src="{{$product->thumbnail}}"
                    class="product-detail__illustration-img-main data-img"
                    id="img-main"
                    data-img=""
                  />
                  <div class="product-detail__illustration-img-show">
                    <img
                      src="{{$product->thumbnail}}"
                      class="product-detail__illustration-img-item"
                      onclick="changeImage('one')"
                      id="one"
                    />
  
                    <img
                      src="{{$product->thumbnail}}"
                      class="product-detail__illustration-img-item"
                      onclick="changeImage('two')"
                      id="two"
                    />
  
                    <img
                      src="{{$product->thumbnail}}"
                      class="product-detail__illustration-img-item"
                      onclick="changeImage('three')"
                      id="three"
                    />
  
                    <img
                      src="{{$product->thumbnail}}"
                      class="product-detail__illustration-img-item"
                      onclick="changeImage('four')"
                      id="four"
                    />
                  </div>
                </div>
              </div>
  
              <div class="product-detail__illustration-share">
                <div class="product-detail__illustration-share-link">
                  <div class="product-detail__illustration-share-link-text">
                    Chia sẻ:
                  </div>
  
                  <div class="product-detail__illustration-share-link-internet">
                    <a
                      class="product-detail__illustration-share-link-item"
                      type="button"
                      role="button"
                      title="Share on facebook"
                      href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com"
                      target="_blank"
                      rel="noopener"
                    >
                      <i class="fab fa-facebook"></i>
                    </a>
                    <a
                      class="product-detail__illustration-share-link-item"
                      type="button"
                      role="button"
                      title="Share on messenger"
                      href="fb-messenger://share/?link= https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fsharing%2Freference%2Fsend-dialog&app_id=123456789"
                      target="_blank"
                      rel="noopener"
                    >
                      <i class="fab fa-facebook-messenger"></i>
                    </a>
                    <a
                      class="product-detail__illustration-share-link-item"
                      href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fshopee.vn%2Ffaviti.official%2F1589295236&text="
                      role="button"
                      title="Share on instagram"
                    >
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
  
                <div class="product-detail__illustration-like">
                  <div class="product-detail__illustration-like-sperate">|</div>
                  <div
                    onclick="like()"
                    class="product-detail__illustration-like-heart"
                    id="heart"
                  >
                    <i class="fas fa-heart"></i>
                  </div>
                  <div class="product-detail__illustration-like-text">
                    Đã thích (3,0k)
                  </div>
                </div>
              </div>
            </div>
  
          <!---Information abput products-->
            <div class="col l-7 m-7 c-12">
              <div class="product-detail__infor">
                <div class="product-detail__infor-title">
                  <div class="product-detail__infor-title-name">
                    <h1 class="name" data-name="">12</h1>
                  </div>
                  <div class="product-detail__infor-title-review">
                    <div class="product-detail__infor-title-review-link">
                      <div class="product-detail__infor-title-review-link-star">
                        <a href="">5.0</a>
                      </div>
                      <div class="product-detail__infor-title-review-star">
                        <i
                          class="
                            product-detail__infor-title-review-sta-item
                            fas
                            fa-star
                          "
                        ></i>
                        <i
                          class="
                            product-detail__infor-title-review-sta-item
                            fas
                            fa-star
                          "
                        ></i>
                        <i
                          class="
                            product-detail__infor-title-review-sta-item
                            fas
                            fa-star
                          "
                        ></i>
                        <i
                          class="
                            product-detail__infor-title-review-sta-item
                            fas
                            fa-star
                          "
                        ></i>
                        <i
                          class="
                            product-detail__infor-title-review-sta-item
                            fas
                            fa-star
                          "
                        ></i>
                      </div>
                      <div class="product-detail__infor-title-review-sparate">
                        |
                      </div>
                      <a
                        class="product-detail__infor-title-review-link"
                        href="#reviews"
                      >
                        50 Nhận xét
                      </a>
                      <div class="product-detail__infor-title-review-sparate">
                        |
                      </div>
                      <a>100 Đã bán</a>
                    </div>
                  </div>
                  <div class="product-detail__infor-select">
                    <div class="product-detail__infor-select-price">
                      <div class="product-detail__infor-select-price-old price-old"  data-old_price="">
                        123
                      </div>
                      <div class="product-detail__infor-select-price-new price-new" data-new_price="">
                        123
                      </div>
                    </div>
                    <div class="product-detail__infor-select-transport">
                      <p>Vận chuyển</p>
                      <div class="product-detail__infor-select-transport-fee">
                        <p>
                          <i class="fas fa-truck-moving"></i>
                          Miễn phí vận chuyển
                        </p>
                        <p class="color-opacity">
                          Miễn phí vận chuyển cho hóa đơn trên 500.000đ
                        </p>
                      </div>
                    </div>
                    <div class="product-detail__infor-select-amount">
                      <div class="product-detail__infor-select-amount-infor">
                        Số lượng
                        <div
                          class="
                            product-detail__infor-select-amount-infor
                            btn-select-amount
                          "
                        >
                          <input
                            class="btn-minus-product"
                            type="button"
                            onclick="minus()"
                            value="-"
                          />
                          <input
                            id="amount"
                            class="input-amount"
                            type="text"
                            value="1"
                          />
                          <input
                            class="btn-plus-product"
                            type="button"
                            onclick="plus()"
                            value="+"
                          />
                        </div>
                        <div
                          class="product-detail__infor-select-amount-infor-ready"
                        >
                          12
                          sản phẩm có sẵn
                        </div>
                      </div>
                    </div>
                    <div class="product-detail__infor-select-cart">
                      <button class="bag-btn cart" data-id="">
                        <i class="fas fa-cart-plus"></i>
                        Thêm vào giỏ hàng
                      </button>
                      <button class="buy-btn cart">
                        <a class="btn-buy" href="">Mua ngay</a>
                      </button>
                    </div>
                  </div>
                  <hr />
  
                  <!--Thong tin chi tiet san pham 2 -->
                  <div class="product-detail__infor-description-add">
                    <div class="product-detail__infor-description-title">
                      <h2>Thông tin chi tiết sản phẩm</h2>
                    </div>
                    <div class="product-detail__infor-description-container">
                      <div class="product-detail__infor-description-container-item">
                        <div
                          class="
                            product-detail__infor-description-container-item-title
                          "
                        >
                          Giống
                        </div>
                        <div
                          class="
                            product-detail__infor-description-container-item-contain
                          "
                        >
                          123
                        </div>
                      </div>
                      <div class="product-detail__infor-description-container-item">
                        <div
                          class="
                            product-detail__infor-description-container-item-title
                          "
                        >
                          Màu
                        </div>
                        <div
                          class="
                            product-detail__infor-description-container-item-contain
                          "
                        >
                        123
                        </div>
                      </div>
                      <div class="product-detail__infor-description-container-item">
                        <div
                          class="
                            product-detail__infor-description-container-item-title
                          "
                        >
                          Giới tính
                        </div>
                        <div
                          class="
                            product-detail__infor-description-container-item-contain
                          "
                        >
                        123
                        </div>
                      </div>
                      <div class="product-detail__infor-description-container-item">
                        <div
                          class="
                            product-detail__infor-description-container-item-title
                          "
                        >
                          Tuổi
                        </div>
                        <div
                          class="
                            product-detail__infor-description-container-item-contain
                          "
                        >
                        123
                        </div>
                      </div>
                      <div class="product-detail__infor-description-container-item">
                        <div
                          class="
                            product-detail__infor-description-container-item-title
                          "
                        >
                          Đặc trưng
                        </div>
                        <div
                          class="
                            product-detail__infor-description-container-item-contain
                          "
                        >
                          123
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          
        </div>
      </div>
    </div>
  </div>
  

@endsection