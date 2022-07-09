<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrl_AppMainController extends Controller
{
    public function geocars_main(Request $request) {
        return view("main.main");
    }
}
