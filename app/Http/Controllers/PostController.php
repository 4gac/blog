<?php
namespace App\Http\Controllers;
use App\Models\Post;

class PostController extends Controller{
public function showAllAction(){
    $posts = Post::all();
    return view("post",['post'=>$posts]);
    }
}

