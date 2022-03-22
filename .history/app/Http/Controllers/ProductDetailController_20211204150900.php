<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    function productDetail()
    {
        return view('client/content/productDetail');
    }
}