<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{

	public function index(){
		//
	}

    public function addContact(Request $request){
		$email = $request->input("email");
		$tel_cislo = $request->input("tel_cislo");
		$meno_kontaktu = $request->input("meno_kontaktu");
		$priezvisko_kontaktu = $request->input("priezvisko_kontaktu");
		$typ = $request->input("typKontaktu_idtypKontaktu");

		$kontakt = new ContactModel();
		$kontakt->email = $email;
		$kontakt->tel_cislo = $tel_cislo;
		$kontakt->meno_kontaktu = $meno_kontaktu;
		$kontakt->priezvisko_kontaktu = $priezvisko_kontaktu;
		$kontakt->typKontaktu_idtypKontaktu = $typ;
		$kontakt->save();
	}



	public function deleteKontakt($id){
		$kontakt = ContactModel::find($id);
		$kontakt->delete();
	}

	public function updateContact($id, Request $request){
		$kontakt = ContactModel::where("idkontakt", "=", $id)->first();
		$kontakt-> update(["email" => $request->input("email"),
			"tel_cislo" => $request->input("tel_cislo"),
			"meno_kontaktu" => $request->input("meno_kontaktu"),
			"priezvisko_kontaktu" => $request->input("priezvisko_kontaktu"),
			"typKontaktu_idtypKontaktu" => $request->input("typKontaktu_idtypKontaktu")]);
	}

	public function showAll(){
		return view('contact');
	}
}
