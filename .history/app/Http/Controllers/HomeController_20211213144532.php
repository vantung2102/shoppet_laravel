<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Services\Slider\SliderService;

class HomeController extends Controller
{

    function index()
    {
        return view('client.user.index');
    }
}