<?php
namespace App\Http\Controllers;
use App\Models\Tag;

class TagController extends Controller{
    public function showAllAction(){
        $tags = Tag::all();
        return view("tag",['tag'=>$tags]);
        }
}