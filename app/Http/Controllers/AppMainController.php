<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppMainController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth", "verified"]);
    }
    public function index(Request $request)
    {
        return view("main.main");
    }
}
