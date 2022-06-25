<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Cookie;

class LocalVariantSelector extends Component
{
    /**
     * Checks fo current variant
     * @param String variant light|dark
     * @return String 
     **/ 
    public function is_vactive(String $variant) {
        return (strcmp(Cookie::get("variant"), $variant) === 0)? "v-active" : "v-inactive";
    }

    /**
     * Get the view / contents that represent the component.
     * @return \Illuminate\Contracts\View\View|\Closure|string
     **/
    public function render()
    {
        return view('components.local-variant-selector');
    }
}
