<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UniversityModel;
use App\Models\CityModel;
use App\Models\Country;
use App\Models\UniversityPostModel;

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
}
