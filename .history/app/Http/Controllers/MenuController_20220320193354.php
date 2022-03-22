<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    protected $menu;

    public function __construct(MenuService $menu)
    {
        $this->menu = $menu;
    }

    public function index(Request $request, $id)
    {
        $menu = $this->menu->getId($id);

        $products = $this->menu->getProducts($menu, $request);

        return view('client.user.menu', [
            'title' => $menu->name,
            'products' => $products,
            'menu' => $menu
        ]);
    }
}