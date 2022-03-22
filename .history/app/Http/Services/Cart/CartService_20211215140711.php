<?php

namespace App\Http\Services\Cart;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;

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

            return true;
        }

        $exists = Arr::exists($carts, $productId);
        if ($exists) {
            $carts[$productId] = $carts[$productId] + $quantity;
            Session::put('carts', $carts);
            dd($carts);
        }

        // $carts[$productId] = $quantity;
        // Session::put('carts', $carts);

        // return true;
    }
}