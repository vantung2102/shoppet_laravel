<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Menu;

class MenuComposer
{
    protected $users;

    public function __construct()
    {
    }


    public function compose(View $view)
    {
        Menu::where('active', 1)->orderByDesc('id')->get();
    }
}