<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UniversityModel;
use App\Models\CityModel;
use App\Models\Country;

class UniversityController extends Controller
{
    public function index(){
	
	}

	public function UniverzityBackend(){
		$universities = UniversityModel::all();
		$cities = CityModel::all();
		$countries = Country::all();
		return view('backend-universities.universities')->with('universities',$universities)->with('cities',$cities)->with('countries',$countries);
	}
}
