<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HomeModel;

class HomeController extends Controller
{
    function __construct()
    {
        // parent::__construct();
    }

    function index()
    {

        $pet = DB::table('pets')->limit(3)->get();
        $products = DB::table('products')->limit(3)->get();

        $data = [
            'pets' => DB::table('pets')->limit(3)->get(),
            'products' => DB::table('products')->limit(3)->get()
        ];

        return view('client/content/home', $data);
    }
}