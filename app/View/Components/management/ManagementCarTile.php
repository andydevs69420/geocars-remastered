<?php

namespace App\View\Components\management;

use Illuminate\View\Component;

class ManagementCarTile extends Component
{

    private string $thumbnail;
    private string $carBrand;
    private string $carModel;
    private string $status;
    private bool $isFavourite;

    /**
     * Create a new component instance.
     * @return void
     **/
    public function __construct(
        string $thumbnail,
        string $carBrand ,
        string $carModel ,
        string $status   ,
        bool $isFavourite
    )
    {
        //
        $this->thumbnail = $thumbnail;
        $this->carBrand  = $carBrand;
        $this->carModel  = $carModel;
        $this->status    = $status;
        $this->isFavourite = $isFavourite;
    }

    /**
     * Get the view / contents that represent the component.
     * @return \Illuminate\Contracts\View\View|\Closure|string
     **/
    public function render()
    { return view('components.management.management-car-tile'); }

    // ========================= GETTERS


    public function getThumbnail()
    { return $this->thumbnail; }

    public function getBrand()
    { return $this->carBrand; }

    public function getModel()
    { return $this->carModel; }

    public function getStatus()
    { return $this->status; }

        public function getBGByStatus()
        { return (strcmp($this->status, "Vacant") === 0)? "bg-warning": "bg-danger"; }

    public function isFavourite()
    { return $this->isFavourite; }

        public function getBGByFavouriteValue()
        { return ($this->isFavourite)? "text-danger": "text-muted opacity-50"; }

}
