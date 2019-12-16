<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UniversityModel;
use App\Models\Post;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use App\Models\UniversityPostModel;

class SearchController extends Controller
{
    public function universitySearch($id){
		$renderData = DB::table('univerzita')
								->join('countries', 'countries.id', '=', 'univerzita.countries_id')
								->join('mesto', 'mesto.id', '=', 'univerzita.mesto_id')
								->select('univerzita.id', 'univerzita.nazov', 'univerzita.zmluva_od', 'univerzita.zmluva_do', 'mesto.nazov as nazovmesto', 'countries.name as nazovcountry', 'univerzita.kontaktna_osoba')
								->where('univerzita.id', '=', $id)
								->get()->first();;
		$universities = DB::table('university_post')
		->join('posts', 'posts.id', '=', 'university_post.post_id')
		->select('university_post.id', 'posts.title', 'university_post.pocet_miest', 'university_post.studijny_odbor', 'posts.id as postid', 'posts.text')
		->where('university_post.university_id', '=', $id)
        ->get();
		$postTags = DB::table('post_tag')
								->join('posts', 'posts.id', '=', 'post_tag.post_id')
								->join('tags', 'tags.id', '=', 'post_tag.tag_id')
								->select('post_tag.post_id', 'post_tag.tag_id', 'posts.title', 'tags.name')
								->get();



		return view("search-results.show-uni")->with('renderData',$renderData)->with('universities',$universities)->with('postTags',$postTags);
	}
	public function countrySearch($id){
		$renderData = Country::where("id", "=", $id)->first();
		return view("search-results.show-country")->with('renderData',$renderData);
	}

}
