<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = "kontakt";

	protected $fillable = ["titul_pre", "meno", "priezvisko", "titul_post", "email", "tel_cislo", "idtypKontaktu"];
}
