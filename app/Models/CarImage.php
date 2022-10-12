<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    use HasFactory;

    protected $table = "car_image";
    protected $primaryKey="car_image_id";
    protected $fillable = ["car_image_link", "user_company_car_details_id_fk"];
    public $timestamps = false;
}
