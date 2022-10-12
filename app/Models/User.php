<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use \App\Models\UserPlanDetails;
use \App\Models\UserCompanyPlanDetails;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "user";
    protected $primaryKey="user_id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "lastname",
        "firstname",
        "email",
        "password",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        "password",
        "remember_token",
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        "email_verified_at" => "datetime",
    ];

    /**
     * getFullname
     * @return string
     **/
    public function getFullname()
    { return $this->lastname." ".$this-> firstname; }


    // ============================== RELATION

    public function userPlan()
    { return $this->hasOne(UserPlanDetails::class, "user_id_fk", "user_id"); }

    public function userCompany()
    { return $this->userPlan()->first()->userCompanyPlanDetails(); }

    public function userCompanyCar()
    { return $this->userCompany()->first()->userCompanyCarDetails(); }

}
