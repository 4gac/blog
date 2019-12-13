<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ImagePost extends Model
{
    protected $table = 'gallery_image_post';

    protected $fillable = ['gallery_image_id','post_id'];

}