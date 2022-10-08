<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarStatus extends Model
{
    use HasFactory;

    protected $table = "car_status";
    protected $fillable = ["car_status_name"];
    public $timestamps = false;
}
