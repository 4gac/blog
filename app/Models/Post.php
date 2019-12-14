<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title','text','slug','user_id',];

    /*Ak pristupim k atributu tags, post môže patriť k mnohým tagom*/


public function tags(){
    return $this->belongsToMany('App\Models\Tag');
}

/*Príspevok patrí userovi */
public function user(){
    return $this->belongsTo('App\User');
}
public function image(){
        return $this->hasMany('App\Models\Image');
}
public function galleryImages(){
    return $this->belongsToMany('App\Models\GalleryImage');
}



/* V databáze sa  časy zobrazujú pod iným formátom. Napr 2019-10-05 00:00:0
Tento akcesor vezme čas z databázy a prehodí ho do normálneho zápisu. */
public function getCreatedAtAttribute($value)

{
    return date('j M Y, G:i',strtotime($value));
}
/* Tento akcesor robí to, že spraví pri výpise článkov excerpt.
  {{$post->teaser}} */
public function getExcerptAttribute()
{
    return str_limit($this->text, 300);
}

}
