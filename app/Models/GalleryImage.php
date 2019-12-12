<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = 'images';

    protected $fillable = ['imgPath','alt','title','caption'];



}