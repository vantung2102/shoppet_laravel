<?php

namespace App\Http\Services\Products;

use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Menu;
use Illuminate\Support\Facades\Log;

class ProductService
{
    const LIMIT = 8;

    public function showListProduct()
    {
        return Product::paginate(8);
    }

    public function get($page = null)
    {
        return Product::select('id', 'name', 'price', 'price_sale', 'thumbnail')
            ->orderByDesc('id')
            ->when($page != null, function ($query) use ($page) {
                $offset = $page * self::LIMIT;
                $query->offset($offset);
            })
            ->limit(self::LIMIT)
            ->get();
    }

    public function show($id)
    {
        return Product::where('id', $id)
            ->where('active', 1)
            ->with('menu')
            ->FirstOrFail();
    }

    public function productMore($id)
    {
        return Product::where('id', '!=', $id)
            ->where('active', 1)
            ->orderByDesc('id')
            ->limit(8)
            ->get();
    }
}