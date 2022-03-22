<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;

class MenuComposer
{
    protected $users;

    public function __construct()
    {
    }


    public function compose(View $view)
    {
        $view->with('count', $this->users->count());
    }
}