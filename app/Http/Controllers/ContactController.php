<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Models\ContactType;
use App\Models\MailModel;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
public function index(){
	$kontakt = DB::table('contact_models')	
	->join('typ_kontaktu', 'typ_kontaktu.id', '=', 'contact_models.idtypKontaktu')
	->select('contact_models.id', 'contact_models.meno_kontaktu','contact_models.priezvisko_kontaktu', 
			 'contact_models.email', 'contact_models.tel_cislo', 'contact_models.idtypKontaktu',
			'typ_kontaktu.id','typ_kontaktu.typ_kontaktu')
	->get();

	$k=ContactModel::all();        
	return view("contact",['kontakt'=>$kontakt,
											   ])->with('k',$k);
}

	public function ContactsBackend(){
		$contacts = ContactModel::all();
		$contactTypes = ContactType::all();
		return view('backend-contacts.contacts')->with('contacts',$contacts)->with('contactTypes',$contactTypes);    
	}
	public function getAddContactForm(){
		$contactTypes = ContactType::all();
        return view("backend-contacts.add-contact")->with('contactTypes',$contactTypes);
    }
    public function addContactAction(Request $request){
		$email = $request->input("email");
		$tel_cislo = $request->input("number");
		$meno_kontaktu = $request->input("firstname");
		$priezvisko_kontaktu = $request->input("lastname");
		$typ = $request->input("role");

		$kontakt = new ContactModel();
		$kontakt->email = $email;
		$kontakt->tel_cislo = $tel_cislo;
		$kontakt->meno_kontaktu = $meno_kontaktu;
		$kontakt->priezvisko_kontaktu = $priezvisko_kontaktu;
		$kontakt->idtypKontaktu = $typ;
		$kontakt->save();

		return redirect()->action('ContactController@ContactsBackend'); 
	}
	public function showContactAction($id)
    {
        $contacts=ContactModel::find($id);
		$contactTypes = ContactType::all();
		return view('backend-contacts.update-contact')->with('contacts',$contacts)->with('contactTypes',$contactTypes); 
    }


	public function deleteContactAction($id){
		$kontakt = ContactModel::find($id);
		$kontakt->delete();
		return redirect()->action('ContactController@ContactsBackend'); 
	}

	public function updateContactAction($id, Request $request){
		$kontakt = ContactModel::where("id", "=", $id)->first();
		$kontakt-> update(["email" => $request->input("email"),
			"tel_cislo" => $request->input("number"),
			"meno_kontaktu" => $request->input("firstname"),
			"idtypKontaktu"=> $request->input("role"),
			"priezvisko_kontaktu" => $request->input("lastname")
			]);
		return redirect()->action('ContactController@ContactsBackend'); 
	}

	

	public function showAll(){
		return view('contact');
	}

	public function fetchForm(){
		$request = Input::all();
		
		$name = $request['username'];
		$email = $request['email'];
		$text = $request['textarea'];

		$kontakt = new MailModel();
		$kontakt->name = $name;
		$kontakt->email = $email;
		$kontakt->text = $text;
		$kontakt->save();

		return redirect()->action('ContactController@showAll');
	}
}
