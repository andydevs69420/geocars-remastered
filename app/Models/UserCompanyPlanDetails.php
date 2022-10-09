<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\UserPlanDetails;


class UserCompanyPlanDetails extends Model
{
    use HasFactory;

    protected $table = "user_company_plan_details";
    protected $fillable = ["user_plan_details_id_fk", "company_id_fk"];
    public $timestamps = true;


    function plan()
    {
        return $this->belongsTo(UserPlanDetails::class, "user_plan_details_id_fk", "user_plan_details_id");
    }

}
