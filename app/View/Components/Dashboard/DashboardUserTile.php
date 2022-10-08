<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class DashboardUserTile extends Component
{
    private string $userDp;
    private string $name;
    private string $email;
    private int $progress;

    /**
     * Create a new component instance.
     * @param $userDp string
     * @param $fullname string
     * @param $email string
     * @param $progress int
     * @return void
     **/
    public function __construct(
        string $userDp,
        string $fullname,
        string $email,
        int $progress,
    )
    {
        error_log("$userDp|$fullname|$email|$progress");
        $this->userDp   = $userDp;
        $this->name     = $fullname;
        $this->email    = $email;
        $this->progress = $progress;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     **/
    public function render()
    { return view('components.dashboard.dashboard-user-tile'); }


    //====================== GETTERS


    /**
     * Returns subscriptors dp link.
     * @return string
     **/
    public function getUserDP()
    { return $this->userDp; }


    /**
     * Returns subscriptors full name.
     * @return string
     **/
    public function getUserName()
    { return $this->name; }


    /**
     * Returns subscriptors email address.
     * @return string
     **/
    public function getUserEmail()
    { return $this->email; }


    /**
     * Returns progress level.
     * @return void
     **/
    public function getProgress()
    { return $this->progress; }


    /**
     * Returns bootstrap colors bassed on progress level.
     * @return string
     **/
    public function getColorStatusByProgress()
    {
        //
        if ($this->progress < 25)
            return "bg-primary";
        else if ($this->progress < 50)
            return "bg-success";
        else if ($this->progress < 75)
            return "bg-secondary";
        else if ($this->progress < 100)
            return "bg-danger";
    }
}
