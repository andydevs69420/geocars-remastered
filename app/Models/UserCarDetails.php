<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCarDetails extends Model
{
    use HasFactory;

    protected $table = "user_car_details";
    protected $fillable = ["user_id_fk", "car_id_fk", "car_color", "car_plate_number", "car_status_id_fk"];
    public $timestamps = false;
}
