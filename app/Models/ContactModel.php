<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = "kontakt";
	protected $primaryKey = 'idkontakt'; // because primary key not titled "id"

	protected $fillable = ["email", "tel_cislo", "meno_kontaktu", "priezvisko_kontaktu", "typKontaktu_idtypKontaktu"];
}
