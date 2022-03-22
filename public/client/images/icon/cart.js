import { Constants } from "../javascript/constants.js";

$(document).ready(function () {
  let obj = new Constants();
  var carts = JSON.parse(localStorage.getItem("carts")) || [];
  var ids = JSON.parse(localStorage.getItem("ids")) || [];

  $(".cart").click(function () {
    var id = $(this).data("id");
    var img = $(".data-img").data("img");
    var number = parseInt($(".input-amount").val());
    var name = $(".name").data("name");
    var price_old = $(".price-old").data("old_price");
    var price_new = $(".price-new").data("new_price");

    if (ids.includes(id) == true) {
      alert("San pham nay da ton tai trong gio hang.");
      return false;
    }

    var product_detail = {
      id: id,
      img: img,
      number: number,
      name: name,
      price_old: price_old,
      price_new: price_new,
    };
    ids.push(id);
    carts.push(product_detail);
    localStorage.setItem("carts", JSON.stringify(carts));
    $(".cart_quantity").html(
      JSON.parse(localStorage.getItem("carts")).length == 0
        ? "0"
        : JSON.parse(localStorage.getItem("carts")).length
    );
  });

  $(".cart_quantity").html(
    JSON.parse(localStorage.getItem("carts")).length == 0
      ? "0"
      : JSON.parse(localStorage.getItem("carts")).length
  );

  var total = 0;
  carts.forEach((cart, index) => {
    total = total + cart.number * cart.price_new;
    let cart_html = `
    <div class="product-cart__list">
      <div class="row">
        <div class="col l-4">
          <div class="product-cart__list--description">
            <div class="product-cart__list-product">
              <img
                src="public/images/${cart.img}"
                alt=""
                class="product-cart__list--img"
              />
              <div class="product-cart__list--name" name="name" value="${
                cart.name
              }">
              ${cart.name}
              </div>
            </div>
          </div>
        </div>
        <!--Price-->
        <div class="col l-2">
          <div class="product-cart__list--price">
            <div class="product-cart__list--price-old">
              <sup>đ</sup>${cart.price_old}
            </div>
            <div class="product-cart__list--price-new">
              <sup>đ</sup>${cart.price_new}
            </div>
          </div>
        </div>
        <!--Amount-->
        <div class="col l-2">
          <div class="product-cart__list--count">
            <div class="product-cart__list--amount">
              <input
                class="btn-minus--amount"
                type="button"
                onclick="minus()"
                value="-"
              />
              <input id="amount" class="input--amount" type="text" value="${
                cart.number
              }" />
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
          <div class="product-cart__list--money "><sup>đ</sup>${
            cart.number * cart.price_new
          }</div>
        </div>
        <div class="col l-2">
          <div class="product-cart__list--delete">
            <button class="product-cart__list--nofity" onclick ="deleteProduct(${cart.name}.id) ">Xoá</button>
          </div>
        </div>
      </div>
    </div>
          `;
    $(".get-product-list").append(cart_html);
  });

  // total price
  var total_html = `<sup>đ</sup>${total}`;

  $(".product-cart__total--money").append(total_html);

  // Mobile and Tablet
  var totalMobile = 0;
  carts.forEach((cart, index) => {
    totalMobile = totalMobile + cart.number * cart.price_new;
    let cart_mobile = `
    <div class="product-cart-mobile-item">
      <div class="row">
        <div class="product-cart-mobile_description m-11 c-11">
          <div class="product-cart-mobile__image">
          <img
          src="public/images/${cart.img}"
          alt=""
          class="product-cart-mobile__img"
        />
          </div>
          <div class="product-cart-mobile__specific">
            <div class="product-cart-mobile__name" name="name" value="${cart.name}">    
            ${cart.name}
            </div>
            <div class="product-cart-mobile__price">
              <div class="product-cart-mobile__price--old">
                <sup>đ</sup>${cart.price_old}
              </div>
              <div class="product-cart-mobile__price--new">
                <sup>đ</sup>${cart.price_new}
              </div>
            </div>
              <div class="product-cart-mobile__ready">Còn 6 sản phẩm</div>
                <div class="product-cart-mobile__amount">
                <input class="btn-minus--amount__mobile" type="button" onclick="minus_mobile()" value="-" />
                <input id="amount_mobile" class="input--amount__mobile" type="text" value="${cart.number}"  />
                <input class="btn-plus--amount__mobile" type="button" onclick="plus_mobile()" value="+" value="${cart.number}" />
              </div>
            </div>
         </div>
        <div class="product-cart-mobile__delete m-1 c-1">
          <i class="product-cart__mobile--garbage fas fa-trash"></i>
        </div>
    </div>
    </div> 
          `;
    $(".get-product-list-mobile").append(cart_mobile);
  });

  // total price on Mobile and Tablet
  var totalOnMobile = `: ${totalMobile}đ`;

  $(".product-cart__mobile-money").append(totalOnMobile);

// Delete product
function deleteProduct(id){
  
}
  //   click get cart
  $(".clickCart").click(function () {
    getProducts(carts);
  });

  function getProducts(carts) {
    // debugger;
    console.log(carts);
    var data = {
      carts: carts,
    };
    $.ajax({
      type: "POST",
      dataType: "json",
      data: data,
      url: obj.baseUrl("cart/get_product_ajax"),
      success: function (response) {
        // var data = JSON.parse(response);
        console.log(response);
      },
      error: function (error) {
        console.log(error);
      },
    });
  }
});
