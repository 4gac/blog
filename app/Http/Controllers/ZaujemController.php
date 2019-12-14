<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Zaujem;
use Auth;
use Illuminate\Http\Request;


class ZaujemController extends Controller
{
    
    public function PrihlasitNaPobytAction($id){

        $post_id = Post::find($id)->id;
        $ucastnik_id=Auth::user()->id;
        $zaujem= new Zaujem();
        $zaujem->user_id=$ucastnik_id;
        $zaujem->posts_id=$post_id;
    
        $zaujem->save();
        return back();
    }
}
