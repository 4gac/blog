<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Zaujem;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZaujemController extends Controller
{
    public function showAction($id)
    {
        $z = DB::table('zaujem')	
        ->join('users', 'users.id', '=', 'zaujem.user_id')
        ->join('posts', 'posts.id', '=', 'zaujem.posts_id')
        ->select('zaujem.id', 'users.name','users.lastname', 'users.email', 'posts.title', 'zaujem.status')
        ->get();

        $zaujemca=Zaujem::find($id);        
        return view("users-crud/zaujemca-update",['zaujemca'=>$zaujemca,
                                                   ])->with('z',$z);
    }

    public function updateAction($id, Request $request){
        $post=Zaujem::find($id);
        $post->update([
        'status' => $request->input('status')
        ]);
        
        return back();
    }


    public function index(){
        $zaujemca = DB::table('zaujem')				
        ->join('users', 'users.id', '=', 'zaujem.user_id')
        ->join('posts', 'posts.id', '=', 'zaujem.posts_id')
        ->select('zaujem.id', 'users.name','users.lastname', 'users.email', 'posts.title', 'zaujem.status')
        ->get();
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
