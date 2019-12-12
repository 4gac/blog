<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Models\ContactType;

class ContactController extends Controller
{

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

	// CONTACT TYPE

	public function TypeContactBackend(){
		$contactTypes = ContactType::all();
		return view('backend-contacts.contactTypes')->with('contactTypes',$contactTypes);    
	}
	public function getAddContactTypeForm(){
        return view("backend-contacts.add-contact-type");
    }
	public function addContactTypeAction(Request $request){
		$typ_kontaktu = $request->input("nazov");

		$kontaktTyp = new ContactType();
		$kontaktTyp->typ_kontaktu = $typ_kontaktu;
		$kontaktTyp->save();

		return redirect()->action('ContactController@TypeContactBackend'); 
	}
	public function deleteContactTypeAction($id){
		$posts=Post::find($id);
		$post_tag = PostTag::where("post_id","=",$id)->first();
		$country_posts = CountryPost::where("post_id","=",$id);
		$country_posts->delete();
		$post_tag->delete();
		$posts->delete();
		return redirect()->action('PostController@PobytyBackend'); 
	}
	public function updateContactTypeAction($id, Request $request){
		$kontaktType = ContactModel::where("id", "=", $id)->first();
		$kontaktType-> update(["typ_kontaktu" => $request->input("nazov")]);
		
		return redirect()->action('ContactController@TypeContactBackend'); 
	}
	public function showContactTypeAction($id)
    {
        $contactType=ContactType::find($id);
		return view('backend-contacts.update-contact-type')->with('contactType',$contactType); 
    }
}
