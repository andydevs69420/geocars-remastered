<?php

namespace App\View\Components\Pages;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Management extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pages.management', [
            "cars" => Auth::user()
                ->userCompanyCar()
                ->orderBy("car_brand")
                ->orderBy("car_model")
                ->get()
        ]);
    }
}
