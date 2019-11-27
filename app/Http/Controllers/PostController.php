<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Auth;

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

//DISPLAY
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
//CREATE
public function insertPobytAction(Request $request){
    $title=$request->input('title');
    $text=$request->input('text');
    $slug=$request->input('slug');
    $user_id = Auth::user()->id;
    $tag=1;

    $post= new Post();
    $post->title=$title;
    $post->text=$text;
    //$post->slug=str_slug($request->title, '-');
    $post->slug=$this->createSlug($request->title);
    $post->user_id=$user_id;

    $post->save(); 
    $post->tags()->sync($tag);
    return redirect()->action('PostController@PobytyBackend');   
}
public function getAddPobytForm(){
    $posts = Post::all();
    $tags = Tag::all();
    return view("backend-posts.add-pobyt")->with('posts',$posts)
                                          ->with('tags',$tags);
}







//SLUG
public function createSlug($title, $id = 0)
{
    $slug = str_slug($title);
    $allSlugs = $this->getRelatedSlugs($slug, $id);
    if (! $allSlugs->contains('slug', $slug)){
        return $slug;
    }
    for ($i = 1; $i <= 10; $i++) {
        $newSlug = $slug.'-'.$i;
        if (! $allSlugs->contains('slug', $newSlug)) {
            return $newSlug;
        }
    }
    throw new \Exception('Can not create a unique slug');
}

protected function getRelatedSlugs($slug, $id = 0)
{
    return Post::select('slug')->where('slug', 'like', $slug.'%')
    ->where('id', '<>', $id)
    ->get();
}
}

