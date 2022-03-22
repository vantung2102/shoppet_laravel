<?php

namespace App\Http\Controllers;

use App\Http\Services\Products\ProductService;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    protected $productDetail;

    public function __construct(ProductService $productDetail)
    {
        $this->productDetail = $productDetail;
    }

    function index($id = '', $slug = '')
    {
        $this->productDetail->show($id);
    }
}