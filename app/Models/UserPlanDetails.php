<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlanDetails extends Model
{
    use HasFactory;
    protected $table = "user_plan_details";
    protected $fillable = ["user_id_fk", "plan_id_fk"];
    public $timestamps = true;
}
