<?php

namespace App\View\Components\Pages;

use Illuminate\View\Component;

class Dashboard extends Component
{
    private String $id;
    /**
     * Create a new component instance.
     * @return void
     */
    public function __construct()
    {
        //
        error_log("called");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pages.dashboard');
    }
}
