<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
/*Ak pristupim k atributu tags, post môže patriť k mnohým tagom*/

public function tags(){
    return $this->belongsToMany('App\Tag');
}

/*Príspevok patrí userovi */
public function user(){
    return $this->belongsTo('App\User');
}

/* V databáze sa  časy zobrazujú pod iným formátom. Napr 2019-10-05 00:00:0
Tento akcesor vezme čas z databázy a prehodí ho do normálneho zápisu. */
public function getCreatedAtAttribute($value)
{
    return date('j M Y, G:i',strtotime($value));
}
/* Tento akcesor robí to, že spraví pri výpise článkov excerpt.
V index.blade je potom pouzity ako   {{$post->teaser}} */
public function getExcerptAttribute()
{
    return str_limit($this->text, 300);
}
/*Zatial prazdna metoda */
public function getRichText()
{
    
}
}
