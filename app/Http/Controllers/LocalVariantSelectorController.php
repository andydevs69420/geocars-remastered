<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;

class LocalVariantSelectorController extends Controller
{
    //
    public function pick_variant($variant="light") {
        // record variant as cookie
        Cookie::queue("variant", $variant, 9999999999999);

        if (strcmp(url()->previous(), request()->url()) === 0)
            return abort(404);

        return back();
    }
}
