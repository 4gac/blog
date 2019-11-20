<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name'];


    public function post(){
        return $this->belongsToMany('App\Models\Post');
    }
}
