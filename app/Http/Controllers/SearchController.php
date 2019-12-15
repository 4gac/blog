<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UniversityModel;
use App\Models\Post;
use App\Models\Country;

class SearchController extends Controller
{
    public function universitySearch($id){
		$renderData = UniversityModel::where("id", "=", $id)->first();
		return view("search-results.show-uni")->with('renderData',$renderData);
	}
	public function countrySearch($id){
		$renderData = Country::where("id", "=", $id)->first();
		return view("search-results.show-country")->with('renderData',$renderData);
	}

}
