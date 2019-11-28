<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryPost extends Model
{
    protected $table = 'country_post';
    protected $fillable = ['country_id','post_id'];
}
