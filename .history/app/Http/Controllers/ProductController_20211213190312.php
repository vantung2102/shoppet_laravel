<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function listProduct()
    {
        return view('client.user.product');
    }
}