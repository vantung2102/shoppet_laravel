<?php

namespace App\Http\Services\Products;

use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Menu;
use Illuminate\Support\Facades\Log;

class ProductService
{
    public function showListProduct()
    {
        return Menu::where('active', 1)->get();
    }
}