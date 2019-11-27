<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller{
public function index(){
    $posts = Post::all();
   // return view('frontend-posts.homepage-all-posts',['post'=>$posts]);
   return view('frontend-posts.homepage-all-posts')->with('posts',$posts);    
}
public function show($id){
    $posts= Post::findOrFail($id);
    return view('frontend-posts.single-post-show')->with('posts',$posts);
}
public function pobyty(){
    $posts = Post::all();
   // return view('frontend-posts.homepage-all-posts',['post'=>$posts]);
   return view('studijnepobyty')->with('posts',$posts);    
}
public function staze(){
    $posts = Post::all();
   // return view('frontend-posts.homepage-all-posts',['post'=>$posts]);
   return view('pracovnestaze')->with('posts',$posts);    
}
public function spravy(){
    $posts = Post::all();
   // return view('frontend-posts.homepage-all-posts',['post'=>$posts]);
   return view('ucastnickespravy')->with('posts',$posts);    
}
//METODY PRE OPERACIE NAD POSTMI V ADMIN LTE
public function PobytyBackend(){
    $posts = Post::all();
   return view('backend-posts.pobyty')->with('posts',$posts);    
}
public function StazeBackend(){
    $posts = Post::all();
   return view('backend-posts.staze')->with('posts',$posts);    
}
public function SpravyBackend(){
    $posts = Post::all();
   return view('backend-posts.spravy')->with('posts',$posts);    
}
}

