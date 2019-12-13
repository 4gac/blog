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

	

	public function showAll(){
		return view('contact');
	}

	public function fetchForm(){
		$formdata = Input::all();
		//sem treba dokodit spracovanie formu - odoslat mail/ulozit do db
		//vymazat print, bol len na testovanie
		print_r($formdata);
		return view('contact');
	}
}
