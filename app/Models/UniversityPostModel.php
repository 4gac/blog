<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityPostModel extends Model
{
    protected $table = "university_post";

	protected $fillable = ["university_id", "post_id", "pocet_miest"];
}
