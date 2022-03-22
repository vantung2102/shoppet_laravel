<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Cart\CartService;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request)
    {
        $result  = $this->cartService->createCart($request);

        if ($result === false) {
            return redirect()->back();
        }

        return redirect('/carts');
    }

    public function show()
    {
        $products = $this->cartService->getProducts();

        return view('client.user.carts', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'carts' => Session::get('carts')
        ]);
    }

    public function update(Request $request)
    {
        $this->cartService->updateCart($request);

        return redirect('/carts');
    }

    public function delete($id)
    {
        $this->cartService->deleteProduct($id);

        return redirect()->back();
    }

    public function addCart(Request $request)
    {
        $this->cartService->addCart($request);

        return redirect()->back();
    }
}