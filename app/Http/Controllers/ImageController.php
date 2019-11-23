<?php


namespace App\Http\Controllers;


use App\Models\Image;

class ImageController
{
    public function postImages($id){
        $imgaes = Image::all();

        return view('studijnepobyty')->with('posts',$imgaes);
    }
}