<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrl_RegisterController extends Controller
{
    //
    public function register_page(Request $request) {
        return view("register.register-view");
    }
}
