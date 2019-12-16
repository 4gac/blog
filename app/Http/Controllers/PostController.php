<?php
namespace App\Http\Controllers;
use App\Models\GalleryImage;
use App\Models\ImagePost;
use App\Models\Post;
use App\Models\Image;
use App\Models\Tag;
use App\Models\PostTag;
use App\Models\CountryPost;
use App\Models\Zaujem;
use Illuminate\Http\Request;
use File;
use Auth;
use App\Models\UniversityPostModel;
use App\Models\UniversityModel;
use App\Models\CityModel;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class PostController extends Controller{
public function index(){
    $posts = Post::paginate(20);
   // return view('frontend-posts.homepage-all-posts',['post'=>$posts]);
   return view('frontend-posts.homepage-all-posts')->with('posts',$posts);    
}
public function show($id){
    $posts= Post::findOrFail($id);

    $universities = DB::table('univerzita')
		->join('university_post', 'university_post.university_id', '=', 'univerzita.id')
		->join('mesto', 'mesto.id', '=', 'univerzita.mesto_id')
		->join('countries', 'countries.id', '=', 'univerzita.countries_id')
		->select('univerzita.id', 'univerzita.nazov as uninazov', 'mesto.nazov', 'countries.name', 'univerzita.kontaktna_osoba','university_post.pocet_miest', 'university_post.studijny_odbor')
		->where('university_post.post_id', '=', $id)
        ->get();

      /*  $universities = DB::table('university_post')
		->select('pocet_miest', 'studijny_odbor')
		->where('id', '=', $id)

        ->get();*/

    return view('frontend-posts.single-post-show',['universities'=>$universities,
    ])->with('posts',$posts)
                                                ->with('universities',$universities);
}

public function pobyty(){
    $posts = Post::paginate(5);
   // return view('frontend-posts.homepage-all-posts',['post'=>$posts]);
   return view('studijnepobyty')->with('posts',$posts);    
}
public function staze(){
    $posts = Post::paginate(20);
   // return view('frontend-posts.homepage-all-posts',['post'=>$posts]);
   return view('pracovnestaze')->with('posts',$posts);    
}
public function spravy(){
    $posts = Post::paginate(20);
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
public function DostupnePobyty(){
    $posts = Post::all();
    return view('backend-posts.dostupne-pobyty')->with('posts',$posts);
}
public function DostupneStaze(){
    $posts = Post::all();
    return view('backend-posts.dostupne-staze')->with('posts',$posts);
}
public function AdminStazeBackend(){
    $posts = Post::all();
   return view('backend-posts.admin-staze')->with('posts',$posts);    
}
public function ReferentStazeBackend(){
    $posts = Post::all();
   return view('backend-posts.referent-staze')->with('posts',$posts);    
}

    public function HodnoteniaBackend(){
        $posts = Post::all()->where('user_id',Auth::user()->id); //user potrebuje vidieť len jeho hodnotenia
        //$posts = Post::all()->tags->where('name','Hodnotenia');
        return view('backend-posts.user-hodnotenia')->with('posts',$posts);
    }  public function ReferentHodnoteniaBackend(){
        $posts = Post::all();
        //$posts = Post::all()->tags->where('name','Hodnotenia');
        return view('backend-posts.referent-hodnotenia')->with('posts',$posts);
    }  public function AdminHodnoteniaBackend(){
        $posts = Post::all();
        //$posts = Post::all()->tags->where('name','Hodnotenia');
        return view('backend-posts.admin-hodnotenia')->with('posts',$posts);
    }

public function SpravyBackend(){
    $posts = Post::all();
    //$posts = Post::all()->tags->where('name','Hodnotenia');
   return view('backend-posts.admin-spravy')->with('posts',$posts);
}
public function ReferentSpravyBackend(){
    $posts = Post::all();
    //$posts = Post::all()->tags->where('name','Hodnotenia');
   return view('backend-posts.referent-spravy')->with('posts',$posts);
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

public function insertSpravaAction(Request $request) {
    $title=$request->input('title');
    $text=$request->input('text');
    $slug=$request->input('slug');
    $user_id = Auth::user()->id;
    $tag=4;

    $post= new Post();
    $post->title=$title;
    $post->text=$text;
    //$post->slug=str_slug($request->title, '-');
    $post->slug=$this->createSlug($request->title);
    $post->user_id=$user_id;
    if (!is_null($request->pptFile)) {
        $filePath = time() . '-' . $request->pptFile->getClientOriginalName();
        $request->pptFile->storeAs('files', $filePath);
        $post->filepath = $filePath;
    }
    $post->save();
    $post->tags()->sync($tag);

    $files= $request->input('picture');
    $names= $request->input('nazov');
    $captions= $request->input('popis');

    for($i=0;$i<count($request->picture);$i++){
        $filePathT=time().'-'.$request->picture[$i]->getClientOriginalName();
        $request->picture[$i]->storeAs('images',$filePathT);
        $Image = new Image();
        $Image->imgPath = $filePathT;
        $Image->title =$names[$i];
        $Image->caption =$captions[$i];
        $Image->post_id =$post->id;
        if ($i==0) {
            $Image->main =1;
} else {
            $Image->main =0;
        }
        $Image ->save();
    }
    if(Auth::user()->role=='admin'){
        return redirect()->action('PostController@AdminHodnoteniaBackend');
    }
    if(Auth::user()->role=='referent'){
        return redirect()->action('PostController@ReferentHodnoteniaBackend');
    }
    if(Auth::user()->role=='ucastnik'){
        return redirect()->action('PostController@HodnoteniaBackend');
    }
    return redirect()->action('PostController@HodnoteniaBackend');
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
public function UcastnikshowPobytAction($id){
    $posts=Post::find($id);
    $images = GalleryImage::all();
    $newArray = $images->diff($posts->galleryImages);
    if(Auth::user()->role=='admin'){
        return view("backend-posts/admin-show-spravu",['posts'=>$posts],['images'=>$newArray]);
    }
    if(Auth::user()->role=='referent'){
        return view("backend-posts/referent-show-spravu",['posts'=>$posts],['images'=>$newArray]);
    }
    return view("backend-posts/ucastnik-show-pobyt",['posts'=>$posts],['images'=>$newArray]);
}
public function AdminshowStazAction($id){
    $posts=Post::find($id);
    $images = GalleryImage::all();
    $newArray = $images->diff($posts->galleryImages);

    return view("backend-posts/admin-update-staz",['posts'=>$posts],['images'=>$newArray]);
}
public function ReferentshowStazAction($id){
$posts=Post::find($id);
$images = GalleryImage::all();
$newArray = $images->diff($posts->galleryImages);

return view("backend-posts/referent-update-staz",['posts'=>$posts],['images'=>$newArray]);
}
public function AdminshowHodnotenieAction($id){
        $posts=Post::find($id);
        return view("backend-posts/admin-update-staz",['posts'=>$posts]);

}public function ReferentshowHodnotenieAction($id){
    $posts=Post::find($id);
    return view("backend-posts/referent-update-staz",['posts'=>$posts]);
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
public function updateStazAction($id, Request $request){
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
    return redirect()->action('PostController@AdminStazeBackend');
}
if(Auth::user()->role=='referent'){
    return redirect()->action('PostController@ReferentStazeBackend');
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
    public function deleteStazAction($id){
        $posts=Post::find($id);
        $post_tag = PostTag::where("post_id","=",$id)->first();
        $country_posts = CountryPost::where("post_id","=",$id);
        $country_posts->delete();
        $post_tag->delete();
        $gallery_image_post = ImagePost::where('post_id',$id);
        $gallery_image_post->delete();
        $posts->delete();
        if(Auth::user()->role=='admin'){
        return redirect()->action('PostController@AdminStazeBackend'); }
        if (Auth::user()->role=='referent'){return redirect()->action('PostController@ReferentStazeBackend');
        }
       }
    public function deleteHodnotenieAction($id){
        $posts=Post::find($id);
        $post_tag = PostTag::where("post_id","=",$id)->first();
        $country_posts = CountryPost::where("post_id","=",$id);
        $country_posts->delete();
        $post_tag->delete();
        if (!is_null($posts->filepath)) {
            $destinationPathF = public_path() . '/assets/files';
            File::delete($destinationPathF . '/' . $posts->filepath);
        }
        foreach ($posts->image as $Image) {
            $Image->delete($Image->id);
            $destinationPath = public_path() . '/assets/images';
            File::delete($destinationPath . '/' . $Image->imgPath);
        }
        $posts->delete();
        if(Auth::user()->role=='admin'){
            return redirect()->action('PostController@AdminHodnoteniaBackend'); }
        if (Auth::user()->role=='referent'){
            return redirect()->action('PostController@ReferentHodnoteniaBackend');
        }
        if (Auth::user()->role=='ucastnik'){
            return redirect()->action('PostController@HodnoteniaBackend');
        }
    }
    public function deleteSpravaAction($id)
    {
        $posts = Post::find($id);
        $post_tag = PostTag::where("post_id", "=", $id)->first();
        $country_posts = CountryPost::where("post_id", "=", $id);
        $country_posts->delete();
        $post_tag->delete();
        if (!is_null($posts->filepath)) {
            $destinationPathF = public_path() . '/assets/files';
            File::delete($destinationPathF . '/' . $posts->filepath);
        }
        foreach ($posts->image as $Image) {
        $Image->delete($Image->id);
        $destinationPath = public_path() . '/assets/images';
        File::delete($destinationPath . '/' . $Image->imgPath);
        }
        $posts->delete();
        if(Auth::user()->role=='admin'){
            return redirect()->action('PostController@SpravyBackend'); }
        if (Auth::user()->role=='referent'){return redirect()->action('PostController@ReferentSpravyBackend');
        }
    }

public function AdmingetAddPobytForm(){
    $posts = Post::all();
    $tags = Tag::all();
    $images = GalleryImage::all();
    if(Auth::user()->role=='admin'){
        return view("backend-posts.admin-add-pobyt")->with('posts',$posts)
            ->with('tags',$tags)->with('images',$images);
    }
    if (Auth::user()->role=='referent'){
        return view("backend-posts.referent-add-pobyt")->with('posts',$posts)
            ->with('tags',$tags)->with('images',$images);
    }

}
public function ReferentgetAddPobytForm(){
    $posts = Post::all();
    $tags = Tag::all();
    $images = GalleryImage::all();
    return view("backend-posts.referent-add-pobyt")->with('posts',$posts)
                                          ->with('tags',$tags)->with('images',$images);
}
    public function getAddHodnotenieForm(){
        $posts = Post::all();
        $tags = Tag::all();
        return view("backend-posts.user-add-hodnotenie")->with('posts',$posts)
            ->with('tags',$tags);
    }  public function ReferentgetAddHodnotenieForm(){
        $posts = Post::all();
        $tags = Tag::all();
        return view("backend-posts.referent-add-hodnotenie")->with('posts',$posts)
            ->with('tags',$tags);
    } public function AdmingetAddHodnotenieForm(){
        $posts = Post::all();
        $tags = Tag::all();
        return view("backend-posts.admin-add-hodnotenie")->with('posts',$posts)
            ->with('tags',$tags);
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
//    public function UsergetAddSpravaForm(){
//        $posts = Post::all()->tags->where('name','Hodnotenia');
//
//        return view("backend-posts.referent-add-staz")->with('posts',$posts)
//            ->with('tags',$tags)->with('images',$images);
//    }


public function schvalithodnotenie($id) {
    $post=Post::find($id);
    $posts = Post::all();
    $tag=3;
    $post->save();
    $post->tags()->sync($tag);
    if(Auth::user()->role=='admin'){
        return view('backend-posts.admin-hodnotenia')->with('posts',$posts);
    }
    if(Auth::user()->role=='referent'){
        return view('backend-posts.referent-hodnotenia')->with('posts',$posts);
    }
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
    public function getDownload($id)
    {
        $post=Post::find($id);
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/assets/files/".$post->filepath;

        $headers = array(
            'Content-Type: application/xls',
        );
        return response()->download($file);
       // return Response::download($file, 'Export.xls', $headers);
    }
}

