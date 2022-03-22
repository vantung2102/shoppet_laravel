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
            'products' => $this->product->get(),
        ]);
    }

    public function loadMoreProduct(Request $request)
    {
        $page = $request->input('page', 0);

        $data = $this->product->get($page);

        if (count($data) != 0) {
            $html = view('client.user.product', ['products' => $data])->render();

            return response()->json([
                'html' => $html
            ]);
        }

        return response()->json([
            'html' => ''
        ]);
    }
}