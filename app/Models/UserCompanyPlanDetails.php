<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\UserPlanDetails;
use \App\Models\Company;
use \App\Models\UserCompanyCarDetails;


class UserCompanyPlanDetails extends Model
{
    use HasFactory;

    protected $table = "user_company_plan_details";
    protected $primaryKey="user_company_car_details_id";
    protected $fillable = ["user_plan_details_id_fk", "company_id_fk"];
    public $timestamps = true;

    // inverse user plan details
    function userPlanDetails()
    { return $this->belongsTo(UserPlanDetails::class, "user_plan_details_id_fk", "user_plan_details_id");}

    // inverse company
    function company()
    { return $this->belongsTo(Company::class, "company_id_dk", "company_id"); }

    // make relation
    function userCompanyCarDetails()
    { return $this->hasMany(UserCompanyCarDetails::class, "user_company_plan_details_id_fk", "user_company_plan_details_id"); }
}
