<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCompanyCarDetails extends Model
{
    use HasFactory;

    protected $table = "user_company_car_details";
    protected $fillable = ["user_company_details_id_fk", "car_id_fk", "car_color", "car_plate_number", "car_status_id_fk"];
    public $timestamps = false;



}
