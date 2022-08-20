<?php

use Illuminate\Support\Facades\Cookie;

function variant($light, $dark)
{
    if (!Cookie::get("variant"))
        return $light;
    if (strcmp(Cookie::get("variant"), "light") === 0)
        return $light;
    return $dark;
}

