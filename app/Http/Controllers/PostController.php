<?php

namespace App\Http\Controllers;
use \App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /* Do premenndej $post uloží všetky posty. Potom si necháme vrátiť view index z priečinka posts 
    s touto premennou posts, ktorá tie posty vypise*/
    public function index(){
      $posts=Post::all();
        return view('posts.index')->with('posts',$posts);
        } 
/* Toto zabezpecuje to, ze ked pojdem na napríklad: http://localhost/erasmus/public/post/2
tak ukaze konkretny post, ktoreho id = 2. 
findorFail - laravelovská funkcia ktorá zabezpečí to, že ak by sme chceli pristúpiť napr. k
post/4580 tak vyhodí 404 a nie error message*/


    public function show($id){
        $post= Post::findorFail($id);
        
        $post->user;
        return $post;
        return view('posts.show')->with('post',$post);       
        }
}
