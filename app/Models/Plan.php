<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = "plan";
    protected $fillable = ["plan_name", "plan_cost", "plan_number_of_vehicle", "plan_access_hours"];
    public $timestamps = false;
}
