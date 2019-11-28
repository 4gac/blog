<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = ['name',];

public function posts(){
    return $this->belongsToMany('App\Models\Post');
}
}
