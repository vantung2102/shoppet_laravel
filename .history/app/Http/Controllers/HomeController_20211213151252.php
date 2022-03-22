<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Products\ProductAdminService;

class HomeController extends Controller
{
    protected $slider;
    protected $product;

    public function __construct(SliderService $slider, ProductAdminService $product)
    {
        $this->slider = $slider;
        $this->product = $product;
    }
    function index()
    {
        return view('client.user.index', [
            'title' => 'Trang chủ',
            'sliders' => $this->product->show()
        ]);
    }
}