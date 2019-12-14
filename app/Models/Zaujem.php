<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zaujem extends Model
{
    protected $table = 'zaujem';
    protected $fillable = ['user_id, posts_id'];
    public $timestamps=false;

    public function user(){
        return $this->hasMany('App\Models\User');
    }
    public function post(){
        return $this->hasMany('App\Models\Post');
    }
}
