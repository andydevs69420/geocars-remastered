<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = "company";
    protected $primaryKey="company_id";
    protected $fillable = ["company_name", "company_address"];
    public $timestamps = false;
}
