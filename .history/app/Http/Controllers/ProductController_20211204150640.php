<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product()
    {
        return view('client/content/product');
    }
}