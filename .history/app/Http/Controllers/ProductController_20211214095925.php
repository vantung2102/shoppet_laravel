<?php

namespace App\Http\Controllers;

use App\Http\Services\Products\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductService $product)
    {
        $this->product = $product;
    }

    function listProduct()
    {
        return view('client.user.product', [
            'products' => $this->product->showListProduct(),
        ]);
    }

    public function loadMoreProduct(Request $request)
    {
        $page = $request->input('offset');
        $this->product->get($page);
    }
}