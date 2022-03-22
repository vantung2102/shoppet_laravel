<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Cart\CartService;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        return view('admin.cart.customer', [
            'title' => 'Danh Sách giỏ hàng',
            'customers' => $this->cartService->getCustomer()
        ]);
    }

    public function show($customer)
    {
        return view('admin.cart.details',[
            
        ])
    }
}