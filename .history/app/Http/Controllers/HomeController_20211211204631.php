<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HomeModel;

class HomeController extends Controller
{

    function index()
    {
        return view('client/layout/header');
    }
}