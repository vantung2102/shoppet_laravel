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

        return view('client.layout.default');
    }
}