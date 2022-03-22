<?php

namespace App\Http\Services\Cart;

use Illuminate\Support\Facades\Session;

class CartService
{
    public function createCart($request)
    {
        $quantity = (int)$request->input('num_product');
        $productId = (int)$request->input('product_id');

        if ($quantity <= 0 || $productId <= 0) {
            Session::flash('error', 'Số lượng hoặc sản phẩm không chính xác');
            return false;
        }

        $carts = Session::get('carts');
        if (is_null($carts)) {
            Session::put('carts', [
                $productId => $quantity
            ]);
        }
        dd($carts);
    }
}