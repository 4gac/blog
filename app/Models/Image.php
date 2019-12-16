<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'postImages';

    protected $fillable = ['imgPath','main','title','caption','post_id',];

    public function post(){
      //  return $this->hasMany('App\Models\Post');
    }
}