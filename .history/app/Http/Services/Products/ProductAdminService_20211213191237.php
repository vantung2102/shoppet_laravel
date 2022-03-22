<?php

namespace App\Http\Services\Products;

use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Menu;
use Illuminate\Support\Facades\Log;

class ProductAdminService
{
    public function getMenu()
    {
        return Menu::where('active', 1)->get();
    }

    public function getProducts()
    {
        return Product::with('menu')->orderByDesc('id')->paginate(15);
    }

    protected function checkValidPrice($request)
    {
        if ($request->input('price') != 0 && $request->input('price_sale') != 0 && $request->input('price') < $request->input('price_sale')) {
            Session::flash('error', 'Giá giảm phải nhỏ hơn giá gốc');
            return false;
        }

        if ($request->input('price') == 0 && $request->input('price_sale') != 0) {
            Session::flash('error', 'Vui lòng nhập giá gốc');
            return false;
        }

        return true;
    }

    public function insertProduct($request)
    {
        $checkValidPrice = $this->checkValidPrice($request);

        if ($checkValidPrice === false) return false;

        try {
            $request->except('_token');
            Product::create($request->all());

            Session::flash('success', 'Thêm sản phẩm thành công');
        } catch (\Exception $error) {
            Session::flash('error', 'Thêm sản phẩm thất bại');
            Log::info($error->getMessage());
            return false;
        }

        return true;
    }

    public function updateProduct($request, $product)
    {
        $checkValidPrice = $this->checkValidPrice($request);

        if ($checkValidPrice === false) return false;

        try {
            $product->fill($request->input());
            $product->save();

            Session::flash('success', 'Cập nhập thành công');
        } catch (\Exception $error) {
            Session::flash('error', 'Cập nhập thất bại');
            Log::info($error->getMessage());
            return false;
        }

        return true;
    }

    public function deleteProduct($request)
    {
        $product = Product::where('id', $request->input('id'))->first();

        if ($product) {
            $product->delete();
            return true;
        }

        return false;
    }

    public function show()
    {
        return Product::where('active', 1)->limit(3)->get();
    }

    public function showListProduct()
    {
        return Product::paginate(8);
    }
}