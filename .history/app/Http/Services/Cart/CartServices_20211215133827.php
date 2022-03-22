<?php

namespace App\Http\Services\Cart;

use Illuminate\Support\Facades\Session;

class CartService
{
    public function createCart($request)
    {
        $quantity = $request->input('num_product');
    }
}