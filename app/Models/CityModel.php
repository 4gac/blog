<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
     protected $table = "mesto";

	 protected $fillable = ["nazov", "countries_id"];
}
