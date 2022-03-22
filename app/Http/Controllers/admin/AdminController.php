<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    function index()
    {
        return view('admin.user.index');
    }

    function login()
    {
        return view('admin.user.login');
    }

    function processLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            return redirect()->route('admin.index');
        }

        Session::flash('error', 'email hoặc mật khẩu không đúng');

        return redirect()->back();
    }
}