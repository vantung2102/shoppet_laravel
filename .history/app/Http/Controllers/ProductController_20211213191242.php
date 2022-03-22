<?php

namespace App\Http\Controllers;

use App\Http\Services\Products\ProductAdminService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductAdminService $product)
    {
        $this->product = $product;
    }

    function listProduct()
    {
        return view('client.user.product', [
            'products' => $this->product->showListProduct(),
        ]);
    }
}