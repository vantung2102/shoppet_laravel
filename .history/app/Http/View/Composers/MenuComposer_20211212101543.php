<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Menu;

class MenuComposer
{
    public function compose(View $view)
    {
        $menus = Menu::select('id', 'name', 'parent_id')->where('active', 1)->orderBy('id')->get();
        $view->with('menus', $menus);
    }
}