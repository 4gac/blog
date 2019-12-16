<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $fillable = ["email", "tel_cislo", "meno_kontaktu", "priezvisko_kontaktu", "idtypKontaktu"];

	//protected $fillable = ["titul_pre", "meno", "priezvisko", "titul_post", "email", "tel_cislo", "idtypKontaktu"];
}
