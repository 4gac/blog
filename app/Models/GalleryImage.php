<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = 'Images';

    protected $fillable = ['imgPath','alt','title','caption'];



}