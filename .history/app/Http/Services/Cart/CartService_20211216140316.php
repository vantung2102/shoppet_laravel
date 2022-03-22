<?php

namespace App\Http\Services\Cart;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use App\Models\Product;
use App\Models\Customer;


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

            return true;
        }

        $carts[$productId] = $quantity;
        Session::put('carts', $carts);

        return true;
    }

    public function getProducts()
    {
        $carts = Session::get('carts');
        $productId = array_keys($carts);

        if (is_null($carts)) return [];

        return Product::select('id', 'name', 'price', 'price_sale', 'thumbnail')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();
    }

    public function updateCart($request)
    {
        Session::put('carts', $request->input('num_product'));

        return true;
    }

    public function deleteProduct($id = 0)
    {
        $carts = Session::get('carts');

        unset($carts[$id]);

        Session::put('carts', $carts);

        return true;
    }

    public function addCart($request)
    {
        try {
            if (is_null($carts)) return [];

            return Product::select('id', 'name', 'price', 'price_sale', 'thumbnail')
                ->where('active', 1)
                ->whereIn('id', $productId)
                ->get();
            $customer = Customer::insert([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'email' => $request->input('email')
            ]);
        } catch (\Exception $error) {
        }
    }
}