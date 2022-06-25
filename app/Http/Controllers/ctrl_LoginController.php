<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrl_LoginController extends Controller
{
    public function login_page(Request $request) {
        return view("login.login-view");
    }
}
