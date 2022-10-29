<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\CarStatus;
use \App\Models\CarImage;

class UserCompanyCarDetails extends Model
{
    use HasFactory;

    protected $table = "user_company_car_details";
    protected $primaryKey="user_company_car_details_id";
    protected $fillable = ["user_company_details_id_fk", "car_brand", "car_model", "car_color", "car_plate", "car_description", "car_status_id_fk"];
    public $timestamps = true;

    // inverse
    function carStatus()
    { return $this->belongsTo(CarStatus::class, "car_status_id_fk", "car_status_id"); }

    // make relation
    function carImage()
    { return $this->hasMany(CarImage::class, "user_company_car_details_id_fk", "user_company_car_details_id"); }
}
