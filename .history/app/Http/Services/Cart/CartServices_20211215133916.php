<?php

namespace App\Http\Services\Cart;

use Illuminate\Support\Facades\Session;

class CartService
{
    public function createCart($request)
    {
        $quantity = (int)$request->input('num_product');
        $productId = (int)$request->input('product_id');
    }
}