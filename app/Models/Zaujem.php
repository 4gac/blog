<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zaujem extends Model
{
    protected $table = 'zaujem';
    protected $fillable = ['user_id, post_id'];

    public function user(){
        return $this->hasMany('App\Models\User');
    }
    public function post(){
        return $this->hasMany('App\Models\Post');
    }
}
