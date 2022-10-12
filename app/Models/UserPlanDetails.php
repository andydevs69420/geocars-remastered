<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use \App\Models\User;
use \App\Models\Plan;
use \App\Models\UserCompanyPlanDetails;


class UserPlanDetails extends Model
{
    use HasFactory;
    protected $table = "user_plan_details";
    protected $primaryKey = "user_plan_details_id";
    protected $fillable = ["user_id_fk", "plan_id_fk"];
    public $timestamps = true;

    // inverse user
    public function user()
    { return $this->belongsTo(User::class, "user_id_fk", "user_id"); }

    // inverse plan
    public function plan()
    { return $this->belongsTo(Plan::class, "plan_id_fk", "plan_id"); }

    public function userCompanyPlanDetails()
    { return $this->hasOne(UserCompanyPlanDetails::class, "user_plan_details_id_fk", "user_plan_details_id"); }
}

