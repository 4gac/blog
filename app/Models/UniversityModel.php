<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityModel extends Model
{
    protected $table = "univerzita";

	 protected $fillable = ["nazov", "zmluva_od", "zmluva_do", "mesto_id", "countries_id", "kontaktna_osoba"];
}
