<?php

namespace App\Http\Controllers;
//prihodila som sem classu Tag aby sme nemuseli vkuse vypisovat celu cestu
use \App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show ($id){
        
      $tag=Tag::findOrFail($id);
      return $tag->name; 
     
     
   /*  return view('posts.index')
      ->with('title', $tag->name)
      ->with('posts', $tag->posts); */
    }
}