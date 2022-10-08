<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCompanyDetails extends Model
{
    use HasFactory;

    protected $table = "user_company_details";
    protected $fillable = ["user_id_fk", "company_id_fk"];
    public $timestamps = false;
}
