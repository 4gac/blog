<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Zaujem;
use Auth;
use Illuminate\Http\Request;


class ZaujemController extends Controller
{
    public function index(){
        $zaujemca = Zaujem::all();
       // return view('frontend-posts.homepage-all-posts',['post'=>$posts]);
       return view('backend-posts.zaujemcovia')->with('zaujemca',$zaujemca);    
    }

    public function PrihlasitNaPobytAction($id){

        $post_id = Post::find($id)->id;
        $ucastnik_id=Auth::user()->id;
        $zaujem= new Zaujem();
        $zaujem->user_id=$ucastnik_id;
        $zaujem->posts_id=$post_id;
    
        $zaujem->save();
        return back();
    }

    public function PrihlasitNaStazAction($id){

        $post_id = Post::find($id)->id;
        $ucastnik_id=Auth::user()->id;
        $status="cakajuci";

        $zaujem= new Zaujem();
        $zaujem->user_id=$ucastnik_id;
        $zaujem->posts_id=$post_id;
        $zaujem->status=$status;
    
        $zaujem->save();
        return back();
    }
}
