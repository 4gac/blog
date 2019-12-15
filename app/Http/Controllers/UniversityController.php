<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UniversityModel;
use App\Models\CityModel;
use App\Models\Country;
use App\Models\Post;
use App\Models\UniversityPostModel;

class UniversityController extends Controller
{
    public function index($id){
		$universities = DB::table('univerzita')
		->join('university_post', 'university_post.university_id', '=', 'univerzita.id')
		->join('mesto', 'mesto.id', '=', 'univerzita.mesto_id')
		->join('countries', 'countries.id', '=', 'univerzita.countries_id')
		->select('univerzita.id', 'univerzita.nazov as uninazov', 'mesto.nazov', 'countries.name', 'univerzita.kontaktna_osoba')
		->where('university_post.post_id', '=', $id)
		->get();
		return view("frontend-posts.single-post-show",['universities'=>$universities,
		])->with('universities',$universities);
	}


	public function UniverzityBackend(){
		$universities = UniversityModel::all();
		$cities = CityModel::all();
		$countries = Country::all();
		return view('backend-universities.universities')->with('universities',$universities)->with('cities',$cities)->with('countries',$countries);
	}
	public function getAddUniverzitaForm(){
		$cities = CityModel::all();
		$countries = Country::all();
		return view('backend-universities.add-university')->with('cities',$cities)->with('countries',$countries);
	}
	public function addUniverzitaAction(Request $request){
		$nazov = $request->input("nazov");
		$zmluva_od = $request->input("zmluva_od");
		$zmluva_do = $request->input("zmluva_do");
		$krajina = $request->input("krajina");
		$mesto = $request->input("mesto");
		$kontaktna_osoba = $request->input("kontaktna_osoba");

		$uni = new UniversityModel();
		$uni->nazov = $nazov;
		$uni->zmluva_do = $zmluva_od;
		$uni->zmluva_od = $zmluva_do;
		$uni->mesto_id = $mesto;
		$uni->countries_id = $krajina;
		$uni->kontaktna_osoba = $kontaktna_osoba;
		$uni->save();
		return redirect()->action('UniversityController@UniverzityBackend'); 
	}
	public function deleteUniverzitaAction($id){
		$uni = UniversityModel::find($id);
		$uniPost = UniversityPostModel::where('university_id',$id);;
		$uniPost->delete();
		$uni->delete();

		return redirect()->action('UniversityController@UniverzityBackend'); 
	}
	public function showUniverzitaAction($id){
		$universities = UniversityModel::find($id)->first();
		$cities = CityModel::all();
		$countries = Country::all();

		return view('backend-universities.update-university')->with('universities',$universities)->with('cities',$cities)->with('countries',$countries); 
	}
	public function updateUniverzitaAction($id, Request $request){
		$kontakt = UniversityModel::where("id", "=", $id)->first();
		$kontakt-> update(["nazov" => $request->input("nazov"),
			"zmluva_od" => $request->input("zmluva_od"),
			"zmluva_do" => $request->input("zmluva_do"),
			"mesto_id"=> $request->input("mesto"),
			"countries_id" => $request->input("krajina"),
			"kontaktna_osoba" => $request->input("kontaktna_osoba"),
			]);
		return redirect()->action('UniversityController@UniverzityBackend'); 
	}


	// MESTO CRUD
	public function mestaBackend(){
		$cities = CityModel::all();
		$countries = Country::all();
		return view('backend-cities.cities')->with('cities',$cities)->with('countries',$countries);
	}
	public function getAddMestoForm(){
		$countries = Country::all();
        return view("backend-cities.add-city")->with('countries',$countries);
    }

	public function addMestoAction(Request $request){
		$nazov = $request->input("nazov");
		$krajina = $request->input("krajina");

		$mesto = new CityModel();
		$mesto->nazov = $nazov;
		$mesto->countries_id = $krajina;
		$mesto->save();

		return redirect()->action('UniversityController@mestaBackend'); 
	}
	public function showMestoAction($id){
		$city = CityModel::where("id", "=", $id)->first();
		$cities = CityModel::all();
		$countries = Country::all();

		return view('backend-cities.update-city')->with('city',$city)->with('cities',$cities)->with('countries',$countries); 
	}
	public function updateMestoAction($id, Request $request){
		$city = CityModel::where("id", "=", $id)->first();
		$city-> update(["nazov" => $request->input("nazov"),
			"countries_id" => $request->input("krajina")
			]);
		return redirect()->action('UniversityController@mestaBackend'); 
	}

	// UNI / VYZVA

	public function uniPostsBackend(){
	
		$uniPosts = DB::table('university_post')
							->join('univerzita', 'univerzita.id', '=', 'university_post.university_id')
							->join('posts', 'posts.id', '=', 'university_post.post_id')
							->select('university_post.id', 'univerzita.nazov', 'posts.title', "university_post.pocet_miest", "university_post.studijny_odbor")
							->get();


		return view('backend-uni-posts.universities-posts')->with('uniPosts',$uniPosts);
	}
	public function getAddUniPostForm(){
		$universities = UniversityModel::all();
		$posts = Post::all();
        return view("backend-uni-posts.add-university-post")->with('universities',$universities)->with('posts',$posts);
    }
	public function addAddUniAction(Request $request){
		$uniPost = new UniversityPostModel();
		$uniPost->university_id = $request->input("university");
		$uniPost->post_id = $request->input("post");
		$uniPost->pocet_miest = $request->input("pocet_miest");
		$uniPost->studijny_odbor = $request->input("studijny_odbor");
		$uniPost->save();

		return redirect()->action('UniversityController@uniPostsBackend'); 
	}
	public function deleteUniPostAction($id){
		$uniPost = UniversityPostModel::where('id',$id);;
		$uniPost->delete();
		return redirect()->action('UniversityController@uniPostsBackend'); 
	}
	public function showUniPostAction($id){
		$uniPosts = DB::table('university_post')
							->join('univerzita', 'univerzita.id', '=', 'university_post.university_id')
							->join('posts', 'posts.id', '=', 'university_post.post_id')
							->select('university_post.id', 'univerzita.nazov', 'posts.title', "university_post.pocet_miest", "university_post.studijny_odbor", "university_post.university_id", "university_post.post_id")
							->where('university_post.id', '=', $id)
							->get()->first();
							
		$universities = UniversityModel::all();
		$posts = Post::all();

		return view('backend-uni-posts.update-uni-post')->with('uniPosts',$uniPosts)->with('universities',$universities)->with('posts',$posts); 
	}
	public function updateUniPostAction($id, Request $request){
		$city = UniversityPostModel::where("id", "=", $id)->first();
		$city-> update(["university_id" => $request->input("university"),
			"post_id" => $request->input("post"),
			"pocet_miest" => $request->input("pocet_miest"),
			"studijny_odbor" => $request->input("studijny_odbor")
			]);
		return redirect()->action('UniversityController@uniPostsBackend'); 


	}
}
