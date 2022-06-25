<?php

use Illuminate\Support\Facades\Cookie;

function variant($light, $dark) {
    if (strcmp(Cookie::get("variant"), "light") === 0)
        return $light;
    return $dark;
}

