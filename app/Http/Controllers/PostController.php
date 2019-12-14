<?php
namespace App\Http\Controllers;
use App\Models\GalleryImage;
use App\Models\ImagePost;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostTag;
use App\Models\CountryPost;
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
public function AdminPobytyBackend(){
    $posts = Post::all();
    return view('backend-posts.admin-pobyty')->with('posts',$posts);    
}
public function ReferentPobytyBackend(){
    $posts = Post::all();
    return view('backend-posts.referent-pobyty')->with('posts',$posts);    
}

public function AdminStazeBackend(){
    $posts = Post::all();
   return view('backend-posts.admin-staze')->with('posts',$posts);    
}
public function ReferentStazeBackend(){
    $posts = Post::all();
   return view('backend-posts.referent-staze')->with('posts',$posts);    
}


public function SpravyBackend(){
    $posts = Post::all();
   return view('backend-posts.spravy')->with('posts',$posts);    
}



//CREATE
public function AdmininsertPobytAction(Request $request){
    $title=$request->input('title');
    $text=$request->input('text');
    $slug=$request->input('slug');
    $user_id = Auth::user()->id;
    $tag=1;
    $galleryImages = $request ->input('idecko');

    $post= new Post();
    $post->title=$title;
    $post->text=$text;
    //$post->slug=str_slug($request->title, '-');
    $post->slug=$this->createSlug($request->title);
    $post->user_id=$user_id;

    $post->save();
    $post->galleryImages()->sync($galleryImages);
    $post->tags()->sync($tag);
    return redirect()->action('PostController@AdminPobytyBackend');   
}

public function ReferentinsertPobytAction(Request $request){
    $title=$request->input('title');
    $text=$request->input('text');
    $slug=$request->input('slug');
    $user_id = Auth::user()->id;
    $tag=1;
    $galleryImages = $request ->input('idecko');

    $post= new Post();
    $post->title=$title;
    $post->text=$text;
    //$post->slug=str_slug($request->title, '-');
    $post->slug=$this->createSlug($request->title);
    $post->user_id=$user_id;

    $post->save();
    $post->galleryImages()->sync($galleryImages);
    $post->tags()->sync($tag);
    return redirect()->action('PostController@ReferentPobytyBackend');   
}
//------------------------------------------------------------------------
public function AdmininsertStazAction(Request $request){
    $title=$request->input('title');
    $text=$request->input('text');
    $slug=$request->input('slug');
    $user_id = Auth::user()->id;
    $tag=2;
    $galleryImages = $request ->input('idecko');

    $post= new Post();
    $post->title=$title;
    $post->text=$text;
    //$post->slug=str_slug($request->title, '-');
    $post->slug=$this->createSlug($request->title);
    $post->user_id=$user_id;

    $post->save();
    $post->galleryImages()->sync($galleryImages);
    $post->tags()->sync($tag);
    return redirect()->action('PostController@AdminStazeBackend');   
}
public function ReferentinsertStazAction(Request $request){
    $title=$request->input('title');
    $text=$request->input('text');
    $slug=$request->input('slug');
    $user_id = Auth::user()->id;
    $tag=2;
    $galleryImages = $request ->input('idecko');

    $post= new Post();
    $post->title=$title;
    $post->text=$text;
    //$post->slug=str_slug($request->title, '-');
    $post->slug=$this->createSlug($request->title);
    $post->user_id=$user_id;

    $post->save();
    $post->galleryImages()->sync($galleryImages);
    $post->tags()->sync($tag);
    return redirect()->action('PostController@ReferentStazeBackend');   
}

//SHOW SINGLE POBYT FOR UPDATE
public function AdminshowPobytAction($id){
        $posts=Post::find($id);
        $images = GalleryImage::all();
        $newArray = $images->diff($posts->galleryImages);

		return view("backend-posts/admin-update-pobyt",['posts'=>$posts],['images'=>$newArray]);
}
public function ReferentshowPobytAction($id){
    $posts=Post::find($id);
    $images = GalleryImage::all();
    $newArray = $images->diff($posts->galleryImages);

    return view("backend-posts/referent-update-pobyt",['posts'=>$posts],['images'=>$newArray]);
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
    $galleryImages = $request ->input('idecko');
    $post->galleryImages()->sync($galleryImages);

if(Auth::user()->role=='admin'){
    return redirect()->action('PostController@AdminPobytyBackend');
}
if(Auth::user()->role=='referent'){
    return redirect()->action('PostController@ReferentPobytyBackend');
}
}


//DELETE
public function deletePobytAction($id){
    
     $posts=Post::find($id);
     $post_tag = PostTag::where("post_id","=",$id)->first();
	 $country_posts = CountryPost::where("post_id","=",$id);
	 $country_posts->delete();
     $post_tag->delete();
     $gallery_image_post = ImagePost::where('post_id',$id);
     $gallery_image_post->delete();
     $posts->delete();
     if(Auth::user()->role=='admin'){
     return redirect()->action('PostController@AdminPobytyBackend'); }
     if (Auth::user()->role=='referent'){return redirect()->action('PostController@ReferentPobytyBackend');
     }
    }


public function AdmingetAddPobytForm(){
    $posts = Post::all();
    $tags = Tag::all();
    $images = GalleryImage::all();
    return view("backend-posts.admin-add-pobyt")->with('posts',$posts)
                                          ->with('tags',$tags)->with('images',$images);
}
public function ReferentgetAddPobytForm(){
    $posts = Post::all();
    $tags = Tag::all();
    $images = GalleryImage::all();
    return view("backend-posts.referent-add-pobyt")->with('posts',$posts)
                                          ->with('tags',$tags)->with('images',$images);
}

public function AdmingetAddStazForm(){
    $posts = Post::all();
    $tags = Tag::all();
    $images = GalleryImage::all();
    return view("backend-posts.admin-add-staz")->with('posts',$posts)
                                          ->with('tags',$tags)->with('images',$images);
}
public function ReferentgetAddStazForm(){
    $posts = Post::all();
    $tags = Tag::all();
    $images = GalleryImage::all();
    return view("backend-posts.referent-add-staz")->with('posts',$posts)
                                          ->with('tags',$tags)->with('images',$images);
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

