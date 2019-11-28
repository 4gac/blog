<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostTag;
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
//SHOW SINGLE POBYT FOR UPDATE
public function showPobytAction($id){
        $posts=Post::find($id);
		return view("backend-posts/update-pobyt",['posts'=>$posts]);
}
//UPDATE
public function updatePobytAction($id, Request $request){
	$text = substr($request->input('text'), 3, strlen($request->input('text'))-7); // prevents <p></p> tag from multiplying

	$slug=$this->createSlug($request->title);
	$post=Post::where("id","=",$id)->first();
        $post->update(["title"=>$request->input('title'),
        "text"=>$text,
        "slug"=>$slug
        ]);
	return redirect()->action('PostController@PobytyBackend');
}
//DELETE
public function deletePobytAction($id){
    
     $posts=Post::find($id);
     $post_tag = PostTag::find($id);
     $post_tag->delete();
     $posts->delete();  
     
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

